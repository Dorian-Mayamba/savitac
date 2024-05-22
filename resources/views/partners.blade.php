@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div id="partner-banner"></div>

        <div class="row partner-content p-3">
            @foreach ($partners as $partner)
                <div class="col-md-4 mb-4">
                    <div class="image">
                        <img class="w-75" style="aspect-ratio: 2/1;" src="{{ asset($partner->image) }}" alt="image">
                    </div>
                    <h2><small>{{ $partner->name }}</small></h2>
                    <button onclick="updateModal('{{ route('partner-json') }}', this)" id="{{ $partner->id }}"
                        data-bs-target="#compagnyModal" data-bs-toggle="modal"
                        class="btn-info btn-sm btn partner-btn text-light">En
                        savoir plus</button>
                </div>
            @endforeach
        </div>
        <div class="modal fade" id="compagnyModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="name-container">
                            <strong id="name"></strong>
                        </div>
                        <div class="description-container">
                            <p id="description"></p>
                        </div>
                        <div class="website-container">
                            <p><a id="website" href="#"></a></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.partner-content').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                autoplay: true,
                autoplaySpeed: 5000,
                dots: true
            })
        })
        const loadPartners = async (url) => {
            try {
                let response = await fetch(url, {
                    headers: {
                        "Content-Type": "application/json"
                    },
                    mode: 'no-cors'
                });
                let data = await response.json();
                console.log(data);
                return data;
            } catch (err) {
                console.log(err);
            }
        };

        const updateModal = async (url, element) => {
            let compagnies = await loadPartners(url);
            let compagny = compagnies[element.id - 1];
            var modalHeader = $('.modal-header');
            modalHeader.css({
                backgroundImage: `url(${compagny.image})`,
                backgroundRepeat: "no-repeat",
                backgroundSize: "100% 100%",
                height: "32.5vh"
            });
            $('#name').text(compagny.name);
            $('#description').text(compagny.description);
            $('#website').attr('href', compagny.link);
            $('#website').text(compagny.link);
        }
    </script>
@endsection
@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/partners.css') }}">
@endsection
