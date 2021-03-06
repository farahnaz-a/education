<style>
    @import url("https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800&amp;display=swap");

*,
*::after,
*::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    padding: 0
}

body {
    font-size: 15px;
    line-height: 1.75;
    font-weight: 400;
    font-family: "Heebo", sans-serif;
    color: #666666;
    outline: none;
    visibility: visible;
    overflow-X: hidden;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: ""
}

body[dir="rtl"] {
    text-align: right
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Heebo", sans-serif;
    color: #072f60;
    font-weight: 600;
    margin-top: 0;
    line-height: 1.5;
    margin-bottom: 0
}

h1 {
    font-size: 36px
}

@media only screen and (max-width: 767px) {
    h1 {
        font-size: 30px
    }
}

h2 {
    font-size: 30px
}

@media only screen and (max-width: 767px) {
    h2 {
        font-size: 24px
    }
}

h3 {
    font-size: 24px
}

@media only screen and (max-width: 767px) {
    h3 {
        font-size: 20px
    }
}

h4 {
    font-size: 18px
}

h5 {
    font-size: 16px
}

h6 {
    font-size: 14px
}

p {
    margin-bottom: 0
}

a,
button {
    color: inherit;
    display: inline-block;
    line-height: inherit;
    text-decoration: none;
    cursor: pointer
}

a,
button,
img,
input {
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    outline: 0
}

a:focus,
button:focus,
img:focus,
input:focus {
    outline: 0
}

a:focus {
    color: inherit;
    outline: none;
    text-decoration: none
}

a:hover {
    text-decoration: none;
    color: #3bbca7
}

ul,
ol {
    padding: 0;
    list-style: none;
    margin: 0
}

button,
input[type="submit"] {
    cursor: pointer
}

img {
    max-width: 100%
}

input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
    opacity: 1
}

input:-moz-placeholder,
textarea:-moz-placeholder {
    opacity: 1
}

input::-moz-placeholder,
textarea::-moz-placeholder {
    opacity: 1
}

input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
    opacity: 1
}

.section,
.main-wrapper {
    float: left;
    width: 100%
}

@media only screen and (min-width: 1500px) {
    .container {
        max-width: 1290px
    }
}

.tab-content {
    width: 100%
}

.tab-content .tab-pane {
    display: block;
    height: 0;
    max-width: 100%;
    visibility: hidden;
    overflow: hidden;
    opacity: 0
}

.tab-content .tab-pane.active {
    height: auto;
    visibility: visible;
    opacity: 1;
    overflow: visible;
    -webkit-animation: up 0.7s ease-out;
    animation: up 0.7s ease-out
}

@-webkit-keyframes up {
    0% {
        opacity: 0;
        -webkit-transform: translateY(50px);
        transform: translateY(50px)
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        transform: translateY(0px)
    }
}

@keyframes up {
    0% {
        opacity: 0;
        -webkit-transform: translateY(50px);
        transform: translateY(50px)
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        transform: translateY(0px)
    }
}

.section-padding {
    padding-top: 120px;
    padding-bottom: 120px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .section-padding {
        padding-top: 100px;
        padding-bottom: 100px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .section-padding {
        padding-top: 80px;
        padding-bottom: 80px
    }
}

@media only screen and (max-width: 767px) {
    .section-padding {
        padding-top: 60px;
        padding-bottom: 60px
    }
}

.section-padding-02 {
    padding-top: 120px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .section-padding-02 {
        padding-top: 100px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .section-padding-02 {
        padding-top: 80px
    }
}

@media only screen and (max-width: 767px) {
    .section-padding-02 {
        padding-top: 60px
    }
}

.bg-color-1 {
    background-color: #fdfaf1
}

.bg-color-2 {
    background-color: #f6f7f9
}

.bg-primary {
    background-color: #3bbca7 !important
}

.border-bottom {
    border-bottom: 1px solid #ebebeb !important
}

.section-title .title {
    font-size: 36px;
    font-weight: 600;
    color: #072f60;
    line-height: 1.2;
    margin-top: -8px
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .section-title .title {
        font-size: 30px
    }
}

@media only screen and (max-width: 575px) {
    .section-title .title {
        font-size: 24px
    }
}

.section-title .title span {
    position: relative;
    z-index: 1
}

.section-title .title span::before {
    position: absolute;
    content: '';
    width: 103%;
    height: 22px;
    background-color: #ffd24d;
    border-radius: 50px;
    z-index: -1;
    top: 12px;
    left: -5px
}

@media only screen and (max-width: 575px) {
    .section-title .title span::before {
        height: 15px
    }
}

.section-title p {
    font-size: 24px;
    font-weight: 400;
    padding-top: 10px
}

@media only screen and (max-width: 767px) {
    .section-title p {
        font-size: 20px
    }
}

.swiper-button-next,
.swiper-button-prev {
    border-radius: 50%;
    background-color: #ebebeb;
    width: 48px;
    height: 48px;
    line-height: 48px;
    text-align: center;
    padding: 0;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    outline: none
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {

    .swiper-button-next,
    .swiper-button-prev {
        width: 35px;
        height: 35px;
        line-height: 35px
    }
}

.swiper-button-next::after,
.swiper-button-prev::after {
    font-size: 16px;
    font-weight: 700;
    color: #072f60;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 14px
    }
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
    background-color: #3bbca7
}

.swiper-button-next:hover::after,
.swiper-button-prev:hover::after {
    color: #ffffff
}

.swiper-button-next {
    right: -48px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .swiper-button-next {
        right: -25px
    }
}

.swiper-button-prev {
    left: -48px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .swiper-button-prev {
        left: -25px
    }
}

.swiper-pagination .swiper-pagination-bullet {
    border-radius: 50%;
    background-color: #e1e1e1;
    width: 13px;
    height: 13px;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    opacity: 1;
    outline: none
}

.swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: #3bbca7
}

.page-pagination {
    margin-top: 60px
}

.page-pagination .pagination li a {
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    border-radius: 50%;
    font-size: 14px;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.page-pagination .pagination li a.active {
    background-color: #3bbca7;
    color: #ffffff
}

.preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #ffffff;
    z-index: 9999
}

.loader {
    display: block;
    position: relative;
    left: 50%;
    top: 50%;
    width: 100px;
    height: 100px;
    margin: -50px 0 0 -50px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #072f60;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite
}

.loader::before {
    content: "";
    position: absolute;
    top: 5px;
    left: 5px;
    right: 5px;
    bottom: 5px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #3bbca7;
    -webkit-animation: spin 3s linear infinite;
    animation: spin 3s linear infinite
}

.loader:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #072f60;
    -webkit-animation: spin 1.5s linear infinite;
    animation: spin 1.5s linear infinite
}

@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

@keyframes spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

.single-form {
    margin-top: 30px
}

label {
    display: block;
    line-height: 1;
    margin-bottom: 10px;
    font-weight: 400;
    text-transform: capitalize
}

