<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="mt-3 mb-3 "id="mydiv"></div>
  <div class="row d-flex justify-content-center">
    <div class="col-md-8 par"id="par">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63299.48912555747!2d112.47276587618029!3d-7.441107527782423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780c0e8eb19677%3A0x4027a76e3531c70!2sTarik%2C%20Sidoarjo%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1639288898019!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
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
    return <h2> Peta Kecamatan Tarik </h2>;
  }
  
  ReactDOM.render( <Hello/> , document.getElementById('mydiv'));
</script>


<?= $this->endSection(); ?>