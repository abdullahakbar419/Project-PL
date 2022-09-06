@include('partials.header_after')

<section id="form" class="form">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>FORM BERITA ACARA</h2>
        </div>


        <div class="row mt-1 d-flex justify-content-center">

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="{{ url('storage/' . $selectedNewsLetter->id) }}" method="post">
                    @csrf

                    <input type="hidden" name="newsletter_id" value="{{ $selectedNewsLetter->id }}">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="title" class="form-control" id="title"
                                value="{{ $selectedNewsLetter->title }}" placeholder="Judul Berita Acara" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="description" id="description"
                                value="{{ $selectedNewsLetter->description }}"
                                placeholder="Deskripsi Singkat Berita Acara" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 form-group">
                            <input type="text" name="location" class="form-control" id="location"
                                value="{{ $selectedNewsLetter->location_city }}" placeholder="Lokasi Kota" required>
                        </div>
                        <!-- Masih Ragu cara rubah date time untuk place holder dan valuenya -->
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="date" class="form-control" name="date" id="date"
                                value="{{ $selectedNewsLetter->event_date }}"
                                placeholder="{{ $selectedNewsLetter->event_date }}" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <fieldset class="col-md-6 form-group border border-dark">
                            <legend class="text-center">PIHAK PERTAMA</legend>
                            <div class="d-flex justify-content-center form-group">
                                <select name="name_first" id="name_first" required>
                                    <option class="col-md-6 text-center" value="0">-- Pilih Pihak Pertama --
                                    </option>
                                    @foreach ($firstParty as $first)
                                        <option class="col-md-6 text-center" value="{{ $first->id }}"
                                            {{ $selectedNewsLetter->first_party_id == $first->id ? 'selected' : '' }}>
                                            {{ $first->fullname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3 form-group d-flex justify-content-center" id="nip_first">


                            </div>
                            <div class="mt-2 form-group d-flex justify-content-center " id="position_first">

                            </div>
                            <div class="mt-2 form-group d-flex justify-content-center" id="agency">

                            </div>
                            <div class="mt-2 form-group d-flex justify-content-center" id="email_first">

                            </div>
                            <div class="mt-2 form-group d-flex justify-content-center" id="handphone_first">

                            </div>
                        </fieldset>

                        <Fieldset class="col-md-6 form-group border border-dark">
                            <legend class="text-center">PIHAK KEDUA</legend>
                            <div class="d-flex justify-content-center form-group">
                                <select name="category" id="category" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="Kategori_1">Kategori 1</option>
                                    <option value="Kategori_2">Kategori 2</option>
                                    <option value="Kategori_3">Kategori 3</option>
                                    <option value="Kategori_4">Kategori 4</option>
                                </select>
                            </div>
                            <div class="mt-2 d-flex justify-content-center form-group">
                                <select name="kld" id="kld" class="" required>
                                    <option value="">-- Pilih K/L/D --</option>
                                    <option value="k">K</option>
                                    <option value="l">L</option>
                                    <option value="d">D</option>
                                </select>
                            </div>
                            <div class="mt-2 form-group ">
                                <input type="text" name="number_letter_of_assignment"
                                    class="text-center form-control" id="number_letter_of_assignment"
                                    value="{{ $selectedNewsLetter->number_letter_of_assignment }}"
                                    placeholder="No Surat Tugas / Mandat" required>
                                @if ($numberLetterOfAssignment)
                                    <small class="d-flex justify-content-center text-danger">nomer surat sudah
                                        ada</small>
                                @endif
                            </div>
                            <div class="mt-2 form-group ">
                                <input type="text" name="name_second" class="text-center form-control"
                                    id="name_second" value="{{ $selectedSecondParty->fullname }}"
                                    placeholder="Nama Lengkap" required>
                            </div>
                            <div class="mt-2 form-group">
                                <input type="text" name="nip_second" class="text-center form-control" id="nip_second"
                                    value="{{ $selectedSecondParty->nip }}" placeholder="Nomer Induk Pegawai (NIP)"
                                    required>
                            </div>
                            <div class="mt-2 form-group ">
                                <input type="text" name="position_second" class="text-center form-control"
                                    id="position__second" value="{{ $selectedSecondParty->position }}"
                                    placeholder="Jabatan" required>
                            </div>

                            <div class="mt-2 form-group ">
                                <input type="email" name="email_second" class="text-center form-control"
                                    id="email_Second" value="{{ $selectedSecondParty->email }}" placeholder="Email"
                                    required>
                            </div>
                            <div class="mt-2 form-group ">
                                <input type="text" name="handphone_second" class="text-center form-control"
                                    id="handphone_second" value="{{ $selectedSecondParty->handphone }}"
                                    placeholder="Handphone" required>
                            </div>
                        </Fieldset>
                    </div>
                    <div class="mt-2 text-center"><button type="submit">Perbaharui Surat</button></div>
                </form>

            </div>

        </div>

    </div>
</section>
<!-- Template Ajax and JQuery -->
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('#name_first').on('change', function() {
            var nameFirstId = this.value
            if (nameFirstId == 0) {

                $('#nip_first').empty();
                $('#position_first').empty();
                $('#agency').empty();
                $('#email_first').empty();
                $('#handphone_first').empty();

                $('#nip_first').append(
                    '<label class="px-5 py-1 text-center" for="nip_first">NIP</label>');
                $('#position_first').append(
                    '<label class="px-5 py-1 text-center" for="position_first">JABATAN</label>');
                $('#agency').append(
                    '<label class="px-5 py-1 text-center" for="agency">INSTANSI</label>');
                $('#email_first').append(
                    '<label class="px-5 py-1 text-center" for="email_first">EMAIL</label>');
                $('#handphone_first').append(
                    '<label class="px-5 py-1 text-center" for="handphone_first">HANDPHONE</label>');
            } else {
                $.ajax({
                    url: '/form/' + nameFirstId,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {

                        $('#nip_first').empty();
                        $('#position_first').empty();
                        $('#agency').empty();
                        $('#email_first').empty();
                        $('#handphone_first').empty();
                        $.each(data, function(key, value) {
                            $('#nip_first').append(
                                '<label class="px-5 py-1 text-center" for="nip_first">' +
                                value.nip + '</label>'
                            );
                            $('#position_first').append(
                                '<label class="px-5 py-1 text-center" for="position_first">' +
                                value.position + '</label>'
                            );
                            $('#agency').append(
                                '<label class="px-5 py-1 text-center" for="agency">' +
                                value.agency + '</label>'
                            );
                            $('#email_first').append(
                                '<label class="px-5 py-1 text-center" for="email_first">' +
                                value.email + '</label>'
                            );
                            $('#handphone_first').append(
                                '<label class="px-5 py-1 text-center" for="handphone_first">' +
                                value.handphone + '</label>'
                            );
                        });


                    }
                });
            }

        });
    });
</script>
@include('partials.footer')
