@extends('layouts.menu')
@section('content')
	<style type="text/css">
		body{
			margin: 0;
		}
		#main{
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.rank-list{
			width: 600px;
		}
		.rank-row{
			border-bottom: 1.6px solid #EEE;
		    padding-top: 10px;
		    margin-top: 10px;
		    padding: 5px;
		}
		.miss-card{
			display: flex;
			padding: 5px;
			position: relative;
		}
		.miss-name, .miss-surname{
			font-size: 1.5em;
			margin-top: 20px;
		}
		.miss-desc{
			max-width: 80%;
			overflow: hidden;
			word-break: break-all;
			margin-left: 10px;
		}
		.miss-rank{
			background: #BE63B4;
		    padding: 1px 12px 1px 12px;
		    color: #fff;
		    position: absolute;
		    right: 0;
		    font-weight: bold;
		}
	</style>
		<div id="main" class="container">
			<div class="rank-list">
        @foreach($misses as $miss)
				<div class="rank-row">
					<div class="miss-card">
						<div class="miss-pic" width="100">
							<img height="100" src="/img/photos/{{$miss->image}}">
						</div>
						<div class="miss-desc">
							<div class="miss-name">{{$miss->prenoms}}</div>
							<div class="miss-surname">{{$miss->nom}}</div>
						</div>
						<span class="miss-rank">{{$miss->nombre_de_votes}} vote(s)</span>
					</div>
				</div>
        @endforeach

				</div>
			</div>
		</div>

    @endsection
