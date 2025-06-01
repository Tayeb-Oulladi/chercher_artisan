<div class="row">
    @foreach($societes as $societe)
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="team-item">
            <div class="team-img">
                <img src="{{ asset('img/' . $societe->photo) }}" alt="Image société" style="width:100%; height:250px; object-fit:cover;">
            </div>
            <div class="team-text">
                <h2>{{ $societe->nom_societe }}</h2>
                <p><i class="fas fa-map-marker-alt"></i> {{ $societe->ville }} - {{ $societe->adresse }}</p>
                <p><i class="fab fa-whatsapp"></i>
                    <a href="https://wa.me/{{ preg_replace('/\D+/', '', $societe->telephone) }}" target="_blank">
                        {{ $societe->telephone }}
                    </a>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@if($societes->isEmpty())
    <div class="col-12 text-center">
        <p>Aucune société trouvée.</p>
    </div>
@else
    @foreach($societes as $societe)
        <!-- carte de société ici -->
    @endforeach
@endif
