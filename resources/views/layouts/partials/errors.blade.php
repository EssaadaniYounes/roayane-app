@if ($errors->any())
    <div class="alert alert-danger">
        <ul style="list-style: circle">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
