#!/bin/bash
sass scss/stir.scss:css/stir.css --style expanded --sourcemap=none
sass scss/stir.scss:css/stir.min.css --style compressed --sourcemap=none
