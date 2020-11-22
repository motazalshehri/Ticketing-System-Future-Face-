<?php
if(isset($_GET['error'])){
  echo ' <script> alert("' . $_GET['error'] . '");</script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Complaint System Future Face</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="back">
<div class="container-fluid" style="margin-top:50px">

</div>
<div class="container" style="background-image: image()">
</div>
<div class="back">
  <script data-who='💎 Made with naker.io 💎' src='https://d23jutsnau9x47.cloudfront.net/back/v1.0.1/viewer.js'
          data-back='{"particle":{"direction1":{"x":100,"y":100,"z":100},"direction2":{"x":-100,"y":-100,"z":-100},"life":0.7,"power":0.005,"texture":"https://res.cloudinary.com/naker-io/image/upload/v1566560053/circle_04.png","number":224,"colorStart":[255,234,0,1],"colorEnd":[245,246,215,1],"sizeStart":0.31,"sizeEnd":0.62},"environment":{"gradient":"horizontal","sensitivity":1,"colorStart":[21,24,25,1],"colorEnd":[95,100,118,1]}}'></script>
</div>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <header class="card-header">

          <h4 class="card-title mt-2">Ticketing System</h4>
        </header>
        <article class="card-body">
			<img   style="display: block; margin-left: auto; margin-right: auto; width: 50%;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAA2FBMVEU0NDL////0kiMwMC4dHRobGxgpKSckJCIuLiwZGRbm5ubz8/ISEg6srKwgIB0jIyGKiohjY2KysrJRUVDIyMi/v789PTsVFREAAADt7exKSkn5+fna2tqmpqbT09NbW1qPj46BgYBEREIsMTJ6enn9lyOXl5Zra2lhYV85OThOTk2VlZUgKjAcKjMtMTLukCZycnJ7VSyrbCLMgCjjiCU6NCssMiyIYjItLTPWiy+bYyjMgTFNPixkSytiSzK8eTJGPzKQYStYSTR5WjZiRSeucjJrUDWkbzlc0XgvAAAKgElEQVR4nO2ceZubNhDGwQgJjA22udYGfB+xd7PdNEmvpDnapv3+36jcQiDW9gbszT7z+8+AjF50zYwGBAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC4CpKiKNK1K9EaGPWk2cN6N1FVfO26tAHWB1NPTOhu9ZfXkO48kxczfnGtiCyRZUSuXaVmccsCxa58tJCEia6TH6Ox8aAsUNTQsUKSOe/bdn+BlUtU8TtxvYpC/6hClBbyZs9fIl5XBIrro9VGWtah1UtU8rswbDrBzLCrKrP59mgTUoXi829D5Gd1XbhxbSV8wvxBFU6esHgqmBiGgaXSQUNvZfKSu2lVvR5zP111ez2VLv4Ehb9dOa0AX6GC1F5YyMgPGHJUCDG1xgi9iqap0dakPVzS5d12ZFvh5LVv2qjKFTIjShpOu+FkMrYO6e1w4I/Dp9ANUL1CZTEdh4W6IyE9Zth+eJ3mL/JuLyHhdpoPi2mmRZ7RsSL6a7fRrk8V3rgJUXXwPLvfMqmtml1m66zCvatGRHU1RumxcdqKveyibSqFLAtKQqz4zxSltCJ3zSZNjlyhOE7x1eIiOTJYhUmjUYXdhDUuKBQHmFXopS1fWXqj6/BBKx8WF3obCnN2SkFhujZShQvMKMwuk4sK08eSKxSd6LHgReVW4eOSltUFObxLc63IUdgnBYWpBUcVDrgKRVJUmHTlgkIzUmhU2yr6qzFH4NPm6JMVhi1QUKiepjAcr0cUSmblTuGfGwFXoDhtzJTgKSRPUCgdbUNlWLze8+1+EI4HhWraCYppM0XaUsiMwxMVRpedrtAaTHqyTkh4o212LOiFa4TUy5u039RIrCrsy8LZCjXzrDa8ye0ZOTOp/BshihSRm2xY+sdduHMVzpeTCBw9u9MVDs2QCYrW6NMVUvMpv2Tg6qp8WAd29s+a27jCBZEi4qOnK5woeaEnKJQm2aHbwCr1pp7QDDJb9ZQzFNIJ4QkKlQexDq/5NnxmCq2mzJrnqnDsNL9aXEUhs0bmaNMtbsGmuYZCac9KC+2AYD3DJZeyFYWL7OjYbVNhwf2w+oOhENkB9a23uls1ppCOD488rvBA60Nye6TbO1Uhyv1hQS6EJrkqV29+fnPXlELpkNdm24us5ps6hQM1XBCV+DEUIq9DPS50XCF1tceSkcpSDHTLcS3u3m42m7fS2c3IVyjo1GkbmZI0GXjMZTJ1ebaz5WwdEPaxiNuwimZuc9YrFIz8oLd1XISQSoYjTdQqCn/7ddMJeff+viGFbLihQNKG09LR2+ioWrXijyok28Jl4+l0mv5HxfC++zlW2Hn3SzMKOc5cSuzjk7JXFzvKnA2ClL1Qp5Dn3OR/WGSVtGFn8/Z1IwoFNOLeOKmsIC1LRxM7OfcUSozleoX8KAYnmP7b76nEP86bbmhEmFVYOMEQJCEYVOrFia8jOdVARUQUpyoOU8aoxiZPom0IZVYfEomdj2cNRdrfSgorIhKB2aPV2c51mxRW9rznsk6WRz2Xz7oNilAe1WGf2HPWi9eJxM3b8xqRZNNiWaGg7spDxHbok9WL3djKhEvuoNSMXpBtE9BNoJJjJLnr0p0sgbvsr94l/fTP8+ZTeW5bljWaTypnlJ4ZTNMKe/5oLTM7/LoT+HH/8qaLgqeDe7uRn/Y7ze/venRSJIe+NZ1ao0XFJsOuGfjpncbTrYP4ds3qU9JPz51s4i0Rg2sJSgQh4pgHhyDZKMfao5M43ohgyyqGjPDSPAhGWFhhS+gI8Xdf4j9bmhMpvKLebnv9OemnX05TdiqZD/8cCn1J5pozp9MfiXSyefdyFd7/m3bTc223H4fVT7HCN0/xo34Mkm66+fZyu+nqj7ibnrno/0jc/51MNS+3lwpfkkW//exCrLvu3tnLjQaNTiJZEd+3fBd9P7cSe1abzslFszXTyfRjqzfBAuN2aMtLSkwV/tXmgkiGJYfueB5cg1xAofKq4s1dshGltJe2qBBX/fjZJbtp4iK2ONOQfkXgRdvwY+urBeLkoza1IX0C93/GCn9qb8UvjEIt2B0mrxZ9/5JNuPoa26W/t2e10TB8VyVRQB8TGnIIf2FCMK59MSW6nPBOS2FBfMqO2t3nuJN+bk8hjc2tS8YM1tXlcLENgu1gt3QrMY84o9Nch+dvH5YuU1ZBxiwsuF3MCDqWlngXB6M2X9vrpXSiOTBPXJIXVmGS1eyhWsqQVXc2zfdb04CvgtZWNrY9a6c+3pCJWdrmckgVLmU9IaqStKwE530mhxKVQpM2qjnhm9VYMOXuazLRtOg8UYVWRrTjrvN2H9a0rmplkyBINyareW3zR6bm10nE9MNFFBbrWtxYK7DLhpvKiWrHgXCXtz2yrU3DuE8Cppu/W3QPOQq7cl3GQbqBLLi8DYL43+acE3FmHZ/Xbzstr4ZchVFrONyapunPvHc6RM2IdnL4xbSaRvwlbcIW1wq+QjXdMtWmo+1gQFPTMmunx1iy3W48ZqMt0MLmz+hht6a/KnsoCeko7HxpUSBPYZS9JDndwFSRgcOVW+/l13hxIndh43S80FVVlnd2N5qF8lwTzUGKgns095qbP3uXRKE2H87ctvhehV68MEqIuvpKnkIpOgKzEzlNX6ZQ9Eggvs2Oz3BSLk/a59169U+6f9huOJgq9BeDiDVNEole2UOu4ZjDfO2IVhKSCyxlVOqZIP8GG0jdvxrkCjn+2P2nRN/mW6tNWFwPezgi10fkw6BvxS+VUEKFBVu9tK2WZzb0Z/PRlBmsD9XZ9H0isPOu5YB+QSEz4WEc8JLuQ4WFYViaIgl3Bz+mul6koeBO51PLodIahWTHr22kMM8nGZdSRnG9wn3lxqtvyTTza9vRbr5CZVdTU0ZhOb+iXuG2msae7Dpt/mt3EAp1Cjkvi3xHG/oPvODd3X+dTad9gXyFbKqQ1vVzwY+OQ7U8csehyfDg9GqcxDvnX+cCGzJchfm0L2pzR0fyTW5ohwqlWa6gNJcWivl2sDANOTQZHvtwxUW2Y7gKaWKVGScYoqJCAdHWZd3bQrzgppBX+pQMgAbhKlTzXpk0EquQNpXoK/ETkDCKmor6XJ6TTy0KWh6u+nIxXyFNjovMAML0Usa18oIJRnhy2403O2genDfHskGILhs7u8kX15pSWGgle74YBNTfjTPue0wqmKfFU2hXLy0y01EQ2MkHSC66EVKGP5fyHdlMIX0zpkhktqiVL1YUij0nhfX2VzKiyIJzKk72I/yF9JrdlM5/RYW45s2QNNzEeQM4XTr4+ZreNT8pQocOY5fqvFYS+7mZZgzLSlIVCq4GqcTbq34+Rs5qxPoWxKxklvrDwoShGAHTk+k3Q9xF2bSZX3OiCTECf6yNu1bJQJHU2YgGTb1uf6ayyxohNCreDYovV8g7Oxfp+benfLaiXTCSkazqlXpIhiyYD6Hnvx5OsMzJX8BId2YP64fZHrHdUNHRfrYOC75akovndpxJtPv0yN5TaJHVfTLtSEEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAeHn8D5g0vfD5OgNlAAAAAElFTkSuQmCC" alt="">
      <form name="f1" action = "authentication.php"  method = "POST">        <div class="form-group">
              <label for="email">Email</label>
              <input #userID class="form-control" type="text" placeholder="Please Enter Your Email " name="email" required >
            </div> <!-- form-group end.// -->
            <div class="form-group">
              <label for="password">Password</label>
              <input  type="password" class="form-control" placeholder="Please Enter Your Password" name='password' required>
              <div>
          </div>


            </div>
            <div class="form-group">
              <button type="submit" value='submit' class="btn btn-primary btn-block" > Login  </button>
              </form>

            </div> <!-- form-group// -->
          </post>
        </article> <!-- card-body end .// -->

      </div> <!-- card.// -->
    </div> <!-- col.//-->

  </div> <!-- row.//-->


</div>

<br><br>
</body>
<!--container end.//-->
</html>
