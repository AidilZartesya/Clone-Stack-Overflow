@extends('layouts.master')

@section('content')
    <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h2 class="card-title">{{$data->title}}</h2>
              <p class="card-category">Asked {{$data->created_at}}</p>
            </div>
            <div class="card-body">
              <div id="typography">
                <div class="card-title">
                  <h2>Question</h2>
                </div>
                <div class="row">
                  <div class="tim-typo">
                    <p>
                      <span class="tim-note">Description</span>{{$data->question}}</h2>
                  </div>
                  <div class="tim-typo">
                    <h5>
                      <span class="tim-note">Answer</span>The Life of Material Dashboard</h5>
                  </div>
                  <div class="tim-typo">
                    <h5>
                      <span class="tim-note">Created at</span>The Life of Material Dashboard</h5>
                  </div>
                  <div class="tim-typo">
                    <h5>
                      <span class="tim-note">Modified at</span>The Life of Material Dashboard</h5>
                  </div>
                  <div class="tim-typo">
                    <h6>
                      <span class="tim-note">Header 6</span>The Life of Material Dashboard</h6>
                  </div>
                  <div class="tim-typo">
                    <p>
                      <span class="tim-note">Paragraph</span>
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Quote</span>
                    <blockquote class="blockquote">
                      <p>
                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                      </p>
                      <small>
                        Kanye West, Musician
                      </small>
                    </blockquote>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Muted Text</span>
                    <p class="text-muted">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                    </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Primary Text</span>
                    <p class="text-primary">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Info Text</span>
                    <p class="text-info">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Success Text</span>
                    <p class="text-success">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Warning Text</span>
                    <p class="text-warning">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                    </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Danger Text</span>
                    <p class="text-danger">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <h2>
                      <span class="tim-note">Small Tag</span>
                      Header with small subtitle
                      <br>
                      <small>Use "small" tag for the headers</small>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection