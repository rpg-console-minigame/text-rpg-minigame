<div class="blur"></div>
<h1 class="page-title">Item Panel</h1>
<div class="item-grid">
    <?php
include_once "models/items.php";
$inventory = array();
if (isset($_COOKIE["inventory"])) {
    $inventory = unserialize($_COOKIE["inventory"]);
}
$contador = 0;
foreach ($inventory as $item) {
    echo "
    <div class=\"item item-" . $item->__getTipo() . "\">
    <h5>" . $item->__getName() . "</h5>
    <h2>" . $item->__getPrecio() . "</h2>
    <div class=\"item-img\"><img src=\"" . $item->__getIcon() . "\"></div>
  </div>
        ";
    $contador++;
}
for ($i=$contador; ($i <= 7 || $i%4 !=0 ); $i++) { 
    echo "<div class=\"item empty\"></div>";
}
?>
</div>



<style type="text/css">
    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    @font-face {
        font-family: "geonms";
        src: url("https://cors-anywhere.herokuapp.com/http://axtn.io/codepen/nms/geonms-webfont.ttf");
    }

    .item-grid .item.empty:after,
    .item-grid .item.item-tech:after,
    .item-grid .item.item-trade:after {
        display: none;
    }

    html,
    body {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    body {
        cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAADb0lEQVRYhcXZQYhVdRTH8c/c0QbLzAmkKVAYF7lqNrZQ2ojMInCiWdQEOrWKIoKkDFJwkbQwUIqMFkErSUNrYTnMKsiN5KKCbFULB2rRhIshs0KnRhf/80bnzf3fe9/4Xn3h8Xj/c+45v/d/9/+//3Ne3/T0tBVQYATb4n0YD+DusP+F3zCDi7gQ7wudJlrVof8QnsOTeLDC7y6sxxY8HmO/4nMcx2zThH0NZ3AQr+IZrG4aPMM8TuFdzNU5Fw0C7sKXmHTn4kSMyYg5VudcJbAfb+F9aQa7zSCORY7+nFNO4Bp8iD3d17WMPZFrTZmxbJH04z3sbBD8Bn7CN9KKvRLj66SV/SgeRl9NnJ2R8yX8WyfwEEZrAv6Bj6Wb/eca303S4prEvRV+o5H74O2D7T/xGHbXJPwUO3CkgTjhcySuOV3juxtP5AQOSt8gxzW8gjc02B5KmMP+iHGtwu8Q7i8T+Jr8ar2O5zG1AmHtTEWs6xn7+tCyROBD0n2S43Wc74K4FucjZo6J0LQocFL+sfeZ7sxcO1MRu4xVoUkRr/GM4xUc7rq0Wxx2a2tqZxxF61QylHE6YWULoilz0nZVxhBGCmzPONyQ9rlecypylbGtwCMZ44+a7XN3yi+Rq4yRApszxm97o6eU7zLjmwtsyBhneiSmjEuZ8Q0F1maMv/dITCe51jY5sP6vFLiasd33H+rI5bpa4HLGONwjMZ3kulzI36BbeySmk1yXCvyQMW7Bxt7oWcLGyFXGxUIqqsvoU33C6RYT8iXBhQLfyxfSk3pT0bUYxLMZ26yYwQWcyTitw4EeCGuxP3KUcQYLrX3wuFTxl/GUVLx3m114OmObD02LB9ZZ1SeXo3isa9JSrKMV9tOhaUlNUtUrGcBHGrQqGjAWsQYy9jm80/pQtBnerAg8ILUq3rayhTMY1x6rEEeq6hYnqv1ZfBYnaxJN4Bz2SUV5HZvC91xcW8Un+OL2gbL222p8oL67QH3rY6u0Cde1Pkjdrpe1LdaySm4ee0PkjpqgfSEg9yRoyleRc9lOkjtu/Y0X1P/c3eAkXoycy6g6D/4jNXL26k1lNxexD0auUpocWM9K9+MJ+c28E+Yj1mjErqRpj7pFq4k+Ll9L55iVHl89aaK30yr4t0tl67Ak+J6w/xkiZqTj3NdW+DfETSswsEsEfaNdAAAAAElFTkSuQmCC"), auto;
    }

    body * {
        font-family: Helvetica, sans-serif;
        font-weight: 400;
    }

    h1,
    h3 {
        font-family: "geonms", Helvetica, sans-serif;
        text-transform: uppercase;
        font-weight: 600;
        color: white;
    }

    h1 {
        font-size: 1.4em;
        letter-spacing: 0.2em;
    }

    h3 {
        letter-spacing: 0.18em;
    }

    h4 {
        color: white;
    }

    .page-title {
        position: absolute;
        top: 0;
        left: 80px;
        margin-top: 40px;
        margin-left: 20px;
    }

    .panel {
        opacity: 0;
        display: none;
        width: 650px;
        background: #2e2224;
        border-top: 5px solid;
        position: relative;
        color: #9a9a9a;
        letter-spacing: 0.1em;
        opacity: 0.95;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    .panel.panel-arma {
        border-color: #ba3935;
    }

    .panel.panel-arma .bar {
        background: #732d2a;
        border-color: #592320;
    }

    .panel.panel-isotope .bar img {
        background: #82423f;
    }

    .panel.panel-isotope .quantity img {
        background-color: #ba3935;
    }

    .panel.panel-oxide {
        border-color: #ffc356;
    }

    .panel.panel-oxide .bar {
        background: #957144;
        border-color: #7c5e39;
    }

    .panel.panel-oxide .bar img {
        background: #a07f55;
    }

    .panel.panel-oxide .quantity img {
        background-color: #ffc356;
    }

    .panel.panel-silicate {
        border-color: #0149a3;
    }

    .panel.panel-silicate .bar {
        background: #1e375e;
        border-color: #152743;
    }

    .panel.panel-silicate .bar img {
        background: #344a6f;
    }

    .panel.panel-silicate .quantity img {
        background-color: #0149a3;
    }

    .panel.panel-neutral {
        border-color: #5fcc93;
    }

    .panel.panel-neutral .bar {
        background: #427058;
        border-color: #355a46;
    }

    .panel.panel-neutral .bar img {
        background: #577f6b;
    }

    .panel.panel-neutral .quantity img {
        background-color: #5fcc93;
    }

    .panel.panel-precious {
        border-color: #6f187e;
    }

    .panel.panel-precious .bar {
        background: #4e1b4e;
        border-color: #331233;
    }

    .panel.panel-precious .bar img {
        background: #613360;
    }

    .panel.panel-precious .quantity img {
        background-color: #6f187e;
    }

    .panel.panel-trade {
        border-color: #007951;
    }

    .panel.panel-trade .bar {
        background: #1f563f;
        border-color: #163c2c;
    }

    .panel.panel-trade .bar img {
        background: #007951;
    }

    .panel.panel-trade .quantity img {
        background-color: #007951;
    }

    .panel.panel-tech {
        border-color: #f4aa1f;
    }

    .panel.panel-tech .bar {
        background: #916622;
        border-color: #74521b;
    }

    .panel.panel-tech .bar img {
        background: #f4aa1f;
    }

    .panel.panel-tech .quantity img {
        background-color: #f4aa1f;
    }

    .bar {
        color: #fff;
        width: 100%;
        height: 63px;
        position: relative;
        padding-top: 7px;
        border-top: 3px solid;
    }

    .bar h1,
    .bar h4 {
        margin: 0 0 0 70px;
    }

    .bar h4 {
        font-weight: 300;
        margin-top: 3px;
    }

    .bar img {
        position: absolute;
        top: 0;
        height: 58px;
    }

    .bar:after {
        content: "";
        width: 3px;
        height: 3px;
        border-radius: 50%;
        background-color: white;
        position: absolute;
        top: 5px;
        right: 7px;
    }

    .description {
        padding: 10px 35px;
    }

    .description hr {
        border-color: #9a9a9a;
    }

    .quantity {
        position: relative;
        padding: 0 55px;
        width: 100%;
        margin-left: 24px;
    }

    .quantity h4,
    .quantity h5 {
        margin: 0;
    }

    .quantity img {
        height: 38px;
        position: absolute;
        top: 0;
        left: 0;
    }

    .quantity .inv-bar {
        margin-top: 2px;
        margin-left: -5px;
        position: relative;
        width: 100%;
        height: 3px;
        background-color: white;
        z-index: 1;
    }

    .quantity .inv-bar h1 {
        font-family: Helvetica, sans-serif;
        font-weight: 400;
        position: absolute;
        right: 0;
        bottom: -10px;
        text-transform: none;
    }

    .price {
        position: relative;
        margin-left: 12px;
    }

    .price h4 {
        margin-bottom: 0;
    }

    .price h4 span {
        color: #f4aa1f;
    }

    .price p {
        margin-top: 0;
    }

    .price .u {
        position: absolute;
        top: -4px;
        right: 40px;
        color: white;
        font-size: 1.5em;
        margin: 0;
    }

    .price .u div {
        position: relative;
        display: inline-block;
        font-weight: 300;
        border: 2px solid #9a9a9a;
        border-radius: 50%;
        width: 1.45em;
        text-align: center;
        padding-left: 1px;
        padding-top: 1px;
    }

    .price .u div:before,
    .price .u div:after {
        content: "";
        width: 20px;
        height: 2px;
        background-color: white;
        position: absolute;
        left: 5px;
    }

    .price .u div:before {
        top: 10px;
    }

    .price .u div:after {
        top: 16px;
    }

    .price .u div:not(:first-child) {
        margin-left: -7px;
    }

    .legend {
        margin-left: 23px;
    }

    .legend :first-child h3 {
        margin-top: 0;
    }

    .legend h3 {
        display: inline;
        font-family: "geonms", Helvetica, sans-serif;
        text-transform: uppercase;
        margin-bottom: 0;
    }

    .legend p {
        margin-top: 0;
        margin-bottom: 20px;
    }

    .legend div>div {
        display: inline-block;
        color: white;
        font-weight: 400;
        border: 2px solid white;
        border-radius: 4px;
        text-align: center;
        font-size: 1.2em;
        line-height: 1;
        padding: 0 5px 2px 7px;
        margin-bottom: 2px;
    }

    .legend> :not(:first-child) {
        margin-top: 30px;
    }

    .item-grid {
        position: absolute;
        left: 100px;
        top: 50%;
        transform: translateY(-50%);
        width: 484px;
    }

    .item-grid .item {
        position: relative;
        background: white;
        width: 112px;
        height: 112px;
        padding: 4px;
        float: left;
        overflow: hidden;
    }

    .item-grid .item:not(:nth-child(4n+1)) {
        margin-left: 12px;
    }

    .item-grid .item:nth-child(n+5) {
        margin-top: 12px;
    }

    .item-grid .item .item-img {
        position: absolute;
        bottom: 4px;
        width: 104px;
    }

    .item-grid .item .item-img img {
        width: 88px;
        display: block;
        margin: auto;
    }

    .item-grid .item h2,
    .item-grid .item h5 {
        margin: 0;
    }

    .item-grid .item h5 {
        font-weight: 600;
        text-align: center;
    }

    .item-grid .item h2 {
        color: white;
        position: absolute;
        bottom: 11px;
        left: 9px;
        z-index: 1;
    }

    .item-grid .item.item-arma .item-img {
        background: #ba3935;
    }

    .item-grid .item.item-oxide .item-img {
        background: #ffc356;
    }

    .item-grid .item.item-neutral .item-img {
        background: #5fcc93;
    }

    .item-grid .item.item-silicate .item-img {
        background: #0149a3;
    }

    .item-grid .item.item-precious .item-img {
        background: #6f187e;
    }

    .item-grid .item.item-trade .item-img {
        background: #007951;
    }

    .item-grid .item.item-tech .item-img {
        background: #f4aa1f;
    }

    .item-grid .item.item-tech:before {
        content: "";
        height: 20px;
        width: 4px;
        background-color: white;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 1;
    }

    .item-grid .item.item-tech h5 {
        white-space: nowrap;
        overflow: hidden;
        width: 100%;
        position: relative;
        left: 0%;
        -webkit-animation-name: scrolling-text;
        animation-name: scrolling-text;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-duration: 4s;
        animation-duration: 4s;
        -webkit-animation-delay: 1.8s;
        animation-delay: 1.8s;
        -webkit-animation-timing-function: ease;
        animation-timing-function: ease;
    }

    .item-grid .item:after {
        content: "";
        width: 98px;
        height: 5px;
        background: white;
        position: absolute;
        bottom: 7px;
        left: 7px;
    }

    .item-grid .item.empty {
        background: rgba(255, 255, 255, 0.25);
    }

    @-webkit-keyframes scrolling-text {
        50% {
            left: -27%;
            width: 130%;
        }

        60% {
            left: 0%;
            width: 100%;
        }
    }

    @keyframes scrolling-text {
        50% {
            left: -27%;
            width: 130%;
        }

        60% {
            left: 0%;
            width: 100%;
        }
    }

    img.axtn {
        width: 100px;
        position: absolute;
        right: 10px;
        bottom: 10px;
    }

    .blur {
        z-index: 0;
        width: 100%;
        height: 100%;
        background-image: url("https://media.giphy.com/media/xUNd9ZLpLVKk3nQZeU/giphy.gif");
        background-size: cover;
        background-repeat: no-repeat;
        filter: blur(5px);
    }
</style>