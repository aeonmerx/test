<div>
    <h1>Contacto</h1>

    <form wire:submit.prevent="submitForm">
        <div>
            <label for="name">Nombre:</label>
            <input type="text" wire:model="name" id="name" required>
        </div>

        <div>
            <label for="email">Correo electrónico:</label>
            <input type="email" wire:model="email" id="email" required>
        </div>

        <div>
            <label for="message">Mensaje:</label>
            <textarea wire:model="message" id="message" required></textarea>
        </div>

        <button type="submit">Enviar Mensaje</button>
    </form>

    <!-- Agrega el modal para mostrar la notificación -->
    <div wire:ignore.self class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">¡Contacto Guardado!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    El contacto se ha guardado correctamente.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('contactSaved', function () {
                $('#successModal').modal('show');
            });
        });
    </script>
@endpush
