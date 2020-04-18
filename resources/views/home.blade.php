@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-multiline">
                <div class="card column is-half is-offset-one-quarter">
                    <header class="card-header">
                        <p class="card-header-title">
                            Dashboard
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            @if (session('status'))
                                <article class="message is-success">
                                    <div class="message-body">
                                        {{ session('status') }}
                                    </div>
                                </article>
                            @endif
                            <p>Welcome <strong>{{ auth()->user()->name }}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <example-component></example-component>

        </div>
    </section>
@endsection
