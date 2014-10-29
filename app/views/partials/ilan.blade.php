@if($adsInfo->count())
<div class="panel panel-success">
    <div class="panel-body">
    @foreach($adsInfo as $p)
            <div class="col-sm-5"  style="max-width:170px; max-height=165px;">
            
            <a href="ads/{{$p->id}}" rel="tooltip" data-placement="top" data-original-title="<img style='width:100%' src='{{$p->logo}}' alt='me' class='online'>" data-html="true">
                <div class="[ info-card ]">
                    <img style="width:100%" src="{{User::$img_sirket_src."".$p->logo}}" />
                    <div class="[ info-card-details ] animate">
                        <div class="[ info-card-header ]">
                            <h3> {{$p->com_name}} </h3>
                            <small> {{$p->ref_code}} </small><br>
                            @if(Auth::user())
                                <button class="btn btn-primary btn-block btn-xs">Apply</button>
                            @endif
                        </div>
                        
                    </div>
                </div> 
                </a>
                
            </div>@endforeach
           
    </div>
    <div style="margin-left:38px;">{{$adsInfo->links()}}</div>


</div>
@endif