.form-control {
    border: 1px solid transparent;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #666666;
    border-radius: 0;
    background-color: #f6f7f9;
    margin-bottom: 0;
    padding: 5px 20px;
    width: 100%;
    height: 55px;
    font-size: 14px;
    font-weight: 400;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.form-control:focus {
    outline: none;
    border-color: #3bbca7;
    -webkit-box-shadow: none;
    box-shadow: none;
    background-color: #f6f7f9;
    color: #666666
}

.form-control::-webkit-input-placeholder {
    opacity: 1
}

.form-control:-moz-placeholder {
    opacity: 1
}

.form-control::-moz-placeholder {
    opacity: 1
}

.form-control:-ms-input-placeholder {
    opacity: 1
}

textarea.form-control {
    height: 135px;
    padding-top: 15px;
    resize: none
}

.form-check label {
    margin-bottom: 0
}

.form-check-input {
    margin-top: 0
}

.form-check-input:focus,
.form-check-input:active {
    -webkit-box-shadow: none;
    box-shadow: none
}

.form-check-input:checked {
    background-color: #072f60;
    border-color: #072f60
}

.btn-margin {
    margin-top: 40px
}

.btn-wrap {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: -5px
}

.btn-wrap .btn {
    margin: 5px
}

.btn {
    display: inline-block;
    position: relative;
    overflow: hidden;
    background-color: transparent;
    border-color: transparent;
    color: #666666;
    border-radius: 4px;
    font-size: 16px;
    font-weight: 700;
    height: 50px;
    line-height: 50px;
    padding: 0px 20px;
    height: 50px;
    border-width: 0;
    border-style: solid;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    cursor: pointer
}

@media only screen and (max-width: 575px) {
    .btn {
        height: 45px;
        line-height: 45px;
        font-size: 14px
    }
}

.btn:focus,
.btn:focus:active {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn:hover {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-group {
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

.btn-group .btn {
    border-radius: 0
}

.btn-group .btn:first-child {
    border-radius: 4px 0 0 4px
}

.btn-group .btn:last-child {
    border-radius: 0 4px 4px 0
}

.btn-round {
    border-radius: 100px
}

.btn-square {
    border-radius: 0
}

[class*="btn-icon-"] i {
    position: absolute;
    top: 0;
    width: 60px;
    height: 60px;
    line-height: 28px;
    text-align: center;
    padding: 15px;
    background-color: rgba(0, 0, 0, 0.1)
}

.btn-icon-left {
    padding-left: 69px
}

.btn-icon-left i {
    left: 0;
    right: auto
}

.btn-icon-right {
    padding-right: 69px
}

.btn-icon-right i {
    left: auto;
    right: 0
}

.btn-box {
    width: 50px;
    padding: 10px;
    text-align: center;
    -webkit-box-flex: 1;
    -webkit-flex: 1 0 50px;
    -ms-flex: 1 0 50px;
    flex: 1 0 50px
}

.btn-box i {
    display: block;
    line-height: 24px
}

.btn-close:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-primary {
    background-color: #3bbca7;
    border-color: #3bbca7;
    color: #ffffff
}

.btn-primary:active,
.btn-primary:focus,
.btn-primary:hover {
    background-color: #3bbca7;
    border-color: #3bbca7
}

.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    color: #ffffff
}

.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:hover {
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-success {
    background-color: #4CAF50;
    border-color: #4CAF50;
    color: #ffffff
}

.btn-success:active,
.btn-success:focus,
.btn-success:hover {
    background-color: #4CAF50;
    border-color: #4CAF50
}

.btn-danger {
    background-color: #F44336;
    border-color: #F44336;
    color: #ffffff
}

.btn-danger:active,
.btn-danger:focus,
.btn-danger:hover {
    background-color: #F44336;
    border-color: #F44336
}

.btn-warning {
    background-color: #FFC107;
    border-color: #FFC107;
    color: #072f60
}

.btn-warning:active,
.btn-warning:focus,
.btn-warning:hover {
    background-color: #FFC107;
    border-color: #FFC107
}

.btn-info {
    background-color: #17a2b8;
    border-color: #17a2b8;
    color: #ffffff
}

.btn-info:active,
.btn-info:focus,
.btn-info:hover {
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-light {
    background-color: #f8f9fa;
    border-color: #f8f9fa;
    color: #072f60
}

.btn-light:active,
.btn-light:focus,
.btn-light:hover {
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-dark {
    background-color: #343a40;
    border-color: #343a40;
    color: #ffffff
}

.btn-dark:active,
.btn-dark:focus,
.btn-dark:hover {
    background-color: #343a40;
    border-color: #343a40
}

.btn-white {
    background-color: #ffffff;
    border-color: #ffffff;
    color: #072f60;
    -webkit-box-shadow: 11px 10px 38px 0 rgba(46, 63, 99, 0.15);
    box-shadow: 11px 10px 38px 0 rgba(46, 63, 99, 0.15)
}

.btn-white:active,
.btn-white:focus,
.btn-white:hover {
    background-color: #ffffff;
    border-color: #ffffff
}

.btn-heading-color {
    background-color: #072f60;
    border-color: #072f60;
    color: #ffffff
}

.btn-heading-color:active,
.btn-heading-color:focus,
.btn-heading-color:hover {
    background-color: #072f60;
    border-color: #072f60
}

[class*="btn-outline-"] {
    border: 1px solid transparent
}

.btn-outline-primary {
    border-color: #3bbca7;
    color: #3bbca7
}

.btn-outline-primary:hover {
    background-color: #3bbca7;
    border-color: #3bbca7;
    color: #ffffff
}

.btn-outline-secondary {
    border-color: #6c757d;
    color: #6c757d
}

.btn-outline-secondary:hover {
    background-color: #6c757d;
    border-color: #6c757d;
    color: #ffffff
}

.btn-outline-success {
    border-color: #4CAF50;
    color: #4CAF50
}

.btn-outline-success:hover {
    background-color: #4CAF50;
    border-color: #4CAF50;
    color: #ffffff
}

.btn-outline-danger {
    border-color: #F44336;
    color: #F44336
}

.btn-outline-danger:hover {
    background-color: #F44336;
    border-color: #F44336;
    color: #ffffff
}

.btn-outline-warning {
    border-color: #FFC107;
    color: #FFC107
}

.btn-outline-warning:hover {
    background-color: #FFC107;
    border-color: #FFC107;
    color: #072f60
}

.btn-outline-info {
    border-color: #17a2b8;
    color: #17a2b8
}

.btn-outline-info:hover {
    background-color: #17a2b8;
    border-color: #17a2b8;
    color: #ffffff
}

.btn-outline-light {
    border-color: #f8f9fa;
    color: #f8f9fa
}

.btn-outline-light:hover {
    background-color: #f8f9fa;
    border-color: #f8f9fa;
    color: #072f60
}

.btn-outline-dark {
    border-color: #343a40;
    color: #343a40
}

.btn-outline-dark:hover {
    background-color: #343a40;
    border-color: #343a40;
    color: #ffffff
}

.btn-outline-white {
    border-color: #ffffff;
    color: #ffffff
}

.btn-outline-white:hover {
    background-color: #ffffff;
    border-color: #ffffff;
    color: #072f60
}

.btn-outline-heading-color {
    border-color: #072f60;
    color: #072f60
}

.btn-outline-heading-color:hover {
    background-color: #072f60;
    border-color: #072f60;
    color: #ffffff
}

.btn-hover-primary:hover {
    background-color: #3bbca7;
    border-color: #3bbca7;
    color: #ffffff
}

.btn-hover-secondary:hover {
    background-color: #6c757d;
    border-color: #6c757d;
    color: #ffffff
}

.btn-hover-success:hover {
    background-color: #4CAF50;
    border-color: #4CAF50;
    color: #ffffff
}

.btn-hover-danger:hover {
    background-color: #F44336;
    border-color: #F44336;
    color: #ffffff
}

.btn-hover-warning:hover {
    background-color: #FFC107;
    border-color: #FFC107;
    color: #072f60
}

.btn-hover-info:hover {
    background-color: #17a2b8;
    border-color: #17a2b8;
    color: #ffffff
}

.btn-hover-light:hover {
    background-color: #f8f9fa;
    border-color: #f8f9fa;
    color: #072f60
}

.btn-hover-dark:hover {
    background-color: #343a40;
    border-color: #343a40;
    color: #ffffff
}

.btn-hover-white:hover {
    background-color: #ffffff;
    border-color: #ffffff;
    color: #072f60;
    -webkit-box-shadow: 11px 10px 38px 0 rgba(46, 63, 99, 0.15);
    box-shadow: 11px 10px 38px 0 rgba(46, 63, 99, 0.15)
}

.btn-hover-heading-color:hover {
    background-color: #072f60;
    border-color: #072f60;
    color: #ffffff
}

.btn-android {
    background-color: #7AC157;
    border-color: #7AC157;
    color: #ffffff
}

.btn-android:hover {
    background-color: #6bba45;
    border-color: #6bba45
}

.btn-apple {
    background-color: #B8B8B8;
    border-color: #B8B8B8;
    color: #ffffff
}

.btn-apple:hover {
    background-color: #ababab;
    border-color: #ababab
}

.btn-behance {
    background-color: #1869FF;
    border-color: #1869FF;
    color: #ffffff
}

.btn-behance:hover {
    background-color: #0059fe;
    border-color: #0059fe
}

.btn-codepen {
    background-color: #000000;
    border-color: #000000;
    color: #ffffff
}

.btn-codepen:hover {
    background-color: black;
    border-color: black
}

.btn-dribbble {
    background-color: #EA4C8A;
    border-color: #EA4C8A;
    color: #ffffff
}

.btn-dribbble:hover {
    background-color: #e7357b;
    border-color: #e7357b
}

.btn-dropbox {
    background-color: #007EE5;
    border-color: #007EE5;
    color: #ffffff
}

.btn-dropbox:hover {
    background-color: #0070cc;
    border-color: #0070cc
}

.btn-evernote {
    background-color: #78D525;
    border-color: #78D525;
    color: #ffffff
}

.btn-evernote:hover {
    background-color: #6cbf21;
    border-color: #6cbf21
}

.btn-facebook {
    background-color: #4867AA;
    border-color: #4867AA;
    color: #ffffff
}

.btn-facebook:hover {
    background-color: #405c98;
    border-color: #405c98
}

.btn-github {
    background-color: #313131;
    border-color: #313131;
    color: #ffffff
}

.btn-github:hover {
    background-color: #242424;
    border-color: #242424
}

.btn-google-drive {
    background-color: #1DA462;
    border-color: #1DA462;
    color: #ffffff
}

.btn-google-drive:hover {
    background-color: #198e55;
    border-color: #198e55
}

.btn-google-earth {
    background-color: #4285F4;
    border-color: #4285F4;
    color: #ffffff
}

.btn-google-earth:hover {
    background-color: #2a75f3;
    border-color: #2a75f3
}

.btn-google-glass {
    background-color: #EA4335;
    border-color: #EA4335;
    color: #ffffff
}

.btn-google-glass:hover {
    background-color: #e82e1e;
    border-color: #e82e1e
}

.btn-google-maps {
    background-color: #5083C3;
    border-color: #5083C3;
    color: #ffffff
}

.btn-google-maps:hover {
    background-color: #4076ba;
    border-color: #4076ba
}

.btn-google-play {
    background-color: #01B9FD;
    border-color: #01B9FD;
    color: #ffffff
}

.btn-google-play:hover {
    background-color: #01a6e4;
    border-color: #01a6e4
}

.btn-google-plus {
    background-color: #DD5144;
    border-color: #DD5144;
    color: #ffffff
}

.btn-google-plus:hover {
    background-color: #d93d2e;
    border-color: #d93d2e
}

.btn-google {
    background-color: #4285F4;
    border-color: #4285F4;
    color: #ffffff
}

.btn-google:hover {
    background-color: #2a75f3;
    border-color: #2a75f3
}

.btn-instagram {
    background-color: #B23A94;
    border-color: #B23A94;
    color: #ffffff
}

.btn-instagram:hover {
    background-color: #9f3484;
    border-color: #9f3484
}

.btn-css3 {
    background-color: #0277BD;
    border-color: #0277BD;
    color: #ffffff
}

.btn-css3:hover {
    background-color: #0267a4;
    border-color: #0267a4
}

.btn-html5 {
    background-color: #E44D26;
    border-color: #E44D26;
    color: #ffffff
}

.btn-html5:hover {
    background-color: #d6411b;
    border-color: #d6411b
}

.btn-javascript {
    background-color: #F9DC3D;
    border-color: #F9DC3D;
    color: #ffffff
}

.btn-javascript:hover {
    background-color: #f8d824;
    border-color: #f8d824
}

.btn-python {
    background-color: #0C9DBF;
    border-color: #0C9DBF;
    color: #ffffff
}

.btn-python:hover {
    background-color: #0a89a7;
    border-color: #0a89a7
}

.btn-lastfm {
    background-color: #E31B23;
    border-color: #E31B23;
    color: #ffffff
}

.btn-lastfm:hover {
    background-color: #cc181f;
    border-color: #cc181f
}

.btn-linkedin {
    background-color: #007BB6;
    border-color: #007BB6;
    color: #ffffff
}

.btn-linkedin:hover {
    background-color: #006a9d;
    border-color: #006a9d
}

.btn-paypal {
    background-color: #002F86;
    border-color: #002F86;
    color: #ffffff
}

.btn-paypal:hover {
    background-color: #00266d;
    border-color: #00266d
}

.btn-pinterest {
    background-color: #BD081B;
    border-color: #BD081B;
    color: #ffffff
}

.btn-pinterest:hover {
    background-color: #a50718;
    border-color: #a50718
}

.btn-pocket {
    background-color: #EF3E56;
    border-color: #EF3E56;
    color: #ffffff
}

.btn-pocket:hover {
    background-color: #ed2641;
    border-color: #ed2641
}

.btn-polymer {
    background-color: #F87292;
    border-color: #F87292;
    color: #ffffff
}

.btn-polymer:hover {
    background-color: #f75a7f;
    border-color: #f75a7f
}

.btn-rss {
    background-color: #F99C3A;
    border-color: #F99C3A;
    color: #ffffff
}

.btn-rss:hover {
    background-color: #f89021;
    border-color: #f89021
}

.btn-share {
    background-color: #2C9CFF;
    border-color: #2C9CFF;
    color: #ffffff
}

.btn-share:hover {
    background-color: #1390ff;
    border-color: #1390ff
}

.btn-stackoverflow {
    background-color: #F38024;
    border-color: #F38024;
    color: #ffffff
}

.btn-stackoverflow:hover {
    background-color: #f0720d;
    border-color: #f0720d
}

.btn-steam {
    background-color: #15497B;
    border-color: #15497B;
    color: #ffffff
}

.btn-steam:hover {
    background-color: #113c65;
    border-color: #113c65
}

.btn-twitter {
    background-color: #1DA1F2;
    border-color: #1DA1F2;
    color: #ffffff
}

.btn-twitter:hover {
    background-color: #0d95e8;
    border-color: #0d95e8
}

.btn-vk {
    background-color: #5181B8;
    border-color: #5181B8;
    color: #ffffff
}

.btn-vk:hover {
    background-color: #4574aa;
    border-color: #4574aa
}

.btn-wikipedia {
    background-color: #E9E9E9;
    border-color: #E9E9E9;
    color: #072f60
}

.btn-wikipedia:hover {
    background-color: gainsboro;
    border-color: gainsboro
}

.btn-windows {
    background-color: #0078D6;
    border-color: #0078D6;
    color: #ffffff
}

.btn-windows:hover {
    background-color: #006abd;
    border-color: #006abd
}

.btn-500px {
    background-color: #000000;
    border-color: #000000;
    color: #ffffff
}

.btn-500px:hover {
    background-color: black;
    border-color: black
}

.btn-8tracks {
    background-color: #122D4B;
    border-color: #122D4B;
    color: #ffffff
}

.btn-8tracks:hover {
    background-color: #0d2136;
    border-color: #0d2136
}

.btn-amazon {
    background-color: #F79B34;
    border-color: #F79B34;
    color: #ffffff
}

.btn-amazon:hover {
    background-color: #f68f1b;
    border-color: #f68f1b
}

.btn-blogger {
    background-color: #F06A35;
    border-color: #F06A35;
    color: #ffffff
}

.btn-blogger:hover {
    background-color: #ee581d;
    border-color: #ee581d
}

.btn-delicious {
    background-color: #0000FE;
    border-color: #0000FE;
    color: #ffffff
}

.btn-delicious:hover {
    background-color: #0000e5;
    border-color: #0000e5
}

.btn-disqus {
    background-color: #2E9EFE;
    border-color: #2E9EFE;
    color: #ffffff
}

.btn-disqus:hover {
    background-color: #1592fe;
    border-color: #1592fe
}

.btn-flattr {
    background-color: #7AB831;
    border-color: #7AB831;
    color: #ffffff
}

.btn-flattr:hover {
    background-color: #6da42c;
    border-color: #6da42c
}

.btn-flickr {
    background-color: #FE0084;
    border-color: #FE0084;
    color: #ffffff
}

.btn-flickr:hover {
    background-color: #e50077;
    border-color: #e50077
}

.btn-odnoklassniki {
    background-color: #F58220;
    border-color: #F58220;
    color: #ffffff
}

.btn-odnoklassniki:hover {
    background-color: #f1750b;
    border-color: #f1750b
}

.btn-outlook {
    background-color: #0072C6;
    border-color: #0072C6;
    color: #ffffff
}

.btn-outlook:hover {
    background-color: #0063ad;
    border-color: #0063ad
}

.btn-playstation {
    background-color: #07418E;
    border-color: #07418E;
    color: #ffffff
}

.btn-playstation:hover {
    background-color: #063676;
    border-color: #063676
}

.btn-reddit {
    background-color: #FF4500;
    border-color: #FF4500;
    color: #ffffff
}

.btn-reddit:hover {
    background-color: #e63e00;
    border-color: #e63e00
}

.btn-skype {
    background-color: #00A9F0;
    border-color: #00A9F0;
    color: #ffffff
}

.btn-skype:hover {
    background-color: #0097d7;
    border-color: #0097d7
}

.btn-slideshare {
    background-color: #0077B5;
    border-color: #0077B5;
    color: #ffffff
}

.btn-slideshare:hover {
    background-color: #00669c;
    border-color: #00669c
}

.btn-soundcloud {
    background-color: #FE4900;
    border-color: #FE4900;
    color: #ffffff
}

.btn-soundcloud:hover {
    background-color: #e54200;
    border-color: #e54200
}

.btn-tumblr {
    background-color: #36465D;
    border-color: #36465D;
    color: #ffffff
}

.btn-tumblr:hover {
    background-color: #2d3a4d;
    border-color: #2d3a4d
}

.btn-twitch {
    background-color: #6441A4;
    border-color: #6441A4;
    color: #ffffff
}

.btn-twitch:hover {
    background-color: #593a92;
    border-color: #593a92
}

.btn-vimeo {
    background-color: #1AB7EA;
    border-color: #1AB7EA;
    color: #ffffff
}

.btn-vimeo:hover {
    background-color: #14a7d7;
    border-color: #14a7d7
}

.btn-whatsapp {
    background-color: #189D0E;
    border-color: #189D0E;
    color: #ffffff
}

.btn-whatsapp:hover {
    background-color: #14860c;
    border-color: #14860c
}

.btn-xbox {
    background-color: #107C0F;
    border-color: #107C0F;
    color: #ffffff
}

.btn-xbox:hover {
    background-color: #0d650c;
    border-color: #0d650c
}

.btn-yahoo {
    background-color: #4101AF;
    border-color: #4101AF;
    color: #ffffff
}

.btn-yahoo:hover {
    background-color: #380196;
    border-color: #380196
}

.btn-youtube {
    background-color: #FE0000;
    border-color: #FE0000;
    color: #ffffff
}

.btn-youtube:hover {
    background-color: #e50000;
    border-color: #e50000
}

.comment-box {
    margin-top: 50px
}

.commtent-reply {
    padding-left: 105px
}

@media only screen and (max-width: 767px) {
    .commtent-reply {
        padding-left: 0
    }
}

.single-comment {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding: 30px 0;
    border-bottom: 1px solid #e1e1e1
}

@media only screen and (max-width: 575px) {
    .single-comment {
        display: block
    }
}

.single-comment .comment-author {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.single-comment .comment-author img {
    width: 75px;
    border-radius: 50%
}

.single-comment .comment-content {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    padding-left: 30px
}

@media only screen and (max-width: 575px) {
    .single-comment .comment-content {
        padding-left: 0;
        padding-top: 25px
    }
}

.single-comment .comment-content .name {
    font-size: 16px;
    font-weight: 700
}

.single-comment .comment-content p {
    margin-top: 5px
}

.single-comment .comment-content .meta {
    margin-top: 10px;
    font-size: 14px;
    font-weight: 400;
    color: #3bbca7
}

.single-comment .comment-content .meta>* {
    margin-right: 30px
}

.single-comment .comment-content .meta>*:last-child {
    margin-right: 0
}

.single-comment .comment-content .meta a:hover {
    color: #072f60
}

.comment-form {
    margin-top: 50px
}

.animate-01 {
    -webkit-animation: animate-01 3s infinite;
    animation: animate-01 3s infinite
}

@-webkit-keyframes animate-01 {
    0% {
        -webkit-transform: rotate(10deg);
        transform: rotate(10deg)
    }

    50% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(10deg);
        transform: rotate(10deg)
    }
}

.animate-02 {
    -webkit-animation: animate-02 5s infinite;
    animation: animate-02 5s infinite
}

@-webkit-keyframes animate-02 {
    0% {
        -webkit-transform: translateY(50px);
        transform: translateY(50px)
    }

    50% {
        -webkit-transform: translateY(0px);
        transform: translateY(0px)
    }

    100% {
        -webkit-transform: translateY(50px);
        transform: translateY(50px)
    }
}

.animate-03 {
    -webkit-animation: animate-03 3s infinite;
    animation: animate-03 3s infinite
}

@-webkit-keyframes animate-03 {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    50% {
        -webkit-transform: scale(0.8);
        transform: scale(0.8)
    }

    100% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}

.animate-04 {
    -webkit-animation: animate-04 4s infinite;
    animation: animate-04 4s infinite
}

@-webkit-keyframes animate-04 {
    0% {
        -webkit-transform: translateX(30px);
        transform: translateX(30px)
    }

    50% {
        -webkit-transform: translateX(0px);
        transform: translateX(0px)
    }

    100% {
        -webkit-transform: translateX(30px);
        transform: translateX(30px)
    }
}

.animate-05 {
    -webkit-animation: animate-05 15s alternate infinite linear;
    animation: animate-05 15s alternate infinite linear
}

@-webkit-keyframes animate-05 {
    0% {
        -webkit-transform: translate(0px, 0px) rotate(0deg);
        transform: translate(0px, 0px) rotate(0deg)
    }

    20% {
        -webkit-transform: translate(73px, -1px) rotate(36deg);
        transform: translate(73px, -1px) rotate(36deg)
    }

    40% {
        -webkit-transform: translate(141px, 72px) rotate(72deg);
        transform: translate(141px, 72px) rotate(72deg)
    }

    60% {
        -webkit-transform: translate(83px, 122px) rotate(108deg);
        transform: translate(83px, 122px) rotate(108deg)
    }

    80% {
        -webkit-transform: translate(-40px, 72px) rotate(144deg);
        transform: translate(-40px, 72px) rotate(144deg)
    }

    100% {
        -webkit-transform: translate(0px, 0px) rotate(0deg);
        transform: translate(0px, 0px) rotate(0deg)
    }
}

@keyframes animate-05 {
    0% {
        -webkit-transform: translate(0px, 0px) rotate(0deg);
        transform: translate(0px, 0px) rotate(0deg)
    }

    20% {
        -webkit-transform: translate(73px, -1px) rotate(36deg);
        transform: translate(73px, -1px) rotate(36deg)
    }

    40% {
        -webkit-transform: translate(141px, 72px) rotate(72deg);
        transform: translate(141px, 72px) rotate(72deg)
    }

    60% {
        -webkit-transform: translate(83px, 122px) rotate(108deg);
        transform: translate(83px, 122px) rotate(108deg)
    }

    80% {
        -webkit-transform: translate(-40px, 72px) rotate(144deg);
        transform: translate(-40px, 72px) rotate(144deg)
    }

    100% {
        -webkit-transform: translate(0px, 0px) rotate(0deg);
        transform: translate(0px, 0px) rotate(0deg)
    }
}

.header {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;
    background-color: #ffffff;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .header {
        padding: 15px 0
    }
}

.header-top {
    padding: 30px 0
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .header-top {
        padding: 0
    }
}

.header-bottom {
    background-color: #151948
}

.header-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.header-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
}

.header-inner>* {
    margin-right: 70px
}

.header-inner>*:last-child {
    margin-right: 0
}

.header-logo {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .header-logo a img {
        width: 130px
    }
}

.header-menu .main-menu {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
}

.header-menu .main-menu li {
    padding: 25px 12px;
    position: relative;
    white-space: nowrap
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .header-menu .main-menu li {
        padding: 25px 10px
    }
}

.header-menu .main-menu li a {
    font-size: 16px;
    font-weight: 500;
    color: #2f3034
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .header-menu .main-menu li a {
        font-size: 15px
    }
}

.header-menu .main-menu li a.active {
    color: #3bbca7
}

.header-menu .main-menu li a.active::after {
    color: #3bbca7
}

.header-menu .main-menu li .menu-icon::after {
    content: '\f107';
    font-family: "FontAwesome";
    font-size: 16px;
    font-weight: 500;
    color: #2f3034;
    margin-left: 5px;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.header-menu .main-menu li:hover>.menu-icon,
.header-menu .main-menu li:hover>a {
    color: #3bbca7
}

.header-menu .main-menu li:hover>.menu-icon::after,
.header-menu .main-menu li:hover>a::after {
    color: #3bbca7
}

.header-menu .main-menu li:hover>.sub-menu {
    opacity: 1;
    visibility: visible;
    top: 100%
}

.header-menu .sub-menu {
    position: absolute;
    top: 110%;
    left: 0;
    width: 270px;
    background-color: #ffffff;
    -webkit-box-shadow: 0 2px 29px rgba(0, 0, 0, 0.05);
    box-shadow: 0 2px 29px rgba(0, 0, 0, 0.05);
    padding: 20px 0;
    border-radius: 5px;
    z-index: 99;
    border-top: 2px solid #3bbca7;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.header-menu .sub-menu li {
    padding: 0
}

.header-menu .sub-menu li a {
    padding: 5px 30px;
    display: block;
    position: relative;
    color: #2f3034
}

.header-menu .sub-menu li a::before {
    position: absolute;
    content: '';
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 0;
    width: 9px;
    height: 2px;
    background-color: #3bbca7;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.header-menu .sub-menu li a.active {
    padding-left: 37px
}

.header-menu .sub-menu li a.active::before {
    left: 15px;
    opacity: 1;
    visibility: visible
}

.header-menu .sub-menu li .menu-icon {
    position: absolute;
    top: 50%;
    right: 30px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%)
}

.header-menu .sub-menu li .menu-icon::after {
    content: '\f105'
}

.header-menu .sub-menu li:hover>a {
    padding-left: 37px
}

.header-menu .sub-menu li:hover>a::before {
    left: 15px;
    opacity: 1;
    visibility: visible
}

.header-menu .sub-menu li .sub-menu {
    top: 0px;
    left: 100%
}

.header-menu .sub-menu li:hover>.sub-menu {
    top: -20px
}

.header-menu-02 .main-menu li>a {
    color: #ffffff
}

.header-menu-02 .main-menu li .menu-icon::after {
    color: #ffffff
}

.header-menu-02 .main-menu li:hover>.menu-icon,
.header-menu-02 .main-menu li:hover>a {
    color: #3bbca7
}

.header-menu-02 .main-menu li:hover>.menu-icon::after,
.header-menu-02 .main-menu li:hover>a::after {
    color: #3bbca7
}

.header-menu-02 .sub-menu li a {
    color: #2f3034
}

.header-meta {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    white-space: nowrap
}

.header-search {
    min-width: 300px;
    width: 100%;
    position: relative;
    margin-right: 30px;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .header-search {
        min-width: 220px;
        margin-right: 20px
    }
}

.header-search input {
    background-color: #f8f8f8;
    padding: 0 20px;
    height: 46px;
    width: 100%;
    border: 1px solid transparent;
    color: #93a1a2;
    font-size: 14px;
    font-weight: 400;
    border-radius: 5px;
    padding-right: 40px
}

.header-search input:focus {
    outline: none;
    border-color: #3bbca7
}

.header-search input::-webkit-input-placeholder {
    color: #93a1a2
}

.header-search input:-moz-placeholder {
    color: #93a1a2
}

.header-search input::-moz-placeholder {
    color: #93a1a2
}

.header-search input:-ms-input-placeholder {
    color: #93a1a2
}

.header-search button {
    width: 46px;
    height: 46px;
    line-height: 50px;
    border: 0;
    background: none;
    position: absolute;
    top: 0;
    right: 0;
    color: #3bbca7;
    font-size: 17px
}

.header-search-02 {
    min-width: 410px
}

.header-cart {
    margin-right: 41px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .header-cart {
        margin-right: 31px
    }
}

.header-cart .cart-btn {
    position: relative;
    border: 0;
    background: none;
    padding: 0;
    padding-right: 7px;
    padding-top: 4px
}

.header-cart .cart-btn::before {
    position: absolute;
    content: '';
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    right: -20px;
    width: 1px;
    height: 40px;
    background-color: #dedfe0
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .header-cart .cart-btn::before {
        right: -15px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .header-cart .cart-btn::before {
        height: 30px
    }
}

.header-cart .cart-btn i {
    font-size: 18px;
    color: #2f3034
}

.header-cart .cart-btn .count {
    width: 17px;
    height: 17px;
    line-height: 17px;
    text-align: center;
    background-color: #3bbca7;
    display: block;
    font-size: 11px;
    color: #ffffff;
    border-radius: 50%;
    position: absolute;
    top: 0;
    right: 0
}

.header-cart .dropdown-cart {
    min-width: 370px;
    padding: 30px;
    border-radius: 10px;
    -webkit-box-shadow: 11px 10px 38px 0 rgba(46, 63, 99, 0.15);
    box-shadow: 11px 10px 38px 0 rgba(46, 63, 99, 0.15);
    border: 0;
    left: 50% !important;
    -webkit-transform: translateX(-50%) !important;
    -ms-transform: translateX(-50%) !important;
    transform: translateX(-50%) !important;
    top: 57px !important
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .header-cart .dropdown-cart {
        left: 0 !important
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .header-cart .dropdown-cart {
        left: auto !important;
        right: -65px !important;
        -webkit-transform: translateX(0) !important;
        -ms-transform: translateX(0) !important;
        transform: translateX(0) !important
    }
}

.cart-items {
    max-height: 280px;
    overflow-y: auto
}

.single-cart-item {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    position: relative
}

.single-cart-item+.single-cart-item {
    margin-top: 30px
}

.single-cart-item .item-image img {
    border-radius: 50%
}

.single-cart-item .item-content {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    padding-right: 25px;
    padding-left: 20px
}

.single-cart-item .item-content .title {
    font-size: 16px;
    font-weight: 600;
    color: #072f60;
    line-height: 1.3
}

.single-cart-item .item-content .quantity {
    font-size: 14px;
    color: #3bbca7
}

.single-cart-item .btn-close {
    position: absolute;
    width: 5px;
    height: 5px;
    top: 0;
    right: 5px
}

.cart-total {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-top: 25px
}

.cart-total .label {
    font-size: 18px;
    font-weight: 600;
    color: #072f60
}

.cart-total .value {
    font-size: 18px;
    font-weight: 700;
    color: #3bbca7
}

.cart-btns {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-top: 25px
}

.cart-btns .btn {
    width: 48%
}

.header-login .link {
    font-size: 14px;
    font-weight: 500;
    color: #072f60;
    position: relative;
    display: block;
    border: 0;
    padding: 0;
    background: none
}

.header-login .link i {
    margin-right: 3px
}

.header-login .link+.link::before {
    content: '/';
    font-size: 14px;
    font-weight: 500;
    color: #072f60;
    margin: 0 5px
}

.header-login .link:hover {
    color: #3bbca7
}

.header-login-02>* {
    margin-right: 20px
}

.header-login-02>*:last-child {
    margin-right: 0
}

.header-login-02 .link {
    font-size: 14px;
    font-weight: 500;
    color: #072f60;
    position: relative;
    display: block
}

.header-login-02 .link i {
    margin-right: 3px
}

.header-login-02 .link:hover {
    color: #3bbca7
}

.header-toggle button {
    background: none;
    border: 0;
    padding: 0
}

.header-toggle button span {
    width: 25px;
    height: 2px;
    background-color: #072f60;
    margin: 5px 0;
    display: block
}

.header-social>* {
    margin-right: 15px
}

.header-social>*:last-child {
    margin-right: 0
}

.header-social a {
    color: #ffffff;
    font-size: 14px
}

.header-social a:hover {
    color: #3bbca7
}

.sticky {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;
    -webkit-box-shadow: 0px 0px 16px 0px rgba(0, 0, 0, 0.07);
    box-shadow: 0px 0px 16px 0px rgba(0, 0, 0, 0.07);
    -webkit-animation: sticky 1s;
    animation: sticky 1s
}

.sticky .header-top {
    display: none
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .sticky .header-top {
        display: block
    }
}

@-webkit-keyframes sticky {
    0% {
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%)
    }

    100% {
        -webkit-transform: translateY(0%);
        transform: translateY(0%)
    }
}

@keyframes sticky {
    0% {
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%)
    }

    100% {
        -webkit-transform: translateY(0%);
        transform: translateY(0%)
    }
}

.offcanvas {
    width: 320px
}

@media only screen and (max-width: 575px) {
    .offcanvas {
        width: 280px
    }
}

.offcanvas-logo a img {
    width: 130px
}

.offcanvas-menu .main-menu li {
    position: relative
}

.offcanvas-menu .main-menu li a {
    display: block;
    font-size: 15px;
    font-weight: 500;
    color: #2f3034;
    padding: 5px 0px;
    position: relative
}

.offcanvas-menu .main-menu li a.active {
    color: #3bbca7
}

.offcanvas-menu .main-menu li .menu-expand {
    width: 24px;
    height: 24px;
    background-color: rgba(47, 48, 52, 0.1);
    border-radius: 3px;
    display: block;
    position: absolute;
    top: 7px;
    right: 0
}

.offcanvas-menu .main-menu li .menu-expand::before {
    position: absolute;
    content: '';
    width: 10px;
    height: 1px;
    background-color: #072f60;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
}

.offcanvas-menu .main-menu li .menu-expand::after {
    position: absolute;
    content: '';
    width: 1px;
    height: 10px;
    background-color: #072f60;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.offcanvas-menu .main-menu li:hover>a {
    color: #3bbca7
}

.offcanvas-menu .main-menu li ul {
    display: none
}

.offcanvas-menu .sub-menu {
    background-color: #fdfaf1;
    padding: 5px 20px;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.slider-section {
    position: relative
}

.slider-section .shape-1 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 2
}

.slider-section .shape-1 svg .shape-path {
    fill: #ffffff
}

.slider-section .shape-2 {
    position: absolute;
    width: 67px;
    top: 34%;
    left: 130px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .slider-section .shape-2 {
        width: 60px;
        top: 15%;
        left: 50px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-section .shape-2 {
        top: 5%;
        width: 57px
    }
}

@media only screen and (max-width: 767px) {
    .slider-section .shape-2 {
        width: 47px;
        left: 45px
    }
}

@media only screen and (max-width: 575px) {
    .slider-section .shape-2 {
        top: 67%
    }
}

.slider-section .shape-3 {
    position: absolute;
    width: 46px;
    top: 145px;
    left: 38%
}

@media only screen and (max-width: 767px) {
    .slider-section .shape-3 {
        width: 40px;
        top: 95px
    }
}

@media only screen and (max-width: 575px) {
    .slider-section .shape-3 {
        top: 100px;
        width: 36px
    }
}

.slider-section .shape-4 {
    position: absolute;
    width: 68px;
    top: 230px;
    right: 225px
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-section .shape-4 {
        right: 85px;
        top: 130px
    }
}

@media only screen and (max-width: 767px) {
    .slider-section .shape-4 {
        right: 55px;
        top: 100px;
        width: 50px
    }
}

@media only screen and (max-width: 575px) {
    .slider-section .shape-4 {
        right: 40px;
        top: 98px;
        width: 45px
    }
}

.slider-content {
    padding-top: 75px;
    max-width: 520px
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-content {
        padding-top: 80px
    }
}

@media only screen and (max-width: 767px) {
    .slider-content {
        padding-top: 150px;
        padding-bottom: 0px
    }
}

.slider-content .sub-title {
    font-size: 14px;
    text-transform: uppercase;
    color: #3bbca7;
    letter-spacing: 1px
}

.slider-content .title {
    font-size: 48px;
    font-weight: 600;
    color: #072f60;
    line-height: 1.25;
    margin-top: 10px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .slider-content .title {
        font-size: 40px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-content .title {
        font-size: 30px
    }
}

@media only screen and (max-width: 575px) {
    .slider-content .title {
        font-size: 28px
    }
}

.slider-content p {
    max-width: 400px;
    font-size: 18px;
    line-height: 1.6;
    margin-top: 25px
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-content p {
        font-size: 16px
    }
}

.slider-content>.btn {
    margin-top: 35px
}

.slider-form {
    margin-top: 50px
}

.slider-form form {
    position: relative
}

.slider-form form input {
    width: 100%;
    border: 1px solid #ebebeb;
    height: 60px;
    padding-left: 20px;
    padding-right: 180px;
    font-size: 18px;
    color: #666666;
    background-color: #ffffff;
    border-radius: 4px
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 575px) {
    .slider-form form input {
        height: 50px;
        padding: 0 15px;
        font-size: 16px
    }
}

.slider-form form .btn {
    position: absolute;
    top: 0;
    right: 0;
    height: 60px;
    line-height: 60px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 575px) {
    .slider-form form .btn {
        position: relative;
        width: 100%;
        display: block;
        margin-top: 10px;
        height: 50px;
        line-height: 50px
    }
}

.slider-form span {
    color: #3bbca7;
    display: block;
    margin-top: 25px
}

.slider-form span a {
    color: #666666
}

.slider-form span a:hover {
    color: #072f60
}

.slider-images {
    padding-top: 200px;
    position: relative;
    z-index: 1
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .slider-images {
        padding-top: 150px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-images {
        padding-top: 180px
    }
}

@media only screen and (max-width: 767px) {
    .slider-images {
        padding-top: 50px
    }
}

.slider-images .image-shape-01 {
    position: absolute;
    bottom: 100px;
    left: 50px;
    z-index: -1;
    max-width: 530px;
    width: 100%
}

@media only screen and (max-width: 575px) {
    .slider-images .image-shape-01 {
        max-width: 250px;
        left: 30px
    }
}

.slider-images .image-shape-01 svg .svg-path {
    fill: #ffd24d
}

.slider-images .image-shape-02 {
    position: absolute;
    z-index: -1;
    left: 67px;
    top: 42%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    max-width: 260px;
    width: 100%
}

@media only screen and (max-width: 767px) {
    .slider-images .image-shape-02 {
        top: 25%;
        left: 0;
        max-width: 190px
    }
}

.slider-images .image-shape-02 svg .svg-path {
    fill: #344c4c
}

.slider-images .image-shape-03 {
    position: absolute;
    top: 21%;
    right: 24%
}

.slider-images .image-shape-04 {
    position: absolute;
    top: 170px;
    left: 130px;
    z-index: -1
}

.slider-images .image-shape-04 img {
    width: 150px
}

.slider-images .image-shape-05 {
    position: absolute;
    width: 172px;
    height: 172px;
    background-color: #afe0fb;
    border-radius: 50%;
    top: 195px;
    left: 15px;
    z-index: -2
}

.slider-images .image-shape-06 {
    position: absolute;
    width: 236px;
    height: 236px;
    background-color: #ffcc66;
    border-radius: 50%;
    bottom: -100px;
    right: 90px;
    z-index: -1
}

.slider-images .image {
    text-align: right;
    position: relative
}

.slider-images-02 {
    padding-top: 200px;
    padding-bottom: 170px;
    position: relative;
    z-index: 1
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .slider-images-02 {
        padding-top: 150px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-images-02 {
        padding-top: 150px
    }
}

@media only screen and (max-width: 767px) {
    .slider-images-02 {
        padding-top: 50px;
        padding-bottom: 70px
    }
}

.slider-images-02 .image-shape-01 {
    position: absolute;
    top: 170px;
    left: 130px;
    z-index: -1
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-images-02 .image-shape-01 {
        top: 20px
    }
}

.slider-images-02 .image-shape-01 img {
    width: 150px
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-images-02 .image-shape-01 img {
        width: 120px
    }
}

.slider-images-02 .image-shape-02 {
    position: absolute;
    width: 172px;
    height: 172px;
    background-color: #afe0fb;
    border-radius: 50%;
    top: 195px;
    left: 15px;
    z-index: -2
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-images-02 .image-shape-02 {
        left: -60px
    }
}

@media only screen and (max-width: 767px) {
    .slider-images-02 .image-shape-02 {
        width: 72px;
        height: 72px;
        top: 80px
    }
}

.slider-images-02 .image-shape-03 {
    position: absolute;
    width: 236px;
    height: 236px;
    background-color: #ffcc66;
    border-radius: 50%;
    bottom: 70px;
    right: 90px;
    z-index: -1
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-images-02 .image-shape-03 {
        right: 40px
    }
}

@media only screen and (max-width: 767px) {
    .slider-images-02 .image-shape-03 {
        width: 170px;
        height: 170px
    }
}

.slider-images-02 .image {
    text-align: right;
    position: relative
}

.image-content {
    position: absolute;
    top: 50%;
    right: 0;
    text-align: left;
    padding-left: 50px;
    padding-right: 28px;
    padding-top: 30px;
    padding-bottom: 25px;
    width: 265px;
    background-color: #ffffff;
    border-radius: 5px;
    -webkit-box-shadow: 0px 0px 62px 0px rgba(0, 0, 0, 0.23);
    box-shadow: 0px 0px 62px 0px rgba(0, 0, 0, 0.23)
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 575px) {
    .image-content {
        padding-left: 40px;
        max-width: 245px
    }
}

.image-content .image-icon {
    position: absolute;
    left: -30px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%)
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 575px) {
    .image-content .image-icon {
        left: -25px
    }
}

.image-content .image-icon i {
    border-radius: 50%;
    background-color: #072f60;
    width: 61px;
    height: 61px;
    line-height: 75px;
    display: block;
    text-align: center;
    font-size: 30px;
    color: #ffffff
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 575px) {
    .image-content .image-icon i {
        width: 51px;
        height: 51px;
        line-height: 60px;
        font-size: 24px
    }
}

.image-content .start i {
    font-size: 20px;
    color: #fda000
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 575px) {
    .image-content .start i {
        font-size: 18px
    }
}

.image-content p {
    font-size: 18px;
    line-height: 1.6
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 575px) {
    .image-content p {
        font-size: 16px;
        line-height: 1.4
    }
}

.slider-section-03 {
    padding-top: 188px
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .slider-section-03 {
        padding-top: 78px
    }
}

.single-slider {
    position: relative;
    z-index: 1;
    overflow: hidden;
    background-position: center right;
    background-size: cover;
    background-repeat: no-repeat
}

.single-slider .slider-shape-01 {
    width: 75px;
    position: absolute;
    top: 125px;
    left: 5%;
    z-index: -1
}

.single-slider .slider-shape-02 {
    position: absolute;
    top: -270px;
    left: 20%;
    z-index: -1
}

@media only screen and (max-width: 575px) {
    .single-slider .slider-shape-02 {
        top: -120px
    }
}

.single-slider .slider-shape-03 {
    position: absolute;
    bottom: -225px;
    left: 45px;
    z-index: -1
}

@media only screen and (max-width: 575px) {
    .single-slider .slider-shape-03 {
        bottom: -120px
    }
}

.single-slider .slider-bg {
    position: absolute;
    top: 0;
    left: -5%;
    height: 100%;
    width: 58%;
    background-color: #116eee;
    z-index: -1;
    -webkit-transform: skewX(17deg);
    -ms-transform: skewX(17deg);
    transform: skewX(17deg)
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .single-slider .slider-bg {
        width: 64%;
        -webkit-transform: skewX(14deg);
        -ms-transform: skewX(14deg);
        transform: skewX(14deg);
        left: -6%
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .single-slider .slider-bg {
        width: 100%;
        left: 0;
        -webkit-transform: skewX(0);
        -ms-transform: skewX(0);
        transform: skewX(0)
    }
}

.slider-content-02 {
    padding-top: 135px;
    padding-bottom: 145px;
    max-width: 550px;
    position: relative
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .slider-content-02 {
        padding-top: 80px;
        padding-bottom: 90px
    }
}

.slider-content-02 .title {
    font-size: 48px;
    font-weight: 600;
    color: #ffffff;
    line-height: 1.25
}

@media only screen and (max-width: 767px) {
    .slider-content-02 .title {
        font-size: 40px
    }
}

@media only screen and (max-width: 575px) {
    .slider-content-02 .title {
        font-size: 24px
    }
}

.slider-content-02 .title span {
    color: #ffe347
}

.slider-content-02 p {
    color: #ffffff;
    font-size: 20px;
    margin-top: 25px
}

@media only screen and (max-width: 575px) {
    .slider-content-02 p {
        font-size: 18px
    }
}

.slider-content-02 .slider-btn {
    margin-top: 38px;
    position: relative;
    padding-right: 70px;
    display: inline-block
}

.slider-content-02 .slider-btn .shape {
    position: absolute;
    top: 0;
    right: 0
}

.slider-section-04 {
    background-color: {{ banner()->background_color }} ;
    position: relative;
    z-index: 1
}

.slider-section-04 .shape-1 {
    position: absolute;
    width: 90px;
    top: 34%;
    left: 130px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .slider-section-04 .shape-1 {
        width: 60px;
        top: 15%;
        left: 50px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-section-04 .shape-1 {
        top: 5%;
        width: 57px
    }
}

@media only screen and (max-width: 767px) {
    .slider-section-04 .shape-1 {
        width: 47px;
        left: 45px
    }
}

@media only screen and (max-width: 575px) {
    .slider-section-04 .shape-1 {
        top: 67%
    }
}

.slider-images-04 {
    position: relative;
    padding-top: 130px;
    text-align: center;
    z-index: 1
}

@media only screen and (max-width: 767px) {
    .slider-images-04 {
        padding-top: 50px
    }
}

.slider-images-04 .image-shape-01 {
    position: absolute;
    top: 25%;
    left: -4%;
    z-index: -1
}

.animation-style-01 .slider-content,
.animation-style-01 .slider-content-02 {
    opacity: 1
}

.animation-style-01 .slider-content>*:nth-child(1),
.animation-style-01 .slider-content-02>*:nth-child(1) {
    -webkit-animation-name: fadeInUpBig;
    animation-name: fadeInUpBig;
    -webkit-animation-delay: 0.4s;
    animation-delay: 0.4s;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

.animation-style-01 .slider-content>*:nth-child(2),
.animation-style-01 .slider-content-02>*:nth-child(2) {
    -webkit-animation-name: fadeInUpBig;
    animation-name: fadeInUpBig;
    -webkit-animation-delay: 0.8s;
    animation-delay: 0.8s;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

.animation-style-01 .slider-content>*:nth-child(3),
.animation-style-01 .slider-content-02>*:nth-child(3) {
    -webkit-animation-name: fadeInUpBig;
    animation-name: fadeInUpBig;
    -webkit-animation-delay: 1.2s;
    animation-delay: 1.2s;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

.animation-style-01 .slider-content>*:nth-child(4),
.animation-style-01 .slider-content-02>*:nth-child(4) {
    -webkit-animation-name: fadeInUpBig;
    animation-name: fadeInUpBig;
    -webkit-animation-delay: 1.5s;
    animation-delay: 1.5s;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

.counter-section {
    position: relative;
    z-index: 1;
    overflow: hidden
}

.counter-section .counter-shape-01 {
    border-radius: 50%;
    background-color: #afe0fb;
    position: absolute;
    width: 36px;
    height: 36px;
    z-index: -1;
    left: 6%;
    top: 12%
}

.counter-section .counter-shape-02 {
    width: 1093px;
    position: absolute;
    z-index: -1;
    top: -150px;
    right: -200px;
    opacity: 0.1
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .counter-section .counter-shape-02 {
        width: 893px
    }
}

.counter-section .counter-shape-02 svg .shape-path {
    fill: #3bbca7
}

.counter-wrapper {
    border-bottom: 1px solid #ebebeb;
    padding-top: 40px;
    padding-bottom: 70px
}

.counter-wrapper .row .col .single-counter {
    border-right: 1px solid #ebebeb
}

@media only screen and (max-width: 575px) {
    .counter-wrapper .row .col .single-counter {
        border-right: 0
    }
}

.counter-wrapper .row .col:last-child .single-counter {
    border-right: 0
}

.single-counter {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-top: 30px
}

@media only screen and (max-width: 575px) {
    .single-counter {
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }
}

.single-counter .counter-box {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .single-counter .counter-box .counter-icon img {
        height: 60px
    }
}

.single-counter .counter-box .counter-content {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    padding-left: 40px
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .single-counter .counter-box .counter-content {
        padding-left: 20px
    }
}

.single-counter .counter-box .counter-content .count {
    font-size: 48px;
    font-weight: 700;
    color: #072f60;
    line-height: 1.2
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single-counter .counter-box .counter-content .count {
        font-size: 40px
    }
}

@media only screen and (max-width: 767px) {
    .single-counter .counter-box .counter-content .count {
        font-size: 30px
    }
}

.counter-wrapper-02 .title {
    color: #ffffff;
    font-size: 36px;
    font-weight: 600;
    line-height: 1.3
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .counter-wrapper-02 .title {
        font-size: 30px
    }
}

@media only screen and (max-width: 575px) {
    .counter-wrapper-02 .title {
        font-size: 20px
    }
}

.single-counter-02 {
    text-align: center;
    margin-top: 30px
}

.single-counter-02 .cont {
    color: #3bbca7;
    font-size: 48px;
    font-weight: 600;
    line-height: 1
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single-counter-02 .cont {
        font-size: 40px
    }
}

@media only screen and (max-width: 575px) {
    .single-counter-02 .cont {
        font-size: 30px
    }
}

.counter-wrapper-03 {
    padding-top: 15px
}

.single-counter-03 {
    text-align: center;
    margin-top: 30px
}

.single-counter-03 .cont {
    color: #ffffff;
    font-size: 48px;
    font-weight: 600;
    line-height: 1
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single-counter-03 .cont {
        font-size: 40px
    }
}

@media only screen and (max-width: 575px) {
    .single-counter-03 .cont {
        font-size: 30px
    }
}

.single-counter-03 p {
    color: #ffffff
}

.counter-content {
    max-width: 410px
}

.counter-content .title {
    font-size: 36px;
    font-weight: 600;
    line-height: 1.3;
    margin-top: -6px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .counter-content .title {
        font-size: 30px
    }
}

@media only screen and (max-width: 575px) {
    .counter-content .title {
        font-size: 20px
    }
}

.counter-content .signechar {
    margin-top: 30px
}

.counter-content .author {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 30px
}

.counter-content .author .author-images {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.counter-content .author .author-images img {
    width: 90px;
    border-radius: 50%
}

.counter-content .author .author-content {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    padding-left: 30px
}

.counter-content .author .author-content .name {
    font-size: 18px;
    font-weight: 500;
    line-height: 1.3
}

.counter-content .author .author-content p {
    font-size: 14px
}

.counter-box-wrapper {
    position: relative;
    z-index: 1
}

.counter-box-wrapper .shape-1 {
    position: absolute;
    width: 115px;
    left: 15%;
    top: 20px;
    z-index: -1
}

.counter-box-wrapper .row .col:first-child {
    margin-top: 30px
}

.single-counter-box {
    text-align: center;
    margin-top: 30px;
    background-color: #ffffff;
    -webkit-box-shadow: 0px 0px 79px 0px rgba(0, 0, 0, 0.16);
    box-shadow: 0px 0px 79px 0px rgba(0, 0, 0, 0.16);
    border-radius: 5px;
    height: 200px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 767px) {
    .single-counter-box {
        height: 150px
    }
}

.single-counter-box .counter-box {
    height: auto
}

.single-counter-box .cont {
    color: #3bbca7;
    font-size: 48px;
    font-weight: 600;
    line-height: 1
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single-counter-box .cont {
        font-size: 40px
    }
}

@media only screen and (max-width: 575px) {
    .single-counter-box .cont {
        font-size: 30px
    }
}

.single-counter-box p {
    color: #072f60
}

.courses-wrapper {
    margin-top: 30px
}

.tab-menu {
    padding-top: 10px
}

.tab-menu .nav li {
    margin: 0 17px;
    padding-top: 10px
}

@media only screen and (max-width: 767px) {
    .tab-menu .nav li {
        margin: 0 10px
    }
}

.tab-menu .nav li button {
    font-size: 16px;
    font-weight: 600;
    color: #a1a1a1;
    border: 0;
    padding: 0;
    background: none
}

@media only screen and (max-width: 767px) {
    .tab-menu .nav li button {
        font-size: 15px
    }
}

.tab-menu .nav li button:hover,
.tab-menu .nav li button.active {
    color: #072f60
}

.courses-tab-content {
    margin-top: 0 !important;
    padding-top: 10px
}

.single-course {
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    -webkit-box-shadow: 0px 0px 16px 0px rgba(0, 0, 0, 0.07);
    box-shadow: 0px 0px 16px 0px rgba(0, 0, 0, 0.07);
    background-color: #ffffff;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    /* margin-top: 30px; */
    position: relative
}

.single-course .courses-image {
    overflow: hidden;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px
}

.single-course .courses-image a {
    display: block;
    position: relative
}

.single-course .courses-image a::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: #000000;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    opacity: 0
}

.single-course .courses-image a img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.single-course .courses-content {
    padding: 20px 30px
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 767px) {
    .single-course .courses-content {
        padding: 15px
    }
}

.single-course .courses-content .top-meta {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.single-course .courses-content .top-meta .tag {
    border-radius: 5px;
    background-color: rgba(59, 188, 167, 0.071);
    font-size: 14px;
    font-weight: 600;
    color: #3bbca7;
    padding: 0 15px;
    height: 25px;
    line-height: 25px
}

.single-course .courses-content .top-meta .tag:hover {
    /* background-color: #3bbca7;
    color: #ffffff */
}

.single-course .courses-content .top-meta .price .sale-price {
    font-size: 14px;
    font-weight: 600;
    color: #072f60
}

.single-course .courses-content .title {
    font-size: 18px;
    font-weight: 700;
    line-height: 1.3;
    margin-top: 15px
}

.single-course .courses-content .author-name {
    font-size: 14px;
    font-weight: 600;
    color: #838383;
    margin-top: 5px
}

.single-course .courses-meta {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: center;
    -ms-flex-pack: justify;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 10px 30px 15px;
    border-top: 1px solid #ebebeb
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 767px) {
    .single-course .courses-meta {
        padding: 10px 15px 15px
    }
}

.single-course .courses-meta .student {
    font-size: 13px;
    color: #838383;
    margin-top: 5px
}

.single-course .courses-meta .rating {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 5px
}

.single-course .courses-meta .rating .rating-star {
    display: block;
    position: relative
}

.single-course .courses-meta .rating .rating-star::before {
    content: '\f005 \f005 \f005 \f005 \f005 ';
    font-family: "FontAwesome";
    font-size: 13px;
    color: #b4b4b4;
    letter-spacing: 2px
}

.single-course .courses-meta .rating .rating-star .rating-active {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden
}

.single-course .courses-meta .rating .rating-star .rating-active::before {
    content: '\f005 \f005 \f005 \f005 \f005 ';
    font-family: "FontAwesome";
    font-size: 13px;
    color: #fda000;
    letter-spacing: 2px
}

.single-course .courses-meta .rating span {
    font-size: 13px;
    color: #838383
}

.single-course:hover .courses-image a::before {
    opacity: 0.2
}

#powerTip {
    background-color: transparent;
    border-color: #ffffff;
    color: inherit;
    white-space: normal;
    -webkit-box-shadow: 0px 0px 109px 0px rgba(0, 0, 0, 0.18);
    box-shadow: 0px 0px 109px 0px rgba(0, 0, 0, 0.18);
    background-color: #ffffff
}

#course-hover {
    display: none
}

.course-hover {
    width: 360px;
    z-index: 11;
    padding: 40px 50px;
    position: relative
}

.course-hover::before {
    position: absolute;
    content: '';
    width: 15px;
    height: 15px;
    background-color: #ffffff;
    left: -8px;
    top: 50%;
    -webkit-transform: translateY(-50%) rotate(45deg);
    -ms-transform: translateY(-50%) rotate(45deg);
    transform: translateY(-50%) rotate(45deg)
}

.course-hover .top-meta {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.course-hover .top-meta .tag {
    border-radius: 5px;
    background-color: rgba(59, 188, 167, 0.071);
    font-size: 14px;
    font-weight: 600;
    color: #3bbca7;
    padding: 0 15px;
    height: 25px;
    line-height: 25px
}

.course-hover .top-meta .tag:hover {
    background-color: #3bbca7;
    color: #ffffff
}

.course-hover .top-meta .price .sale-price {
    font-size: 14px;
    font-weight: 600;
    color: #072f60
}

.course-hover .title {
    font-size: 18px;
    font-weight: 700;
    line-height: 1.3;
    margin-top: 15px
}

.course-hover .courses-meta {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 10px;
    gap: 15px
}

.course-hover .courses-meta .student {
    font-size: 13px;
    color: #838383;
    margin-top: 5px
}

.course-hover>p {
    font-size: 14px;
    margin-top: 10px
}

.course-hover .courses-key-future {
    padding-top: 15px
}

.course-hover .courses-key-future .title {
    font-size: 16px;
    font-weight: 700
}

.course-hover .courses-key-future .future-list {
    padding-top: 5px
}

.course-hover .courses-key-future .future-list li {
    position: relative;
    padding-left: 25px;
    font-size: 14px
}

.course-hover .courses-key-future .future-list li::before {
    position: absolute;
    top: 0;
    left: 0;
    content: '\f00c';
    font-family: "FontAwesome";
    color: #3bbca7
}

.course-hover .courses-btn {
    padding-top: 25px
}

.course-hover .courses-btn .btn {
    height: 40px;
    line-height: 40px;
    display: block
}

.courses-more {
    margin-top: 60px;
    position: relative
}

.courses-more .shape-1 {
    position: absolute;
    bottom: 0;
    left: 26%
}

@media only screen and (max-width: 767px) {
    .courses-more .shape-1 {
        left: 5%
    }
}

.courses-more .shape-2 {
    position: absolute;
    bottom: 20px;
    right: 27%
}

@media only screen and (max-width: 767px) {
    .courses-more .shape-2 {
        right: 7%
    }
}

.courses-more p {
    font-size: 18px;
    margin-bottom: 17px
}

.courses-more p strong {
    color: #072f60
}

.single-free-course {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    margin-top: 30px
}

.single-free-course .course-images {
    position: relative;
    z-index: 1
}

.single-free-course .course-images::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0)), to(black));
    background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, black 100%);
    background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, black 100%);
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, black 100%);
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    opacity: 0.6
}

.single-free-course .course-images img {
    width: 100%
}

.single-free-course .course-content {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 3;
    padding: 30px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .single-free-course .course-content {
        padding: 20px
    }
}

.single-free-course .course-content .play {
    border-radius: 50%;
    background-color: #ffffff;
    width: 50px;
    height: 50px;
    line-height: 53px;
    text-align: center;
    font-size: 18px;
    color: #3bbca7
}

.single-free-course .course-content .play:hover {
    background-color: #072f60;
    color: #ffffff
}

.single-free-course .course-content .title {
    color: #ffffff;
    margin-top: 18px
}

.course-header {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: -22px
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .course-header {
        display: block;
        text-align: center
    }
}

.course-header .section-title {
    margin-top: 25px
}

.courses-banner {
    margin-top: 30px
}

.courses-banner a {
    border-radius: 5px;
    overflow: hidden
}

.course-list-wrapper {
    margin-top: -50px
}

.course-top-bar {
    padding-top: 30px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

.course-top-bar .label {
    font-size: 15px;
    font-weight: 400;
    color: #666666;
    white-space: nowrap;
    margin-right: 10px
}

.course-top-text {
    margin-top: 15px
}

.course-top-text p span {
    font-weight: 700;
    color: #072f60
}

.course-top-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

.course-top-inner>* {
    margin-right: 30px
}

.course-top-inner>*:last-child {
    margin-right: 0
}

.course-top-menu {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 15px
}

.course-top-menu .nav li {
    margin-right: 10px
}

.course-top-menu .nav li:last-child {
    margin-right: 0
}

.course-top-menu .nav li button {
    padding: 0;
    border: 0;
    background-color: transparent;
    color: #666666;
    font-size: 15px
}

.course-top-menu .nav li button.active {
    color: #3bbca7
}

.course-top-action {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 20px;
    padding: 0 20px;
    border-radius: 5px;
    background-color: #f6f7f9;
    height: 40px;
    line-height: 40px
}

.course-top-action .nice-select {
    float: none;
    height: auto;
    line-height: 1;
    padding: 0;
    padding-right: 20px;
    border: 0;
    color: #072f60;
    font-weight: 700;
    font-size: 15px;
    background: none
}

.course-top-action .nice-select::after {
    right: 0;
    width: 8px;
    height: 8px;
    border-bottom: 1px solid #072f60;
    border-right: 1px solid #072f60;
    margin-top: -6px
}

.course-top-action .nice-select .option {
    line-height: 35px;
    padding-left: 15px;
    padding-right: 22px;
    font-size: 14px;
    font-weight: 500
}

.course-collapse-btn {
    margin-top: 20px
}

.course-collapse-btn .btn {
    height: 40px;
    line-height: 40px;
    padding: 0 25px;
    background-color: #072f60;
    color: #ffffff
}

.course-collapse-btn .btn i {
    margin: 0 3px
}

.course-collapse-btn .btn.collapsed {
    background-color: #3bbca7
}

.course-collapse-btn .btn:hover {
    background-color: #072f60
}

.single-course-list {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding: 50px 0
}

@media only screen and (max-width: 767px) {
    .single-course-list {
        display: block;
        padding: 30px 0
    }
}

.single-course-list:first-child {
    padding-top: 30px
}

.single-course-list:last-child {
    padding-bottom: 0
}

.single-course-list+.single-course-list {
    border-top: 1px solid #ebebeb
}

.single-course-list .course-image {
    overflow: hidden;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.single-course-list .course-image a {
    display: block;
    position: relative
}

.single-course-list .course-image a img {
    border-radius: 5px
}

@media only screen and (max-width: 767px) {
    .single-course-list .course-image a img {
        width: 100%
    }
}

.single-course-list .course-content {
    padding-left: 30px;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1
}

@media only screen and (max-width: 767px) {
    .single-course-list .course-content {
        padding-left: 0;
        padding-top: 25px
    }
}

.single-course-list .course-content .top-meta {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

.single-course-list .course-content .top-meta>* {
    margin-right: 20px
}

.single-course-list .course-content .top-meta>*:last-child {
    margin-right: 0
}

.single-course-list .course-content .top-meta .tag {
    border-radius: 5px;
    background-color: rgba(59, 188, 167, 0.071);
    font-size: 14px;
    font-weight: 600;
    color: #3bbca7;
    padding: 0 15px;
    height: 25px;
    line-height: 25px
}

.single-course-list .course-content .top-meta .tag:hover {
    background-color: #3bbca7;
    color: #ffffff
}

.single-course-list .course-content .top-meta .price .sale-price {
    font-size: 14px;
    font-weight: 600;
    color: #072f60
}

.single-course-list .course-content .title {
    font-size: 18px;
    font-weight: 700;
    line-height: 1.3;
    margin-top: 15px
}

.single-course-list .course-content .author-name {
    font-size: 12px;
    font-weight: 600;
    color: #838383
}

.single-course-list .course-content p {
    margin-top: 10px
}

.single-course-list .course-content .bottom-meta {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
}

.single-course-list .course-content .bottom-meta>* {
    margin-right: 20px
}

.single-course-list .course-content .bottom-meta>*:last-child {
    margin-right: 0
}

.single-course-list .course-content .bottom-meta .meta-action {
    font-size: 13px;
    color: #838383;
    margin-top: 5px;
    white-space: nowrap
}

.single-course-list .course-content .bottom-meta .rating {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 5px
}

.single-course-list .course-content .bottom-meta .rating .rating-star {
    display: block;
    position: relative
}

.single-course-list .course-content .bottom-meta .rating .rating-star::before {
    content: '\f005 \f005 \f005 \f005 \f005 ';
    font-family: "FontAwesome";
    font-size: 13px;
    color: #b4b4b4;
    letter-spacing: 2px
}

.single-course-list .course-content .bottom-meta .rating .rating-star .rating-active {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden
}

.single-course-list .course-content .bottom-meta .rating .rating-star .rating-active::before {
    content: '\f005 \f005 \f005 \f005 \f005 ';
    font-family: "FontAwesome";
    font-size: 13px;
    color: #fda000;
    letter-spacing: 2px
}

.single-course-list .course-content .bottom-meta .rating span {
    font-size: 13px;
    color: #838383
}

.category-wrapper {
    padding-top: 30px
}

.single-category {
    position: relative;
    margin-top: 30px
}

.single-category .category-image a {
    border-radius: 12px;
    overflow: hidden;
    position: relative;
    display: block
}

.single-category .category-image a::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0)), color-stop(62%, black));
    background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, black 62%);
    background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, black 62%);
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, black 62%);
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    opacity: 0.6;
    z-index: 1
}

.single-category .category-image a img {
    width: 100%;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.single-category .category-content {
    position: absolute;
    bottom: 0;
    left: 0;
    padding: 35px 40px;
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    z-index: 2
}

@media only screen and (max-width: 767px) {
    .single-category .category-content {
        padding: 20px 25px
    }
}

.single-category .category-content .category-title .title {
    font-size: 18px;
    font-weight: 700;
    color: #ffffff
}

.single-category .category-content .category-title p {
    font-size: 14px;
    color: #ffffff
}

.single-category .category-content .category-link {
    border-radius: 50%;
    background-color: #3bbca7;
    width: 42px;
    height: 42px;
    line-height: 42px;
    text-align: center;
    font-size: 18px;
    color: #ffffff
}

.single-category:hover .category-image img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1)
}

.feature-category-wrapper {
    margin-top: 60px
}

.single-feature-category {
    position: relative;
    text-align: center
}

.feature-category-box {
    position: relative;
    max-width: 174px;
    width: 100%;
    margin: 0 auto;
    padding-top: 35px
}

.feature-category-box .box-icon a {
    border-radius: 8px;
    background-color: #ffffff;
    -webkit-box-shadow: 0px 0px 62px 0px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 0px 62px 0px rgba(0, 0, 0, 0.05);
    width: 118px;
    height: 118px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin: 0 auto;
    position: relative;
    z-index: 1
}

.feature-category-box .shape-1 {
    border-radius: 50%;
    background-color: #3bbca7;
    opacity: 0.102;
    width: 122px;
    height: 122px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    left: 0px;
    top: 0px
}

.feature-category-box .shape-2 {
    width: 74px;
    position: absolute;
    top: 15px;
    right: 0;
    z-index: -1
}

.box-content {
    margin-top: 30px
}

.box-content .title {
    font-size: 24px;
    font-weight: 600
}

.feature-category-active {
    position: relative
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {

    .feature-category-active .swiper-button-next,
    .feature-category-active .swiper-button-prev {
        display: none
    }
}

.feature-category-active .swiper-pagination {
    width: 100%;
    margin-top: 30px;
    position: relative
}

@media only screen and (min-width: 1500px),
only screen and (min-width: 1200px) and (max-width: 1499px),
only screen and (min-width: 992px) and (max-width: 1199px) {
    .feature-category-active .swiper-pagination {
        display: none
    }
}

.feature-category-active .swiper-pagination .swiper-pagination-bullet {
    margin: 0 4px
}

.feature-section {
    background-color: #072f60;
    padding-top: 15px;
    padding-bottom: 45px
}

.single-feature {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 30px
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single-feature .feature-icon img {
        height: 58px
    }
}

.single-feature .feature-content {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    padding-left: 30px
}

.single-feature .feature-content .title {
    font-size: 22px;
    font-weight: 600;
    color: #ffffff
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single-feature .feature-content .title {
        font-size: 18px
    }
}

@media only screen and (max-width: 767px) {
    .single-feature .feature-content .title {
        font-size: 20px
    }
}

.single-feature .feature-content p {
    color: #c4cce1
}

.feature-section-02 {
    position: relative;
    overflow: hidden;
    z-index: 1
}

.feature-section-02 .feature-shape-01 {
    border: 1px solid #3bbca7;
    border-radius: 50%;
    width: 1086px;
    height: 1086px;
    position: absolute;
    z-index: -1;
    left: -410px;
    bottom: -680px;
    opacity: 0.3
}

.feature-section-02 .feature-shape-01::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    border: 1px solid #3bbca7;
    border-radius: 50%;
    -webkit-transform: scale(0.86);
    -ms-transform: scale(0.86);
    transform: scale(0.86)
}

.feature-section-02 .feature-shape-02 {
    width: 116px;
    position: absolute;
    top: 140px;
    right: 16%;
    z-index: -1
}

.feature-wrapper-02 {
    padding-top: 20px
}

.single-feature-02 {
    max-width: 250px;
    margin: 0 auto;
    text-align: center;
    margin-top: 40px
}

.single-feature-02 .feature-content {
    margin-top: 38px
}

.single-feature-02 .feature-content .title {
    font-size: 20px;
    font-weight: 700;
    color: #072f60
}

.single-feature-02 .feature-content p {
    margin-top: 5px
}

.feature-category-section {
    border-bottom: 1px solid #ebebeb
}

.feature-category-header {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-top: -20px;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

.feature-category-header .section-title {
    margin-top: 23px
}

.feature-category-btn {
    margin-top: 20px
}

.feature-category-btn .btn {
    padding: 0 40px
}

.feature-category-body {
    padding-top: 20px
}

.single-category-item {
    margin-top: 30px
}

.single-category-item a {
    display: block;
    height: 100px;
    line-height: 100px;
    background-color: #f6f7f9;
    position: relative;
    border-radius: 5px;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 767px) {
    .single-category-item a {
        height: 80px;
        line-height: 80px;
    }
}

.single-category-item a .item-icon {
    position: absolute;
    top: 50%;
    left: 30px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%)
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 767px) {
    .single-category-item a .item-icon {
        height: 41px;
        left: 20px
    }
}

.single-category-item a .title {
    font-size: 24px;
    font-weight: 600;
    color: #072f60;
    line-height: 1.3;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 767px) {
    .single-category-item a .title {
        font-size: 18px
    }
}

.single-category-item a:hover {
    background-color: #072f60
}

.single-category-item a:hover .title {
    color: #ffffff
}

.single-category-item.category-white a {
    background-color: #ffffff
}

.single-category-item.category-white a:hover {
    background-color: #072f60
}

.testimonial-wrapper {
    padding: 40px 110px;
    border-radius: 10px;
    background-color: #fdfaf1;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .testimonial-wrapper {
        padding: 40px 60px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .testimonial-wrapper {
        padding: 40px
    }
}

@media only screen and (max-width: 575px) {
    .testimonial-wrapper {
        padding: 20px
    }
}

.testimonial-author {
    width: 35%
}

@media only screen and (max-width: 767px) {
    .testimonial-author {
        width: 70%;
        margin: 0 auto
    }
}

.testimonial-author-wrapper {
    border: 1px solid rgba(255, 211, 77, 0.3);
    border-radius: 50%;
    padding: 30px;
    position: relative
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .testimonial-author-wrapper {
        padding: 20px
    }
}

.testimonial-author-wrapper .testimonial-quote {
    position: absolute;
    top: 23px;
    right: 23px;
    border-radius: 50%;
    background-color: #3bbca7;
    width: 79px;
    height: 79px;
    line-height: 90px;
    text-align: center;
    font-size: 42px;
    color: #ffffff;
    z-index: 2
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .testimonial-author-wrapper .testimonial-quote {
        width: 59px;
        height: 59px;
        line-height: 70px;
        font-size: 30px
    }
}

.author-images-wrapper {
    border: 1px solid rgba(255, 211, 77, 0.3);
    border-radius: 50%;
    padding: 30px
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .author-images-wrapper {
        padding: 20px
    }
}

.author-image img {
    border-radius: 50%;
    width: 100%
}

.testimonial-content {
    width: 65%;
    padding-left: 70px;
    padding-top: 30px
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .testimonial-content {
        padding-left: 30px
    }
}

@media only screen and (max-width: 767px) {
    .testimonial-content {
        width: 100%;
        padding-left: 0
    }
}

@media only screen and (max-width: 575px) {
    .single-testimonial-content {
        text-align: center
    }
}

.single-testimonial-content p {
    font-size: 24px;
    font-weight: 500;
    line-height: 1.66;
    color: #072f60
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .single-testimonial-content p {
        font-size: 20px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single-testimonial-content p {
        font-size: 18px
    }
}

@media only screen and (max-width: 575px) {
    .single-testimonial-content p {
        font-size: 16px
    }
}

.single-testimonial-content .name {
    margin-top: 40px
}

.testimonial-content-active .swiper-pagination {
    position: relative;
    text-align: left;
    bottom: 0;
    margin-top: 25px
}

@media only screen and (max-width: 575px) {
    .testimonial-content-active .swiper-pagination {
        text-align: center
    }
}

.testimonial-content-active .swiper-pagination .swiper-pagination-bullet {
    margin: 0 15px 0 0
}

.testimonial-wrapper-02 {
    margin-top: 60px
}

.single-testimonial-02 {
    background-color: #f6f7f9;
    padding: 60px;
    padding-top: 80px;
    position: relative;
    margin-top: 60px;
    border-radius: 10px
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single-testimonial-02 {
        padding: 40px;
        padding-top: 80px
    }
}

@media only screen and (max-width: 575px) {
    .single-testimonial-02 {
        padding: 30px;
        padding-top: 70px
    }
}

.single-testimonial-02 .testimonial-thumb {
    width: 120px;
    position: absolute;
    top: -60px;
    left: 60px
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 575px) {
    .single-testimonial-02 .testimonial-thumb {
        width: 90px;
        top: -45px;
        left: 30px
    }
}

.single-testimonial-02 .testimonial-thumb img {
    border-radius: 50%
}

.single-testimonial-02 .testimonial-text {
    font-size: 22px;
    font-weight: 400;
    color: #072f60;
    max-width: 400px
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 575px) {
    .single-testimonial-02 .testimonial-text {
        font-size: 20px
    }
}

.single-testimonial-02 .testimonial-meta {
    margin-top: 35px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
}

.single-testimonial-02 .testimonial-meta .testimonial-quote {
    border-radius: 50%;
    background-color: #3bbca7;
    width: 80px;
    height: 80px;
    line-height: 90px;
    text-align: center;
    font-size: 42px;
    color: #ffffff
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .single-testimonial-02 .testimonial-meta .testimonial-quote {
        width: 60px;
        height: 60px;
        line-height: 70px;
        font-size: 30px
    }
}

.single-testimonial-02 .testimonial-meta .meta-content {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    padding-left: 30px
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 575px) {
    .single-testimonial-02 .testimonial-meta .meta-content {
        padding-left: 20px
    }
}

.single-testimonial-02 .testimonial-meta .meta-content .name {
    font-size: 18px
}

.testimonial-active-02 .swiper-pagination {
    position: relative;
    bottom: 0;
    height: 18px;
    margin-top: 42px
}

.testimonial-content-03 {
    text-align: center;
    max-width: 510px;
    margin: 0 auto
}

.testimonial-content-03 .testimonial-quote {
    border-radius: 50%;
    background-color: #3bbca7;
    width: 80px;
    height: 80px;
    line-height: 90px;
    text-align: center;
    font-size: 42px;
    color: #ffffff;
    margin: 0 auto
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .testimonial-content-03 .testimonial-quote {
        width: 60px;
        height: 60px;
        line-height: 70px;
        font-size: 30px
    }
}

.testimonial-content-03>p {
    font-size: 30px;
    font-weight: 600;
    color: #072f60;
    line-height: 1.4;
    margin-top: 30px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .testimonial-content-03>p {
        font-size: 28px
    }
}

@media only screen and (max-width: 575px) {
    .testimonial-content-03>p {
        font-size: 18px
    }
}

.testimonial-content-03 .meta-content {
    margin-top: 40px
}

@media only screen and (max-width: 575px) {
    .testimonial-content-03 .meta-content {
        margin-top: 20px
    }
}

.testimonial-content-03 .meta-content .name {
    font-size: 18px
}

.testimonial-active-03 .swiper-pagination {
    position: relative;
    bottom: 0;
    margin-top: 25px
}

@media only screen and (max-width: 575px) {
    .testimonial-active-03 .swiper-pagination {
        text-align: center
    }
}

.testimonial-active-03 .swiper-pagination .swiper-pagination-bullet {
    margin: 0 8px
}

.testimonial-image-01 {
    position: relative;
    z-index: 1;
    padding-bottom: 110px;
    padding-top: 110px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .testimonial-image-01 {
        padding-bottom: 60px;
        padding-top: 60px
    }
}

.testimonial-image-01 .testimonial-shape {
    background-color: #ffcc66;
    width: 250px;
    height: 250px;
    border-radius: 50%;
    position: absolute;
    right: -30px;
    bottom: 0;
    z-index: -1
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .testimonial-image-01 .testimonial-shape {
        width: 190px;
        height: 190px
    }
}

.testimonial-image-01 .image img {
    border-radius: 5px
}

.testimonial-image-02 {
    position: relative;
    z-index: 1;
    padding-bottom: 110px;
    padding-left: 40px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .testimonial-image-02 {
        padding-bottom: 60px
    }
}

.testimonial-image-02 .testimonial-shape {
    border-radius: 50%;
    background-color: #afe0fb;
    width: 195px;
    height: 195px;
    position: absolute;
    right: 0px;
    bottom: 0;
    z-index: -1
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .testimonial-image-02 .testimonial-shape {
        width: 155px;
        height: 155px
    }
}

.testimonial-image-02 .image img {
    border-radius: 5px
}

.testimonial-counter {
    position: relative;
    z-index: 1;
    overflow: hidden
}

.testimonial-counter .testimonial-counter-shape-03 {
    border: 1px solid #3bbca7;
    border-radius: 50%;
    width: 1286px;
    height: 1286px;
    position: absolute;
    z-index: -1;
    right: -480px;
    top: 100px;
    opacity: 0.302
}

.testimonial-counter .testimonial-counter-shape-03::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    border: 1px solid #3bbca7;
    border-radius: 50%;
    -webkit-transform: scale(0.86);
    -ms-transform: scale(0.86);
    transform: scale(0.86)
}

.testimonial-wrapper-04 {
    background-color: transparent
}

.testimonial-wrapper-04 .testimonial-author-wrapper {
    border: 0
}

@media only screen and (max-width: 575px) {
    .testimonial-wrapper-04 .testimonial-author-wrapper {
        padding: 0
    }
}

.testimonial-wrapper-04 .testimonial-author {
    position: relative
}

.testimonial-wrapper-04 .testimonial-author .shape-1 {
    width: 87px;
    position: absolute;
    top: 40px;
    z-index: 4;
    left: 0
}

@media only screen and (max-width: 575px) {
    .testimonial-wrapper-04 .testimonial-author .shape-1 {
        width: 50px;
        top: 15px
    }
}

.testimonial-wrapper-04 .testimonial-author .shape-2 {
    width: 32px;
    position: absolute;
    bottom: 40px;
    right: 40px;
    z-index: 4
}

@media only screen and (max-width: 575px) {
    .testimonial-wrapper-04 .testimonial-author .shape-2 {
        right: 0;
        bottom: 0
    }
}

.testimonial-wrapper-04 .author-images-wrapper {
    border-color: #8a7efc
}

.testimonial-active-04 .swiper-pagination {
    position: relative;
    bottom: 0;
    margin-top: 25px
}

@media only screen and (max-width: 575px) {
    .testimonial-active-04 .swiper-pagination {
        text-align: center
    }
}

.testimonial-active-04 .swiper-pagination .swiper-pagination-bullet {
    margin: 0 8px
}

.testimonial-content-05 {
    text-align: center;
    padding: 0 30px
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .testimonial-content-05 {
        padding: 0
    }
}

.testimonial-content-05 .testimonial-quote {
    color: #3bbca7;
    font-size: 42px;
    line-height: 1.1
}

.testimonial-content-05 .testimonial-quote i {
    line-height: 1
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .testimonial-content-05 .testimonial-quote {
        font-size: 30px
    }
}

.testimonial-content-05>p {
    font-size: 22px;
    font-weight: 600;
    color: #072f60;
    line-height: 1.8;
    margin-top: 20px
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .testimonial-content-05>p {
        font-size: 20px
    }
}

@media only screen and (max-width: 575px) {
    .testimonial-content-05>p {
        font-size: 18px
    }
}

.testimonial-content-05 .meta-content {
    margin-top: 15px
}

@media only screen and (max-width: 575px) {
    .testimonial-content-05 .meta-content {
        margin-top: 20px
    }
}

.testimonial-content-05 .meta-content img {
    width: 90px;
    border-radius: 50%
}

.testimonial-content-05 .meta-content .name {
    font-size: 18px;
    margin-top: 15px
}

.brand-wrapper {
    border-bottom: 1px solid #ebebeb
}

.brand-title {
    font-size: 24px;
    font-weight: 400;
    color: #072f60;
    margin-top: -7px
}

@media only screen and (max-width: 575px) {
    .brand-title {
        font-size: 18px
    }
}

.brand-title span {
    font-weight: 700;
    color: #3bbca7
}

.brand-active {
    max-width: 780px;
    width: 100%;
    margin: 48px auto 0
}

.blog-wrapper {
    padding-top: 20px
}

.blog-wrapper-02 {
    margin-top: -50px
}

.single-blog {
    margin-top: 30px
}

.single-blog .blog-image {
    position: relative
}

.single-blog .blog-image a {
    display: block;
    border-radius: 8px;
    overflow: hidden
}

.single-blog .blog-image a img {
    width: 100%;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.single-blog .blog-image .tags {
    padding: 0 25px;
    height: 30px;
    line-height: 30px;
    background-color: #3bbca7;
    font-weight: 500;
    font-size: 14px;
    color: #ffffff;
    position: absolute;
    display: inline-block;
    border-radius: 50px;
    position: absolute;
    top: 40px;
    left: 30px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .single-blog .blog-image .tags {
        left: 20px;
        top: 30px
    }
}

@media only screen and (max-width: 575px) {
    .single-blog .blog-image .tags {
        top: 15px;
        left: 10px
    }
}

.single-blog .blog-content {
    padding-top: 32px
}

.single-blog .blog-content .meta {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
}

.single-blog .blog-content .meta a {
    font-size: 14px;
    font-weight: 400;
    color: #838383
}

.single-blog .blog-content .meta a i {
    margin-right: 3px
}

.single-blog .blog-content .meta .date {
    color: #3bbca7
}

.single-blog .blog-content .meta .author {
    color: #838383;
    position: relative
}

.single-blog .blog-content .meta .author::before {
    content: '/';
    font-size: 14px;
    font-weight: 400;
    color: #838383;
    margin: 0 8px
}

.single-blog .blog-content .title {
    font-size: 24px;
    font-weight: 700;
    color: #072f60;
    line-height: 1.4;
    margin-top: 10px
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 575px) {
    .single-blog .blog-content .title {
        font-size: 18px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single-blog .blog-content .title {
        font-size: 20px
    }
}

.single-blog .blog-content p {
    margin-top: 15px
}

.single-blog .blog-content .btn {
    margin-top: 25px
}

.single-blog.single-blog-02 .blog-image a {
    border-radius: 0px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px
}

.single-blog.single-blog-02 .blog-content {
    -webkit-box-shadow: 0px 0px 98px 0px rgba(0, 0, 0, 0.07);
    box-shadow: 0px 0px 98px 0px rgba(0, 0, 0, 0.07);
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    background-color: #ffffff;
    padding: 30px
}

@media only screen and (max-width: 575px) {
    .single-blog.single-blog-02 .blog-content {
        padding: 20px
    }
}

.single-blog.blog-list {
    margin-top: 50px
}

.single-blog.blog-list .blog-content .meta {
    gap: 25px
}

.single-blog:hover .blog-image a img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1)
}

.call-to-action-wrapper {
    background-color: #3bbca7;
    padding: 30px 110px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 10px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .call-to-action-wrapper {
        padding: 30px 60px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .call-to-action-wrapper {
        display: block;
        text-align: center
    }
}

@media only screen and (max-width: 767px) {
    .call-to-action-wrapper {
        padding: 30px 60px;
        display: block;
        text-align: center
    }
}

@media only screen and (max-width: 575px) {
    .call-to-action-wrapper {
        padding: 25px
    }
}

.call-to-action-content {
    max-width: 400px
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .call-to-action-content {
        margin: 0 auto
    }
}

.call-to-action-content .title {
    font-size: 36px;
    font-weight: 600;
    color: #ffffff;
    line-height: 1.3
}

@media only screen and (max-width: 575px) {
    .call-to-action-content .title {
        font-size: 28px
    }
}

.call-to-action-content p {
    font-size: 18px;
    color: #ffffff;
    margin-top: 7px
}

@media only screen and (max-width: 575px) {
    .call-to-action-content p {
        font-size: 16px
    }
}

.call-to-action-content .btn {
    padding: 0 35px;
    margin-top: 20px
}

.call-to-action-image {
    position: relative;
    max-width: 410px;
    width: 100%;
    text-align: center;
    z-index: 1
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .call-to-action-image {
        margin-top: 50px
    }
}

.call-to-action-image .shape-1 {
    position: absolute;
    width: 264px;
    top: 0;
    left: 0;
    z-index: -1
}

.call-to-action-image .shape-1 svg .shape-path1 {
    fill: #384c4c
}

.call-to-action-image .shape-2 {
    position: absolute;
    width: 177px;
    top: 50%;
    right: 0;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    z-index: -1
}

.call-to-action-image .shape-2 svg .shape-path1 {
    fill: #ffd24d
}

.call-to-action-image .image {
    padding-left: 30px
}

.call-to-action-image .image img {
    border-radius: 10px
}

.call-to-action-bg {
    position: relative;
    z-index: 1;
    overflow: hidden
}

.call-to-action-bg .call-to-action-shape-01 {
    width: 1093px;
    position: absolute;
    z-index: -1;
    top: -150px;
    right: -200px;
    opacity: 0.1
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .call-to-action-bg .call-to-action-shape-01 {
        width: 893px
    }
}

.call-to-action-bg .call-to-action-shape-01 svg .shape-path {
    fill: #3bbca7
}

.call-to-action-bg .call-to-action-shape-02 {
    border-radius: 50%;
    background-color: #afe0fb;
    width: 36px;
    height: 36px;
    position: absolute;
    top: 150px;
    left: 10%;
    z-index: -1
}

.call-to-action-bg .call-to-action-shape-03 {
    border: 1px solid #ebebeb;
    border-radius: 50%;
    width: 1086px;
    height: 1086px;
    position: absolute;
    z-index: -1;
    left: -440px;
    top: -490px
}

.call-to-action-bg .call-to-action-shape-03::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    border: 1px solid #ebebeb;
    border-radius: 50%;
    -webkit-transform: scale(0.86);
    -ms-transform: scale(0.86);
    transform: scale(0.86)
}

.call-to-action-content-02 ul {
    padding-top: 26px
}

.call-to-action-content-02 ul li {
    font-size: 16px;
    line-height: 2.25;
    position: relative;
    padding-left: 33px
}

.call-to-action-content-02 ul li::before {
    position: absolute;
    top: 0;
    left: 0;
    content: '\f00c';
    font-family: "FontAwesome";
    color: #3bbca7
}

.call-to-action-content-02 .btn {
    margin-top: 30px
}

.call-to-action-images-02 {
    position: relative;
    z-index: 1
}

.call-to-action-images-02 .call-to-images-shape-01 {
    background-color: #ffcc66;
    width: 499px;
    height: 499px;
    position: absolute;
    top: 0;
    right: 0;
    border-radius: 50%;
    z-index: -1
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .call-to-action-images-02 .call-to-images-shape-01 {
        width: 350px;
        height: 350px
    }
}

.call-to-action-images-02 .call-to-images-shape-02 {
    position: absolute;
    width: 115px;
    top: 100px;
    left: 15%;
    z-index: 1
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .call-to-action-images-02 .call-to-images-shape-02 {
        top: 0;
        left: 0;
        z-index: -1
    }
}

.call-to-action-images-02 .call-to-images-shape-02 svg .shape-path {
    fill: #676767
}

.call-to-action-section-03 {
    background-color: #116eee;
    padding: 40px 0 70px;
    position: relative;
    z-index: 1;
    overflow: hidden
}

.call-to-action-section-03 .shape-01 {
    width: 120px;
    position: absolute;
    top: -30px;
    right: 33%
}

.call-to-action-section-03 .shape-02 {
    border: 1px solid #ffffff;
    border-radius: 50%;
    width: 1086px;
    height: 1086px;
    position: absolute;
    z-index: -1;
    right: -380px;
    bottom: 170px;
    opacity: 0.3
}

.call-to-action-section-03 .shape-02::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    border: 1px solid #ffffff;
    border-radius: 50%;
    -webkit-transform: scale(0.86);
    -ms-transform: scale(0.86);
    transform: scale(0.86)
}

