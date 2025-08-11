@extends('layouts.admin.app')

@section('modal')
    @include('pages.admin.flower.modal.add')
    @include('pages.admin.flower.modal.edit')

@endsection

@section('content')
    <div class="card card-flush h-md-100">
        <div class="card-header pt-7">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-gray-800">List Bunga</span>
            </h3>

            <div class="card-toolbar">
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal_add_flower">
                    Tambah Bunga
                </a>
            </div>
        </div>

        <div class="card-body pt-6">
            <div class="table-responsive">
                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0" id="table_flower">
                    <thead>
                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                            <th class="w-50px text-center">NO</th>
                            <th>name</th>
                            <th>description</th>
                            <th>stock</th>
                            <th>base_price</th>
                            <th class="">status</th>
                            <th class="text-center">ACTION</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let flowerTable;

        $(document).ready(function() {
            flowerTable = $('#table_flower').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('flower.table') }}"
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'stock',
                        name: 'stock'
                    },
                    {
                        data: 'base_price',
                        name: 'base_price'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                language: {
                    "lengthMenu": "Show _MENU_",
                    "emptyTable": "Tidak ada data bunga 📁",
                    "zeroRecords": "Data tidak ditemukan 😞",
                }
            });


            window.onDeleteFlower = (id) => {
                Swal.fire({
                    title: 'Hapus Bunga?',
                    text: 'Apakah Anda yakin ingin menghapus?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: 'rgb(221, 107, 85)',
                    cancelButtonColor: 'gray',
                    confirmButtonText: 'Ya, Hapus!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('flower.delete') }}",
                            type: 'POST',
                            data: {
                                id
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(data) {
                                Swal.fire({
                                    title: 'Berhasil',
                                    text: data.message,
                                    icon: 'success',
                                    confirmButtonColor: 'green',
                                });
                                flowerTable.draw();
                            },
                            error: function(xhr) {
                                const data = xhr.responseJSON;
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: data.message,
                                });
                            }
                        });
                    }
                });
            };

                window.onEditFlower = (id, name, description ,stock,base_price, status) => {
                    $('#modal_edit_flower [name="id"]').val(id);
                    $('#modal_edit_flower [name="name"]').val(name);
                    $('#modal_edit_flower [name="description"]').val(description);
                    $('#modal_edit_flower [name="stock"]').val(stock);
                    $('#modal_edit_flower [name="base_price"]').val(base_price);
                    $('#modal_edit_flower [name="status"]').val(status);
                    $('#modal_edit_flower').modal('show');
                };
        
        });
    </script>
@endsection
