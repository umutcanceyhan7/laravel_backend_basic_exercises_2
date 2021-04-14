<x-app-layout>
<x-slot name="header"><h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Create a possessor') }}</h2></x-slot>
<x-slot name="slot">
    <form data-parsley-validate action="{{route('createPossessorPost')}}" method="post">
        @csrf
        <div class="container-fluid py-4">
        <div class="container">
            <!-- left column -->
            <div class="col-12">
            <!-- general form elements -->
            <!-- Form Element sizes -->
            <div class="card">
                    <div class="card-body container mx-auto">
                    <div class="form-group">
                        <label for="possessor_name" class="brown regular">Possessor Name</label>
                        <input class="form-control" type="text" name="possessor_name" id="possessor_name" placeholder="Enter possessor name" required data-parsley-length="[2,255]">
                        </div>
                    <div class="form-group">
                        <label for="possessor_picture" class="brown regular">Possessor Picture</label>
                        <input class="form-control" type="file" placeholder="Upload possessor picture" name="possessor_picture" id="possessor_picture">
                        </div>
                    <div class="form-group">
                        <label for="possessor_age" class="brown regular">Possessor Age</label>
                        <input class="form-control" type="text" name="possessor_age" id="possessor_age" placeholder="Enter possessor age" required data-parsley-length="[2,255]">    
                    </div>
                    <div class="form-group">
                        <label for="possessor_score" class="brown regular">Possessor Score</label>
                        <input type="number" class="form-control" placeholder="Enter possessor score" id="possessor_score" name="possessor_score" required>
                    </div>
                    <button class="btn btn-block bg-primary text-white my-3 col-12 col-md-8 offset-md-2 regular" type="submit">Submit</button>
                    <!-- /.card-body -->
                    </div>
            
                </div>

                </div>
        
        </div><!-- /.container-fluid -->
    </form>
</x-slot>
</x-app-layout>