.call-to-action-image-03 {
    text-align: center;
    position: relative;
    z-index: 1;
    margin-top: 30px;
    padding-top: 30px
}

.call-to-action-image-03 .call-to-action-shape {
    border-radius: 50%;
    background-color: #ffcc66;
    width: 200px;
    height: 200px;
    position: absolute;
    top: -15px;
    left: 0;
    z-index: -1
}

.call-to-action-image-03 .image img {
    border-radius: 10px
}

.call-to-action-content-03 {
    margin-top: 25px
}

.call-to-action-content-03 .title {
    font-size: 36px;
    font-weight: 700;
    color: #ffffff
}

@media only screen and (max-width: 767px) {
    .call-to-action-content-03 .title {
        font-size: 30px
    }
}

@media only screen and (max-width: 575px) {
    .call-to-action-content-03 .title {
        font-size: 24px
    }
}

.call-to-action-btn-03 {
    margin-top: 30px
}

.call-to-action-btn-03 .btn {
    font-size: 14px;
    letter-spacing: 1px;
    padding: 0 30px
}

.call-to-action-04 {
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    z-index: 1
}

@media only screen and (max-width: 575px) {
    .call-to-action-04 {
        background-position: center left
    }
}

.call-to-action-04::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: -webkit-gradient(linear, left top, right top, from(#f1f6e9), color-stop(80%, rgba(241, 246, 233, 0)));
    background: -webkit-linear-gradient(left, #f1f6e9 0%, rgba(241, 246, 233, 0) 80%);
    background: -o-linear-gradient(left, #f1f6e9 0%, rgba(241, 246, 233, 0) 80%);
    background: linear-gradient(90deg, #f1f6e9 0%, rgba(241, 246, 233, 0) 80%);
    z-index: -1
}

.call-to-action-content-04 {
    max-width: 430px;
    margin-top: -8px
}

@media only screen and (max-width: 767px) {
    .call-to-action-content-04 {
        max-width: 320px
    }
}

.call-to-action-content-04 .sub-title {
    font-size: 14px;
    font-weight: 600;
    color: #3bbca7
}

.call-to-action-content-04 .title {
    font-size: 30px;
    font-weight: 700
}

.call-to-action-content-04 p {
    margin-top: 10px
}

.call-to-action-content-04 .call-to-action-btn-04 {
    margin-top: 38px;
    position: relative;
    padding-right: 70px;
    display: inline-block
}

.call-to-action-content-04 .call-to-action-btn-04 .shape {
    position: absolute;
    top: 0;
    right: 0
}

.newsletter-section {
    background-color: #3bbca7;
    padding-top: 50px;
    padding-bottom: 100px;
    position: relative;
    z-index: 1;
    overflow: hidden
}

@media only screen and (max-width: 767px) {
    .newsletter-section {
        padding-top: 10px;
        padding-bottom: 60px
    }
}

.newsletter-section .newsletter-shape-01 {
    position: absolute;
    bottom: -38px;
    left: 6%;
    z-index: -1;
    opacity: 0.1
}

.newsletter-section .newsletter-shape-01 svg {
    fill: #000000;
    width: 258px
}

.newsletter-section .newsletter-shape-02 {
    border: 1px solid #ffffff;
    border-radius: 50%;
    width: 795px;
    height: 795px;
    position: absolute;
    z-index: -1;
    right: -140px;
    bottom: 20px;
    opacity: 0.2
}

.newsletter-section .newsletter-shape-02::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    border: 1px solid #ffffff;
    border-radius: 50%;
    -webkit-transform: scale(0.86);
    -ms-transform: scale(0.86);
    transform: scale(0.86)
}

.newsletter-section .newsletter-shape-03 {
    border-radius: 50%;
    background-color: #ffcc66;
    width: 36px;
    height: 36px;
    position: absolute;
    top: 50px;
    right: 13%;
    z-index: -1
}

@media only screen and (max-width: 575px) {
    .newsletter-section .newsletter-shape-03 {
        right: 3%
    }
}

.newsletter-content {
    margin-top: 40px
}

.newsletter-content .title {
    font-size: 36px;
    font-weight: 600;
    color: #ffffff
}

@media only screen and (max-width: 575px) {
    .newsletter-content .title {
        font-size: 28px
    }
}

.newsletter-content p {
    font-size: 20px;
    color: #ffffff
}

@media only screen and (max-width: 575px) {
    .newsletter-content p {
        font-size: 16px
    }
}

.newsletter-form {
    margin-top: 50px;
    position: relative
}

.newsletter-form input {
    width: 100%;
    height: 65px;
    font-size: 16px;
    font-weight: 400;
    padding-left: 20px;
    padding-right: 150px;
    border: 0;
    border-radius: 4px
}

@media only screen and (max-width: 575px) {
    .newsletter-form input {
        padding: 0 20px
    }
}

.newsletter-form .btn {
    position: absolute;
    height: 65px;
    background-color: #072f60;
    color: #ffffff;
    top: 0;
    right: 0;
    padding: 0 30px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

@media only screen and (max-width: 575px) {
    .newsletter-form .btn {
        position: relative;
        margin-top: 10px;
        width: 100%;
        border-radius: 5px
    }
}

.banner-wrapper {
    margin-top: -50px
}

.single-banner {
    position: relative;
    margin-top: 50px
}

.single-banner .banner-images img {
    width: 100%;
    border-radius: 3px
}

.single-banner .banner-content {
    position: absolute;
    top: 0;
    left: 0;
    width: 68%;
    padding: 60px
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 767px) {
    .single-banner .banner-content {
        padding: 30px;
        width: 73%
    }
}

@media only screen and (max-width: 575px) {
    .single-banner .banner-content {
        padding: 15px
    }
}

.single-banner .banner-content .sub-title {
    font-size: 14px;
    font-weight: 700;
    color: #3bbca7
}

.single-banner .banner-content .title {
    font-size: 26px;
    font-weight: 700;
    color: #072f60;
    line-height: 1.3
}

@media only screen and (max-width: 575px) {
    .single-banner .banner-content .title {
        font-size: 16px;
        margin-top: 5px
    }
}

.single-banner .banner-content .btn {
    margin-top: 25px
}

@media only screen and (max-width: 575px) {
    .single-banner .banner-content .btn {
        font-size: 13px;
        height: 35px;
        line-height: 35px;
        margin-top: 10px
    }
}

.course-category-wrapper {
    padding-top: 30px
}

.single-course-category {
    margin-top: 30px
}

.single-course-category .course-category-image a {
    display: block;
    overflow: hidden;
    border-radius: 5px
}

.single-course-category .course-category-content {
    margin-top: 20px
}

.single-course-category .course-category-content .title {
    font-size: 22px;
    font-weight: 700;
    line-height: 1.3
}

.single-course-category .course-category-content p {
    color: #838383
}

.event-section {
    position: relative;
    z-index: 1
}

.event-section .event-patan {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    z-index: -1;
    opacity: 0.2
}

.evenet-wrapper {
    margin-top: 50px
}

.single-event {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 5px;
    background-color: white;
    -webkit-box-shadow: 0px 0px 90px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 90px 0px rgba(0, 0, 0, 0.1);
    padding: 30px;
    margin-top: 20px
}

@media only screen and (max-width: 575px) {
    .single-event {
        display: block;
        text-align: center
    }
}

.single-event .event-image {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.single-event .event-image img {
    border-radius: 50%
}

.single-event .event-content {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    padding-left: 30px;
    max-width: 320px
}

@media only screen and (max-width: 575px) {
    .single-event .event-content {
        padding-left: 0;
        padding-top: 25px
    }
}

.single-event .event-content .date {
    color: #3bbca7;
    font-family: "Heebo", sans-serif;
    font-weight: 700;
    font-size: 14px
}

.single-event .event-content .title {
    font-size: 18px;
    font-weight: 700
}

.single-event .event-content p {
    margin-top: 5px
}

.about-wrapper {
    margin-top: -30px
}

.about-images {
    position: relative;
    z-index: 1
}

.about-images .shape-1 {
    width: 150px;
    position: absolute;
    top: 30px;
    left: 85px;
    z-index: -1
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .about-images .shape-1 {
        width: 120px;
        left: 45px
    }
}

@media only screen and (max-width: 767px) {
    .about-images .shape-1 {
        width: 100px;
        left: 50px
    }
}

.about-images .single-image {
    margin-top: 30px
}

.about-images .single-image img {
    width: 100%;
    border-radius: 5px
}

.about-content {
    margin-top: 30px;
    max-width: 520px;
    margin-left: auto
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .about-content {
        margin-left: 0
    }
}

.about-content .title {
    font-size: 36px;
    font-weight: 600;
    line-height: 1.3
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .about-content .title {
        font-size: 30px
    }
}

@media only screen and (max-width: 575px) {
    .about-content .title {
        font-size: 20px
    }
}

.about-content p {
    margin-top: 30px
}

.about-content ul {
    padding-top: 20px
}

.about-content ul li {
    position: relative;
    padding-left: 35px;
    margin-top: 10px
}

.about-content ul li::before {
    position: absolute;
    content: '\f00c';
    font-family: "FontAwesome";
    top: 0;
    left: 0;
    color: #3bbca7
}

.about-content .play {
    margin-top: 30px
}

.about-content .play i {
    width: 65px;
    height: 65px;
    line-height: 65px;
    border-radius: 50%;
    text-align: center;
    background-color: #3bbca7;
    color: #ffffff
}

.about-content .play span {
    color: #072f60;
    font-size: 18px;
    font-weight: 600;
    margin-left: 10px
}

.page-banner-section {
    min-height: 500px;
    padding-top: 78px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    position: relative;
    overflow: hidden;
    z-index: 1
}

@media only screen and (min-width: 1200px) and (max-width: 1499px),
only screen and (min-width: 992px) and (max-width: 1199px) {
    .page-banner-section {
        min-height: 400px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .page-banner-section {
        min-height: 350px
    }
}

@media only screen and (max-width: 575px) {
    .page-banner-section {
        min-height: 300px
    }
}

.page-banner-section .shape-1 {
    position: absolute;
    width: 66px;
    bottom: 110px;
    left: 120px;
    z-index: -1
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px) {
    .page-banner-section .shape-1 {
        left: 60px;
        bottom: 60px;
        width: 55px
    }
}

@media only screen and (max-width: 767px) {
    .page-banner-section .shape-1 {
        left: 30px;
        bottom: 30px;
        width: 45px
    }
}

.page-banner-section .shape-2 {
    position: absolute;
    top: 150px;
    width: 60px;
    left: 30%;
    z-index: -1
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .page-banner-section .shape-2 {
        top: 100px;
        width: 50px
    }
}

.page-banner-section .shape-3 {
    position: absolute;
    width: 66px;
    top: 50%;
    right: 10%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    z-index: -1
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px) {
    .page-banner-section .shape-3 {
        width: 55px
    }
}

@media only screen and (max-width: 767px) {
    .page-banner-section .shape-3 {
        width: 45px
    }
}

.page-banner-section .shape-4 {
    position: absolute;
    top: -80px;
    left: -230px;
    opacity: 0.06;
    z-index: -1
}

@media only screen and (min-width: 1200px) and (max-width: 1499px) {
    .page-banner-section .shape-4 {
        width: 750px;
        top: -40px;
        left: -190px
    }
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .page-banner-section .shape-4 {
        width: 550px;
        top: 0px;
        left: -100px
    }
}

.page-banner-section .shape-5 {
    position: absolute;
    right: 0;
    top: 0;
    opacity: 0.06;
    z-index: -1
}

@media only screen and (min-width: 1200px) and (max-width: 1499px) {
    .page-banner-section .shape-5 {
        width: 750px
    }
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .page-banner-section .shape-5 {
        width: 550px
    }
}

.page-banner-content {
    text-align: center
}

.page-banner-content .title {
    font-size: 48px;
    font-weight: 600;
    line-height: 1;
    margin-bottom: 5px
}

@media only screen and (max-width: 767px) {
    .page-banner-content .title {
        font-size: 40px
    }
}

@media only screen and (max-width: 575px) {
    .page-banner-content .title {
        font-size: 30px;
        margin-bottom: 10px
    }
}

.page-banner-content .breadcrumb .breadcrumb-item {
    font-size: 16px;
    color: #666666
}

@media only screen and (max-width: 575px) {
    .page-banner-content .breadcrumb .breadcrumb-item {
        font-size: 15px
    }
}

.page-banner-content .breadcrumb .breadcrumb-item::before {
    color: #3bbca7
}

.page-banner-content .breadcrumb .breadcrumb-item.active {
    color: #3bbca7
}

.instructor-wrapper {
    padding-top: 30px
}

.instructor-wrapper-02 {
    margin-top: -30px
}

.single-instructor {
    margin-top: 30px;
    position: relative
}

.single-instructor .instructor-image a {
    overflow: hidden;
    border-radius: 5px;
    z-index: 1;
    position: relative;
    display: block
}

.single-instructor .instructor-image a::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    z-index: 1;
    background: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0.9)), color-stop(60%, rgba(0, 0, 0, 0)));
    background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 60%);
    background: -o-linear-gradient(bottom, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 60%);
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 60%);
    top: 0;
    left: 0
}

