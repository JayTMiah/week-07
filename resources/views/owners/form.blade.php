@extends("app")

@section("content")
    <form method="post" class="form card">
        @csrf
        <h2 class="card-header">Create Owner</h2>

        <fieldset class="card-body">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input id="first_name" name="first_name" class="form-control" value="{{ old('first_name') }}"/>

                @error('first_name')
                <p class="form-control @error('first_name') is-invalid @enderror">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}"/>

                @error('last_name')
                <p class="form-control @error('last_name') is-invalid @enderror">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" class="form-control" value="{{ old('email') }}"/>

                @error('email')
                <p class="form-control @error('email') is-invalid @enderror">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input id="telephone" name="telephone" class="form-control" value="{{ old('telephone') }}"/>

                @error('telephone')
                <p class="form-control @error('telephone') is-invalid @enderror">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="address_1">Address Line 1</label>
                <input id="address_1" name="address_1" class="form-control" value="{{ old('address_1') }}"/>

                @error('address_1')
                <p class="form-control @error('address_1') is-invalid @enderror">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="address_2">Address line 2</label>
                <input id="address_2" name="address_2" class="form-control" value="{{ old('address_2') }}"/>

                @error('title')
                <p class="form-control @error('title') is-invalid @enderror">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="town">Town</label>
                <input id="town" name="town" class="form-control" value="{{ old('town') }}"/>

                @error('title')
                <p class="form-control @error('title') is-invalid @enderror">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="postcode">Postcode</label>
                <input id="postcode" name="postcode" class="form-control" value="{{ old('postcode') }}"/>

                @error('postcode')
                <p class="form-control @error('postcode') is-invalid @enderror">
                    {{ $message }}
                </p>
                @enderror
            </div>


            
        </fieldset>

        <div class="card-footer text-right">
            <button class="btn btn-success">Create</button>
        </div>
    </form>
@endsection