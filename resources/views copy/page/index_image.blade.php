@extends('frontend.layout.app')
@section('content')

			<!-- Section Started -->
			<div class="section started" id="section-started">

				<!-- background -->
				<div class="video-bg" style="background-image: url('{{ asset('public/assets/images/started_image_p.jpg') }}');">
					<div class="video-bg-mask"></div>
					<div class="video-bg-texture" id="grained_container"></div>
				</div>

				<!-- started content -->
				<div class="centrize full-width">
					<div class="vertical-center">
						<div class="started-content">
							<h1 class="h-title">
								Hello, I’m <strong>Alejandro Abeyta</strong>, UX/UI Designer and <br />
								Front-end Developer Based in San Francisco.
							</h1>
							<div class="h-subtitle typing-subtitle">
								<p>I code cool <strong>websites</strong></p>
								<p>I develop <strong>mobile apps</strong></p>
								<p>I love <strong>wordpress</strong></p>
							</div>
							<span class="typed-subtitle"></span>
						</div>
					</div>
				</div>

			</div>
            @endsection
