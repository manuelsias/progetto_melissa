<x-layout>
    <h1>contattami</h1>
    
   <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('contattami.submit')}}">
                @csrf
                <div class="mb-3">
                  <label class="form-label"> nome</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                  <label class="form-label"> la tua email</label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label  class="form-label">scrivimi un email</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control" ></textarea>
                  </div>
                <button type="submit" class="btn btn-primary">invia</button>
              </form>
        </div>
    </div>
   </div>
</x-layout>