.single-instructor .instructor-image a img {
    width: 100%;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.single-instructor .instructor-content {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    text-align: center;
    padding: 40px 20px;
    z-index: 2
}

.single-instructor .instructor-content .name {
    color: #ffffff;
    font-size: 20px;
    font-weight: 700
}

.single-instructor .instructor-content p {
    color: #ffffff;
    font-size: 14px
}

.single-instructor:hover .instructor-image img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1)
}

.blog-details-wrapper {
    margin-top: 50px
}

.blog-details-image {
    position: relative
}

.blog-details-image a {
    display: block;
    border-radius: 8px;
    overflow: hidden
}

.blog-details-image a img {
    width: 100%;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.blog-details-image .tags {
    padding: 0 25px;
    height: 30px;
    line-height: 30px;
    background-color: #3bbca7;
    font-weight: 500;
    font-size: 14px;
    color: #ffffff;
    position: absolute;
    display: inline-block;
    border-radius: 50px;
    position: absolute;
    top: 40px;
    left: 30px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .blog-details-image .tags {
        left: 20px;
        top: 30px
    }
}

@media only screen and (max-width: 575px) {
    .blog-details-image .tags {
        top: 15px;
        left: 10px
    }
}

.blog-details-content {
    padding-top: 32px
}

.blog-details-content .meta {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
}

.blog-details-content .meta a {
    font-size: 14px;
    font-weight: 400;
    color: #838383
}

.blog-details-content .meta a i {
    margin-right: 3px
}

.blog-details-content .meta a+a {
    margin-left: 25px
}

.blog-details-content .meta .date {
    color: #3bbca7
}

.blog-details-content .meta .author {
    color: #838383;
    position: relative
}

.blog-details-content .meta .author::before {
    content: '/';
    font-size: 14px;
    font-weight: 400;
    color: #838383;
    margin: 0 8px
}

.blog-details-content .title {
    font-size: 24px;
    font-weight: 700;
    color: #072f60;
    line-height: 1.4;
    margin-top: 10px
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 575px) {
    .blog-details-content .title {
        font-size: 18px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .blog-details-content .title {
        font-size: 20px
    }
}

.blog-details-content>p {
    margin-top: 15px
}

.blog-details-content .blockquote {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin: 40px 0
}

.blog-details-content .blockquote .blockquote-icon {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    margin-top: 2px
}

.blog-details-content .blockquote .blockquote-icon svg {
    fill: #3bbca7;
    width: 50px
}

.blog-details-content .blockquote .blockquote-content {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    padding-left: 20px
}

.blog-details-content .blockquote .blockquote-content p {
    font-size: 20px;
    font-weight: 500;
    color: #072f60;
    line-height: 1.4
}

@media only screen and (max-width: 767px) {
    .blog-details-content .blockquote .blockquote-content p {
        font-size: 16px;
        line-height: 1.5
    }
}

.blog-details-content .btn {
    margin-top: 25px
}

.blog-tags-social {
    padding-top: 10px;
    border-top: 1px solid rgba(65, 70, 79, 0.14);
    margin-top: 55px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

.blog-tags-social .blog-tags {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 30px
}

.blog-tags-social .blog-tags .label {
    font-size: 14px;
    font-weight: 700;
    color: #072f60;
    padding-right: 6px
}

.blog-tags-social .blog-tags ul {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
}

.blog-tags-social .blog-tags ul li {
    padding: 0 6px
}

.blog-tags-social .blog-tags ul li a {
    font-size: 14px;
    font-weight: 400;
    color: #072f60;
    padding: 0 13px;
    height: 28px;
    line-height: 28px;
    text-align: center;
    background-color: #f6f7f9;
    border-radius: 5px
}

.blog-tags-social .blog-tags ul li a:hover {
    background-color: #3bbca7;
    color: #ffffff
}

.blog-tags-social .blog-social .social {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-left: -3px;
    margin-right: -3px;
    padding-top: 30px
}

.blog-tags-social .blog-social .social li {
    padding: 0 3px
}

.blog-tags-social .blog-social .social li a {
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    border-radius: 50%;
    color: #ffffff
}

.blog-tags-social .blog-social .social li a.facebook {
    background-color: #4867AA
}

.blog-tags-social .blog-social .social li a.twitter {
    background-color: #1DA1F2
}

.blog-tags-social .blog-social .social li a.pinterest {
    background-color: #BD081B
}

.blog-details-pagination {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    background-color: #f6f7f9;
    padding: 10px 30px;
    position: relative;
    margin-top: 80px
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px) {
    .blog-details-pagination {
        padding: 0px 10px
    }
}

@media only screen and (max-width: 575px) {
    .blog-details-pagination {
        padding: 0 10px
    }
}

.blog-details-pagination::before {
    position: absolute;
    content: '';
    width: 1px;
    background-color: #e1e1e1;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    top: 30px;
    bottom: 30px
}

@media only screen and (max-width: 767px) {
    .blog-details-pagination::before {
        width: auto;
        height: 1px;
        left: 30px;
        right: 30px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        bottom: auto
    }
}

.blog-details-pagination .previous-post,
.blog-details-pagination .next-post {
    width: 50%
}

@media only screen and (max-width: 767px) {

    .blog-details-pagination .previous-post,
    .blog-details-pagination .next-post {
        width: 100%
    }
}

.blog-details-pagination .blog-details-post {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 30px 0
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px) {
    .blog-details-pagination .blog-details-post {
        padding: 20px 0
    }
}

@media only screen and (max-width: 575px) {
    .blog-details-pagination .blog-details-post {
        padding: 20px 0
    }
}

.blog-details-pagination .blog-details-post .details-post-thumb {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.blog-details-pagination .blog-details-post .details-post-thumb a i {
    font-size: 20px;
    color: #072f60;
    padding: 0 10px
}

.blog-details-pagination .blog-details-post .details-post-thumb a img {
    width: 75px;
    height: 75px;
    border-radius: 50%;
    -o-object-position: center;
    object-position: center;
    -o-object-fit: cover;
    object-fit: cover
}

.blog-details-pagination .blog-details-post .details-post-content {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    padding: 0 20px
}

.blog-details-pagination .blog-details-post .details-post-content .title {
    font-size: 18px;
    font-weight: 600;
    line-height: 1.5
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (min-width: 768px) and (max-width: 991px) {
    .blog-details-pagination .blog-details-post .details-post-content .title {
        font-size: 15px
    }
}

@media only screen and (max-width: 575px) {
    .blog-details-pagination .blog-details-post .details-post-content .title {
        font-size: 15px
    }
}

.blog-details-pagination .blog-details-post .details-post-content .date {
    color: #3bbca7;
    font-size: 13px;
    margin-top: 5px;
    display: block
}

@media only screen and (min-width: 1500px),
only screen and (min-width: 1200px) and (max-width: 1499px) {
    .pricing-wrapper .row [class*="col-"]:first-child .single-pricing {
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
        border-right: 0
    }
}

@media only screen and (min-width: 1500px),
only screen and (min-width: 1200px) and (max-width: 1499px) {
    .pricing-wrapper .row [class*="col-"]:last-child .single-pricing {
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
        border-left: 0
    }
}

.pricing-wrapper .tab-content {
    padding-top: 40px
}

.pricing-btn {
    margin-top: 45px
}

.pricing-btn li button {
    width: 185px;
    height: 60px;
    border: 1px solid #3bbca7;
    font-size: 18px;
    font-weight: 500;
    color: #072f60;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    background-color: transparent;
    text-align: center
}

@media only screen and (max-width: 767px) {
    .pricing-btn li button {
        font-size: 16px;
        height: 50px;
        width: 145px
    }
}

@media only screen and (max-width: 575px) {
    .pricing-btn li button {
        height: 45px;
        font-size: 15px;
        width: 135px
    }
}

.pricing-btn li button.active {
    background-color: #3bbca7;
    color: #ffffff
}

.pricing-btn li:first-child button {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px
}

.pricing-btn li:last-child button {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px
}

.single-pricing {
    border: 1px solid #eeeeee;
    padding: 50px 60px;
    text-align: center;
    border-radius: 10px;
    margin-top: 30px
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 575px) {
    .single-pricing {
        padding: 30px 30px
    }
}

.single-pricing .pricig-header .title {
    font-size: 26px;
    font-weight: 600;
    color: #072f60
}

.single-pricing .pricig-header p {
    font-size: 18px;
    font-weight: 600;
    color: #072f60;
    line-height: 1.2
}

.single-pricing .pricig-header p span {
    font-size: 36px
}

.single-pricing .pricig-header .btn {
    width: 100%;
    margin-top: 30px;
    -webkit-box-shadow: none;
    box-shadow: none
}

.single-pricing .pricig-body .pricig-list {
    padding-top: 35px
}

.single-pricing .pricig-body .pricig-list li {
    font-size: 16px;
    color: #666666;
    margin-top: 5px
}

.single-pricing .pricig-body .pricig-list li span {
    font-weight: 700
}

.single-pricing.active {
    background-color: #3bbca7;
    border-radius: 10px;
    padding: 80px 60px;
    margin-top: 0px
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 575px) {
    .single-pricing.active {
        padding: 60px 30px
    }
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .single-pricing.active {
        margin-top: 30px
    }
}

.single-pricing.active .pricig-header .title {
    color: #ffffff
}

.single-pricing.active .pricig-header p {
    color: #ffffff
}

.single-pricing.active .pricig-body .pricig-list li {
    color: #ffffff
}

.single-faq {
    border: 0;
    margin-top: 20px;
    padding: 40px 40px
}

@media only screen and (max-width: 767px) {
    .single-faq {
        padding: 20px
    }
}

.single-faq .accordion-button {
    -webkit-box-shadow: none;
    box-shadow: none;
    background-color: #ffffff;
    font-size: 22px;
    line-height: 1.4;
    font-weight: 700;
    color: #072f60;
    padding: 0
}

@media only screen and (max-width: 767px) {
    .single-faq .accordion-button {
        font-size: 18px
    }
}

.single-faq .accordion-body {
    padding: 0
}

.single-faq .accordion-body p {
    padding-top: 15px
}

.login-register-wrapper {
    margin-top: -50px
}

.login-register-box {
    border: 1px solid #eeeeee;
    padding: 40px;
    border-radius: 10px;
    margin-top: 50px
}

.contact-info-wrapper {
    margin-top: -30px
}

.contact-info-wrapper .row [class*="col-"]:last-child .single-contact-info::before {
    display: none
}

.single-contact-info {
    text-align: center;
    position: relative;
    padding: 0 30px;
    margin-top: 30px
}

.single-contact-info::before {
    position: absolute;
    content: '';
    width: 1px;
    background-color: #d7d7d7;
    top: 20px;
    bottom: 20px;
    right: 0
}

.single-contact-info .info-icon i {
    font-size: 55px;
    line-height: 1;
    color: #3bbca7
}

.single-contact-info .info-content {
    padding-top: 12px
}

.single-contact-info .info-content .title {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 5px
}

.single-contact-info .info-content p {
    font-size: 15px
}

.contact-form-wrapper {
    padding-top: 20px
}

.contact-map-area #contact-map {
    width: 100%;
    height: 400px
}

.course-details-banner-content {
    max-width: 570px
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .course-details-banner-content {
        padding: 50px 0
    }
}

.course-details-banner-content .rating {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 5px
}

.course-details-banner-content .rating .rating-star {
    display: block;
    position: relative
}

.course-details-banner-content .rating .rating-star::before {
    content: '\f005 \f005 \f005 \f005 \f005 ';
    font-family: "FontAwesome";
    font-size: 13px;
    color: #c5c2c2;
    letter-spacing: 4px
}

.course-details-banner-content .rating .rating-star .rating-active {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden
}

.course-details-banner-content .rating .rating-star .rating-active::before {
    content: '\f005 \f005 \f005 \f005 \f005 ';
    font-family: "FontAwesome";
    font-size: 13px;
    color: #ffc000;
    letter-spacing: 4px
}

.course-details-banner-content .rating span {
    font-size: 13px;
    color: #838383
}

.course-details-banner-content .title {
    font-size: 24px;
    font-weight: 600;
    color: #072f60;
    margin-top: 15px
}

.course-details-banner-content>p {
    margin-top: 10px
}

.course-details-banner-content .course-details-meta {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-top: 10px
}

.course-details-banner-content .course-details-meta>* {
    padding-left: 40px;
    margin-top: 10px;
    position: relative
}

@media only screen and (max-width: 575px) {
    .course-details-banner-content .course-details-meta>* {
        padding-left: 20px
    }
}

.course-details-banner-content .course-details-meta>*::before {
    position: absolute;
    content: '';
    width: 1px;
    height: 25px;
    background-color: #e1e1e1;
    left: 18px
}

@media only screen and (max-width: 575px) {
    .course-details-banner-content .course-details-meta>*::before {
        left: 8px
    }
}

.course-details-banner-content .course-details-meta>*:first-child {
    padding-left: 0
}

.course-details-banner-content .course-details-meta>*:first-child::before {
    display: none
}

.course-details-banner-content .course-details-meta .label {
    font-size: 15px;
    font-weight: 500;
    color: #072f60;
    white-space: nowrap
}

.course-details-banner-content .course-details-meta .label span {
    color: #3bbca7
}

.course-details-banner-content .course-details-meta .meta-action {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    gap: 20px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
}

@media only screen and (max-width: 575px) {
    .course-details-banner-content .course-details-meta .meta-action {
        gap: 10px
    }
}

.course-details-banner-content .course-details-meta .meta-action .meta-author {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.course-details-banner-content .course-details-meta .meta-action .meta-author img {
    width: 40px;
    border-radius: 50%;
    padding: 5px;
    background-color: #ffffff;
    -webkit-box-shadow: 0px 0px 18px 0px rgba(0, 0, 0, 0.14);
    box-shadow: 0px 0px 18px 0px rgba(0, 0, 0, 0.14)
}

.course-details-banner-content .course-details-meta .meta-action .meta-name {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1
}

.course-details-banner-content .course-details-meta .meta-action .meta-name .name {
    font-size: 15px;
    font-weight: 500;
    color: #072f60;
    white-space: nowrap
}

.course-details-wrapper .title {
    font-size: 22px;
    font-weight: 700;
    margin-top: -5px
}

.course-details-wrapper p {
    margin-top: 10px
}

.course-details-wrapper .lessons-time>* {
    margin-right: 30px
}

.course-details-wrapper .lessons-time>*:last-child {
    margin-right: 0
}

.course-details-wrapper .course-learn-list {
    background-color: #f6f7f9;
    padding: 50px;
    margin-top: 50px;
    border-radius: 5px
}

@media only screen and (max-width: 575px) {
    .course-details-wrapper .course-learn-list {
        padding: 30px
    }
}

.course-details-wrapper .course-learn-list ul {
    padding-top: 26px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-left: -10px;
    margin-right: -10px
}

.course-details-wrapper .course-learn-list ul li {
    font-size: 16px;
    line-height: 2.25;
    position: relative;
    padding-left: 40px;
    padding-right: 10px;
    width: 50%
}

@media only screen and (max-width: 767px) {
    .course-details-wrapper .course-learn-list ul li {
        width: 100%
    }
}

.course-details-wrapper .course-learn-list ul li::before {
    position: absolute;
    top: 0;
    left: 10px;
    content: '\f00c';
    font-family: "FontAwesome";
    color: #3bbca7
}

.course-details-wrapper .course-lessons {
    margin-top: 50px
}

.course-details-wrapper .lessons-top {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    gap: 10px;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

.course-details-wrapper .course-instructor {
    border: 1px solid #ebebeb;
    border-radius: 5px;
    padding: 40px;
    margin-top: 50px
}

@media only screen and (max-width: 575px) {
    .course-details-wrapper .course-instructor {
        padding: 30px
    }
}

.course-details-wrapper .course-review {
    border: 1px solid #ebebeb;
    border-radius: 5px;
    padding: 40px;
    margin-top: 50px
}

@media only screen and (max-width: 575px) {
    .course-details-wrapper .course-review {
        padding: 30px
    }
}

.course-accordion .accordion-item {
    border-radius: 0;
    margin-top: 20px;
    border: 0
}

.course-accordion .accordion-item button {
    font-size: 16px;
    font-weight: 700;
    color: #072f60;
    width: 100%;
    text-align: left;
    padding: 10px 20px;
    border: 0;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.course-accordion .accordion-item button::before {
    content: '\f068';
    font-family: FontAwesome;
    font-size: 13px;
    font-weight: 300;
    margin-right: 10px;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.course-accordion .accordion-item button.collapsed::before {
    content: '\f067'
}

.course-accordion .accordion-item .accordion-body {
    padding-bottom: 0
}

.course-accordion .accordion-item .accordion-body .lessons-list li a {
    font-size: 16px;
    display: block
}

.course-accordion .accordion-item .accordion-body .lessons-list li a span {
    display: block;
    float: right;
    white-space: nowrap
}

.course-accordion .accordion-item .accordion-body .lessons-list li a i {
    margin-right: 5px
}

.instructor-profile {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    gap: 30px;
    margin-top: 20px
}

@media only screen and (max-width: 575px) {
    .instructor-profile {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
    }
}

.instructor-profile .profile-images {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.instructor-profile .profile-images img {
    border-radius: 5px;
    width: 190px
}

.instructor-profile .profile-content {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1
}

.instructor-profile .profile-content .name {
    font-size: 20px;
    font-weight: 700
}

.instructor-profile .profile-content .profile-meta {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    gap: 20px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 5px
}

.instructor-profile .profile-content .profile-meta .rating {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
}

.instructor-profile .profile-content .profile-meta .rating .rating-star {
    display: block;
    position: relative
}

.instructor-profile .profile-content .profile-meta .rating .rating-star::before {
    content: '\f005 \f005 \f005 \f005 \f005 ';
    font-family: "FontAwesome";
    font-size: 13px;
    color: #c5c2c2;
    letter-spacing: 4px
}

.instructor-profile .profile-content .profile-meta .rating .rating-star .rating-active {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden
}

.instructor-profile .profile-content .profile-meta .rating .rating-star .rating-active::before {
    content: '\f005 \f005 \f005 \f005 \f005 ';
    font-family: "FontAwesome";
    font-size: 13px;
    color: #ffc000;
    letter-spacing: 4px
}

.instructor-profile .profile-content .profile-meta .rating span {
    font-size: 13px;
    font-weight: 700;
    color: #666666
}

.instructor-profile .profile-content p {
    font-size: 16px
}

.review-rating {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 30px;
    margin-top: 20px
}

@media only screen and (max-width: 575px) {
    .review-rating {
        display: block
    }
}

.review-rating .rating-box {
    text-align: center;
    width: 190px;
    background-color: #ffffff;
    -webkit-box-shadow: 0px 0px 57px 0px rgba(0, 0, 0, 0.08);
    box-shadow: 0px 0px 57px 0px rgba(0, 0, 0, 0.08);
    padding: 33px 20px;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

@media only screen and (max-width: 575px) {
    .review-rating .rating-box {
        margin: 0 auto
    }
}

.review-rating .rating-box .count {
    display: block;
    font-size: 48px;
    font-weight: 700;
    color: #072f60;
    line-height: 1
}

.review-rating .rating-box .rating-star {
    display: inline-block;
    position: relative
}

.review-rating .rating-box .rating-star::before {
    content: '\f005 \f005 \f005 \f005 \f005 ';
    font-family: "FontAwesome";
    font-size: 18px;
    color: #c5c2c2;
    letter-spacing: 4px
}

.review-rating .rating-box .rating-star .rating-active {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden
}

.review-rating .rating-box .rating-star .rating-active::before {
    content: '\f005 \f005 \f005 \f005 \f005 ';
    font-family: "FontAwesome";
    font-size: 18px;
    color: #ffc000;
    letter-spacing: 4px
}

.review-rating .rating-box p {
    margin-top: 0
}

.review-rating .rating-percentage {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    gap: 10px
}

@media only screen and (max-width: 575px) {
    .review-rating .rating-percentage {
        margin-top: 30px
    }
}

.single-rating-percentage {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
}

.single-rating-percentage .label {
    font-size: 14px;
    font-weight: 400;
    color: #666666;
    white-space: nowrap
}

.single-rating-percentage .rating-line {
    width: 100%;
    height: 10px;
    background-color: #ebebeb;
    position: relative;
    margin: 0 20px
}

.single-rating-percentage .rating-line .line-bar {
    position: absolute;
    height: 100%;
    background-color: #fcca45
}

.review-items {
    padding-top: 30px
}

.single-review {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    gap: 30px;
    margin-top: 30px
}

@media only screen and (max-width: 575px) {
    .single-review {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
    }
}

.single-review .review-author {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.single-review .review-author img {
    width: 70px;
    border-radius: 50%
}

.single-review .review-content {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1
}

.single-review .review-content .review-top {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: -3px
}

.single-review .review-content .review-top .name {
    font-size: 18px;
    font-weight: 700
}

.single-review .review-content .review-top .rating-star {
    display: inline-block;
    position: relative;
    margin-right: auto
}

.single-review .review-content .review-top .rating-star::before {
    content: '\f005 \f005 \f005 \f005 \f005 ';
    font-family: "FontAwesome";
    font-size: 14px;
    color: #c5c2c2;
    letter-spacing: 4px
}

.single-review .review-content .review-top .rating-star .rating-active {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden
}

.single-review .review-content .review-top .rating-star .rating-active::before {
    content: '\f005 \f005 \f005 \f005 \f005 ';
    font-family: "FontAwesome";
    font-size: 14px;
    color: #ffc000;
    letter-spacing: 4px
}

.sidebar-wrap {
    position: -webkit-sticky;
    position: sticky;
    top: 100px
}

.sidebar-wrap hr {
    margin: 50px 0 0px
}

.widget-title {
    font-size: 18px;
    font-weight: 700
}

.sidebar-widget {
    margin-top: 50px
}

.sidebar-widget .widget-search {
    position: relative
}

.sidebar-widget .widget-search .form-control {
    height: 50px;
    padding-right: 45px
}

.sidebar-widget .widget-search button {
    width: 50px;
    height: 50px;
    top: 0;
    right: 0;
    position: absolute;
    border: 0;
    background-color: transparent;
    font-size: 16px;
    color: #111111
}

.sidebar-widget .widget-sidebar-link {
    padding-top: 5px
}

.sidebar-widget .widget-sidebar-link ul li {
    margin-top: 15px
}

.sidebar-widget .widget-sidebar-link ul li a {
    font-size: 16px;
    color: #29303c;
    line-height: 20px;
    display: block
}

.sidebar-widget .widget-sidebar-link ul li a span {
    width: 20px;
    height: 20px;
    text-align: center;
    background-color: #e4f2f8;
    border-radius: 50px;
    display: block;
    float: right;
    font-size: 12px;
    font-weight: 400;
    color: #29303c;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.sidebar-widget .widget-sidebar-link ul li a::before {
    content: '\f105 ';
    font-family: "FontAwesome";
    font-size: 14px;
    color: #3bbca7;
    margin-right: 10px
}

.sidebar-widget .widget-sidebar-link ul li a:hover {
    color: #3bbca7
}

.sidebar-widget .widget-sidebar-link ul li a:hover span {
    background-color: #3bbca7;
    color: #ffffff
}

.sidebar-widget .widget-tags {
    padding-top: 15px
}

.sidebar-widget .widget-tags ul {
    margin-left: -5px;
    margin-right: -5px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

.sidebar-widget .widget-tags ul li {
    padding: 5px
}

.sidebar-widget .widget-tags ul li a {
    font-size: 14px;
    font-weight: 400;
    color: #666666;
    height: 32px;
    line-height: 32px;
    padding: 0 22px;
    border-radius: 4px;
    background-color: #f9f9f9
}

.sidebar-widget .widget-tags ul li a:hover {
    background-color: #3bbca7;
    color: #ffffff
}

.sidebar-widget .widget-banner a img {
    border-radius: 4px
}

.single-mini-post {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 30px
}

.single-mini-post .mini-post-image {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.single-mini-post .mini-post-image a {
    display: block
}

.single-mini-post .mini-post-image a img {
    width: 70px;
    height: 70px;
    border-radius: 4px;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position: center
}

.single-mini-post .mini-post-content {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    padding-left: 20px
}

.single-mini-post .mini-post-content .title {
    font-size: 15px;
    font-weight: 600;
    line-height: 1.5
}

.single-mini-post .mini-post-content .date {
    color: #3bbca7;
    font-size: 13px;
    margin-top: 5px;
    display: block
}

.sidebar-wrap-02 {
    background-color: #f8f8f8;
    border: 1px solid #d7d7d7;
    border-radius: 10px;
    padding: 35px 40px;
    margin-top: 50px
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 575px) {
    .sidebar-wrap-02 {
        padding: 35px 25px
    }
}

.course-collapse {
    margin-top: 50px;
    background-color: #f8f8f8;
    border: 1px solid #d7d7d7;
    border-radius: 10px;
    padding: 35px 40px;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear
}

.sidebar-widget-02+.sidebar-widget-02 {
    padding-top: 22px
}

.widget-checkbox {
    margin-top: 18px
}

.widget-checkbox .checkbox-list li {
    min-height: auto;
    margin-bottom: 0;
    margin-top: 18px
}

.widget-checkbox .rating {
    position: relative;
    display: inline-block
}

.widget-checkbox .rating::before {
    content: '\f005 \f005 \f005 \f005 \f005';
    font-family: "FontAwesome";
    color: #dedede;
    font-size: 14px;
    letter-spacing: 2px
}

.widget-checkbox .rating .rating-on {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    overflow: hidden
}

.widget-checkbox .rating .rating-on::before {
    content: '\f005 \f005 \f005 \f005 \f005';
    font-family: "FontAwesome";
    color: #fda000;
    font-size: 14px;
    letter-spacing: 2px
}

.sidebar-details-wrap {
    margin-top: -388px;
    position: relative;
    z-index: 1;
    position: -webkit-sticky;
    position: sticky;
    top: 100px
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (max-width: 767px) {
    .sidebar-details-wrap {
        margin-top: 50px
    }
}

.sidebar-details-video-description {
    background-color: #ffffff;
    -webkit-box-shadow: 0px 0px 65px 0px rgba(0, 0, 0, 0.12);
    box-shadow: 0px 0px 65px 0px rgba(0, 0, 0, 0.12)
}

.sidebar-details-video-description .sidebar-video {
    position: relative;
    overflow: hidden;
    border-radius: 5px
}

.sidebar-details-video-description .sidebar-video::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    z-index: 1;
    background: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0.9)), color-stop(40%, rgba(0, 0, 0, 0)));
    background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 40%);
    background: -o-linear-gradient(bottom, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 40%);
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 40%);
    top: 0;
    left: 0
}

.sidebar-details-video-description .sidebar-video img {
    width: 100%
}

.sidebar-details-video-description .sidebar-video .play {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    width: 65px;
    height: 65px;
    line-height: 65px;
    background-color: #ffffff;
    border-radius: 50%;
    font-size: 14px;
    color: #072f60;
    text-align: center;
    z-index: 2
}

.sidebar-details-video-description .sidebar-video .play:hover {
    color: #ffffff;
    background-color: #3bbca7
}

.sidebar-details-video-description .sidebar-description {
    padding: 40px 40px 60px
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 575px) {
    .sidebar-details-video-description .sidebar-description {
        padding: 30px 20px 30px
    }
}

.sidebar-details-video-description .sidebar-description .price {
    margin-top: -5px
}

.sidebar-details-video-description .sidebar-description .price .sale-price {
    font-size: 24px;
    font-weight: 700;
    color: #072f60
}

.sidebar-details-video-description .sidebar-description .price .regular-price {
    font-size: 16px;
    font-weight: 400;
    color: #3bbca7;
    text-decoration: line-through;
    margin-left: 10px
}

.sidebar-details-video-description .sidebar-description .btn {
    margin-top: 20px
}

.sidebar-details-video-description .sidebar-description .description-list {
    padding-top: 26px;
    padding-bottom: 15px
}

.sidebar-details-video-description .sidebar-description .description-list li {
    font-weight: 700;
    font-size: 16px;
    color: #666666;
    border-bottom: 1px solid #ebebeb;
    padding: 10px 0
}

@media only screen and (min-width: 992px) and (max-width: 1199px),
only screen and (max-width: 575px) {
    .sidebar-details-video-description .sidebar-description .description-list li {
        font-size: 15px
    }
}

.sidebar-details-video-description .sidebar-description .description-list li:last-child {
    border-bottom: 0
}

.sidebar-details-video-description .sidebar-description .description-list li span {
    font-weight: 400;
    float: right;
    display: block
}

.sidebar-details-course {
    margin-top: 60px
}

.sidebar-details-title {
    font-size: 22px;
    font-weight: 700
}

.sidebar-details-courses li {
    padding: 30px 0;
    border-bottom: 1px solid #ebebeb
}

.sidebar-details-courses li:last-child {
    padding-bottom: 0;
    border-bottom: 0
}

.sidebar-course-item {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 30px
}

.sidebar-course-item .item-image {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.sidebar-course-item .item-image img {
    width: 100px;
    height: 100px;
    -o-object-position: center;
    object-position: center;
    -o-object-fit: cover;
    object-fit: cover;
    border-radius: 5px
}

.sidebar-course-item .item-content {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 200px
}

.sidebar-course-item .item-content .title {
    font-size: 16px;
    font-weight: 600
}

.sidebar-course-item .item-content .price {
    font-weight: 400;
    font-size: 16px;
    color: #838383;
    display: block;
    margin-top: 5px
}

.sidebar-course-item .item-content .price strong {
    font-weight: 700;
    color: #3bbca7;
    font-size: 16px
}

.footer-widget-wrapper {
    padding-top: 40px;
    padding-bottom: 80px
}

@media only screen and (max-width: 767px) {
    .footer-widget-wrapper {
        padding-top: 20px;
        padding-bottom: 60px
    }
}

.footer-widget {
    margin-top: 40px;
    color: #d9d9d9
}

.footer-widget-title {
    font-size: 20px;
    font-weight: 700
}

.widget-info {
    padding-top: 15px
}

.widget-info p {
    font-size: 16px;
    font-weight: 500;
    color: #666666;
    margin-top: 10px
}

.widget-info p i {
    color: #1fb984;
    margin-right: 10px;
    line-height: 28px;
    display: inline-block
}

.widget-info .social {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 20px
}

.widget-info .social li {
    margin-right: 10px
}

.widget-info .social li:last-child {
    margin-right: 0
}

.widget-info .social li a {
    width: 35px;
    height: 35px;
    line-height: 35px;
    border: 1px solid #666666;
    text-align: center;
    border-radius: 50%;
    color: #666666
}

.widget-info .social li a:hover {
    background-color: #3bbca7;
    border-color: #3bbca7;
    color: #ffffff
}

.widget-info .social-white li a {
    color: #3bbca7;
    border-color: #3bbca7
}

.widget-info .social-white li a:hover {
    color: #ffffff
}

.widget-info-white p {
    color: #ffffff
}

.widget-link {
    padding-top: 25px
}

.widget-link .link li {
    margin-top: 5px
}

.widget-link .link li a {
    font-size: 16px;
    color: #666666
}

.widget-link .link li a:hover {
    color: #3bbca7
}

.widget-link-white .link li a {
    color: #ffffff
}

.widget-link-white .link li a:hover {
    color: #3bbca7
}

.footer-section {
    background-color: #f8f8f8
}

.footer-section-02 {
    background-color: #072f60
}

.footer-section-03 {
    background-color: #151948
}

.footer-copyright {
    border-top: 1px solid #ebebeb;
    padding: 25px 0
}

.footer-copyright p {
    font-size: 14px
}

.footer-copyright-white {
    border-top-color: rgba(255, 255, 255, 0.2)
}

.footer-copyright-white p {
    color: rgba(255, 255, 255, 0.6)
}

.back-btn {
    position: fixed;
    bottom: 20px;
    right: 30px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #3bbca7;
    border: 0;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    font-size: 16px;
    color: #ffffff;
    z-index: 99
}

.back-btn:hover {
    background-color: #072f60;
    color: #ffffff;
    -webkit-box-shadow: 0px 0px 16px 0px rgba(255, 255, 255, 0.07);
    box-shadow: 0px 0px 16px 0px rgba(255, 255, 255, 0.07)
}
</style>