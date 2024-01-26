@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Welcome to Our School Site</h1>
                <p class="lead my-3">Stay updated with the latest news, events, and stories from our school
                    community.</p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Academics</strong>
                        <h3 class="mb-0">Featured Post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Explore the latest academic achievements and milestones in our
                            school community.</p>
                        <a href="#" class="stretched-link">Read More</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="https://via.placeholder.com/200x250" class="bd-placeholder-img" alt="Academics Thumbnail">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Events</strong>
                        <h3 class="mb-0">Upcoming Event</h3>
                        <div class="mb-1 text-muted">Dec 18</div>
                        <p class="mb-auto">Join us for an exciting event that brings together students, parents,
                            and teachers for a day of celebration and joy.</p>
                        <a href="#" class="stretched-link">Learn More</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="https://via.placeholder.com/200x250" class="bd-placeholder-img" alt="Events Thumbnail">
                    </div>
                </div>
            </div>
        </div>



        <div class="row my-5">
            <div class="col-md-4 mb-3 bg-light rounded">
                <h4 class="font-italic">About Us</h4>
                <p class="mb-0">Discover more about our school's history, mission, and values. Join us in shaping the
                    future of education.</p>
            </div>

            <div class="col-md-4">
                <h4 class="font-italic">Upcoming Events</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">Annual Science Fair - March 2024</a></li>
                    <li><a href="#">Spring Music Concert - April 2024</a></li>
                    <li><a href="#">Sports Day - May 2024</a></li>
                </ol>
            </div>

            <div class="col-md-4">
                <h4 class="font-italic">Connect with Us</h4>
                <ol class="list-unstyled">
                    <li><a href="#">Contact Information</a></li>
                    <li><a href="#">Social Media</a></li>
                    <li><a href="#">Newsletter Signup</a></li>
                </ol>
            </div>
        </div>
    </div>

    <footer class="blog-footer">

        <a href="#">Back to top</a>
        </p>
    </footer>
@endsection
