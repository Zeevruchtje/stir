<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Playing with stir</title>
        <!--<link rel='stylesheet' href='test.css' />-->
        <link rel='stylesheet' href='css/stir.css' />
        <style media="screen">
            html {
                font-family: Avenir;
                color: #121212;
            }

            .block:nth-child(odd) {
                background-color: #aee7d2;
            }

            .high-col {
                padding-bottom: 20px;
            }

            .abs-centering-example {
                height: 340px;
                background-color: #fff;
            }

            .abs-centering-example div {
                background-color: #aee7d2;
            }
            [class*="overlay"] {
                background-color: #db9fe6;
            }
            .rel-height {
                background-color:#efa8ab;
            }

            .rel-height > * {
                background-color: #f5db92;
            }
        </style>
    </head>
    <body>
        <div class="block">
            <div class="container">
                <h1>Just Stirry Things</h1>
            </div>
        </div>
        <div class="block">
            <div class="container textual">
                <h2>Grid met container & clearfixes</h2>
                <div class="grid clear-3">
                    <?php for($i = 0; $i < 6; $i++) : ?>
                        <div class="col-3<?php echo ($i % 3 == 1 ? ' high-col' : ''); ?>">
                            Ik ben een kolom
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container textual-top">
                <h2>Grid zonder container & clearfixes</h2>
            </div>
            <div class='grid clear-3'>
                <?php for($i = 0; $i < 6; $i++) : ?>
                    <div class="col-3<?php echo ($i % 3 == 1 ? ' high-col' : ''); ?>">
                        Ik ben een kolom
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="block">
            <div class="container textual-top">
                <h2>Auto cols</h2>
            </div>
            <div class='grid'>
                <?php for($i = 0; $i < 6; $i++) : ?>
                    <div class="col-a">
                        Ik ben een kolom
                    </div>
                <?php endfor; ?>
            </div>

            <div class="grid auto-cols">
                <div class="col mcol-f">

                </div>
            </div>

            <div class="grid auto-cols">
                <div class="col-f mcol">

                </div>
            </div>

        </div>
        <div class="block">
            <div class="container textual-top">
                <h2>Media based floats</h2>
            </div>
            <div class='grid'>
                <div class="col-2 right lleft mright sleft tright">
                    Ik ben een kolom en ik ga heen en weer als je het venster resize
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container textual-top">
                <h2>Autofill col</h2>
            </div>
            <div class='container'>
                <div class="grid">
                    <?php for($i = 0; $i < 6; $i++) : ?>
                        <div class="col-a">
                            Auto col :)
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container textual-top">
                <h2>Absolute centering</h2>
                <div class="abs-centering-example rel">
                    <div class="abs-hctr">
                        Jeej ik sta in het midden
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container textual-top">
                <h2>Flexy flex</h2>
                <div class="grid fx-grid">
                    <div class="col-3">Flex</div>
                    <div class="col-3">Flex</div>
                    <div class="col-3">Flex</div>
                    <div class="col-3">Flex</div>
                    <div class="col-3">Flex</div>
                    <div class="col-3">Flex</div>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container textual">
                <h2>Auto cols naar harde cols, vanaf col-a</h2>
                <div class="grid">
                    <div class="col-a lcol-f mcol-a scol-4">
                        >:C
                    </div>
                    <div class="col-a lcol-2 mcol-a scol-4">
                        >:C
                    </div>
                    <div class="col-a lcol-2 mcol-a scol-4">
                        >:C
                    </div>
                </div>
                <h2>Vanaf col-f</h2>
                <div class="grid">
                    <div class="col-f mcol-a tcol-4">
                        >:C
                    </div>
                    <div class="col-f mcol-a tcol-4">
                        >:C
                    </div>
                    <div class="col-f mcol-a tcol-4">
                        >:C
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container textual">
                <h2>Grid buiten container</h2>
                <div class="grid20">
                    <div class="col-3">
                        :)
                    </div>
                    <div class="col-3">
                        :)
                    </div>
                    <div class="col-3">
                        :)
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container textual">
                <h2>Overlay testjes</h2>
                <div class="grid">
                    <div class="col-3 rel">
                        <div class="overlay">
                            Hey
                        </div>
                        -<br>
                        -<br>
                        -<br>
                        -<br>
                        -
                    </div>
                    <div class="col-3 rel">
                        <div class="inner-overlay">
                            Hey
                        </div>
                        -<br>
                        -<br>
                        -<br>
                        -<br>
                        -
                    </div>
                    <div class="col-3">
                        <div class="grid20">
                            <div class="col-1 rel">
                                asdf
                                <div class="inner-overlay">
                                    Hey
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container trim">
                <h2>Rel heights</h2>
                <div class="grid">
                    <div class="col-3">
                        <div class="rel-height">
                            <div class="col-f">
                                Omg ben vierkant
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rel-height">
                            <div class="col-f">
                                Omg ben vierkant
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rel-height">
                            <div class="col-f">
                                Omg ben vierkant
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
