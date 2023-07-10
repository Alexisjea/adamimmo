

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1>Créer cotation</h1>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('cotations.store')}}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nom Cotation</label>
                            <input type="text" name="nomCota" class="form-control">
                        </div>
                        
                    </div>
                </div>
                    
                    <div class="card-footer text-center">
                        <input type="submit" class="btn btn-success W-25 mt-2" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


