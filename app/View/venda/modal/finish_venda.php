<div class="modal fade" id="finish_venda" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Concluir Venda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> Deseja marcar esta venda como concluída? </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                <!-- Âncora envolvendo o botão -->
                <a id="btn_finish_venda" class="btn btn-success" href="#">
                    Concluir Venda
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    var deleteModal = document.getElementById('finish_venda');
if (deleteModal) {
    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var vendaId = button.getAttribute('data-venda');
        var confirmDelete = document.getElementById('btn_finish_venda');
        confirmDelete.href = 'View/venda/modal/finish_vendaCodigo.php?id=' + vendaId;
    });
}

</script>