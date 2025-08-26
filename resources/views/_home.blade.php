@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header"><h5><span class="text-center bi-house"></span> @yield('title')</h5></div>
			<div class="card-body">
				<h5>Hola <strong>{{ Auth::user()->name }},</strong> {{ __('Acabas de iniciar sesión en ') }}{{ config('app.name', 'CRM de Corporativo SIE') }}</h5>
				</br> 
				<hr>
				<div id='calendar'></div>	
			<!-- Modal -->
<div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventModalLabel">Agregar / Editar Evento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="eventForm">
                    <input type="hidden" id="event_id">
                    <div class="mb-3">
                        <label for="event_title" class="form-label">Título</label>
                        <input type="text" class="form-control" id="event_title" required>
                    </div>
                    <div class="mb-3">
                        <label for="event_start" class="form-label">Fecha de inicio</label>
                        <input type="datetime-local" class="form-control" id="event_start" required>
                    </div>
                    <div class="mb-3">
                        <label for="event_end" class="form-label">Fecha de finalización</label>
                        <input type="datetime-local" class="form-control" id="event_end" required>
                    </div>
                    <div class="mb-3">
                        <label for="event_etiqueta" class="form-label">Etiqueta</label>
                        <select class="form-control" id="event_etiqueta">
                            <option value="SOPORTE">Soporte</option>
                            <option value="REUNION">Reunión</option>
                            <option value="VIDEO">Videos</option>
                            <option value="WEBINARS">Webinars</option>
                            <option value="LISTO">Listo</option>
                            <option value="PENDIENTE">Pendiente</option>
                            <option value="CANCELADO">Cancelado</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
					
				 </div>				
			</div>
		</div>
	</div>
</div>
</div>
@endsection
@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/fullcalendar/main.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar/locales/es.js"></script> <!-- Para idioma español -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',  // Vista inicial por mes
        headerToolbar: {
            left: 'prev,next today',   // Botones de navegación
            center: 'title',           // Título central
            right: 'dayGridMonth,timeGridWeek,timeGridDay'  // Vistas disponibles
        },
        events: '/events',
        selectable: true,
        select: function(info) {
            document.getElementById('event_id').value = '';
            document.getElementById('event_title').value = '';
            document.getElementById('event_start').value = info.startStr;
            document.getElementById('event_end').value = info.endStr;
            document.getElementById('event_etiqueta').value = 'Otros';

            let eventModal = new bootstrap.Modal(document.getElementById('eventModal'));
            eventModal.show();
        },
       eventClick: function(info) {
  document.getElementById('event_id').value = info.event.id;
  document.getElementById('event_title').value = info.event.title;

  // Convertir fechas a formato local
  let start = new Date(info.event.start);
  let end = new Date(info.event.end);

  function formatDateLocal(date) {
    let year = date.getFullYear();
    let month = (date.getMonth() + 1).toString().padStart(2, '0');
    let day = date.getDate().toString().padStart(2, '0');
    let hours = date.getHours().toString().padStart(2, '0');
    let minutes = date.getMinutes().toString().padStart(2, '0');
    return `${year}-${month}-${day}T${hours}:${minutes}`;
  }

  let startStr = formatDateLocal(start);
  let endStr = formatDateLocal(end);

  document.getElementById('event_start').value = startStr;
  document.getElementById('event_end').value = endStr;
  document.getElementById('event_etiqueta').value = info.event.extendedProps.etiqueta;

  let eventModal = new bootstrap.Modal(document.getElementById('eventModal'));
  eventModal.show();
},
        eventDidMount: function(info) {
            info.el.style.backgroundColor = info.event.backgroundColor;
        }
    });

    calendar.render();

    document.getElementById('eventForm').addEventListener('submit', function(event) {
        event.preventDefault();

        let id = document.getElementById('event_id').value;
        let url = id ? `/events/${id}` : '/events';
        let method = id ? 'PUT' : 'POST';

        // Helper para formatear la fecha
        function formatForMySQL(datetimeLocalStr) {
            return datetimeLocalStr.replace('T', ' ') + ':00';
        }
        let eventData = {
         event: document.getElementById('event_title').value,
         start_date: formatForMySQL(document.getElementById('event_start').value),
         end_date: formatForMySQL(document.getElementById('event_end').value),
         etiqueta: document.getElementById('event_etiqueta').value
         };

        fetch(url, {
            method: method,
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(eventData)
        })
        .then(response => response.json())
        .then(data => {
            if (id) {
                let event = calendar.getEventById(id);
                event.setProp('title', data.event);
                event.setStart(data.start_date);
                event.setEnd(data.end_date);
                event.setExtendedProp('etiqueta', data.etiqueta);
                event.setProp('backgroundColor', getColorByEtiqueta(data.etiqueta));
            } else {
                calendar.addEvent({
                    id: data.id,
                    title: data.event,
                    start: data.start_date,
                    end: data.end_date,
                    etiqueta: data.etiqueta,
                    backgroundColor: getColorByEtiqueta(data.etiqueta)
                });
            }

            bootstrap.Modal.getInstance(document.getElementById('eventModal')).hide();
        })
        .catch(error => console.error('Error:', error));
    });

    function getColorByEtiqueta(etiqueta) {
        const colors = {
          'SOPORTE': 'rgb(0,123,255)',
    'REUNION': 'rgb(108,117,125)',
    'VIDEO': 'rgb(111,66,193)',
    'WEBINARS': 'rgb(121,85,72)',
    'LISTO': 'rgb(40,167,69)',
    'PENDIENTE': 'rgb(255,193,7)',
    'CANCELADO': 'rgb(220,53,69)'
        };
		 if (colors.hasOwnProperty(etiqueta)) {
        return colors[etiqueta];
    }

    // De lo contrario, asumimos que la propia 'etiqueta' ya es un color válido y lo retornamos
    return etiqueta;
}
});
</script>
@endpush
