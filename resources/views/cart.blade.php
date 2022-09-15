@extends('layout')
@section('title')
    Cart
@endsection
@section('content')
    <main class="text-white text-center mt-5 ">

        <div id="panier"
             class="container justify-content-center  bg-dark border-primary border-top   ">
            <div class="row">
                <div class="col">
                    <h5 class="border-bottom border-primary mb-3">Produit</h5>
                    <h6 class="border-bottom border-primary mb-3"></h6>
                </div>
                <div class="col">
                    <h5 class="border-bottom border-primary mb-3">prix unitaire</h5>
                    <h6 class="border-bottom border-primary mb-3"></h6>
                </div>
                <div class="col">
                    <h5 class="border-bottom border-primary mb-3">Quantité</h5>
                    <h6 class="border-bottom border-primary mb-3"></h6>
                    <h5 class="mb-3">Total HT </h5>
                    <h5 class="mb-3">TVA</h5>
                    <h5 class="mb-3">Total TTC </h5>
                </div>
                <div class="col">
                    <h5 class="border-bottom border-primary mb-3">Total</h5>
                    <h6 class="border-bottom border-primary mb-3"></h6>
                    <h6 class="border-bottom border-primary mb-3"></h6>
                    <h6 class="border-bottom border-primary mb-3"></h6>
                    <h6 class="border-bottom border-primary mb-3"></h6>
                </div>
            </div>
        </div>


        <form action="checkout.php" class="container  d-flex justify-content-center bg-dark mb-0 " method="post">
            <label class="p-2" for="deliveryboy">Choix du transporteur </label>
            <select name="deliveryboy" class="me-5 rounded-pill" style="width: 50%">
                <option value="LA poste">LA poste</option>
                <option value="Amazon">Amazon</option>
                <option value="dhl">DHL</option>
                <option value="chronopost">Chronopost</option>
            </select>

            <!--        <input type="hidden" name="" value="">-->
            <input style="width: 200px" class="btn btn-primary" type="submit" value="Valider">

        </form>

        <div class="container bg-dark d-flex justify-content-end ">


            <div class="col-4 mt-3">
                <h5 class="mb-3">Total HT </h5>
                <h5 class="mb-3">
                    TVA </h5>
            </div>

        </div>
        <form action="checkout.php" method="post">
            <input type="hidden" name="product_id" value="">

        </form>

        </div>
    </main>

@endsection

@section('footer')
@endsection
