<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="mt-3 mb-3 "id="mydiv"></div>
    <div class="col-md-8 par"id="par"></div>
    <div class="col-md-3 " id="img">
      <img src="/img/user2.jpg" alt="peta tarik"  class="img-thumbnail">
    </div>
    <div class="col-md-8 text-muted"id="camat"></div>
  </div>
  <div class="row">
    
  </div>
</div>
<!-- <div id="mydiv"></div> -->
<!-- Load React. -->
<!-- Note: when deploying, replace "development.js" with "production.min.js". -->
<script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
<!-- Load our React component. -->
<script type="text/babel">
  function Hello() {
    return <h2> Sekapur Sirih </h2>;
  }
  
  ReactDOM.render( <Hello/> , document.getElementById('mydiv'));
  
  function Paragraf() {
    return <p> Selamat Datang di Website Kecamatan Tarik, Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo laboriosam odio cumque quae laudantium. At, necessitatibus voluptates placeat adipisci nam laborum reiciendis cupiditate id deserunt ut animi suscipit dolorem. Fugit, possimus pariatur beatae cumque nisi fuga reprehenderit? Temporibus repellat fuga asperiores harum dolorem suscipit laborum sint dignissimos magni reiciendis doloribus culpa, cupiditate possimus voluptatibus officia blanditiis dolorum iusto porro. Asperiores eum similique ea totam minima recusandae vel alias, labore ratione eius a ipsam quisquam reiciendis voluptatum eveniet nemo quibusdam error accusamus laboriosam! Recusandae cumque ipsum ut? Fugiat, distinctio dolore dolor ducimus suscipit dicta neque ipsam ab, accusamus aspernatur maxime omnis?
    </p>;
  }
  
  ReactDOM.render( <Paragraf/> , document.getElementById('par'));

  function Camat() {
    return <i>Camat Tarik - Iswadi Pribadi S.Sos., M.MT.</i>;
  }
  
  ReactDOM.render( <Camat/> , document.getElementById('camat'));

  
</script>


<?= $this->endSection(); ?>