@extends('bootstrap/header')
@section('container')

<h2>Vertical alignment</h2>
<div class="container">
<div class="align-baseline">baseline</div>
<div class="align-top">top</div>
<div class="align-middle">middle</div>
<div class="align-bottom">bottom</div>
<div class="align-text-top">text-top</div>
<div class="align-text-bottom">text-bottom</div>
</div>

<table style="height: 100px;">
    <tbody>
      <tr>
          <h3>Vertical alignment working to baseline</h3>
        <td class="align-baseline">baseline</td>
        <td class="align-top">top</td>
        <td class="align-middle">middle</td>
        <td class="align-bottom">bottom</td>
        <td class="align-text-top">text-top</td>
        <td class="align-text-bottom">text-bottom</td>
      </tr>
    </tbody>
  </table>

  <h1>borders according to postion</h1>
<div class="border" width="150px" height="150px">border</div><br>
<div class="border-top" width="150px" height="150px">border top</div><br>
<div class="border-right" width="150px" height="150px"> border right</div><br>
<div class="border-bottom" width="150px" height="150px">border bottom</div><br>
<div class="border-left" width="150px" height="150px">border left</div><br>

<div class=""><img src="image/image (1).jpg" class="img-fluid border border-primary"  alt="" width="150px" height="150px"></div><br>
<div class="border border-secondary"><img src="image/image (1).jpg" class="img-fluid border border-secondary"  alt=""></div>
<div class="border border-success"><img src="image/image (1).jpg" class="img-fluid"  alt=""></div>
<div class="border border-danger"><img src="image/image (1).jpg" class="img-fluid"  alt=""></div>
<div class="border border-warning"><img src="image/image (1).jpg" class="img-fluid"  alt=""></div>
<div class="border border-info"><img src="image/image (1).jpg" class="img-fluid"  alt=""></div>
<div class="border border-light"><img src="image/image (1).jpg" class="img-fluid"  alt=""></div>
<div class="border border-dark"><img src="image/image (1).jpg" class="img-fluid"  alt=""></div>
<div class="border border-white"><img src="image/image (1).jpg" class="img-fluid"  alt=""></div>

@endsection
