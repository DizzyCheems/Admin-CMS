<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<body style=  background-image:url(/1064070_wallpaper-spots-light-background-circles-blue-wallpapers_2880x1800_h.jpg);>


@section('songregister')
<div class="container" style="max-width:550px; margin-top:20px;" >


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Register Track Details</h4> 

	<form action="{{route('executive_songregisterprocess')}}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}


	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="artist_id" class="form-control" placeholder="Artist ID" type="text" >
    </div> <!-- form-group// -->
	@error('artist_id')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="songname" class="form-control" placeholder="Track Name" type="text" >
    </div> <!-- form-group// -->
	@error('songname')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="author" class="form-control" placeholder="Composer" type="text" >
    </div> <!-- form-group// -->
	@error('author')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="genre" class="form-control" placeholder="Song Genre" type="text" >

    </div> <!-- form-group// -->
	@error('genre')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="album" class="form-control" placeholder="Song Album" type="text" >

    </div> <!-- form-group// -->
	@error('album')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
	
	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="date_registered" class="form-control" placeholder="Date Registered" type="text" >

    </div> <!-- form-group// -->
	@error('date_registered')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror

	
	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="info" class="form-control" placeholder="Info 1" type="text">

    </div> <!-- form-group// -->
	@error('info')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
	
	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="info2" class="form-control" placeholder="Info 2" type="text">

    </div> <!-- form-group// -->
	@error('info2')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
	
	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="info3" class="form-control" placeholder="Info 3" type="text">

    </div> <!-- form-group// -->
	@error('info3')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror

    <div class="form-group input-group">
    	<div class="input-group-prepend">
	</div> <!-- form-group end.// -->
	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="image"  class="form-control" placeholder="Song Cover Photo" type="file">
	</div> <!-- form-group// -->

	@error('image')
    <div class="alert alert-danger" >{{ $message }}</div>
	@enderror

	<div class="form-group input-group">
    	<div class="input-group-prepend">
	</div> <!-- form-group end.// -->
	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
		 <input name="background_image"  class="form-control" placeholder="Song Background Cover Photo" type="file">
    </div> <!-- form-group// -->

	@error('background_image')
    <div class="alert alert-danger" >{{ $message }}</div>
	@enderror
	
    <div class="form-group input-group">
	<div class="input-group-prepend">
	</div> <!-- form-group end.// -->
	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
		 <input name="audio"  class="form-control" placeholder="Song Audio " type="file">
    </div> <!-- form-group// -->

	@error('audio')
    <div class="alert alert-danger" >{{ $message }}</div>
	@enderror
                                       
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" style="margin-right:290px; margin-top:10px;"> Register </button>
    </div> <!-- form-group// -->      
                                                           
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
@endsection

