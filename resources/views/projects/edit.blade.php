@extends('layout')

@section('content')

<h1 class="title">Edit Project</h1>

    <form action="">

        <div class="field">


            <label for="title">Title</label>


            <div class="control">

                <input type="text" class="input" name="title" placeholder="Title" id="">

            </div>

        </div>


        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">

                <textarea name="" class="textarea" id="" cols="30" rows="10"></textarea>

            </div>

        </div>

        <div class="field">

            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>

        </div>
    </form>

@endsection
