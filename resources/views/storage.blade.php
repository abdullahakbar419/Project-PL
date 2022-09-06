@include('partials.header_after')
<!-- ======= Contact Section ======= -->
<section id="storage" class="storage">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Storage</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newsletters as $index => $newsletter)
                        <tr>
                            <th scope="row">{{ $index + $newsletters->firstItem() }}</th>
                            <td>{{ $newsletter->title }}</td>
                            <td>{{ $newsletter->description }}</td>
                            <td class="list-group">

                                <a href={{ url('/storage/' . $newsletter->id . '/edit') }}
                                    class="bx bx-user list-group-item list-group-item-action"><span
                                        class="mx-2">Edit</span></a>
                                <a href="/newsletter/{{ $newsletter->id }}"
                                    class="bx bx-user list-group-item list-group-item-action"><span
                                        class="mx-2">View</span></a>
                                <a href="/" class="bx bx-user list-group-item list-group-item-action"><span
                                        class="mx-2">Delete</span></a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $newsletters->links() }}
    </div>
</section><!-- End Contact Section -->


@include('partials.footer')
