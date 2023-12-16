@extends('user.master')
@section('user')
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center mt-5">
                <h2>Form <span>Peminjaman</span></h2>
            </div>
            <div class="container-fluid mb-5">
                <div class="card">
                    <div class="card-header">Featured</div>
                    <div class="card-body">
                        <form class="row g-3" id="validasi" action="{{ route('user.storeSewa') }}" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <label for="harga" class="form-label">Harga Sewa</label>
                                <input type="text" class="form-control" name="hargasewa" id="harga"
                                    value="{{ $data->hargasewa }}" readonly />
                            </div>
                            <div class="col-md-6">
                                <label for="nim" class="form-label">Denda Keterlambatan / perjam</label>
                                <input type="text" class="form-control" name="denda" id="nim"
                                    value="{{ $data->hargasewa }}" readonly />
                            </div>
                            <div class="col-md-6">
                                <label for="namabarang" class="form-label">Jam Mulai</label>
                                <input type="time" class="form-control" name="jam_mulai" id="jam_mulai" placeholder="" />
                            </div>
                            <div class="col-md-6">
                                <label for="jumlah" class="form-label">Jam Pengembalian</label>
                                <input type="time" class="form-control" name="jam_pengembalian" id="jam_pengembalian"
                                    placeholder="" />
                            </div>
                            <div class="col-md-6">
                                <label for="waktu" class="form-label">Jumlah Barang Sewa</label>
                                <input type="number" class="form-control" name="jumlahsewa" id="waktu" />
                            </div>
                            <div class="col-md-6" hidden>
                                <label for="waktu" class="form-label">id_barang</label>
                                <input type="text" class="form-control" name="id_barang" id="waktu"
                                    value="{{ $data->id }}" />
                            </div>
                            <div class="col-12">
                                @if ($data->jumlahBarang > 0)
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                @endif
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#validasi").validate({
                rules: {
                    jumlahsewa: {
                        required: true,
                    },
                    jam_mulai: {
                        required: true,
                    },
                    jam_pengembalian: {
                        required: true,
                        greaterThanStartTime: true, // Menambahkan aturan kustom
                    },
                },
                messages: {
                    jam_pengembalian: {
                        greaterThanStartTime: "Waktu selesai harus setelah waktu mulai.",
                    },
                },
            });

            // Menambahkan aturan kustom untuk membandingkan waktu
            $.validator.addMethod(
                "greaterThanStartTime",
                function(value, element) {
                    var startTime = $("#jam_mulai").val();

                    // Konversi waktu menjadi detik untuk membandingkan
                    var startSeconds = convertToSeconds(startTime);
                    var endSeconds = convertToSeconds(value);

                    return endSeconds > startSeconds;
                },
                "Waktu selesai harus setelah waktu mulai."
            );

            // Fungsi untuk mengonversi waktu ke detik
            function convertToSeconds(timeString) {
                var timeParts = timeString.split(":");
                return parseInt(timeParts[0]) * 3600 + parseInt(timeParts[1]) * 60;
            }
        });
    </script>
@endpush
