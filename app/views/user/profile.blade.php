@extends('layouts.master')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="well display-inline" style="width:820px;">
        		<h3 class="text-danger"><strong>{{ucwords($user->adi)." ".ucwords($user->soyadi)}}</strong>, CVs</h3>
       		<div class="smart-timeline">
	<ul class="smart-timeline-list">
	<li>
	<div class="right">
		<a href="user_profile" class="btn btn-primary">User Profile & Message</a>
	</div>
			<div class="smart-timeline-icon">
				<img src="{{$user->pr_img}}" width="32" height="32" alt="user">
			</div>
			<div class="smart-timeline-content">
				<h4>
					<a class="txt-color-green" href="javascript:void(0);"><strong></strong></a>
				</h4>
				<p><strong> 24 Years Old, {{$user->cinsiyet}}, Single </strong></p>
				<div class="well well-sm display-inline">
					<span><strong>Email:</strong> {{$user->email}}</span><br>
					<span><strong>Home Address:</strong> {{$user->sehir." / ".$user->ulke}}</span>
					<span> - <strong>Cell Phone:</strong> {{$user->tel}} </span>
				</div>
			</div>
		</li>
		<li>
			<div class="smart-timeline-icon">
				<i class="fa fa-book"></i>
			</div>
			<div class="smart-timeline-content">
				<h4>
					<a class="txt-color-green" href="javascript:void(0);"><strong>Experience</strong></a>
				</h4>
				<p>
					@if($Uexp->count())
					    @foreach($Uexp as $exp)
					        <h6 class="txt-color-red"><strong>{{ ucwords($exp->com_name) }}</strong> <small>({{ucwords($exp->pos)}})</small> </h6>
					        <span><strong> {{ucwords($exp->edu_level)}} </strong></span>,<span> {{$exp->sehir}} </span>
					        <hr>
					    @endforeach
					@endif
				</p>
			</div>
		</li>
		<li>
			<div class="smart-timeline-icon">
				<i class="fa fa-graduation-cap"></i>
			</div>
			<div class="smart-timeline-content">
				<h4>
					<a class="txt-color-green" href="#"><strong>Education</strong></a>
				</h4>
				<p>
					@if($Uedu->count())
					    @foreach($Uedu as $edu)
					        <h6 class="txt-color-red"><strong>{{ ucwords($edu->school_name) }}</strong> <small>({{ucwords($edu->department)}})</small> </h6>
					        <span><strong> {{ucwords($edu->edu_level)}} </strong></span>,<span> {{$edu->sehir}} </span>
					        <hr>
					    @endforeach
					@endif
				</p>
							
			</div>
		</li>
		<li>
			<div class="smart-timeline-icon">
				<i class="fa fa-reorder"></i>
			</div>
			<div class="smart-timeline-content">
				<h4>
					<a class="txt-color-green" href="#"><strong>Internship</strong></a>
				</h4>
				<p>
					@if($Uintern->count())
					        @foreach($Uintern as $intern)
					                <h6 class="txt-color-red"><strong>{{ ucwords($intern->pos) }}</strong> <small>({{ucwords($intern->period)}})</small> </h6>
					                <span><strong> {{ucwords($intern->com_name)}} </strong></span>,<span> {{$intern->sehir}} </span>
					            <hr>
					        @endforeach
					@else
					<div class="alert alert-warning alert-dismissible" role="alert">
		              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		                <strong>Warning!</strong> User has not publish intern information.
		            </div>
					@endif
				</p>
							
			</div>
		</li>
		<li>
			<div class="smart-timeline-icon">
				<i class="fa fa-eye"></i>
			</div>
			<div class="smart-timeline-content">
				<h4>
					<a class="txt-color-green" href="#"><strong>Foreign Languages</strong></a>
				</h4>
				<p>
					@if($Uforeign->count())
						@foreach($Uforeign as $foreign)
							<h6 class="txt-color-red"><strong>{{ ucwords($foreign->languages) }}</strong> <small>({{ucwords($foreign->learned)}})</small> </h6>
							<span> Reading ({{ucwords($foreign->reading)}})</span>,<span> Writing ({{$foreign->writing}}) </span>,<span> Speaking ({{$foreign->speaking}}) </span>
						<hr>
						@endforeach
					@endif
				</p>
							
			</div>
		</li>
		<li>
			<div class="smart-timeline-icon">
				<i class="fa fa-circle"></i>
			</div>
			<div class="smart-timeline-content">
				<h4>
					<a class="txt-color-green" href="#"><strong>Competencies</strong></a>
				</h4>
				<p>
					@if($Ucompe->count())
						@foreach($Ucompe as $compe)
							<h6 class="txt-color-red"><strong>{{ ucwords($compe->compe_name) }}</strong> <small>({{ucwords($compe->exp)}})</small> </h6>
							<span>{{ucwords($compe->exprience)}} </span>
						<hr>
						@endforeach
					@endif
				</p>
							
			</div>
		</li>
		<li>
			<div class="smart-timeline-icon">
				<i class="fa fa-coffee"></i>
			</div>
			<div class="smart-timeline-content">
				<h4>
					<a class="txt-color-green" href="#"><strong>Certificates</strong></a>
				</h4>
				<p>
					@if($Ucert->count())
						@foreach($Ucert as $cert)
							<h6 class="txt-color-red"><strong>{{ ucwords($cert->cer_name) }}</strong> <small>({{ucwords($cert->cer_com)}})</small> </h6>
							<span>{{ucwords($cert->cer_work)}} </span>, <span>{{$cert->cer_year}}</span>
						<hr>
						@endforeach
					@endif
				</p>
							
			</div>
		</li>
		<li>
			<div class="smart-timeline-icon">
				<i class="fa fa-user"></i>
			</div>
			<div class="smart-timeline-content">
				<h4>
					<a class="txt-color-green" href="#"><strong>Referances</strong></a>
				</h4>
				<p>
					@if($Uref->count())
						@foreach($Uref as $ref)
							<h6 class="txt-color-red"><strong>{{ ucwords($ref->namesname) }}</strong> <small>({{ucwords($ref->com_name)}})</small> </h6>
							<b>For Contact:</b> <span>{{ucwords($ref->p_contact)}} </span>, <span>{{ucwords($ref->email)}} </span>
						<hr>
						@endforeach
					@endif
				</p>
							
			</div>
		</li>
	</ul>
</div>
<!-- END Timeline Content -->

</div>
        
			</div>
		</div>
	</div>
</div>
@stop