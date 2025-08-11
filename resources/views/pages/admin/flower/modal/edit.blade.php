  <!-- Edit Flower Modal -->
  <div class="modal fade" id="modal_edit_flower" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-600px">
      <div class="modal-content">
        <div class="modal-header align-items-center">
          <h5 class="modal-title">Edit Produk</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <form id="form_edit_flower"  enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id">

          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label required">Nama Produk</label>
              <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Deskripsi</label>
              <textarea name="description" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
              <label class="form-label required">Stok</label>
              <input type="number" name="stock" class="form-control" min="0" required>
            </div>

            <div class="mb-3">
              <label class="form-label required">Harga Dasar</label>
              <input type="number" name="base_price" class="form-control" step="0.01" min="0" required>
            </div>

            <div class="mb-3">
              <label class="form-label required">Status</label>
              <select name="status" class="form-select" required>
                <option value="Tersedia">Tersedia</option>
                <option value="PO">PO</option>
              </select>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<script>
    $(document).ready(function() {
        $('#form_edit_flower').on('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            $('#form_edit_flower [type="submit"]').attr('disabled', true);
            $('#form_edit_flower [type="submit"]').html(
                '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
            );
            $.ajax({
                url: "{{ route('flower.update') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },  
                success: function(data) {
                    toastr.success(data.message, 'Selamat 🚀 !');
                    $('#form_edit_flower [type="submit"]').attr('disabled', false);
                    $('#form_edit_flower [type="submit"]').html('Simpan')
                    $('#modal_edit_flower').modal('hide');

                    $('#form_edit_flower').trigger('reset');
                    flowerTable?.draw();
                },
                error: function(xhr, status, error) {
                    const data = xhr.responseJSON;
                    toastr.error(data.message, 'Opps!');
                    $('#form_edit_flower [type="submit"]').attr('disabled', false);
                    $('#form_edit_flower [type="submit"]').html('Simpan')
                }
            });
        });
    });
</script>
