<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Playing with stir</title>
        <link rel='stylesheet' href='test.css' />
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
    </body>
</html>
