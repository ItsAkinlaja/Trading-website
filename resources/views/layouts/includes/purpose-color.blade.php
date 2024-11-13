<style>
    @import url(https://fonts.googleapis.com/css?family=Nunito:300,400,600,700);
:root {
    --blue: {{ $settings->website_theme }};
    --indigo: {{ $settings->website_theme }};
    --purple: #510fa8;
    --pink: #f074ad;
    --red: #ff5630;
    --orange: #ffab00;
    --yellow: #fc0;
    --green: #36b37e;
    --teal: #00b8d9;
    --cyan: #4bd6e5;
    --gray: #c0ccda;
    --gray-dark: #3c4858;
    --primary: {{ $settings->website_theme }};
    --secondary: #eff2f7;
    --success: #36b37e;
    --info: #00b8d9;
    --warning: #ffab00;
    --danger: #ff5630;
    --light: #eff2f7;
    --dark: #273444;
    --neutral: #fff;
    --white: #fff;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI",
        Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
        "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
        "Noto Color Emoji";
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas,
        "Liberation Mono", "Courier New", monospace;
}
*,
:after,
:before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(31, 45, 61, 0);
}
article,
aside,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section {
    display: block;
}
body {
    margin: 0;
    font-family: Nunito, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.7;
    color: #8492a6;
    text-align: left;
    background-color: #f8f8fb;
}
[tabindex="-1"]:focus {
    outline: 0 !important;
}
hr {
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    height: 0;
    overflow: visible;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
abbr[data-original-title],
abbr[title] {
    text-decoration: underline;
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0;
    -webkit-text-decoration-skip-ink: none;
    text-decoration-skip-ink: none;
}
address {
    font-style: normal;
    line-height: inherit;
}
address,
dl,
ol,
ul {
    margin-bottom: 1rem;
}
dl,
ol,
ul {
    margin-top: 0;
}
ol ol,
ol ul,
ul ol,
ul ul {
    margin-bottom: 0;
}
dt {
    font-weight: 600;
}
dd {
    margin-bottom: 0.5rem;
    margin-left: 0;
}
blockquote {
    margin: 0 0 1rem;
}
b,
strong {
    font-weight: 700;
}
small {
    font-size: 80%;
}
sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
}
sub {
    bottom: -0.25em;
}
sup {
    top: -0.5em;
}
a {
    color: {{ $settings->website_theme }};
    background-color: transparent;
}
a,
a:hover {
    text-decoration: none;
}
a:hover {
    color: #4d00b3;
}
a:not([href]):not([tabindex]),
a:not([href]):not([tabindex]):focus,
a:not([href]):not([tabindex]):hover {
    color: inherit;
    text-decoration: none;
}
a:not([href]):not([tabindex]):focus {
    outline: 0;
}
code,
kbd,
pre,
samp {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono,
        Courier New, monospace;
    font-size: 1em;
}
pre {
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto;
}
figure {
    margin: 0 0 1rem;
}
img {
    vertical-align: middle;
    border-style: none;
}
table {
    border-collapse: collapse;
}
caption {
    padding-top: 1rem;
    padding-bottom: 1rem;
    color: #8492a6;
    text-align: left;
    caption-side: bottom;
}
th {
    text-align: inherit;
}
label {
    display: inline-block;
    margin-bottom: 0.5rem;
}
button {
    border-radius: 0;
}
button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}
button,
input,
optgroup,
select,
textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
button,
input {
    overflow: visible;
}
button,
select {
    text-transform: none;
}
select {
    word-wrap: normal;
}
[type="button"],
[type="reset"],
[type="submit"],
button {
    -webkit-appearance: button;
}
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled),
button:not(:disabled) {
    cursor: pointer;
}
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner,
button::-moz-focus-inner {
    padding: 0;
    border-style: none;
}
input[type="checkbox"],
input[type="radio"] {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0;
}
input[type="date"],
input[type="datetime-local"],
input[type="month"],
input[type="time"] {
    -webkit-appearance: listbox;
}
textarea {
    overflow: auto;
    resize: vertical;
}
fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
}
legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: 0.5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal;
}
@media (max-width: 1200px) {
    legend {
        font-size: calc(1.275rem + 0.3vw);
    }
}
progress {
    vertical-align: baseline;
}
[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
    height: auto;
}
[type="search"] {
    outline-offset: -2px;
    -webkit-appearance: none;
}
[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}
::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button;
}
output {
    display: inline-block;
}
summary {
    display: list-item;
    cursor: pointer;
}
template {
    display: none;
}
[hidden] {
    display: none !important;
}
.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
    margin-bottom: 0.5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.3;
    color: #3c4858;
}
.h1,
h1 {
    font-size: 2.5rem;
}
@media (max-width: 1200px) {
    .h1,
    h1 {
        font-size: calc(1.375rem + 1.5vw);
    }
}
.h2,
h2 {
    font-size: 2rem;
}
@media (max-width: 1200px) {
    .h2,
    h2 {
        font-size: calc(1.325rem + 0.9vw);
    }
}
.h3,
h3 {
    font-size: 1.75rem;
}
@media (max-width: 1200px) {
    .h3,
    h3 {
        font-size: calc(1.3rem + 0.6vw);
    }
}
.h4,
h4 {
    font-size: 1.5rem;
}
@media (max-width: 1200px) {
    .h4,
    h4 {
        font-size: calc(1.275rem + 0.3vw);
    }
}
.h5,
h5 {
    font-size: 1.25rem;
}
.h6,
h6 {
    font-size: 1rem;
}
.lead {
    font-size: 1.125rem;
    font-weight: 300;
}
.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.3;
}
@media (max-width: 1200px) {
    .display-1 {
        font-size: calc(1.725rem + 5.7vw);
    }
}
.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.3;
}
@media (max-width: 1200px) {
    .display-2 {
        font-size: calc(1.675rem + 5.1vw);
    }
}
.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.3;
}
@media (max-width: 1200px) {
    .display-3 {
        font-size: calc(1.575rem + 3.9vw);
    }
}
.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.3;
}
@media (max-width: 1200px) {
    .display-4 {
        font-size: calc(1.475rem + 2.7vw);
    }
}
hr {
    margin-top: 2rem;
    margin-bottom: 2rem;
    border: 0;
    border-top: 1px solid #eff2f7;
}
.small,
small {
    font-size: 80%;
    font-weight: 400;
}
.mark,
mark {
    padding: 0.2em;
    background-color: #fcf8e3;
}
.list-inline,
.list-unstyled {
    padding-left: 0;
    list-style: none;
}
.list-inline-item {
    display: inline-block;
}
.list-inline-item:not(:last-child) {
    margin-right: 0.5rem;
}
.initialism {
    font-size: 90%;
    text-transform: uppercase;
}
.blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem;
}
.blockquote-footer {
    display: block;
    font-size: 80%;
    color: #c0ccda;
}
.blockquote-footer:before {
    content: "\2014\A0";
}
.img-fluid,
.img-thumbnail {
    max-width: 100%;
    height: auto;
}
.img-thumbnail {
    padding: 0.25rem;
    background-color: #f8f8fb;
    border: 1px solid #e5e9f2;
    border-radius: 0.25rem;
    -webkit-box-shadow: 0 1px 2px rgba(31, 45, 61, 0.075);
    box-shadow: 0 1px 2px rgba(31, 45, 61, 0.075);
}
.figure {
    display: inline-block;
}
.figure-img {
    margin-bottom: 0.5rem;
    line-height: 1;
}
.figure-caption {
    font-size: 90%;
    color: #c0ccda;
}
code {
    font-size: 87.5%;
    color: #f074ad;
    word-break: break-word;
}
a > code {
    color: inherit;
}
kbd {
    padding: 0.2rem 0.4rem;
    font-size: 87.5%;
    color: #fff;
    background-color: #273444;
    border-radius: 0.2rem;
    -webkit-box-shadow: inset 0 -0.1rem 0 rgba(31, 45, 61, 0.25);
    box-shadow: inset 0 -0.1rem 0 rgba(31, 45, 61, 0.25);
}
kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 600;
    -webkit-box-shadow: none;
    box-shadow: none;
}
pre {
    display: block;
    font-size: 87.5%;
    color: #273444;
}
pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal;
}
.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll;
}
.container {
    width: 100%;
    padding-right: 10px;
    padding-left: 10px;
    margin-right: auto;
    margin-left: auto;
}
@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}
@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}
@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}
@media (min-width: 1200px) {
    .container {
        max-width: 1320px;
    }
}
.container-fluid {
    width: 100%;
    padding-right: 10px;
    padding-left: 10px;
    margin-right: auto;
    margin-left: auto;
}
.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -10px;
    margin-left: -10px;
}
.no-gutters {
    margin-right: 0;
    margin-left: 0;
}
.no-gutters > .col,
.no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0;
}
.col,
.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-10,
.col-11,
.col-12,
.col-auto,
.col-lg,
.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg-auto,
.col-md,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-auto,
.col-sm,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm-auto,
.col-xl,
.col-xl-1,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 10px;
    padding-left: 10px;
}
.col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
}
.col-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
}
.col-1,
.col-auto {
    -webkit-box-flex: 0;
}
.col-1 {
    -ms-flex: 0 0 8.3333333333%;
    flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
}
.col-2 {
    -ms-flex: 0 0 16.6666666667%;
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
}
.col-2,
.col-3 {
    -webkit-box-flex: 0;
}
.col-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
}
.col-4 {
    -ms-flex: 0 0 33.3333333333%;
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
}
.col-4,
.col-5 {
    -webkit-box-flex: 0;
}
.col-5 {
    -ms-flex: 0 0 41.6666666667%;
    flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
}
.col-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}
.col-6,
.col-7 {
    -webkit-box-flex: 0;
}
.col-7 {
    -ms-flex: 0 0 58.3333333333%;
    flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
}
.col-8 {
    -ms-flex: 0 0 66.6666666667%;
    flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
}
.col-8,
.col-9 {
    -webkit-box-flex: 0;
}
.col-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
}
.col-10 {
    -ms-flex: 0 0 83.3333333333%;
    flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
}
.col-10,
.col-11 {
    -webkit-box-flex: 0;
}
.col-11 {
    -ms-flex: 0 0 91.6666666667%;
    flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
}
.col-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
.order-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
}
.order-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
}
.order-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
}
.order-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
}
.order-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
}
.order-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3;
}
.order-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4;
}
.order-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5;
}
.order-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6;
}
.order-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7;
}
.order-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8;
}
.order-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9;
}
.order-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10;
}
.order-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11;
}
.order-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12;
}
.offset-1 {
    margin-left: 8.3333333333%;
}
.offset-2 {
    margin-left: 16.6666666667%;
}
.offset-3 {
    margin-left: 25%;
}
.offset-4 {
    margin-left: 33.3333333333%;
}
.offset-5 {
    margin-left: 41.6666666667%;
}
.offset-6 {
    margin-left: 50%;
}
.offset-7 {
    margin-left: 58.3333333333%;
}
.offset-8 {
    margin-left: 66.6666666667%;
}
.offset-9 {
    margin-left: 75%;
}
.offset-10 {
    margin-left: 83.3333333333%;
}
.offset-11 {
    margin-left: 91.6666666667%;
}
@media (min-width: 576px) {
    .col-sm {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
    }
    .col-sm-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }
    .col-sm-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 8.3333333333%;
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%;
    }
    .col-sm-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.6666666667%;
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%;
    }
    .col-sm-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }
    .col-sm-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.3333333333%;
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%;
    }
    .col-sm-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.6666666667%;
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%;
    }
    .col-sm-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }
    .col-sm-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 58.3333333333%;
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%;
    }
    .col-sm-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66.6666666667%;
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%;
    }
    .col-sm-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%;
    }
    .col-sm-10 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 83.3333333333%;
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%;
    }
    .col-sm-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 91.6666666667%;
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%;
    }
    .col-sm-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }
    .order-sm-first {
        -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1;
    }
    .order-sm-last {
        -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13;
    }
    .order-sm-0 {
        -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0;
    }
    .order-sm-1 {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1;
    }
    .order-sm-2 {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2;
    }
    .order-sm-3 {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3;
    }
    .order-sm-4 {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4;
    }
    .order-sm-5 {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5;
    }
    .order-sm-6 {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6;
    }
    .order-sm-7 {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7;
    }
    .order-sm-8 {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8;
    }
    .order-sm-9 {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9;
    }
    .order-sm-10 {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10;
    }
    .order-sm-11 {
        -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11;
    }
    .order-sm-12 {
        -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12;
    }
    .offset-sm-0 {
        margin-left: 0;
    }
    .offset-sm-1 {
        margin-left: 8.3333333333%;
    }
    .offset-sm-2 {
        margin-left: 16.6666666667%;
    }
    .offset-sm-3 {
        margin-left: 25%;
    }
    .offset-sm-4 {
        margin-left: 33.3333333333%;
    }
    .offset-sm-5 {
        margin-left: 41.6666666667%;
    }
    .offset-sm-6 {
        margin-left: 50%;
    }
    .offset-sm-7 {
        margin-left: 58.3333333333%;
    }
    .offset-sm-8 {
        margin-left: 66.6666666667%;
    }
    .offset-sm-9 {
        margin-left: 75%;
    }
    .offset-sm-10 {
        margin-left: 83.3333333333%;
    }
    .offset-sm-11 {
        margin-left: 91.6666666667%;
    }
}
@media (min-width: 768px) {
    .col-md {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
    }
    .col-md-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }
    .col-md-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 8.3333333333%;
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%;
    }
    .col-md-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.6666666667%;
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%;
    }
    .col-md-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }
    .col-md-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.3333333333%;
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%;
    }
    .col-md-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.6666666667%;
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%;
    }
    .col-md-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }
    .col-md-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 58.3333333333%;
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%;
    }
    .col-md-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66.6666666667%;
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%;
    }
    .col-md-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%;
    }
    .col-md-10 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 83.3333333333%;
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%;
    }
    .col-md-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 91.6666666667%;
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%;
    }
    .col-md-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }
    .order-md-first {
        -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1;
    }
    .order-md-last {
        -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13;
    }
    .order-md-0 {
        -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0;
    }
    .order-md-1 {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1;
    }
    .order-md-2 {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2;
    }
    .order-md-3 {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3;
    }
    .order-md-4 {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4;
    }
    .order-md-5 {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5;
    }
    .order-md-6 {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6;
    }
    .order-md-7 {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7;
    }
    .order-md-8 {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8;
    }
    .order-md-9 {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9;
    }
    .order-md-10 {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10;
    }
    .order-md-11 {
        -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11;
    }
    .order-md-12 {
        -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12;
    }
    .offset-md-0 {
        margin-left: 0;
    }
    .offset-md-1 {
        margin-left: 8.3333333333%;
    }
    .offset-md-2 {
        margin-left: 16.6666666667%;
    }
    .offset-md-3 {
        margin-left: 25%;
    }
    .offset-md-4 {
        margin-left: 33.3333333333%;
    }
    .offset-md-5 {
        margin-left: 41.6666666667%;
    }
    .offset-md-6 {
        margin-left: 50%;
    }
    .offset-md-7 {
        margin-left: 58.3333333333%;
    }
    .offset-md-8 {
        margin-left: 66.6666666667%;
    }
    .offset-md-9 {
        margin-left: 75%;
    }
    .offset-md-10 {
        margin-left: 83.3333333333%;
    }
    .offset-md-11 {
        margin-left: 91.6666666667%;
    }
}
@media (min-width: 992px) {
    .col-lg {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
    }
    .col-lg-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }
    .col-lg-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 8.3333333333%;
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%;
    }
    .col-lg-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.6666666667%;
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%;
    }
    .col-lg-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }
    .col-lg-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.3333333333%;
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%;
    }
    .col-lg-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.6666666667%;
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%;
    }
    .col-lg-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }
    .col-lg-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 58.3333333333%;
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%;
    }
    .col-lg-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66.6666666667%;
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%;
    }
    .col-lg-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%;
    }
    .col-lg-10 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 83.3333333333%;
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%;
    }
    .col-lg-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 91.6666666667%;
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%;
    }
    .col-lg-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }
    .order-lg-first {
        -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1;
    }
    .order-lg-last {
        -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13;
    }
    .order-lg-0 {
        -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0;
    }
    .order-lg-1 {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1;
    }
    .order-lg-2 {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2;
    }
    .order-lg-3 {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3;
    }
    .order-lg-4 {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4;
    }
    .order-lg-5 {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5;
    }
    .order-lg-6 {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6;
    }
    .order-lg-7 {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7;
    }
    .order-lg-8 {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8;
    }
    .order-lg-9 {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9;
    }
    .order-lg-10 {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10;
    }
    .order-lg-11 {
        -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11;
    }
    .order-lg-12 {
        -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12;
    }
    .offset-lg-0 {
        margin-left: 0;
    }
    .offset-lg-1 {
        margin-left: 8.3333333333%;
    }
    .offset-lg-2 {
        margin-left: 16.6666666667%;
    }
    .offset-lg-3 {
        margin-left: 25%;
    }
    .offset-lg-4 {
        margin-left: 33.3333333333%;
    }
    .offset-lg-5 {
        margin-left: 41.6666666667%;
    }
    .offset-lg-6 {
        margin-left: 50%;
    }
    .offset-lg-7 {
        margin-left: 58.3333333333%;
    }
    .offset-lg-8 {
        margin-left: 66.6666666667%;
    }
    .offset-lg-9 {
        margin-left: 75%;
    }
    .offset-lg-10 {
        margin-left: 83.3333333333%;
    }
    .offset-lg-11 {
        margin-left: 91.6666666667%;
    }
}
@media (min-width: 1200px) {
    .col-xl {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
    }
    .col-xl-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }
    .col-xl-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 8.3333333333%;
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%;
    }
    .col-xl-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.6666666667%;
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%;
    }
    .col-xl-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }
    .col-xl-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.3333333333%;
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%;
    }
    .col-xl-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.6666666667%;
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%;
    }
    .col-xl-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }
    .col-xl-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 58.3333333333%;
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%;
    }
    .col-xl-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66.6666666667%;
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%;
    }
    .col-xl-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%;
    }
    .col-xl-10 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 83.3333333333%;
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%;
    }
    .col-xl-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 91.6666666667%;
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%;
    }
    .col-xl-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }
    .order-xl-first {
        -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1;
    }
    .order-xl-last {
        -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13;
    }
    .order-xl-0 {
        -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0;
    }
    .order-xl-1 {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1;
    }
    .order-xl-2 {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2;
    }
    .order-xl-3 {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3;
    }
    .order-xl-4 {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4;
    }
    .order-xl-5 {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5;
    }
    .order-xl-6 {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6;
    }
    .order-xl-7 {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7;
    }
    .order-xl-8 {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8;
    }
    .order-xl-9 {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9;
    }
    .order-xl-10 {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10;
    }
    .order-xl-11 {
        -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11;
    }
    .order-xl-12 {
        -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12;
    }
    .offset-xl-0 {
        margin-left: 0;
    }
    .offset-xl-1 {
        margin-left: 8.3333333333%;
    }
    .offset-xl-2 {
        margin-left: 16.6666666667%;
    }
    .offset-xl-3 {
        margin-left: 25%;
    }
    .offset-xl-4 {
        margin-left: 33.3333333333%;
    }
    .offset-xl-5 {
        margin-left: 41.6666666667%;
    }
    .offset-xl-6 {
        margin-left: 50%;
    }
    .offset-xl-7 {
        margin-left: 58.3333333333%;
    }
    .offset-xl-8 {
        margin-left: 66.6666666667%;
    }
    .offset-xl-9 {
        margin-left: 75%;
    }
    .offset-xl-10 {
        margin-left: 83.3333333333%;
    }
    .offset-xl-11 {
        margin-left: 91.6666666667%;
    }
}
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #8492a6;
    background-color: transparent;
}
.table td,
.table th {
    padding: 1rem;
    vertical-align: top;
    border-top: 1px solid #eff2f7;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #eff2f7;
}
.table tbody + tbody {
    border-top: 2px solid #eff2f7;
}
.table-sm td,
.table-sm th {
    padding: 0.5rem;
}
.table-bordered,
.table-bordered td,
.table-bordered th {
    border: 1px solid #eff2f7;
}
.table-bordered thead td,
.table-bordered thead th {
    border-bottom-width: 2px;
}
.table-borderless tbody + tbody,
.table-borderless td,
.table-borderless th,
.table-borderless thead th {
    border: 0;
}
.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(250, 251, 254, 0.3);
}
.table-hover tbody tr:hover {
    color: #8492a6;
    background-color: #fafbfe;
}
.table-primary,
.table-primary > td,
.table-primary > th {
    background-color: {{ $settings->website_theme }};
}
.table-primary tbody + tbody,
.table-primary td,
.table-primary th,
.table-primary thead th {
    border-color: {{ $settings->website_theme }};
}
.table-hover .table-primary:hover,
.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
    background-color: {{ $settings->website_theme }};
}
.table-secondary,
.table-secondary > td,
.table-secondary > th {
    background-color: #fbfbfd;
}
.table-secondary tbody + tbody,
.table-secondary td,
.table-secondary th,
.table-secondary thead th {
    border-color: #f7f8fb;
}
.table-hover .table-secondary:hover,
.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
    background-color: #eaeaf5;
}
.table-success,
.table-success > td,
.table-success > th {
    background-color: #c7eadb;
}
.table-success tbody + tbody,
.table-success td,
.table-success th,
.table-success thead th {
    border-color: #96d7bc;
}
.table-hover .table-success:hover,
.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
    background-color: #b4e3cf;
}
.table-info,
.table-info > td,
.table-info > th {
    background-color: #b8ebf4;
}
.table-info tbody + tbody,
.table-info td,
.table-info th,
.table-info thead th {
    border-color: #7adaeb;
}
.table-hover .table-info:hover,
.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
    background-color: #a2e5f1;
}
.table-warning,
.table-warning > td,
.table-warning > th {
    background-color: #ffe7b8;
}
.table-warning tbody + tbody,
.table-warning td,
.table-warning th,
.table-warning thead th {
    border-color: #ffd37a;
}
.table-hover .table-warning:hover,
.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
    background-color: #ffde9f;
}
.table-danger,
.table-danger > td,
.table-danger > th {
    background-color: #ffd0c5;
}
.table-danger tbody + tbody,
.table-danger td,
.table-danger th,
.table-danger thead th {
    border-color: #ffa793;
}
.table-hover .table-danger:hover,
.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
    background-color: #ffbbac;
}
.table-light,
.table-light > td,
.table-light > th {
    background-color: #fbfbfd;
}
.table-light tbody + tbody,
.table-light td,
.table-light th,
.table-light thead th {
    border-color: #f7f8fb;
}
.table-hover .table-light:hover,
.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
    background-color: #eaeaf5;
}
.table-dark,
.table-dark > td,
.table-dark > th {
    background-color: #c3c6cb;
}
.table-dark tbody + tbody,
.table-dark td,
.table-dark th,
.table-dark thead th {
    border-color: #8f959e;
}
.table-hover .table-dark:hover,
.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
    background-color: #b5b9bf;
}
.table-neutral,
.table-neutral > td,
.table-neutral > th {
    background-color: #fff;
}
.table-neutral tbody + tbody,
.table-neutral td,
.table-neutral th,
.table-neutral thead th {
    border-color: #fff;
}
.table-hover .table-neutral:hover,
.table-hover .table-neutral:hover > td,
.table-hover .table-neutral:hover > th {
    background-color: #f2f2f2;
}
.table-white,
.table-white > td,
.table-white > th {
    background-color: #fff;
}
.table-white tbody + tbody,
.table-white td,
.table-white th,
.table-white thead th {
    border-color: #fff;
}
.table-hover .table-white:hover,
.table-hover .table-white:hover > td,
.table-hover .table-white:hover > th {
    background-color: #f2f2f2;
}
.table-active,
.table-active > td,
.table-active > th {
    background-color: #fafbfe;
}
.table-hover .table-active:hover,
.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
    background-color: #e5eafa;
}
.table .thead-dark th {
    color: #f8f8fb;
    background-color: #273444;
    border-color: #34455b;
}
.table .thead-light th {
    border-color: #eff2f7;
}
.table-dark {
    color: #f8f8fb;
    background-color: #273444;
}
.table-dark td,
.table-dark th,
.table-dark thead th {
    border-color: #34455b;
}
.table-dark.table-bordered {
    border: 0;
}
.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: hsla(0, 0%, 100%, 0.05);
}
.table-dark.table-hover tbody tr:hover {
    color: #f8f8fb;
    background-color: hsla(0, 0%, 100%, 0.075);
}
@media (max-width: 575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .table-responsive-sm > .table-bordered {
        border: 0;
    }
}
@media (max-width: 767.98px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .table-responsive-md > .table-bordered {
        border: 0;
    }
}
@media (max-width: 991.98px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .table-responsive-lg > .table-bordered {
        border: 0;
    }
}
@media (max-width: 1199.98px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .table-responsive-xl > .table-bordered {
        border: 0;
    }
}
.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}
.table-responsive > .table-bordered {
    border: 0;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 1.5rem + 2px);
    padding: 0.75rem 1.25rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #8492a6;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e0e6ed;
    border-radius: 0.25rem;
    -webkit-box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075);
    box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075);
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .form-control {
        -webkit-transition: none;
        transition: none;
    }
}
.form-control::-ms-expand {
    background-color: transparent;
    border: 0;
}
.form-control:focus {
    color: #8492a6;
    background-color: #fff;
    border-color: rgba(110, 0, 255, 0.5);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075),
        0 0 20px rgba(110, 0, 255, 0.1);
    box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075),
        0 0 20px rgba(110, 0, 255, 0.1);
}
.form-control::-webkit-input-placeholder {
    color: #aabacd;
    opacity: 1;
}
.form-control::-moz-placeholder {
    color: #aabacd;
    opacity: 1;
}
.form-control:-ms-input-placeholder {
    color: #aabacd;
    opacity: 1;
}
.form-control::-ms-input-placeholder {
    color: #aabacd;
    opacity: 1;
}
.form-control::placeholder {
    color: #aabacd;
    opacity: 1;
}
.form-control:disabled,
.form-control[readonly] {
    background-color: #eff2f7;
    opacity: 1;
}
select.form-control:focus::-ms-value {
    color: #8492a6;
    background-color: #fff;
}
.form-control-file,
.form-control-range {
    display: block;
    width: 100%;
}
.col-form-label {
    padding-top: calc(0.75rem + 1px);
    padding-bottom: calc(0.75rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
}
.col-form-label-lg {
    padding-top: calc(1rem + 1px);
    padding-bottom: calc(1rem + 1px);
    font-size: 1rem;
    line-height: 1.5;
}
.col-form-label-sm {
    padding-top: calc(0.5rem + 1px);
    padding-bottom: calc(0.5rem + 1px);
    font-size: 0.875rem;
    line-height: 1.5;
}
.form-control-plaintext {
    display: block;
    width: 100%;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    margin-bottom: 0;
    line-height: 1.5;
    color: #8492a6;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0;
}
.form-control-plaintext.form-control-lg,
.form-control-plaintext.form-control-sm {
    padding-right: 0;
    padding-left: 0;
}
.form-control-sm {
    height: calc(1.5em + 1rem + 2px);
    padding: 0.5rem 1.25rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}
.form-control-lg {
    height: calc(1.5em + 2rem + 2px);
    padding: 1rem 1.875rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.375rem;
}
select.form-control[multiple],
select.form-control[size],
textarea.form-control {
    height: auto;
}
.form-group {
    margin-bottom: 1rem;
}
.form-text {
    display: block;
    margin-top: 0.25rem;
}
.form-row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}
.form-row > .col,
.form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px;
}
.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem;
}
.form-check-input {
    position: absolute;
    margin-top: 0.3rem;
    margin-left: -1.25rem;
}
.form-check-input:disabled ~ .form-check-label {
    color: #8492a6;
}
.form-check-label {
    margin-bottom: 0;
}
.form-check-inline {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-left: 0;
    margin-right: 0.75rem;
}
.form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0;
}
.valid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #36b37e;
}
.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    line-height: 1.7;
    color: #fff;
    background-color: rgba(54, 179, 126, 0.9);
    border-radius: 0.25rem;
}
.form-control.is-valid,
.was-validated .form-control:valid {
    border-color: #36b37e;
    padding-right: calc(1.5em + 1.5rem);
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2336B37E' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: 100% calc(0.375em + 0.375rem);
    background-size: calc(0.75em + 0.75rem) calc(0.75em + 0.75rem);
}
.form-control.is-valid:focus,
.was-validated .form-control:valid:focus {
    border-color: #36b37e;
    -webkit-box-shadow: 0 0 0 0 rgba(54, 179, 126, 0.25);
    box-shadow: 0 0 0 0 rgba(54, 179, 126, 0.25);
}
.form-control.is-valid ~ .valid-feedback,
.form-control.is-valid ~ .valid-tooltip,
.was-validated .form-control:valid ~ .valid-feedback,
.was-validated .form-control:valid ~ .valid-tooltip {
    display: block;
}
.was-validated textarea.form-control:valid,
textarea.form-control.is-valid {
    padding-right: calc(1.5em + 1.5rem);
    background-position: top calc(0.375em + 0.375rem) right
        calc(0.375em + 0.375rem);
}
.custom-select.is-valid,
.was-validated .custom-select:valid {
    border-color: #36b37e;
    padding-right: calc((3em + 4.5rem) / 4 + 2.25rem);
    background: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%233C4858' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E")
            no-repeat right 1.25rem center/8px 10px,
        url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2336B37E' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E")
            #fff no-repeat center right 2.25rem / calc(0.75em + 0.75rem)
            calc(0.75em + 0.75rem);
}
.custom-select.is-valid:focus,
.was-validated .custom-select:valid:focus {
    border-color: #36b37e;
    -webkit-box-shadow: 0 0 0 0 rgba(54, 179, 126, 0.25);
    box-shadow: 0 0 0 0 rgba(54, 179, 126, 0.25);
}
.custom-select.is-valid ~ .valid-feedback,
.custom-select.is-valid ~ .valid-tooltip,
.form-control-file.is-valid ~ .valid-feedback,
.form-control-file.is-valid ~ .valid-tooltip,
.was-validated .custom-select:valid ~ .valid-feedback,
.was-validated .custom-select:valid ~ .valid-tooltip,
.was-validated .form-control-file:valid ~ .valid-feedback,
.was-validated .form-control-file:valid ~ .valid-tooltip {
    display: block;
}
.form-check-input.is-valid ~ .form-check-label,
.was-validated .form-check-input:valid ~ .form-check-label {
    color: #36b37e;
}
.form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip,
.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip {
    display: block;
}
.custom-control-input.is-valid ~ .custom-control-label,
.was-validated .custom-control-input:valid ~ .custom-control-label {
    color: #36b37e;
}
.custom-control-input.is-valid ~ .custom-control-label:before,
.was-validated .custom-control-input:valid ~ .custom-control-label:before {
    border-color: #36b37e;
}
.custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip,
.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip {
    display: block;
}
.custom-control-input.is-valid:checked ~ .custom-control-label:before,
.was-validated
    .custom-control-input:valid:checked
    ~ .custom-control-label:before {
    border-color: #51cb97;
    background-color: #51cb97;
}
.custom-control-input.is-valid:focus ~ .custom-control-label:before,
.was-validated
    .custom-control-input:valid:focus
    ~ .custom-control-label:before {
    -webkit-box-shadow: 0 0 0 0 rgba(54, 179, 126, 0.25);
    box-shadow: 0 0 0 0 rgba(54, 179, 126, 0.25);
}
.custom-control-input.is-valid:focus:not(:checked)
    ~ .custom-control-label:before,
.custom-file-input.is-valid ~ .custom-file-label,
.was-validated
    .custom-control-input:valid:focus:not(:checked)
    ~ .custom-control-label:before,
.was-validated .custom-file-input:valid ~ .custom-file-label {
    border-color: #36b37e;
}
.custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip,
.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip {
    display: block;
}
.custom-file-input.is-valid:focus ~ .custom-file-label,
.was-validated .custom-file-input:valid:focus ~ .custom-file-label {
    border-color: #36b37e;
    -webkit-box-shadow: 0 0 0 0 rgba(54, 179, 126, 0.25);
    box-shadow: 0 0 0 0 rgba(54, 179, 126, 0.25);
}
.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #ff5630;
}
.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    line-height: 1.7;
    color: #fff;
    background-color: rgba(255, 86, 48, 0.9);
    border-radius: 0.25rem;
}
.form-control.is-invalid,
.was-validated .form-control:invalid {
    border-color: #ff5630;
    padding-right: calc(1.5em + 1.5rem);
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23FF5630' viewBox='-2 -2 7 7'%3E%3Cpath stroke='%23FF5630' d='M0 0l3 3m0-3L0 3'/%3E%3Ccircle r='.5'/%3E%3Ccircle cx='3' r='.5'/%3E%3Ccircle cy='3' r='.5'/%3E%3Ccircle cx='3' cy='3' r='.5'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: 100% calc(0.375em + 0.375rem);
    background-size: calc(0.75em + 0.75rem) calc(0.75em + 0.75rem);
}
.form-control.is-invalid:focus,
.was-validated .form-control:invalid:focus {
    border-color: #ff5630;
    -webkit-box-shadow: 0 0 0 0 rgba(255, 86, 48, 0.25);
    box-shadow: 0 0 0 0 rgba(255, 86, 48, 0.25);
}
.form-control.is-invalid ~ .invalid-feedback,
.form-control.is-invalid ~ .invalid-tooltip,
.was-validated .form-control:invalid ~ .invalid-feedback,
.was-validated .form-control:invalid ~ .invalid-tooltip {
    display: block;
}
.was-validated textarea.form-control:invalid,
textarea.form-control.is-invalid {
    padding-right: calc(1.5em + 1.5rem);
    background-position: top calc(0.375em + 0.375rem) right
        calc(0.375em + 0.375rem);
}
.custom-select.is-invalid,
.was-validated .custom-select:invalid {
    border-color: #ff5630;
    padding-right: calc((3em + 4.5rem) / 4 + 2.25rem);
    background: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%233C4858' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E")
            no-repeat right 1.25rem center/8px 10px,
        url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23FF5630' viewBox='-2 -2 7 7'%3E%3Cpath stroke='%23FF5630' d='M0 0l3 3m0-3L0 3'/%3E%3Ccircle r='.5'/%3E%3Ccircle cx='3' r='.5'/%3E%3Ccircle cy='3' r='.5'/%3E%3Ccircle cx='3' cy='3' r='.5'/%3E%3C/svg%3E")
            #fff no-repeat center right 2.25rem / calc(0.75em + 0.75rem)
            calc(0.75em + 0.75rem);
}
.custom-select.is-invalid:focus,
.was-validated .custom-select:invalid:focus {
    border-color: #ff5630;
    -webkit-box-shadow: 0 0 0 0 rgba(255, 86, 48, 0.25);
    box-shadow: 0 0 0 0 rgba(255, 86, 48, 0.25);
}
.custom-select.is-invalid ~ .invalid-feedback,
.custom-select.is-invalid ~ .invalid-tooltip,
.form-control-file.is-invalid ~ .invalid-feedback,
.form-control-file.is-invalid ~ .invalid-tooltip,
.was-validated .custom-select:invalid ~ .invalid-feedback,
.was-validated .custom-select:invalid ~ .invalid-tooltip,
.was-validated .form-control-file:invalid ~ .invalid-feedback,
.was-validated .form-control-file:invalid ~ .invalid-tooltip {
    display: block;
}
.form-check-input.is-invalid ~ .form-check-label,
.was-validated .form-check-input:invalid ~ .form-check-label {
    color: #ff5630;
}
.form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip,
.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip {
    display: block;
}
.custom-control-input.is-invalid ~ .custom-control-label,
.was-validated .custom-control-input:invalid ~ .custom-control-label {
    color: #ff5630;
}
.custom-control-input.is-invalid ~ .custom-control-label:before,
.was-validated .custom-control-input:invalid ~ .custom-control-label:before {
    border-color: #ff5630;
}
.custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip,
.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip {
    display: block;
}
.custom-control-input.is-invalid:checked ~ .custom-control-label:before,
.was-validated
    .custom-control-input:invalid:checked
    ~ .custom-control-label:before {
    border-color: #ff8063;
    background-color: #ff8063;
}
.custom-control-input.is-invalid:focus ~ .custom-control-label:before,
.was-validated
    .custom-control-input:invalid:focus
    ~ .custom-control-label:before {
    -webkit-box-shadow: 0 0 0 0 rgba(255, 86, 48, 0.25);
    box-shadow: 0 0 0 0 rgba(255, 86, 48, 0.25);
}
.custom-control-input.is-invalid:focus:not(:checked)
    ~ .custom-control-label:before,
.custom-file-input.is-invalid ~ .custom-file-label,
.was-validated
    .custom-control-input:invalid:focus:not(:checked)
    ~ .custom-control-label:before,
.was-validated .custom-file-input:invalid ~ .custom-file-label {
    border-color: #ff5630;
}
.custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip,
.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip {
    display: block;
}
.custom-file-input.is-invalid:focus ~ .custom-file-label,
.was-validated .custom-file-input:invalid:focus ~ .custom-file-label {
    border-color: #ff5630;
    -webkit-box-shadow: 0 0 0 0 rgba(255, 86, 48, 0.25);
    box-shadow: 0 0 0 0 rgba(255, 86, 48, 0.25);
}
.form-inline {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.form-inline .form-check {
    width: 100%;
}
@media (min-width: 576px) {
    .form-inline label {
        -ms-flex-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }
    .form-inline .form-group,
    .form-inline label {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        margin-bottom: 0;
    }
    .form-inline .form-group {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -ms-flex-align: center;
    }
    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle;
    }
    .form-inline .form-control-plaintext {
        display: inline-block;
    }
    .form-inline .custom-select,
    .form-inline .input-group {
        width: auto;
    }
    .form-inline .form-check {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: auto;
        padding-left: 0;
    }
    .form-inline .form-check-input {
        position: relative;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0;
    }
    .form-inline .custom-control {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }
    .form-inline .custom-control-label {
        margin-bottom: 0;
    }
}
.btn {
    display: inline-block;
    font-weight: 600;
    color: #8492a6;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.75rem 1.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    -webkit-transition: color 0.15s ease-in-out,
        background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
}
.btn:hover {
    color: #8492a6;
    text-decoration: none;
}
.btn.focus,
.btn:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 rgba(99, 0, 230, 0.25);
    box-shadow: 0 0 0 rgba(99, 0, 230, 0.25);
}
.btn.disabled,
.btn:disabled {
    opacity: 0.65;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.btn:not(:disabled):not(.disabled).active,
.btn:not(:disabled):not(.disabled):active {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn:not(:disabled):not(.disabled).active:focus,
.btn:not(:disabled):not(.disabled):active:focus {
    -webkit-box-shadow: 0 0 0 rgba(99, 0, 230, 0.25),
        inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: 0 0 0 rgba(99, 0, 230, 0.25),
        inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
a.btn.disabled,
fieldset:disabled a.btn {
    pointer-events: none;
}
.btn-primary {
    color: #fff;
    background-color: {{ $settings->website_theme }};
    border-color: {{ $settings->website_theme }};
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-primary:hover {
    color: #fff;
    background-color: {{ $settings->website_theme }};
    border-color: {{ $settings->website_theme }};
}
.btn-primary.focus,
.btn-primary:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(110, 0, 255, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(110, 0, 255, 0.35);
}
.btn-primary.disabled,
.btn-primary:disabled {
    color: #fff;
    background-color: #28272a;
    border-color: #1b1b1d;
}
.btn-primary:not(:disabled):not(.disabled).active,
.btn-primary:not(:disabled):not(.disabled):active,
.show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: {{ $settings->website_theme }};
    border-color: {{ $settings->website_theme }};
}
.btn-primary:not(:disabled):not(.disabled).active:focus,
.btn-primary:not(:disabled):not(.disabled):active:focus,
.show > .btn-primary.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(110, 0, 255, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(110, 0, 255, 0.35);
}
.btn-secondary {
    color: #273444;
    background-color: #eff2f7;
    border-color: #eff2f7;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-secondary:hover {
    color: #273444;
    background-color: #d6ddea;
    border-color: #cdd6e6;
}
.btn-secondary.focus,
.btn-secondary:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
}
.btn-secondary.disabled,
.btn-secondary:disabled {
    color: #273444;
    background-color: #eff2f7;
    border-color: #eff2f7;
}
.btn-secondary:not(:disabled):not(.disabled).active,
.btn-secondary:not(:disabled):not(.disabled):active,
.show > .btn-secondary.dropdown-toggle {
    color: #273444;
    background-color: #cdd6e6;
    border-color: #c5cfe2;
}
.btn-secondary:not(:disabled):not(.disabled).active:focus,
.btn-secondary:not(:disabled):not(.disabled):active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
}
.btn-success {
    color: #fff;
    background-color: #36b37e;
    border-color: #36b37e;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-success:hover {
    color: #fff;
    background-color: #2d9669;
    border-color: #2a8c62;
}
.btn-success.focus,
.btn-success:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(54, 179, 126, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(54, 179, 126, 0.35);
}
.btn-success.disabled,
.btn-success:disabled {
    color: #fff;
    background-color: #36b37e;
    border-color: #36b37e;
}
.btn-success:not(:disabled):not(.disabled).active,
.btn-success:not(:disabled):not(.disabled):active,
.show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #2a8c62;
    border-color: #27825c;
}
.btn-success:not(:disabled):not(.disabled).active:focus,
.btn-success:not(:disabled):not(.disabled):active:focus,
.show > .btn-success.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(54, 179, 126, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(54, 179, 126, 0.35);
}
.btn-info {
    color: #fff;
    background-color: #00b8d9;
    border-color: #00b8d9;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-info:hover {
    color: #fff;
    background-color: #0098b3;
    border-color: #008da6;
}
.btn-info.focus,
.btn-info:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(0, 184, 217, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(0, 184, 217, 0.35);
}
.btn-info.disabled,
.btn-info:disabled {
    color: #fff;
    background-color: #00b8d9;
    border-color: #00b8d9;
}
.btn-info:not(:disabled):not(.disabled).active,
.btn-info:not(:disabled):not(.disabled):active,
.show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #008da6;
    border-color: #008299;
}
.btn-info:not(:disabled):not(.disabled).active:focus,
.btn-info:not(:disabled):not(.disabled):active:focus,
.show > .btn-info.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(0, 184, 217, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(0, 184, 217, 0.35);
}
.btn-warning {
    color: #fff;
    background-color: #ffab00;
    border-color: #ffab00;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-warning:hover {
    color: #fff;
    background-color: #d99100;
    border-color: #cc8900;
}
.btn-warning.focus,
.btn-warning:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 171, 0, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 171, 0, 0.35);
}
.btn-warning.disabled,
.btn-warning:disabled {
    color: #fff;
    background-color: #ffab00;
    border-color: #ffab00;
}
.btn-warning:not(:disabled):not(.disabled).active,
.btn-warning:not(:disabled):not(.disabled):active,
.show > .btn-warning.dropdown-toggle {
    color: #fff;
    background-color: #cc8900;
    border-color: #bf8000;
}
.btn-warning:not(:disabled):not(.disabled).active:focus,
.btn-warning:not(:disabled):not(.disabled):active:focus,
.show > .btn-warning.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 171, 0, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 171, 0, 0.35);
}
.btn-danger {
    color: #fff;
    background-color: #ff5630;
    border-color: #ff5630;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-danger:hover {
    color: #fff;
    background-color: #ff370a;
    border-color: #fc2e00;
}
.btn-danger.focus,
.btn-danger:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 86, 48, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 86, 48, 0.35);
}
.btn-danger.disabled,
.btn-danger:disabled {
    color: #fff;
    background-color: #ff5630;
    border-color: #ff5630;
}
.btn-danger:not(:disabled):not(.disabled).active,
.btn-danger:not(:disabled):not(.disabled):active,
.show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #fc2e00;
    border-color: #ef2c00;
}
.btn-danger:not(:disabled):not(.disabled).active:focus,
.btn-danger:not(:disabled):not(.disabled):active:focus,
.show > .btn-danger.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 86, 48, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 86, 48, 0.35);
}
.btn-light {
    color: #273444;
    background-color: #eff2f7;
    border-color: #eff2f7;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-light:hover {
    color: #273444;
    background-color: #d6ddea;
    border-color: #cdd6e6;
}
.btn-light.focus,
.btn-light:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
}
.btn-light.disabled,
.btn-light:disabled {
    color: #273444;
    background-color: #eff2f7;
    border-color: #eff2f7;
}
.btn-light:not(:disabled):not(.disabled).active,
.btn-light:not(:disabled):not(.disabled):active,
.show > .btn-light.dropdown-toggle {
    color: #273444;
    background-color: #cdd6e6;
    border-color: #c5cfe2;
}
.btn-light:not(:disabled):not(.disabled).active:focus,
.btn-light:not(:disabled):not(.disabled):active:focus,
.show > .btn-light.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
}
.btn-dark {
    color: #fff;
    background-color: #273444;
    border-color: #273444;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-dark:hover {
    color: #fff;
    background-color: #19212c;
    border-color: #141b24;
}
.btn-dark.focus,
.btn-dark:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(39, 52, 68, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(39, 52, 68, 0.35);
}
.btn-dark.disabled,
.btn-dark:disabled {
    color: #fff;
    background-color: #273444;
    border-color: #273444;
}
.btn-dark:not(:disabled):not(.disabled).active,
.btn-dark:not(:disabled):not(.disabled):active,
.show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #141b24;
    border-color: #10151b;
}
.btn-dark:not(:disabled):not(.disabled).active:focus,
.btn-dark:not(:disabled):not(.disabled):active:focus,
.show > .btn-dark.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(39, 52, 68, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(39, 52, 68, 0.35);
}
.btn-neutral {
    border-color: #fff;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-neutral:hover {
    color: #273444;
    background-color: #ececec;
    border-color: #e6e6e6;
}
.btn-neutral.focus,
.btn-neutral:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
}
.btn-neutral.disabled,
.btn-neutral:disabled {
    color: #273444;
    background-color: #fff;
    border-color: #fff;
}
.btn-neutral:not(:disabled):not(.disabled).active,
.btn-neutral:not(:disabled):not(.disabled):active,
.show > .btn-neutral.dropdown-toggle {
    color: #273444;
    background-color: #e6e6e6;
    border-color: #dfdfdf;
}
.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn-neutral:not(:disabled):not(.disabled):active:focus,
.show > .btn-neutral.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
}
.btn-white {
    color: #273444;
    background-color: #fff;
    border-color: #fff;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-white:hover {
    color: #273444;
    background-color: #ececec;
    border-color: #e6e6e6;
}
.btn-white.focus,
.btn-white:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
}
.btn-white.disabled,
.btn-white:disabled {
    color: #273444;
    background-color: #fff;
    border-color: #fff;
}
.btn-white:not(:disabled):not(.disabled).active,
.btn-white:not(:disabled):not(.disabled):active,
.show > .btn-white.dropdown-toggle {
    color: #273444;
    background-color: #e6e6e6;
    border-color: #dfdfdf;
}
.btn-white:not(:disabled):not(.disabled).active:focus,
.btn-white:not(:disabled):not(.disabled):active:focus,
.show > .btn-white.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
}
.btn-outline-primary {
    color: {{ $settings->website_theme }};
    border-color: {{ $settings->website_theme }};
}
.btn-outline-primary:hover {
    color: #fff;
    background-color: {{ $settings->website_theme }};
    border-color: {{ $settings->website_theme }};
}
.btn-outline-primary.focus,
.btn-outline-primary:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(110, 0, 255, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(110, 0, 255, 0.35);
}
.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
    color: {{ $settings->website_theme }};
    background-color: transparent;
}
.btn-outline-primary:not(:disabled):not(.disabled).active,
.btn-outline-primary:not(:disabled):not(.disabled):active,
.show > .btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: {{ $settings->website_theme }};
    border-color: {{ $settings->website_theme }};
}
.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(110, 0, 255, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(110, 0, 255, 0.35);
}
.btn-outline-secondary {
    color: #eff2f7;
    border-color: #eff2f7;
}
.btn-outline-secondary:hover {
    color: #273444;
    background-color: #eff2f7;
    border-color: #eff2f7;
}
.btn-outline-secondary.focus,
.btn-outline-secondary:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
}
.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
    color: #eff2f7;
    background-color: transparent;
}
.btn-outline-secondary:not(:disabled):not(.disabled).active,
.btn-outline-secondary:not(:disabled):not(.disabled):active,
.show > .btn-outline-secondary.dropdown-toggle {
    color: #273444;
    background-color: #eff2f7;
    border-color: #eff2f7;
}
.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
}
.btn-outline-success {
    color: #36b37e;
    border-color: #36b37e;
}
.btn-outline-success:hover {
    color: #fff;
    background-color: #36b37e;
    border-color: #36b37e;
}
.btn-outline-success.focus,
.btn-outline-success:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(54, 179, 126, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(54, 179, 126, 0.35);
}
.btn-outline-success.disabled,
.btn-outline-success:disabled {
    color: #36b37e;
    background-color: transparent;
}
.btn-outline-success:not(:disabled):not(.disabled).active,
.btn-outline-success:not(:disabled):not(.disabled):active,
.show > .btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #36b37e;
    border-color: #36b37e;
}
.btn-outline-success:not(:disabled):not(.disabled).active:focus,
.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-success.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(54, 179, 126, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(54, 179, 126, 0.35);
}
.btn-outline-info {
    color: #00b8d9;
    border-color: #00b8d9;
}
.btn-outline-info:hover {
    color: #fff;
    background-color: #00b8d9;
    border-color: #00b8d9;
}
.btn-outline-info.focus,
.btn-outline-info:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(0, 184, 217, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(0, 184, 217, 0.35);
}
.btn-outline-info.disabled,
.btn-outline-info:disabled {
    color: #00b8d9;
    background-color: transparent;
}
.btn-outline-info:not(:disabled):not(.disabled).active,
.btn-outline-info:not(:disabled):not(.disabled):active,
.show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #00b8d9;
    border-color: #00b8d9;
}
.btn-outline-info:not(:disabled):not(.disabled).active:focus,
.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(0, 184, 217, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(0, 184, 217, 0.35);
}
.btn-outline-warning {
    color: #ffab00;
    border-color: #ffab00;
}
.btn-outline-warning:hover {
    color: #fff;
    background-color: #ffab00;
    border-color: #ffab00;
}
.btn-outline-warning.focus,
.btn-outline-warning:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 171, 0, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 171, 0, 0.35);
}
.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
    color: #ffab00;
    background-color: transparent;
}
.btn-outline-warning:not(:disabled):not(.disabled).active,
.btn-outline-warning:not(:disabled):not(.disabled):active,
.show > .btn-outline-warning.dropdown-toggle {
    color: #fff;
    background-color: #ffab00;
    border-color: #ffab00;
}
.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 171, 0, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 171, 0, 0.35);
}
.btn-outline-danger {
    color: #ff5630;
    border-color: #ff5630;
}
.btn-outline-danger:hover {
    color: #fff;
    background-color: #ff5630;
    border-color: #ff5630;
}
.btn-outline-danger.focus,
.btn-outline-danger:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 86, 48, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 86, 48, 0.35);
}
.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
    color: #ff5630;
    background-color: transparent;
}
.btn-outline-danger:not(:disabled):not(.disabled).active,
.btn-outline-danger:not(:disabled):not(.disabled):active,
.show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #ff5630;
    border-color: #ff5630;
}
.btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 86, 48, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(255, 86, 48, 0.35);
}
.btn-outline-light {
    color: #eff2f7;
    border-color: #eff2f7;
}
.btn-outline-light:hover {
    color: #273444;
    background-color: #eff2f7;
    border-color: #eff2f7;
}
.btn-outline-light.focus,
.btn-outline-light:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
}
.btn-outline-light.disabled,
.btn-outline-light:disabled {
    color: #eff2f7;
    background-color: transparent;
}
.btn-outline-light:not(:disabled):not(.disabled).active,
.btn-outline-light:not(:disabled):not(.disabled):active,
.show > .btn-outline-light.dropdown-toggle {
    color: #273444;
    background-color: #eff2f7;
    border-color: #eff2f7;
}
.btn-outline-light:not(:disabled):not(.disabled).active:focus,
.btn-outline-light:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-light.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(239, 242, 247, 0.35);
}
.btn-outline-dark {
    color: #273444;
    border-color: #273444;
}
.btn-outline-dark:hover {
    color: #fff;
    background-color: #273444;
    border-color: #273444;
}
.btn-outline-dark.focus,
.btn-outline-dark:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(39, 52, 68, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(39, 52, 68, 0.35);
}
.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
    color: #273444;
    background-color: transparent;
}
.btn-outline-dark:not(:disabled):not(.disabled).active,
.btn-outline-dark:not(:disabled):not(.disabled):active,
.show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #273444;
    border-color: #273444;
}
.btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(39, 52, 68, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(39, 52, 68, 0.35);
}
.btn-outline-neutral {
    color: #fff;
    border-color: #fff;
}
.btn-outline-neutral:hover {
    color: #273444;
    background-color: #fff;
    border-color: #fff;
}
.btn-outline-neutral.focus,
.btn-outline-neutral:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
}
.btn-outline-neutral.disabled,
.btn-outline-neutral:disabled {
    color: #fff;
    background-color: transparent;
}
.btn-outline-neutral:not(:disabled):not(.disabled).active,
.btn-outline-neutral:not(:disabled):not(.disabled):active,
.show > .btn-outline-neutral.dropdown-toggle {
    color: #273444;
    background-color: #fff;
    border-color: #fff;
}
.btn-outline-neutral:not(:disabled):not(.disabled).active:focus,
.btn-outline-neutral:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-neutral.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
}
.btn-outline-white {
    color: #fff;
    border-color: #fff;
}
.btn-outline-white:hover {
    color: #273444;
    background-color: #fff;
    border-color: #fff;
}
.btn-outline-white.focus,
.btn-outline-white:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
}
.btn-outline-white.disabled,
.btn-outline-white:disabled {
    color: #fff;
    background-color: transparent;
}
.btn-outline-white:not(:disabled):not(.disabled).active,
.btn-outline-white:not(:disabled):not(.disabled):active,
.show > .btn-outline-white.dropdown-toggle {
    color: #273444;
    background-color: #fff;
    border-color: #fff;
}
.btn-outline-white:not(:disabled):not(.disabled).active:focus,
.btn-outline-white:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-white.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
}
.btn-link {
    font-weight: 400;
    color: {{ $settings->website_theme }};
    text-decoration: none;
}
.btn-link:hover {
    color: #4d00b3;
    text-decoration: none;
}
.btn-link.focus,
.btn-link:focus {
    text-decoration: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.btn-link.disabled,
.btn-link:disabled {
    color: #c0ccda;
    pointer-events: none;
}
.btn-group-lg > .btn,
.btn-lg {
    padding: 1rem 1.875rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.375rem;
}
.btn-group-sm > .btn,
.btn-sm {
    padding: 0.5rem 1.25rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.25rem;
}
.btn-block {
    display: block;
    width: 100%;
}
.btn-block + .btn-block {
    margin-top: 0.5rem;
}
input[type="button"].btn-block,
input[type="reset"].btn-block,
input[type="submit"].btn-block {
    width: 100%;
}
.fade {
    -webkit-transition: opacity 0.2s linear;
    transition: opacity 0.2s linear;
}
@media (prefers-reduced-motion: reduce) {
    .fade {
        -webkit-transition: none;
        transition: none;
    }
}
.fade:not(.show) {
    opacity: 0;
}
.collapse:not(.show) {
    display: none;
}
.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    -webkit-transition: height 0.2s ease;
    transition: height 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .collapsing {
        -webkit-transition: none;
        transition: none;
    }
}
.dropdown,
.dropleft,
.dropright,
.dropup {
    position: relative;
}
.dropdown-toggle {
    white-space: nowrap;
}
.dropdown-toggle:after {
    margin-left: 10.2px;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    font-family: Font Awesome\5 Pro, Font Awesome\5 Free;
    font-weight: 700;
    content: "\F107";
}
.dropdown-toggle:empty:after {
    margin-left: 0;
}
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 12rem;
    padding: 0.35rem 0;
    margin: 0.125rem 0 0;
    color: #8492a6;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #eff2f7;
    border-radius: 0.25rem;
    -webkit-box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
    box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
}
.dropdown-menu-left {
    right: auto;
    left: 0;
}
.dropdown-menu-right {
    right: 0;
    left: auto;
}
@media (min-width: 576px) {
    .dropdown-menu-sm-left {
        right: auto;
        left: 0;
    }
    .dropdown-menu-sm-right {
        right: 0;
        left: auto;
    }
}
@media (min-width: 768px) {
    .dropdown-menu-md-left {
        right: auto;
        left: 0;
    }
    .dropdown-menu-md-right {
        right: 0;
        left: auto;
    }
}
@media (min-width: 992px) {
    .dropdown-menu-lg-left {
        right: auto;
        left: 0;
    }
    .dropdown-menu-lg-right {
        right: 0;
        left: auto;
    }
}
@media (min-width: 1200px) {
    .dropdown-menu-xl-left {
        right: auto;
        left: 0;
    }
    .dropdown-menu-xl-right {
        right: 0;
        left: auto;
    }
}
.dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: 0.125rem;
}
.dropup .dropdown-toggle:after {
    margin-left: 10.2px;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    font-family: Font Awesome\5 Pro, Font Awesome\5 Free;
    font-weight: 700;
    content: "\F106";
}
.dropup .dropdown-toggle:empty:after {
    margin-left: 0;
}
.dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0.125rem;
}
.dropright .dropdown-toggle:after {
    margin-left: 10.2px;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    font-family: Font Awesome\5 Pro, Font Awesome\5 Free;
    font-weight: 700;
    content: "\F105";
}
.dropright .dropdown-toggle:empty:after {
    margin-left: 0;
}
.dropright .dropdown-toggle:after {
    vertical-align: 0;
}
.dropleft .dropdown-menu {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: 0.125rem;
}
.dropleft .dropdown-toggle:after {
    margin-left: 10.2px;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    display: none;
}
.dropleft .dropdown-toggle:after,
.dropleft .dropdown-toggle:before {
    font-family: Font Awesome\5 Pro, Font Awesome\5 Free;
    font-weight: 700;
}
.dropleft .dropdown-toggle:before {
    display: inline-block;
    margin-right: 10.2px;
    content: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 256 512' width='12px' height='12px' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%238492A6' d='M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z'/%3E%3C/svg%3E");
    content: "\F104";
}
.dropleft .dropdown-toggle:empty:after {
    margin-left: 0;
}
.dropleft .dropdown-toggle:before {
    vertical-align: 0;
}
.dropdown-menu[x-placement^="bottom"],
.dropdown-menu[x-placement^="left"],
.dropdown-menu[x-placement^="right"],
.dropdown-menu[x-placement^="top"] {
    right: auto;
    bottom: auto;
}
.dropdown-divider {
    height: 0;
    margin: 0.5rem 0;
    overflow: hidden;
    border-top: 1px solid #eff2f7;
}
.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1rem;
    clear: both;
    font-weight: 400;
    color: #8492a6;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}
.dropdown-item.active,
.dropdown-item:active,
.dropdown-item:focus,
.dropdown-item:hover {
    color: {{ $settings->website_theme }};
    text-decoration: none;
    background-color: transparent;
}
.dropdown-item.disabled,
.dropdown-item:disabled {
    color: #c0ccda;
    pointer-events: none;
    background-color: transparent;
}
.dropdown-menu.show {
    display: block;
}
.dropdown-header {
    display: block;
    padding: 0.35rem 1rem;
    margin-bottom: 0;
    font-size: 0.875rem;
    color: #c0ccda;
    white-space: nowrap;
}
.dropdown-item-text {
    display: block;
    padding: 0.25rem 1rem;
    color: #8492a6;
}
.btn-group,
.btn-group-vertical {
    position: relative;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    vertical-align: middle;
}
.btn-group-vertical > .btn,
.btn-group > .btn {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
}
.btn-group-vertical > .btn.active,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:hover,
.btn-group > .btn.active,
.btn-group > .btn:active,
.btn-group > .btn:focus,
.btn-group > .btn:hover {
    z-index: 1;
}
.btn-toolbar {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
}
.btn-toolbar .input-group {
    width: auto;
}
.btn-group > .btn-group:not(:first-child),
.btn-group > .btn:not(:first-child) {
    margin-left: -1px;
}
.btn-group > .btn-group:not(:last-child) > .btn,
.btn-group > .btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.btn-group > .btn-group:not(:first-child) > .btn,
.btn-group > .btn:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.dropdown-toggle-split {
    padding-right: 1.3125rem;
    padding-left: 1.3125rem;
}
.dropdown-toggle-split:after,
.dropright .dropdown-toggle-split:after,
.dropup .dropdown-toggle-split:after {
    margin-left: 0;
}
.dropleft .dropdown-toggle-split:before {
    margin-right: 0;
}
.btn-group-sm > .btn + .dropdown-toggle-split,
.btn-sm + .dropdown-toggle-split {
    padding-right: 0.9375rem;
    padding-left: 0.9375rem;
}
.btn-group-lg > .btn + .dropdown-toggle-split,
.btn-lg + .dropdown-toggle-split {
    padding-right: 1.40625rem;
    padding-left: 1.40625rem;
}
.btn-group.show .dropdown-toggle {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-group.show .dropdown-toggle.btn-link {
    -webkit-box-shadow: none;
    box-shadow: none;
}
.btn-group-vertical {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
    width: 100%;
}
.btn-group-vertical > .btn-group:not(:first-child),
.btn-group-vertical > .btn:not(:first-child) {
    margin-top: -1px;
}
.btn-group-vertical > .btn-group:not(:last-child) > .btn,
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle) {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:not(:first-child) > .btn,
.btn-group-vertical > .btn:not(:first-child) {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
    margin-bottom: 0;
}
.btn-group-toggle > .btn-group > .btn input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"],
.btn-group-toggle > .btn input[type="checkbox"],
.btn-group-toggle > .btn input[type="radio"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}
.input-group {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
}
.input-group > .custom-file,
.input-group > .custom-select,
.input-group > .form-control,
.input-group > .form-control-plaintext {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0;
}
.input-group > .custom-file + .custom-file,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .form-control,
.input-group > .custom-select + .custom-file,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .form-control,
.input-group > .form-control + .custom-file,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .form-control,
.input-group > .form-control-plaintext + .custom-file,
.input-group > .form-control-plaintext + .custom-select,
.input-group > .form-control-plaintext + .form-control {
    margin-left: -1px;
}
.input-group > .custom-file .custom-file-input:focus ~ .custom-file-label,
.input-group > .custom-select:focus,
.input-group > .form-control:focus {
    z-index: 3;
}
.input-group > .custom-file .custom-file-input:focus {
    z-index: 4;
}
.input-group > .custom-select:not(:last-child),
.input-group > .form-control:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group > .custom-select:not(:first-child),
.input-group > .form-control:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.input-group > .custom-file {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label:after {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group > .custom-file:not(:first-child) .custom-file-label {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.input-group-append,
.input-group-prepend {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
.input-group-append .btn,
.input-group-prepend .btn {
    position: relative;
    z-index: 2;
}
.input-group-append .btn:focus,
.input-group-prepend .btn:focus {
    z-index: 3;
}
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .btn,
.input-group-append .input-group-text + .input-group-text,
.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-prepend .input-group-text + .input-group-text {
    margin-left: -1px;
}
.input-group-prepend {
    margin-right: -1px;
}
.input-group-append {
    margin-left: -1px;
}
.input-group-text {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #aabacd;
    text-align: center;
    white-space: nowrap;
    background-color: #fafbfe;
    border: 1px solid #e0e6ed;
    border-radius: 0.25rem;
}
.input-group-text input[type="checkbox"],
.input-group-text input[type="radio"] {
    margin-top: 0;
}
.input-group-lg > .custom-select,
.input-group-lg > .form-control:not(textarea) {
    height: calc(1.5em + 2rem + 2px);
}
.input-group-lg > .custom-select,
.input-group-lg > .form-control,
.input-group-lg > .input-group-append > .btn,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-prepend > .input-group-text {
    padding: 1rem 1.875rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.375rem;
}
.input-group-sm > .custom-select,
.input-group-sm > .form-control:not(textarea) {
    height: calc(1.5em + 1rem + 2px);
}
.input-group-sm > .custom-select,
.input-group-sm > .form-control,
.input-group-sm > .input-group-append > .btn,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-prepend > .input-group-text {
    padding: 0.5rem 1.25rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}
.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
    padding-right: 2.25rem;
}
.input-group
    > .input-group-append:last-child
    > .btn:not(:last-child):not(.dropdown-toggle),
.input-group
    > .input-group-append:last-child
    > .input-group-text:not(:last-child),
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group
    > .input-group-prepend:first-child
    > .input-group-text:not(:first-child),
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.custom-control {
    position: relative;
    display: block;
    min-height: 1.7rem;
    padding-left: 1.75rem;
}
.custom-control-inline {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin-right: 1rem;
}
.custom-control-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
}
.custom-control-input:checked ~ .custom-control-label:before {
    color: #fff;
    border-color: {{ $settings->website_theme }};
    background-color: {{ $settings->website_theme }};
    -webkit-box-shadow: none;
    box-shadow: none;
}
.custom-control-input:focus ~ .custom-control-label:before {
    -webkit-box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075),
        0 0 20px rgba(110, 0, 255, 0.1);
    box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075),
        0 0 20px rgba(110, 0, 255, 0.1);
}
.custom-control-input:focus:not(:checked) ~ .custom-control-label:before {
    border-color: rgba(110, 0, 255, 0.5);
}
.custom-control-input:not(:disabled):active ~ .custom-control-label:before {
    color: #fff;
    background-color: #c599ff;
    border-color: #c599ff;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.custom-control-input:disabled ~ .custom-control-label {
    color: #c0ccda;
}
.custom-control-input:disabled ~ .custom-control-label:before {
    background-color: #eff2f7;
}
.custom-control-label {
    position: relative;
    margin-bottom: 0;
    vertical-align: top;
}
.custom-control-label:before {
    pointer-events: none;
    background-color: #e5e9f2;
    border: 0 solid #eff2f7;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.custom-control-label:after,
.custom-control-label:before {
    position: absolute;
    top: 0.35rem;
    left: -1.75rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
}
.custom-control-label:after {
    background: no-repeat 50%/50% 50%;
}
.custom-checkbox .custom-control-label:before {
    border-radius: 0.25rem;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label:after {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23FFF' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3E%3C/svg%3E");
}
.custom-checkbox
    .custom-control-input:indeterminate
    ~ .custom-control-label:before {
    border-color: {{ $settings->website_theme }};
    background-color: {{ $settings->website_theme }};
    -webkit-box-shadow: none;
    box-shadow: none;
}
.custom-checkbox
    .custom-control-input:indeterminate
    ~ .custom-control-label:after {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23FFF' d='M0 2h4'/%3E%3C/svg%3E");
}
.custom-checkbox
    .custom-control-input:disabled:checked
    ~ .custom-control-label:before {
    background-color: rgba(110, 0, 255, 0.5);
}
.custom-checkbox
    .custom-control-input:disabled:indeterminate
    ~ .custom-control-label:before {
    background-color: rgba(110, 0, 255, 0.5);
}
.custom-radio .custom-control-label:before {
    border-radius: 50%;
}
.custom-radio .custom-control-input:checked ~ .custom-control-label:after {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23FFF'/%3E%3C/svg%3E");
}
.custom-radio
    .custom-control-input:disabled:checked
    ~ .custom-control-label:before {
    background-color: rgba(110, 0, 255, 0.5);
}
.custom-switch {
    padding-left: 3.75rem;
}
.custom-switch .custom-control-label:before {
    left: -3.75rem;
    width: 3rem;
    pointer-events: all;
    border-radius: 0.5625rem;
}
.custom-switch .custom-control-label:after {
    top: 0.35rem;
    left: -3.75rem;
    width: 1.125rem;
    height: 1.125rem;
    background-color: #eff2f7;
    border-radius: 0.5625rem;
    -webkit-transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
        -webkit-transform 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .custom-switch .custom-control-label:after {
        -webkit-transition: none;
        transition: none;
    }
}
.custom-switch .custom-control-input:checked ~ .custom-control-label:after {
    background-color: #e5e9f2;
    -webkit-transform: translateX(2rem);
    transform: translateX(2rem);
}
.custom-switch
    .custom-control-input:disabled:checked
    ~ .custom-control-label:before {
    background-color: rgba(110, 0, 255, 0.5);
}
.custom-select {
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 1.5rem + 2px);
    padding: 0.75rem 2.25rem 0.75rem 1.25rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #8492a6;
    vertical-align: middle;
    background: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%233C4858' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E")
        no-repeat right 1.25rem center/8px 10px;
    background-color: #fff;
    border: 1px solid #e0e6ed;
    border-radius: 0.25rem;
    -webkit-box-shadow: inset 0 1px 2px rgba(31, 45, 61, 0.075);
    box-shadow: inset 0 1px 2px rgba(31, 45, 61, 0.075);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.custom-select:focus {
    border-color: rgba(110, 0, 255, 0.5);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 2px rgba(31, 45, 61, 0.075),
        0 0 20px rgba(110, 0, 255, 0.1);
    box-shadow: inset 0 1px 2px rgba(31, 45, 61, 0.075),
        0 0 20px rgba(110, 0, 255, 0.1);
}
.custom-select:focus::-ms-value {
    color: #8492a6;
    background-color: #fff;
}
.custom-select[multiple],
.custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 1.25rem;
    background-image: none;
}
.custom-select:disabled {
    color: #c0ccda;
    background-color: #eff2f7;
}
.custom-select::-ms-expand {
    display: none;
}
.custom-select-sm {
    height: calc(1.5em + 1rem + 2px);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 1.25rem;
    font-size: 0.875rem;
}
.custom-select-lg {
    height: calc(1.5em + 2rem + 2px);
    padding-top: 1rem;
    padding-bottom: 1rem;
    padding-left: 1.875rem;
    font-size: 1rem;
}
.custom-file {
    display: inline-block;
    margin-bottom: 0;
}
.custom-file,
.custom-file-input {
    position: relative;
    width: 100%;
    height: calc(1.5em + 1.5rem + 2px);
}
.custom-file-input {
    z-index: 2;
    margin: 0;
    opacity: 0;
}
.custom-file-input:focus ~ .custom-file-label {
    border-color: rgba(110, 0, 255, 0.5);
    -webkit-box-shadow: 0 0 20px rgba(110, 0, 255, 0.1);
    box-shadow: 0 0 20px rgba(110, 0, 255, 0.1);
}
.custom-file-input:disabled ~ .custom-file-label {
    background-color: #eff2f7;
}
.custom-file-input:lang(en) ~ .custom-file-label:after {
    content: "Browse";
}
.custom-file-input ~ .custom-file-label[data-browse]:after {
    content: attr(data-browse);
}
.custom-file-label {
    left: 0;
    z-index: 1;
    height: calc(1.5em + 1.5rem + 2px);
    font-weight: 400;
    background-color: #fff;
    border: 1px solid #e0e6ed;
    border-radius: 0.25rem;
    -webkit-box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075);
    box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075);
}
.custom-file-label,
.custom-file-label:after {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    line-height: 1.5;
    color: #8492a6;
}
.custom-file-label:after {
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + 1.5rem);
    content: "Browse";
    background-color: #fafbfe;
    border-left: inherit;
    border-radius: 0 0.25rem 0.25rem 0;
}
.custom-range {
    width: 100%;
    height: 1rem;
    padding: 0;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.custom-range:focus {
    outline: none;
}
.custom-range:focus::-webkit-slider-thumb {
    -webkit-box-shadow: 0 0 0 1px #f8f8fb, 0 0 20px rgba(110, 0, 255, 0.1);
    box-shadow: 0 0 0 1px #f8f8fb, 0 0 20px rgba(110, 0, 255, 0.1);
}
.custom-range:focus::-moz-range-thumb {
    box-shadow: 0 0 0 1px #f8f8fb, 0 0 20px rgba(110, 0, 255, 0.1);
}
.custom-range:focus::-ms-thumb {
    box-shadow: 0 0 0 1px #f8f8fb, 0 0 20px rgba(110, 0, 255, 0.1);
}
.custom-range::-moz-focus-outer {
    border: 0;
}
.custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: {{ $settings->website_theme }};
    border: 0;
    border-radius: 1rem;
    -webkit-box-shadow: 0 0.1rem 0.25rem rgba(31, 45, 61, 0.1);
    box-shadow: 0 0.1rem 0.25rem rgba(31, 45, 61, 0.1);
    -webkit-transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .custom-range::-webkit-slider-thumb {
        -webkit-transition: none;
        transition: none;
    }
}
.custom-range::-webkit-slider-thumb:active {
    background-color: #c599ff;
}
.custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #e5e9f2;
    border-color: transparent;
    border-radius: 1rem;
    -webkit-box-shadow: inset 0 0.25rem 0.25rem rgba(31, 45, 61, 0.1);
    box-shadow: inset 0 0.25rem 0.25rem rgba(31, 45, 61, 0.1);
}
.custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: {{ $settings->website_theme }};
    border: 0;
    border-radius: 1rem;
    box-shadow: 0 0.1rem 0.25rem rgba(31, 45, 61, 0.1);
    -webkit-transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
    -moz-appearance: none;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .custom-range::-moz-range-thumb {
        -webkit-transition: none;
        transition: none;
    }
}
.custom-range::-moz-range-thumb:active {
    background-color: #c599ff;
}
.custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #e5e9f2;
    border-color: transparent;
    border-radius: 1rem;
    box-shadow: inset 0 0.25rem 0.25rem rgba(31, 45, 61, 0.1);
}
.custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0;
    margin-left: 0;
    background-color: {{ $settings->website_theme }};
    border: 0;
    border-radius: 1rem;
    box-shadow: 0 0.1rem 0.25rem rgba(31, 45, 61, 0.1);
    -webkit-transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .custom-range::-ms-thumb {
        -webkit-transition: none;
        transition: none;
    }
}
.custom-range::-ms-thumb:active {
    background-color: #c599ff;
}
.custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem;
    box-shadow: inset 0 0.25rem 0.25rem rgba(31, 45, 61, 0.1);
}
.custom-range::-ms-fill-lower,
.custom-range::-ms-fill-upper {
    background-color: #e5e9f2;
    border-radius: 1rem;
}
.custom-range::-ms-fill-upper {
    margin-right: 15px;
}
.custom-range:disabled::-webkit-slider-thumb {
    background-color: #d3dce6;
}
.custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default;
}
.custom-range:disabled::-moz-range-thumb {
    background-color: #d3dce6;
}
.custom-range:disabled::-moz-range-track {
    cursor: default;
}
.custom-range:disabled::-ms-thumb {
    background-color: #d3dce6;
}
.custom-control-label:before,
.custom-file-label,
.custom-select {
    -webkit-transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .custom-control-label:before,
    .custom-file-label,
    .custom-select {
        -webkit-transition: none;
        transition: none;
    }
}
.nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.nav-link {
    display: block;
    padding: 0.5rem 1rem;
}
.nav-link:focus,
.nav-link:hover {
    text-decoration: none;
}
.nav-link.disabled {
    color: #c0ccda;
    pointer-events: none;
    cursor: default;
}
.nav-tabs {
    border-bottom: 1px solid #eff2f7;
}
.nav-tabs .nav-item {
    margin-bottom: -1px;
}
.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.nav-tabs .nav-link:focus,
.nav-tabs .nav-link:hover {
    border-color: transparent;
}
.nav-tabs .nav-link.disabled {
    color: #c0ccda;
    background-color: transparent;
    border-color: transparent;
}
.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
    color: #8492a6;
    background-color: transparent;
    border-color: transparent transparent {{ $settings->website_theme }};
}
.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.nav-pills .nav-link {
    border-radius: 0.25rem;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
    color: #fff;
    background-color: {{ $settings->website_theme }};
}
.nav-fill .nav-item {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    text-align: center;
}
.nav-justified .nav-item {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    text-align: center;
}
.tab-content > .tab-pane {
    display: none;
}
.tab-content > .active {
    display: block;
}
.navbar {
    padding: 0.75rem 1rem;
}
.navbar,
.navbar > .container,
.navbar > .container-fluid {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
.navbar-brand {
    display: inline-block;
    padding-top: 0.2875rem;
    padding-bottom: 0.2875rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
}
.navbar-brand:focus,
.navbar-brand:hover {
    text-decoration: none;
}
.navbar-nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0;
}
.navbar-nav .dropdown-menu {
    position: static;
    float: none;
}
.navbar-text {
    display: inline-block;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
.navbar-collapse {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.navbar-toggler {
    padding: 0.25rem 0.75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}
.navbar-toggler:focus,
.navbar-toggler:hover {
    text-decoration: none;
}
.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat 50%;
    background-size: 100% 100%;
}
@media (max-width: 575.98px) {
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}
@media (min-width: 576px) {
    .navbar-expand-sm {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }
    .navbar-expand-sm,
    .navbar-expand-sm .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
    }
    .navbar-expand-sm .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row;
    }
    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 1rem;
        padding-left: 1rem;
    }
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }
    .navbar-expand-sm .navbar-collapse {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }
    .navbar-expand-sm .navbar-toggler {
        display: none;
    }
}
@media (max-width: 767.98px) {
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}
@media (min-width: 768px) {
    .navbar-expand-md {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }
    .navbar-expand-md,
    .navbar-expand-md .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
    }
    .navbar-expand-md .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row;
    }
    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 1rem;
        padding-left: 1rem;
    }
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }
    .navbar-expand-md .navbar-collapse {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }
    .navbar-expand-md .navbar-toggler {
        display: none;
    }
}
@media (max-width: 991.98px) {
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}
@media (min-width: 992px) {
    .navbar-expand-lg {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }
    .navbar-expand-lg,
    .navbar-expand-lg .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
    }
    .navbar-expand-lg .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row;
    }
    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 1rem;
        padding-left: 1rem;
    }
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }
    .navbar-expand-lg .navbar-collapse {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }
    .navbar-expand-lg .navbar-toggler {
        display: none;
    }
}
@media (max-width: 1199.98px) {
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}
@media (min-width: 1200px) {
    .navbar-expand-xl {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }
    .navbar-expand-xl,
    .navbar-expand-xl .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
    }
    .navbar-expand-xl .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row;
    }
    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 1rem;
        padding-left: 1rem;
    }
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }
    .navbar-expand-xl .navbar-collapse {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }
    .navbar-expand-xl .navbar-toggler {
        display: none;
    }
}
.navbar-expand {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid {
    padding-right: 0;
    padding-left: 0;
}
.navbar-expand .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
    padding-right: 1rem;
    padding-left: 1rem;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
}
.navbar-expand .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
}
.navbar-expand .navbar-toggler {
    display: none;
}
.navbar-light .navbar-brand,
.navbar-light .navbar-brand:focus,
.navbar-light .navbar-brand:hover {
    color: rgba(31, 45, 61, 0.9);
}
.navbar-light .navbar-nav .nav-link {
    color: rgba(31, 45, 61, 0.5);
}
.navbar-light .navbar-nav .nav-link:focus,
.navbar-light .navbar-nav .nav-link:hover {
    color: rgba(31, 45, 61, 0.7);
}
.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(31, 45, 61, 0.3);
}
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .show > .nav-link {
    color: rgba(31, 45, 61, 0.9);
}
.navbar-light .navbar-toggler {
    color: rgba(31, 45, 61, 0.5);
    border-color: transparent;
}
.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(31, 45, 61, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}
.navbar-light .navbar-text {
    color: rgba(31, 45, 61, 0.5);
}
.navbar-light .navbar-text a,
.navbar-light .navbar-text a:focus,
.navbar-light .navbar-text a:hover {
    color: rgba(31, 45, 61, 0.9);
}
.navbar-dark .navbar-brand,
.navbar-dark .navbar-brand:focus,
.navbar-dark .navbar-brand:hover {
    color: #fff;
}
.navbar-dark .navbar-nav .nav-link {
    color: hsla(0, 0%, 100%, 0.85);
}
.navbar-dark .navbar-nav .nav-link:focus,
.navbar-dark .navbar-nav .nav-link:hover {
    color: #fff;
}
.navbar-dark .navbar-nav .nav-link.disabled {
    color: hsla(0, 0%, 100%, 0.25);
}
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .show > .nav-link {
    color: #fff;
}
.navbar-dark .navbar-toggler {
    color: hsla(0, 0%, 100%, 0.85);
    border-color: transparent;
}
.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.85)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}
.navbar-dark .navbar-text {
    color: hsla(0, 0%, 100%, 0.85);
}
.navbar-dark .navbar-text a,
.navbar-dark .navbar-text a:focus,
.navbar-dark .navbar-text a:hover {
    color: #fff;
}
.card {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #eff2f7;
    border-radius: 0.375rem;
}
.card > hr {
    margin-right: 0;
    margin-left: 0;
}
.card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0.375rem;
    border-top-right-radius: 0.375rem;
}
.card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}
.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.5rem;
    color: #8492a6;
}
.card-title {
    margin-bottom: 1.25rem;
}
.card-subtitle {
    margin-top: -0.625rem;
}
.card-subtitle,
.card-text:last-child {
    margin-bottom: 0;
}
.card-link:hover {
    text-decoration: none;
}
.card-link + .card-link {
    margin-left: 1.5rem;
}
.card-header {
    padding: 1.25rem 1.5rem;
    margin-bottom: 0;
    background-color: transparent;
}
.card-header:first-child {
    border-radius: calc(0.375rem - 1px) calc(0.375rem - 1px) 0 0;
}
.card-header + .list-group .list-group-item:first-child {
    border-top: 0;
}
.card-footer {
    padding: 1.25rem 1.5rem;
    background-color: transparent;
    border-top: 1px solid #eff2f7;
}
.card-footer:last-child {
    border-radius: 0 0 calc(0.375rem - 1px) calc(0.375rem - 1px);
}
.card-header-tabs {
    margin-bottom: -1.25rem;
    border-bottom: 0;
}
.card-header-pills,
.card-header-tabs {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
}
.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem;
}
.card-img {
    width: 100%;
    border-radius: calc(0.375rem - 1px);
}
.card-img-top {
    width: 100%;
    border-top-left-radius: calc(0.375rem - 1px);
    border-top-right-radius: calc(0.375rem - 1px);
}
.card-img-bottom {
    width: 100%;
    border-bottom-right-radius: calc(0.375rem - 1px);
    border-bottom-left-radius: calc(0.375rem - 1px);
}
.card-deck {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}
.card-deck .card {
    margin-bottom: 10px;
}
@media (min-width: 576px) {
    .card-deck {
        -webkit-box-orient: horizontal;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        margin-right: -10px;
        margin-left: -10px;
    }
    .card-deck,
    .card-deck .card {
        -webkit-box-direction: normal;
    }
    .card-deck .card {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        -webkit-box-orient: vertical;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-right: 10px;
        margin-bottom: 0;
        margin-left: 10px;
    }
}
.card-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}
.card-group > .card {
    margin-bottom: 10px;
}
@media (min-width: 576px) {
    .card-group {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
    }
    .card-group > .card {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        margin-bottom: 0;
    }
    .card-group > .card + .card {
        margin-left: 0;
        border-left: 0;
    }
    .card-group > .card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .card-group > .card:not(:last-child) .card-header,
    .card-group > .card:not(:last-child) .card-img-top {
        border-top-right-radius: 0;
    }
    .card-group > .card:not(:last-child) .card-footer,
    .card-group > .card:not(:last-child) .card-img-bottom {
        border-bottom-right-radius: 0;
    }
    .card-group > .card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    .card-group > .card:not(:first-child) .card-header,
    .card-group > .card:not(:first-child) .card-img-top {
        border-top-left-radius: 0;
    }
    .card-group > .card:not(:first-child) .card-footer,
    .card-group > .card:not(:first-child) .card-img-bottom {
        border-bottom-left-radius: 0;
    }
}
.card-columns .card {
    margin-bottom: 1.25rem;
}
@media (min-width: 576px) {
    .card-columns {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
        -webkit-column-gap: 1.25rem;
        -moz-column-gap: 1.25rem;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1;
    }
    .card-columns .card {
        display: inline-block;
        width: 100%;
    }
}
.accordion > .card {
    overflow: hidden;
}
.accordion > .card:not(:first-of-type) .card-header:first-child {
    border-radius: 0;
}
.accordion > .card:not(:first-of-type):not(:last-of-type) {
    border-bottom: 0;
    border-radius: 0;
}
.accordion > .card:first-of-type {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.accordion > .card:last-of-type {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.accordion > .card .card-header {
    margin-bottom: -1px;
}
.breadcrumb {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 0;
    list-style: none;
    background-color: transparent;
    border-radius: 0.25rem;
}
.breadcrumb-item + .breadcrumb-item {
    padding-left: 0.5rem;
}
.breadcrumb-item + .breadcrumb-item:before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #e0e6ed;
    content: "/";
}
.breadcrumb-item + .breadcrumb-item:hover:before {
    text-decoration: underline;
    text-decoration: none;
}
.breadcrumb-item.active {
    color: #c0ccda;
}
.pagination {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}
.page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #c0ccda;
    background-color: #fff;
    border: 1px solid #e5e9f2;
}
.page-link:hover {
    z-index: 2;
    color: #c0ccda;
    text-decoration: none;
    background-color: #e5e9f2;
    border-color: #e5e9f2;
}
.page-link:focus {
    z-index: 2;
    outline: 0;
    -webkit-box-shadow: 0 0 0 rgba(99, 0, 230, 0.25);
    box-shadow: 0 0 0 rgba(99, 0, 230, 0.25);
}
.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.page-item:last-child .page-link {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
}
.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: {{ $settings->website_theme }};
    border-color: {{ $settings->website_theme }};
}
.page-item.disabled .page-link {
    color: #c0ccda;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #e5e9f2;
}
.pagination-lg .page-link {
    padding: 0.75rem 1.5rem;
    font-size: 1.25rem;
    line-height: 1.5;
}
.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}
.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: 0.375rem;
    border-bottom-right-radius: 0.375rem;
}
.pagination-sm .page-link {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
}
.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: 0.2rem;
    border-bottom-left-radius: 0.2rem;
}
.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: 0.2rem;
    border-bottom-right-radius: 0.2rem;
}
.badge {
    display: inline-block;
    padding: 0.25rem 0.5rem;
    font-size: 80%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
    -webkit-transition: color 0.15s ease-in-out,
        background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .badge {
        -webkit-transition: none;
        transition: none;
    }
}
a.badge:focus,
a.badge:hover {
    text-decoration: none;
}
.badge:empty {
    display: none;
}
.btn .badge {
    position: relative;
    top: -1px;
}
.badge-pill {
    padding-right: 0.875em;
    padding-left: 0.875em;
    border-radius: 50rem;
}
.badge-primary {
    color: #fff;
    background-color: {{ $settings->website_theme }};
}
a.badge-primary:focus,
a.badge-primary:hover {
    color: #fff;
    background-color: {{ $settings->website_theme }};
}
a.badge-primary.focus,
a.badge-primary:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0 rgba(110, 0, 255, 0.5);
    box-shadow: 0 0 0 0 rgba(110, 0, 255, 0.5);
}
.badge-secondary {
    color: #273444;
    background-color: #eff2f7;
}
a.badge-secondary:focus,
a.badge-secondary:hover {
    color: #273444;
    background-color: #cdd6e6;
}
a.badge-secondary.focus,
a.badge-secondary:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0 rgba(239, 242, 247, 0.5);
    box-shadow: 0 0 0 0 rgba(239, 242, 247, 0.5);
}
.badge-success {
    color: #fff;
    background-color: #36b37e;
}
a.badge-success:focus,
a.badge-success:hover {
    color: #fff;
    background-color: #2a8c62;
}
a.badge-success.focus,
a.badge-success:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0 rgba(54, 179, 126, 0.5);
    box-shadow: 0 0 0 0 rgba(54, 179, 126, 0.5);
}
.badge-info {
    color: #fff;
    background-color: #00b8d9;
}
a.badge-info:focus,
a.badge-info:hover {
    color: #fff;
    background-color: #008da6;
}
a.badge-info.focus,
a.badge-info:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0 rgba(0, 184, 217, 0.5);
    box-shadow: 0 0 0 0 rgba(0, 184, 217, 0.5);
}
.badge-warning {
    color: #fff;
    background-color: #ffab00;
}
a.badge-warning:focus,
a.badge-warning:hover {
    color: #fff;
    background-color: #cc8900;
}
a.badge-warning.focus,
a.badge-warning:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0 rgba(255, 171, 0, 0.5);
    box-shadow: 0 0 0 0 rgba(255, 171, 0, 0.5);
}
.badge-danger {
    color: #fff;
    background-color: #ff5630;
}
a.badge-danger:focus,
a.badge-danger:hover {
    color: #fff;
    background-color: #fc2e00;
}
a.badge-danger.focus,
a.badge-danger:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0 rgba(255, 86, 48, 0.5);
    box-shadow: 0 0 0 0 rgba(255, 86, 48, 0.5);
}
.badge-light {
    color: #273444;
    background-color: #eff2f7;
}
a.badge-light:focus,
a.badge-light:hover {
    color: #273444;
    background-color: #cdd6e6;
}
a.badge-light.focus,
a.badge-light:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0 rgba(239, 242, 247, 0.5);
    box-shadow: 0 0 0 0 rgba(239, 242, 247, 0.5);
}
.badge-dark {
    color: #fff;
    background-color: #273444;
}
a.badge-dark:focus,
a.badge-dark:hover {
    color: #fff;
    background-color: #141b24;
}
a.badge-dark.focus,
a.badge-dark:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0 rgba(39, 52, 68, 0.5);
    box-shadow: 0 0 0 0 rgba(39, 52, 68, 0.5);
}
.badge-neutral {
    color: #273444;
    background-color: #fff;
}
a.badge-neutral:focus,
a.badge-neutral:hover {
    color: #273444;
    background-color: #e6e6e6;
}
a.badge-neutral.focus,
a.badge-neutral:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0 hsla(0, 0%, 100%, 0.5);
    box-shadow: 0 0 0 0 hsla(0, 0%, 100%, 0.5);
}
.badge-white {
    color: #273444;
    background-color: #fff;
}
a.badge-white:focus,
a.badge-white:hover {
    color: #273444;
    background-color: #e6e6e6;
}
a.badge-white.focus,
a.badge-white:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0 hsla(0, 0%, 100%, 0.5);
    box-shadow: 0 0 0 0 hsla(0, 0%, 100%, 0.5);
}
.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #eff2f7;
    border-radius: 0.375rem;
}
@media (min-width: 576px) {
    .jumbotron {
        padding: 4rem 2rem;
    }
}
.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0;
}
.alert {
    position: relative;
    padding: 0.875rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}
.alert-heading {
    color: inherit;
}
.alert-link {
    font-weight: 600;
}
.alert-dismissible {
    padding-right: 3rem;
}
.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.875rem;
    color: inherit;
}
.alert-primary {
    color: #4816a2;
    background-color: {{ $settings->website_theme }};
    border-color: #d6b8ff;
}
.alert-primary hr {
    border-top-color: {{ $settings->website_theme }};
}
.alert-primary .alert-link {
    color: {{ $settings->website_theme }};
}
.alert-secondary {
    color: #8b939e;
    background-color: #fcfcfd;
    border-color: #fbfbfd;
}
.alert-secondary hr {
    border-top-color: #eaeaf5;
}
.alert-secondary .alert-link {
    color: #707986;
}
.alert-success {
    color: #2b735f;
    background-color: #d7f0e5;
    border-color: #c7eadb;
}
.alert-success hr {
    border-top-color: #b4e3cf;
}
.alert-success .alert-link {
    color: #1d4e40;
}
.alert-info {
    color: #0f758e;
    background-color: #ccf1f7;
    border-color: #b8ebf4;
}
.alert-info hr {
    border-top-color: #a2e5f1;
}
.alert-info .alert-link {
    color: #0a4f60;
}
.alert-warning {
    color: #936f1d;
    background-color: #fec;
    border-color: #ffe7b8;
}
.alert-warning hr {
    border-top-color: #ffde9f;
}
.alert-warning .alert-link {
    color: #684f15;
}
.alert-danger {
    color: #934236;
    background-color: #ffddd6;
    border-color: #ffd0c5;
}
.alert-danger hr {
    border-top-color: #ffbbac;
}
.alert-danger .alert-link {
    color: #6e3128;
}
.alert-light {
    color: #8b939e;
    background-color: #fcfcfd;
    border-color: #fbfbfd;
}
.alert-light hr {
    border-top-color: #eaeaf5;
}
.alert-light .alert-link {
    color: #707986;
}
.alert-dark {
    color: #233141;
    background-color: #d4d6da;
    border-color: #c3c6cb;
}
.alert-dark hr {
    border-top-color: #b5b9bf;
}
.alert-dark .alert-link {
    color: #111820;
}
.alert-neutral {
    color: #939aa2;
    background-color: #fff;
    border-color: #fff;
}
.alert-neutral hr {
    border-top-color: #f2f2f2;
}
.alert-neutral .alert-link {
    color: #78808a;
}
.alert-white {
    color: #939aa2;
    background-color: #fff;
    border-color: #fff;
}
.alert-white hr {
    border-top-color: #f2f2f2;
}
.alert-white .alert-link {
    color: #78808a;
}
@-webkit-keyframes progress-bar-stripes {
    0% {
        background-position: 0.5rem 0;
    }
    to {
        background-position: 0 0;
    }
}
@keyframes progress-bar-stripes {
    0% {
        background-position: 0.5rem 0;
    }
    to {
        background-position: 0 0;
    }
}
.progress {
    height: 0.5rem;
    overflow: hidden;
    font-size: 0.75rem;
    background-color: #eff2f7;
    border-radius: 50rem;
    -webkit-box-shadow: inset 0 0.1rem 0.1rem rgba(31, 45, 61, 0.1);
    box-shadow: inset 0 0.1rem 0.1rem rgba(31, 45, 61, 0.1);
}
.progress,
.progress-bar {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
.progress-bar {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: {{ $settings->website_theme }};
    -webkit-transition: width 0.6s ease;
    transition: width 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
    .progress-bar {
        -webkit-transition: none;
        transition: none;
    }
}
.progress-bar-striped {
    background-image: linear-gradient(
        45deg,
        hsla(0, 0%, 100%, 0.15) 25%,
        transparent 0,
        transparent 50%,
        hsla(0, 0%, 100%, 0.15) 0,
        hsla(0, 0%, 100%, 0.15) 75%,
        transparent 0,
        transparent
    );
    background-size: 0.5rem 0.5rem;
}
.progress-bar-animated {
    -webkit-animation: progress-bar-stripes 1s linear infinite;
    animation: progress-bar-stripes 1s linear infinite;
}
@media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
        -webkit-animation: none;
        animation: none;
    }
}
.media {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
}
.media-body {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
.list-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
}
.list-group-item-action {
    width: 100%;
    color: #8492a6;
    text-align: inherit;
}
.list-group-item-action:focus,
.list-group-item-action:hover {
    z-index: 1;
    color: #8492a6;
    text-decoration: none;
    background-color: #fafbfe;
}
.list-group-item-action:active {
    color: #8492a6;
    background-color: #eff2f7;
}
.list-group-item {
    position: relative;
    display: block;
    padding: 1rem 1.5rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid #eff2f7;
}
.list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}
.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.list-group-item.disabled,
.list-group-item:disabled {
    color: #c0ccda;
    pointer-events: none;
    background-color: #fff;
}
.list-group-item.active {
    z-index: 2;
    color: #8492a6;
    background-color: #fafbfe;
    border-color: #eff2f7;
}
.list-group-horizontal {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
}
.list-group-horizontal .list-group-item {
    margin-right: -1px;
    margin-bottom: 0;
}
.list-group-horizontal .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
}
.list-group-horizontal .list-group-item:last-child {
    margin-right: 0;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
}
@media (min-width: 576px) {
    .list-group-horizontal-sm {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
    }
    .list-group-horizontal-sm .list-group-item {
        margin-right: -1px;
        margin-bottom: 0;
    }
    .list-group-horizontal-sm .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }
    .list-group-horizontal-sm .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }
}
@media (min-width: 768px) {
    .list-group-horizontal-md {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
    }
    .list-group-horizontal-md .list-group-item {
        margin-right: -1px;
        margin-bottom: 0;
    }
    .list-group-horizontal-md .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }
    .list-group-horizontal-md .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }
}
@media (min-width: 992px) {
    .list-group-horizontal-lg {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
    }
    .list-group-horizontal-lg .list-group-item {
        margin-right: -1px;
        margin-bottom: 0;
    }
    .list-group-horizontal-lg .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }
    .list-group-horizontal-lg .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }
}
@media (min-width: 1200px) {
    .list-group-horizontal-xl {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
    }
    .list-group-horizontal-xl .list-group-item {
        margin-right: -1px;
        margin-bottom: 0;
    }
    .list-group-horizontal-xl .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }
    .list-group-horizontal-xl .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }
}
.list-group-flush .list-group-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0;
}
.list-group-flush .list-group-item:last-child {
    margin-bottom: -1px;
}
.list-group-flush:first-child .list-group-item:first-child {
    border-top: 0;
}
.list-group-flush:last-child .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom: 0;
}
.list-group-item-primary {
    color: #4816a2;
    background-color: {{ $settings->website_theme }};
}
.list-group-item-primary.list-group-item-action:focus,
.list-group-item-primary.list-group-item-action:hover {
    color: #4816a2;
    background-color: {{ $settings->website_theme }};
}
.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: {{ $settings->website_theme }};
    border-color: #4816a2;
}
.list-group-item-secondary {
    color: #8b939e;
    background-color: #fbfbfd;
}
.list-group-item-secondary.list-group-item-action:focus,
.list-group-item-secondary.list-group-item-action:hover {
    color: #8b939e;
    background-color: #eaeaf5;
}
.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #8b939e;
    border-color: #8b939e;
}
.list-group-item-success {
    color: #2b735f;
    background-color: #c7eadb;
}
.list-group-item-success.list-group-item-action:focus,
.list-group-item-success.list-group-item-action:hover {
    color: #2b735f;
    background-color: #b4e3cf;
}
.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #2b735f;
    border-color: #2b735f;
}
.list-group-item-info {
    color: #0f758e;
    background-color: #b8ebf4;
}
.list-group-item-info.list-group-item-action:focus,
.list-group-item-info.list-group-item-action:hover {
    color: #0f758e;
    background-color: #a2e5f1;
}
.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #0f758e;
    border-color: #0f758e;
}
.list-group-item-warning {
    color: #936f1d;
    background-color: #ffe7b8;
}
.list-group-item-warning.list-group-item-action:focus,
.list-group-item-warning.list-group-item-action:hover {
    color: #936f1d;
    background-color: #ffde9f;
}
.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #936f1d;
    border-color: #936f1d;
}
.list-group-item-danger {
    color: #934236;
    background-color: #ffd0c5;
}
.list-group-item-danger.list-group-item-action:focus,
.list-group-item-danger.list-group-item-action:hover {
    color: #934236;
    background-color: #ffbbac;
}
.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #934236;
    border-color: #934236;
}
.list-group-item-light {
    color: #8b939e;
    background-color: #fbfbfd;
}
.list-group-item-light.list-group-item-action:focus,
.list-group-item-light.list-group-item-action:hover {
    color: #8b939e;
    background-color: #eaeaf5;
}
.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #8b939e;
    border-color: #8b939e;
}
.list-group-item-dark {
    color: #233141;
    background-color: #c3c6cb;
}
.list-group-item-dark.list-group-item-action:focus,
.list-group-item-dark.list-group-item-action:hover {
    color: #233141;
    background-color: #b5b9bf;
}
.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #233141;
    border-color: #233141;
}
.list-group-item-neutral {
    color: #939aa2;
    background-color: #fff;
}
.list-group-item-neutral.list-group-item-action:focus,
.list-group-item-neutral.list-group-item-action:hover {
    color: #939aa2;
    background-color: #f2f2f2;
}
.list-group-item-neutral.list-group-item-action.active {
    color: #fff;
    background-color: #939aa2;
    border-color: #939aa2;
}
.list-group-item-white {
    color: #939aa2;
    background-color: #fff;
}
.list-group-item-white.list-group-item-action:focus,
.list-group-item-white.list-group-item-action:hover {
    color: #939aa2;
    background-color: #f2f2f2;
}
.list-group-item-white.list-group-item-action.active {
    color: #fff;
    background-color: #939aa2;
    border-color: #939aa2;
}
.close {
    float: right;
    font-size: 1.25rem;
    font-weight: 600;
    line-height: 1;
    text-shadow: none;
    opacity: 0.5;
}
.close,
.close:hover {
    color: hsla(0, 0%, 100%, 0.6);
}
.close:hover {
    text-decoration: none;
}
.close:not(:disabled):not(.disabled):focus,
.close:not(:disabled):not(.disabled):hover {
    opacity: 0.75;
}
button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
a.close.disabled {
    pointer-events: none;
}
.toast {
    max-width: 350px;
    overflow: hidden;
    font-size: 0.875rem;
    background-color: hsla(0, 0%, 100%, 0.85);
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 0.25rem 0.75rem rgba(31, 45, 61, 0.1);
    box-shadow: 0 0.25rem 0.75rem rgba(31, 45, 61, 0.1);
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    opacity: 0;
    border-radius: 0.25rem;
}
.toast:not(:last-child) {
    margin-bottom: 0.75rem;
}
.toast.showing {
    opacity: 1;
}
.toast.show {
    display: block;
    opacity: 1;
}
.toast.hide {
    display: none;
}
.toast-header {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 0.25rem 0.75rem;
    color: #c0ccda;
    background-color: hsla(0, 0%, 100%, 0.85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}
.toast-body {
    padding: 0.75rem;
}
.modal-open {
    overflow: hidden;
}
.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
}
.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0;
}
.modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none;
}
.modal.fade .modal-dialog {
    -webkit-transition: -webkit-transform 0.3s ease-out;
    transition: -webkit-transform 0.3s ease-out;
    transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
    -webkit-transform: translateY(-50px);
    transform: translateY(-50px);
}
@media (prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
        -webkit-transition: none;
        transition: none;
    }
}
.modal.show .modal-dialog {
    -webkit-transform: none;
    transform: none;
}
.modal-dialog-scrollable {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    max-height: calc(100% - 1rem);
}
.modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 1rem);
    overflow: hidden;
}
.modal-dialog-scrollable .modal-footer,
.modal-dialog-scrollable .modal-header {
    -ms-flex-negative: 0;
    flex-shrink: 0;
}
.modal-dialog-scrollable .modal-body {
    overflow-y: auto;
}
.modal-dialog-centered {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    min-height: calc(100% - 1rem);
}
.modal-dialog-centered:before {
    display: block;
    height: calc(100vh - 1rem);
    content: "";
}
.modal-dialog-centered.modal-dialog-scrollable {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 100%;
}
.modal-dialog-centered.modal-dialog-scrollable .modal-content {
    max-height: none;
}
.modal-dialog-centered.modal-dialog-scrollable:before {
    content: none;
}
.modal-content {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(31, 45, 61, 0.2);
    -webkit-box-shadow: 0 0.25rem 0.5rem rgba(31, 45, 61, 0.3);
    box-shadow: 0 0.25rem 0.5rem rgba(31, 45, 61, 0.3);
    outline: 0;
}
.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #1f2d3d;
}
.modal-backdrop.fade {
    opacity: 0;
}
.modal-backdrop.show {
    opacity: 0.4;
}
.modal-header {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1.25rem;
    border-bottom: 1px solid #eff2f7;
    border-top-left-radius: 0.375rem;
    border-top-right-radius: 0.375rem;
}
.modal-header .close {
    padding: 1.25rem;
    margin: -1rem -1rem -1rem auto;
}
.modal-title {
    margin-bottom: 0;
    line-height: 1.7;
}
.modal-body {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.5rem;
}
.modal-footer {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 1.5rem;
    border-top: 1px solid #eff2f7;
    border-bottom-right-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}
.modal-footer > :not(:first-child) {
    margin-left: 0.25rem;
}
.modal-footer > :not(:last-child) {
    margin-right: 0.25rem;
}
.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll;
}
@media (min-width: 576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
    }
    .modal-dialog-scrollable {
        max-height: calc(100% - 3.5rem);
    }
    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 3.5rem);
    }
    .modal-dialog-centered {
        min-height: calc(100% - 3.5rem);
    }
    .modal-dialog-centered:before {
        height: calc(100vh - 3.5rem);
    }
    .modal-content {
        -webkit-box-shadow: 0 0.5rem 1rem rgba(31, 45, 61, 0.3);
        box-shadow: 0 0.5rem 1rem rgba(31, 45, 61, 0.3);
    }
    .modal-sm {
        max-width: 300px;
    }
}
@media (min-width: 992px) {
    .modal-lg,
    .modal-xl {
        max-width: 800px;
    }
}
@media (min-width: 1200px) {
    .modal-xl {
        max-width: 1140px;
    }
}
.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: Nunito, sans-serif;
    font-style: normal;
    font-weight: 400;
    line-height: 1.7;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    opacity: 0;
}
.tooltip.show {
    opacity: 0.9;
}
.tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem;
}
.tooltip .arrow:before {
    position: absolute;
    content: "";
    border-color: transparent;
    border-style: solid;
}
.bs-tooltip-auto[x-placement^="top"],
.bs-tooltip-top {
    padding: 0.4rem 0;
}
.bs-tooltip-auto[x-placement^="top"] .arrow,
.bs-tooltip-top .arrow {
    bottom: 0;
}
.bs-tooltip-auto[x-placement^="top"] .arrow:before,
.bs-tooltip-top .arrow:before {
    top: 0;
    border-width: 0.4rem 0.4rem 0;
    border-top-color: #1f2d3d;
}
.bs-tooltip-auto[x-placement^="right"],
.bs-tooltip-right {
    padding: 0 0.4rem;
}
.bs-tooltip-auto[x-placement^="right"] .arrow,
.bs-tooltip-right .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem;
}
.bs-tooltip-auto[x-placement^="right"] .arrow:before,
.bs-tooltip-right .arrow:before {
    right: 0;
    border-width: 0.4rem 0.4rem 0.4rem 0;
    border-right-color: #1f2d3d;
}
.bs-tooltip-auto[x-placement^="bottom"],
.bs-tooltip-bottom {
    padding: 0.4rem 0;
}
.bs-tooltip-auto[x-placement^="bottom"] .arrow,
.bs-tooltip-bottom .arrow {
    top: 0;
}
.bs-tooltip-auto[x-placement^="bottom"] .arrow:before,
.bs-tooltip-bottom .arrow:before {
    bottom: 0;
    border-width: 0 0.4rem 0.4rem;
    border-bottom-color: #1f2d3d;
}
.bs-tooltip-auto[x-placement^="left"],
.bs-tooltip-left {
    padding: 0 0.4rem;
}
.bs-tooltip-auto[x-placement^="left"] .arrow,
.bs-tooltip-left .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem;
}
.bs-tooltip-auto[x-placement^="left"] .arrow:before,
.bs-tooltip-left .arrow:before {
    left: 0;
    border-width: 0.4rem 0 0.4rem 0.4rem;
    border-left-color: #1f2d3d;
}
.tooltip-inner {
    max-width: 200px;
    padding: 0.25rem 0.5rem;
    color: #fff;
    text-align: center;
    background-color: #1f2d3d;
    border-radius: 0.25rem;
}
.popover {
    top: 0;
    left: 0;
    z-index: 1060;
    max-width: 276px;
    font-family: Nunito, sans-serif;
    font-style: normal;
    font-weight: 400;
    line-height: 1.7;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(31, 45, 61, 0.05);
    border-radius: 0.375rem;
    -webkit-box-shadow: 0 0.5rem 2rem 0 rgba(31, 45, 61, 0.2);
    box-shadow: 0 0.5rem 2rem 0 rgba(31, 45, 61, 0.2);
}
.popover,
.popover .arrow {
    position: absolute;
    display: block;
}
.popover .arrow {
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.375rem;
}
.popover .arrow:after,
.popover .arrow:before {
    position: absolute;
    display: block;
    content: "";
    border-color: transparent;
    border-style: solid;
}
.bs-popover-auto[x-placement^="top"],
.bs-popover-top {
    margin-bottom: 0.5rem;
}
.bs-popover-auto[x-placement^="top"] > .arrow,
.bs-popover-top > .arrow {
    bottom: calc(-0.5rem + -1px);
}
.bs-popover-auto[x-placement^="top"] > .arrow:before,
.bs-popover-top > .arrow:before {
    bottom: 0;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: transparent;
}
.bs-popover-auto[x-placement^="top"] > .arrow:after,
.bs-popover-top > .arrow:after {
    bottom: 1px;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: #fff;
}
.bs-popover-auto[x-placement^="right"],
.bs-popover-right {
    margin-left: 0.5rem;
}
.bs-popover-auto[x-placement^="right"] > .arrow,
.bs-popover-right > .arrow {
    left: calc(-0.5rem + -1px);
    width: 0.5rem;
    height: 1rem;
    margin: 0.375rem 0;
}
.bs-popover-auto[x-placement^="right"] > .arrow:before,
.bs-popover-right > .arrow:before {
    left: 0;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: transparent;
}
.bs-popover-auto[x-placement^="right"] > .arrow:after,
.bs-popover-right > .arrow:after {
    left: 1px;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: #fff;
}
.bs-popover-auto[x-placement^="bottom"],
.bs-popover-bottom {
    margin-top: 0.5rem;
}
.bs-popover-auto[x-placement^="bottom"] > .arrow,
.bs-popover-bottom > .arrow {
    top: calc(-0.5rem + -1px);
}
.bs-popover-auto[x-placement^="bottom"] > .arrow:before,
.bs-popover-bottom > .arrow:before {
    top: 0;
    border-width: 0 0.5rem 0.5rem;
    border-bottom-color: transparent;
}
.bs-popover-auto[x-placement^="bottom"] > .arrow:after,
.bs-popover-bottom > .arrow:after {
    top: 1px;
    border-width: 0 0.5rem 0.5rem;
    border-bottom-color: #fff;
}
.bs-popover-auto[x-placement^="bottom"] .popover-header:before,
.bs-popover-bottom .popover-header:before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #fff;
}
.bs-popover-auto[x-placement^="left"],
.bs-popover-left {
    margin-right: 0.5rem;
}
.bs-popover-auto[x-placement^="left"] > .arrow,
.bs-popover-left > .arrow {
    right: calc(-0.5rem + -1px);
    width: 0.5rem;
    height: 1rem;
    margin: 0.375rem 0;
}
.bs-popover-auto[x-placement^="left"] > .arrow:before,
.bs-popover-left > .arrow:before {
    right: 0;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: transparent;
}
.bs-popover-auto[x-placement^="left"] > .arrow:after,
.bs-popover-left > .arrow:after {
    right: 1px;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: #fff;
}
.popover-header {
    padding: 0.75rem;
    margin-bottom: 0;
    font-size: 1rem;
    color: #3c4858;
    background-color: #fff;
    border-bottom: 1px solid #f2f2f2;
    border-top-left-radius: calc(0.375rem - 1px);
    border-top-right-radius: calc(0.375rem - 1px);
}
.popover-header:empty {
    display: none;
}
.popover-body {
    padding: 0.75rem;
    color: #8492a6;
}
.carousel {
    position: relative;
}
.carousel.pointer-event {
    -ms-touch-action: pan-y;
    touch-action: pan-y;
}
.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}
.carousel-inner:after {
    display: block;
    clear: both;
    content: "";
}
.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: -webkit-transform 0.6s ease-in-out;
    transition: -webkit-transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-item {
        -webkit-transition: none;
        transition: none;
    }
}
.carousel-item-next,
.carousel-item-prev,
.carousel-item.active {
    display: block;
}
.active.carousel-item-right,
.carousel-item-next:not(.carousel-item-left) {
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
}
.active.carousel-item-left,
.carousel-item-prev:not(.carousel-item-right) {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
}
.carousel-fade .carousel-item {
    opacity: 0;
    -webkit-transition-property: opacity;
    transition-property: opacity;
    -webkit-transform: none;
    transform: none;
}
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right,
.carousel-fade .carousel-item.active {
    z-index: 1;
    opacity: 1;
}
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
    z-index: 0;
    opacity: 0;
    -webkit-transition: opacity 0s 0.6s;
    transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        -webkit-transition: none;
        transition: none;
    }
}
.carousel-control-next,
.carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: 0.5;
    -webkit-transition: opacity 0.15s ease;
    transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-control-next,
    .carousel-control-prev {
        -webkit-transition: none;
        transition: none;
    }
}
.carousel-control-next:focus,
.carousel-control-next:hover,
.carousel-control-prev:focus,
.carousel-control-prev:hover {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9;
}
.carousel-control-prev {
    left: 0;
}
.carousel-control-next {
    right: 0;
}
.carousel-control-next-icon,
.carousel-control-prev-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: no-repeat 50%/100% 100%;
}
.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFF' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3E%3C/svg%3E");
}
.carousel-control-next-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFF' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3E%3C/svg%3E");
}
.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 15;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}
.carousel-indicators li {
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: 0.5;
    -webkit-transition: opacity 0.6s ease;
    transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-indicators li {
        -webkit-transition: none;
        transition: none;
    }
}
.carousel-indicators .active {
    opacity: 1;
}
.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
}
@-webkit-keyframes spinner-border {
    to {
        -webkit-transform: rotate(1turn);
        transform: rotate(1turn);
    }
}
@keyframes spinner-border {
    to {
        -webkit-transform: rotate(1turn);
        transform: rotate(1turn);
    }
}
.spinner-border {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    border: 0.25em solid;
    border-right: 0.25em solid transparent;
    border-radius: 50%;
    -webkit-animation: spinner-border 0.75s linear infinite;
    animation: spinner-border 0.75s linear infinite;
}
.spinner-border-sm {
    width: 1rem;
    height: 1rem;
    border-width: 0.2em;
}
@-webkit-keyframes spinner-grow {
    0% {
        -webkit-transform: scale(0);
        transform: scale(0);
    }
    50% {
        opacity: 1;
    }
}
@keyframes spinner-grow {
    0% {
        -webkit-transform: scale(0);
        transform: scale(0);
    }
    50% {
        opacity: 1;
    }
}
.spinner-grow {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    background-color: currentColor;
    border-radius: 50%;
    opacity: 0;
    -webkit-animation: spinner-grow 0.75s linear infinite;
    animation: spinner-grow 0.75s linear infinite;
}
.spinner-grow-sm {
    width: 1rem;
    height: 1rem;
}
.align-baseline {
    vertical-align: baseline !important;
}
.align-top {
    vertical-align: top !important;
}
.align-middle {
    vertical-align: middle !important;
}
.align-bottom {
    vertical-align: bottom !important;
}
.align-text-bottom {
    vertical-align: text-bottom !important;
}
.align-text-top {
    vertical-align: text-top !important;
}
.bg-primary {
    background-color: {{ $settings->website_theme }} !important;
}
a.bg-primary:focus,
a.bg-primary:hover,
button.bg-primary:focus,
button.bg-primary:hover {
    background-color: {{ $settings->website_theme }} !important;
}
.bg-secondary {
    background-color: #eff2f7 !important;
}
a.bg-secondary:focus,
a.bg-secondary:hover,
button.bg-secondary:focus,
button.bg-secondary:hover {
    background-color: #cdd6e6 !important;
}
.bg-success {
    background-color: #36b37e !important;
}
a.bg-success:focus,
a.bg-success:hover,
button.bg-success:focus,
button.bg-success:hover {
    background-color: #2a8c62 !important;
}
.bg-info {
    background-color: #00b8d9 !important;
}
a.bg-info:focus,
a.bg-info:hover,
button.bg-info:focus,
button.bg-info:hover {
    background-color: #008da6 !important;
}
.bg-warning {
    background-color: #ffab00 !important;
}
a.bg-warning:focus,
a.bg-warning:hover,
button.bg-warning:focus,
button.bg-warning:hover {
    background-color: #cc8900 !important;
}
.bg-danger {
    background-color: #ff5630 !important;
}
a.bg-danger:focus,
a.bg-danger:hover,
button.bg-danger:focus,
button.bg-danger:hover {
    background-color: #fc2e00 !important;
}
.bg-light {
    background-color: #eff2f7 !important;
}
a.bg-light:focus,
a.bg-light:hover,
button.bg-light:focus,
button.bg-light:hover {
    background-color: #cdd6e6 !important;
}
.bg-dark {
    background-color: #273444 !important;
}
a.bg-dark:focus,
a.bg-dark:hover,
button.bg-dark:focus,
button.bg-dark:hover {
    background-color: #141b24 !important;
}
.bg-neutral {
    background-color: #fff !important;
}
a.bg-neutral:focus,
a.bg-neutral:hover,
a.bg-white:focus,
a.bg-white:hover,
button.bg-neutral:focus,
button.bg-neutral:hover,
button.bg-white:focus,
button.bg-white:hover {
    background-color: #e6e6e6 !important;
}
.bg-white {
    background-color: #fff !important;
}
.bg-transparent {
    background-color: transparent !important;
}
.border {
    border: 1px solid #eff2f7 !important;
}
.border-top {
    border-top: 1px solid #eff2f7 !important;
}
.border-right {
    border-right: 1px solid #eff2f7 !important;
}
.border-bottom {
    border-bottom: 1px solid #eff2f7 !important;
}
.border-left {
    border-left: 1px solid #eff2f7 !important;
}
.border-0 {
    border: 0 !important;
}
.border-top-0 {
    border-top: 0 !important;
}
.border-right-0 {
    border-right: 0 !important;
}
.border-bottom-0 {
    border-bottom: 0 !important;
}
.border-left-0 {
    border-left: 0 !important;
}
.border-primary {
    border-color: {{ $settings->website_theme }} !important;
}
.border-secondary {
    border-color: #eff2f7 !important;
}
.border-success {
    border-color: #36b37e !important;
}
.border-info {
    border-color: #00b8d9 !important;
}
.border-warning {
    border-color: #ffab00 !important;
}
.border-danger {
    border-color: #ff5630 !important;
}
.border-light {
    border-color: #eff2f7 !important;
}
.border-dark {
    border-color: #273444 !important;
}
.border-neutral,
.border-white {
    border-color: #fff !important;
}
.rounded-sm {
    border-radius: 0.2rem !important;
}
.rounded {
    border-radius: 0.25rem !important;
}
.rounded-top {
    border-top-left-radius: 0.25rem !important;
}
.rounded-right,
.rounded-top {
    border-top-right-radius: 0.25rem !important;
}
.rounded-bottom,
.rounded-right {
    border-bottom-right-radius: 0.25rem !important;
}
.rounded-bottom,
.rounded-left {
    border-bottom-left-radius: 0.25rem !important;
}
.rounded-left {
    border-top-left-radius: 0.25rem !important;
}
.rounded-lg {
    border-radius: 0.375rem !important;
}
.rounded-circle {
    border-radius: 50% !important;
}
.rounded-pill {
    border-radius: 50rem !important;
}
.rounded-0 {
    border-radius: 0 !important;
}
.clearfix:after {
    display: block;
    clear: both;
    content: "";
}
.d-none {
    display: none !important;
}
.d-inline {
    display: inline !important;
}
.d-inline-block {
    display: inline-block !important;
}
.d-block {
    display: block !important;
}
.d-table {
    display: table !important;
}
.d-table-row {
    display: table-row !important;
}
.d-table-cell {
    display: table-cell !important;
}
.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
.d-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
}
@media (min-width: 576px) {
    .d-sm-none {
        display: none !important;
    }
    .d-sm-inline {
        display: inline !important;
    }
    .d-sm-inline-block {
        display: inline-block !important;
    }
    .d-sm-block {
        display: block !important;
    }
    .d-sm-table {
        display: table !important;
    }
    .d-sm-table-row {
        display: table-row !important;
    }
    .d-sm-table-cell {
        display: table-cell !important;
    }
    .d-sm-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
    }
    .d-sm-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
    }
}
@media (min-width: 768px) {
    .d-md-none {
        display: none !important;
    }
    .d-md-inline {
        display: inline !important;
    }
    .d-md-inline-block {
        display: inline-block !important;
    }
    .d-md-block {
        display: block !important;
    }
    .d-md-table {
        display: table !important;
    }
    .d-md-table-row {
        display: table-row !important;
    }
    .d-md-table-cell {
        display: table-cell !important;
    }
    .d-md-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
    }
    .d-md-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
    }
}
@media (min-width: 992px) {
    .d-lg-none {
        display: none !important;
    }
    .d-lg-inline {
        display: inline !important;
    }
    .d-lg-inline-block {
        display: inline-block !important;
    }
    .d-lg-block {
        display: block !important;
    }
    .d-lg-table {
        display: table !important;
    }
    .d-lg-table-row {
        display: table-row !important;
    }
    .d-lg-table-cell {
        display: table-cell !important;
    }
    .d-lg-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
    }
    .d-lg-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
    }
}
@media (min-width: 1200px) {
    .d-xl-none {
        display: none !important;
    }
    .d-xl-inline {
        display: inline !important;
    }
    .d-xl-inline-block {
        display: inline-block !important;
    }
    .d-xl-block {
        display: block !important;
    }
    .d-xl-table {
        display: table !important;
    }
    .d-xl-table-row {
        display: table-row !important;
    }
    .d-xl-table-cell {
        display: table-cell !important;
    }
    .d-xl-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
    }
    .d-xl-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
    }
}
@media print {
    .d-print-none {
        display: none !important;
    }
    .d-print-inline {
        display: inline !important;
    }
    .d-print-inline-block {
        display: inline-block !important;
    }
    .d-print-block {
        display: block !important;
    }
    .d-print-table {
        display: table !important;
    }
    .d-print-table-row {
        display: table-row !important;
    }
    .d-print-table-cell {
        display: table-cell !important;
    }
    .d-print-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
    }
    .d-print-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
    }
}
.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden;
}
.embed-responsive:before {
    display: block;
    content: "";
}
.embed-responsive .embed-responsive-item,
.embed-responsive embed,
.embed-responsive iframe,
.embed-responsive object,
.embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}
.embed-responsive-21by9:before {
    padding-top: 42.8571428571%;
}
.embed-responsive-16by9:before {
    padding-top: 56.25%;
}
.embed-responsive-4by3:before {
    padding-top: 75%;
}
.embed-responsive-1by1:before {
    padding-top: 100%;
}
.flex-row {
    -webkit-box-orient: horizontal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
}
.flex-column,
.flex-row {
    -webkit-box-direction: normal !important;
}
.flex-column {
    -webkit-box-orient: vertical !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
}
.flex-row-reverse {
    -webkit-box-orient: horizontal !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
}
.flex-column-reverse,
.flex-row-reverse {
    -webkit-box-direction: reverse !important;
}
.flex-column-reverse {
    -webkit-box-orient: vertical !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
}
.flex-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
}
.flex-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
}
.flex-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
}
.flex-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
}
.flex-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
}
.flex-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
}
.flex-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
}
.flex-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
}
.justify-content-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
}
.justify-content-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
}
.justify-content-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
}
.justify-content-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
}
.justify-content-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
}
.align-items-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
}
.align-items-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
}
.align-items-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
}
.align-items-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
}
.align-items-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
}
.align-content-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
}
.align-content-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
}
.align-content-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
}
.align-content-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
}
.align-content-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
}
.align-content-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
}
.align-self-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
}
.align-self-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
}
.align-self-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
}
.align-self-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
}
.align-self-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
}
.align-self-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
}
@media (min-width: 576px) {
    .flex-sm-row {
        -webkit-box-orient: horizontal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important;
    }
    .flex-sm-column,
    .flex-sm-row {
        -webkit-box-direction: normal !important;
    }
    .flex-sm-column {
        -webkit-box-orient: vertical !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }
    .flex-sm-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
    }
    .flex-sm-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
    }
    .flex-sm-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
    }
    .flex-sm-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
    }
    .flex-sm-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
    }
    .flex-sm-fill {
        -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
    }
    .flex-sm-grow-0 {
        -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
    }
    .flex-sm-grow-1 {
        -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
    }
    .flex-sm-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
    }
    .flex-sm-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
    }
    .justify-content-sm-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important;
    }
    .justify-content-sm-end {
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important;
    }
    .justify-content-sm-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }
    .justify-content-sm-between {
        -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
    }
    .justify-content-sm-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
    }
    .align-items-sm-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important;
    }
    .align-items-sm-end {
        -webkit-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important;
    }
    .align-items-sm-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
    }
    .align-items-sm-baseline {
        -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important;
    }
    .align-items-sm-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important;
    }
    .align-content-sm-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
    }
    .align-content-sm-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
    }
    .align-content-sm-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important;
    }
    .align-content-sm-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
    }
    .align-content-sm-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
    }
    .align-content-sm-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
    }
    .align-self-sm-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important;
    }
    .align-self-sm-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important;
    }
    .align-self-sm-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important;
    }
    .align-self-sm-center {
        -ms-flex-item-align: center !important;
        align-self: center !important;
    }
    .align-self-sm-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
    }
    .align-self-sm-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
    }
}
@media (min-width: 768px) {
    .flex-md-row {
        -webkit-box-orient: horizontal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important;
    }
    .flex-md-column,
    .flex-md-row {
        -webkit-box-direction: normal !important;
    }
    .flex-md-column {
        -webkit-box-orient: vertical !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }
    .flex-md-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
    }
    .flex-md-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
    }
    .flex-md-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
    }
    .flex-md-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
    }
    .flex-md-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
    }
    .flex-md-fill {
        -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
    }
    .flex-md-grow-0 {
        -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
    }
    .flex-md-grow-1 {
        -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
    }
    .flex-md-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
    }
    .flex-md-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
    }
    .justify-content-md-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important;
    }
    .justify-content-md-end {
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important;
    }
    .justify-content-md-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }
    .justify-content-md-between {
        -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
    }
    .justify-content-md-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
    }
    .align-items-md-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important;
    }
    .align-items-md-end {
        -webkit-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important;
    }
    .align-items-md-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
    }
    .align-items-md-baseline {
        -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important;
    }
    .align-items-md-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important;
    }
    .align-content-md-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
    }
    .align-content-md-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
    }
    .align-content-md-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important;
    }
    .align-content-md-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
    }
    .align-content-md-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
    }
    .align-content-md-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
    }
    .align-self-md-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important;
    }
    .align-self-md-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important;
    }
    .align-self-md-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important;
    }
    .align-self-md-center {
        -ms-flex-item-align: center !important;
        align-self: center !important;
    }
    .align-self-md-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
    }
    .align-self-md-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
    }
}
@media (min-width: 992px) {
    .flex-lg-row {
        -webkit-box-orient: horizontal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important;
    }
    .flex-lg-column,
    .flex-lg-row {
        -webkit-box-direction: normal !important;
    }
    .flex-lg-column {
        -webkit-box-orient: vertical !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }
    .flex-lg-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
    }
    .flex-lg-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
    }
    .flex-lg-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
    }
    .flex-lg-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
    }
    .flex-lg-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
    }
    .flex-lg-fill {
        -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
    }
    .flex-lg-grow-0 {
        -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
    }
    .flex-lg-grow-1 {
        -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
    }
    .flex-lg-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
    }
    .flex-lg-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
    }
    .justify-content-lg-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important;
    }
    .justify-content-lg-end {
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important;
    }
    .justify-content-lg-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }
    .justify-content-lg-between {
        -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
    }
    .justify-content-lg-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
    }
    .align-items-lg-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important;
    }
    .align-items-lg-end {
        -webkit-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important;
    }
    .align-items-lg-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
    }
    .align-items-lg-baseline {
        -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important;
    }
    .align-items-lg-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important;
    }
    .align-content-lg-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
    }
    .align-content-lg-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
    }
    .align-content-lg-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important;
    }
    .align-content-lg-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
    }
    .align-content-lg-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
    }
    .align-content-lg-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
    }
    .align-self-lg-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important;
    }
    .align-self-lg-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important;
    }
    .align-self-lg-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important;
    }
    .align-self-lg-center {
        -ms-flex-item-align: center !important;
        align-self: center !important;
    }
    .align-self-lg-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
    }
    .align-self-lg-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
    }
}
@media (min-width: 1200px) {
    .flex-xl-row {
        -webkit-box-orient: horizontal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important;
    }
    .flex-xl-column,
    .flex-xl-row {
        -webkit-box-direction: normal !important;
    }
    .flex-xl-column {
        -webkit-box-orient: vertical !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }
    .flex-xl-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
    }
    .flex-xl-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
    }
    .flex-xl-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
    }
    .flex-xl-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
    }
    .flex-xl-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
    }
    .flex-xl-fill {
        -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
    }
    .flex-xl-grow-0 {
        -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
    }
    .flex-xl-grow-1 {
        -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
    }
    .flex-xl-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
    }
    .flex-xl-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
    }
    .justify-content-xl-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important;
    }
    .justify-content-xl-end {
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important;
    }
    .justify-content-xl-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }
    .justify-content-xl-between {
        -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
    }
    .justify-content-xl-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
    }
    .align-items-xl-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important;
    }
    .align-items-xl-end {
        -webkit-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important;
    }
    .align-items-xl-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
    }
    .align-items-xl-baseline {
        -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important;
    }
    .align-items-xl-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important;
    }
    .align-content-xl-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
    }
    .align-content-xl-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
    }
    .align-content-xl-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important;
    }
    .align-content-xl-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
    }
    .align-content-xl-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
    }
    .align-content-xl-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
    }
    .align-self-xl-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important;
    }
    .align-self-xl-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important;
    }
    .align-self-xl-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important;
    }
    .align-self-xl-center {
        -ms-flex-item-align: center !important;
        align-self: center !important;
    }
    .align-self-xl-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
    }
    .align-self-xl-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
    }
}
.float-left {
    float: left !important;
}
.float-right {
    float: right !important;
}
.float-none {
    float: none !important;
}
@media (min-width: 576px) {
    .float-sm-left {
        float: left !important;
    }
    .float-sm-right {
        float: right !important;
    }
    .float-sm-none {
        float: none !important;
    }
}
@media (min-width: 768px) {
    .float-md-left {
        float: left !important;
    }
    .float-md-right {
        float: right !important;
    }
    .float-md-none {
        float: none !important;
    }
}
@media (min-width: 992px) {
    .float-lg-left {
        float: left !important;
    }
    .float-lg-right {
        float: right !important;
    }
    .float-lg-none {
        float: none !important;
    }
}
@media (min-width: 1200px) {
    .float-xl-left {
        float: left !important;
    }
    .float-xl-right {
        float: right !important;
    }
    .float-xl-none {
        float: none !important;
    }
}
.overflow-auto {
    overflow: auto !important;
}
.position-static {
    position: static !important;
}
.position-relative {
    position: relative !important;
}
.position-absolute {
    position: absolute !important;
}
.position-fixed {
    position: fixed !important;
}
.position-sticky {
    position: -webkit-sticky !important;
    position: sticky !important;
}
.fixed-top {
    top: 0;
}
.fixed-bottom,
.fixed-top {
    position: fixed;
    right: 0;
    left: 0;
    z-index: 1030;
}
.fixed-bottom {
    bottom: 0;
}
@supports ((position: -webkit-sticky) or (position: sticky)) {
    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020;
    }
}
.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal;
}
.shadow-sm {
    -webkit-box-shadow: 0 0.125rem 0.25rem rgba(31, 45, 61, 0.08) !important;
    box-shadow: 0 0.125rem 0.25rem rgba(31, 45, 61, 0.08) !important;
}
.shadow {
    -webkit-box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08) !important;
    box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08) !important;
}
.shadow-lg {
    -webkit-box-shadow: 0 1rem 3rem rgba(31, 45, 61, 0.125) !important;
    box-shadow: 0 1rem 3rem rgba(31, 45, 61, 0.125) !important;
}
.shadow-none {
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}
.w-25 {
    width: 25% !important;
}
.w-50 {
    width: 50% !important;
}
.w-75 {
    width: 75% !important;
}
.w-100 {
    width: 100% !important;
}
.w-auto {
    width: auto !important;
}
.w-10 {
    width: 10% !important;
}
.w-15 {
    width: 15% !important;
}
.h-25 {
    height: 25% !important;
}
.h-50 {
    height: 50% !important;
}
.h-75 {
    height: 75% !important;
}
.h-100 {
    height: 100% !important;
}
.h-auto {
    height: auto !important;
}
.h-10 {
    height: 10% !important;
}
.h-15 {
    height: 15% !important;
}
.mw-100 {
    max-width: 100% !important;
}
.mh-100 {
    max-height: 100% !important;
}
.min-vw-100 {
    min-width: 100vw !important;
}
.min-vh-100 {
    min-height: 100vh !important;
}
.vw-100 {
    width: 100vw !important;
}
.vh-100 {
    height: 100vh !important;
}
.stretched-link:after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: "";
    background-color: transparent;
}
.m-0 {
    margin: 0 !important;
}
.mt-0,
.my-0 {
    margin-top: 0 !important;
}
.mr-0,
.mx-0 {
    margin-right: 0 !important;
}
.mb-0,
.my-0 {
    margin-bottom: 0 !important;
}
.ml-0,
.mx-0 {
    margin-left: 0 !important;
}
.m-1 {
    margin: 0.25rem !important;
}
.mt-1,
.my-1 {
    margin-top: 0.25rem !important;
}
.mr-1,
.mx-1 {
    margin-right: 0.25rem !important;
}
.mb-1,
.my-1 {
    margin-bottom: 0.25rem !important;
}
.ml-1,
.mx-1 {
    margin-left: 0.25rem !important;
}
.m-2 {
    margin: 0.5rem !important;
}
.mt-2,
.my-2 {
    margin-top: 0.5rem !important;
}
.mr-2,
.mx-2 {
    margin-right: 0.5rem !important;
}
.mb-2,
.my-2 {
    margin-bottom: 0.5rem !important;
}
.ml-2,
.mx-2 {
    margin-left: 0.5rem !important;
}
.m-3 {
    margin: 1rem !important;
}
.mt-3,
.my-3 {
    margin-top: 1rem !important;
}
.mr-3,
.mx-3 {
    margin-right: 1rem !important;
}
.mb-3,
.my-3 {
    margin-bottom: 1rem !important;
}
.ml-3,
.mx-3 {
    margin-left: 1rem !important;
}
.m-4 {
    margin: 1.5rem !important;
}
.mt-4,
.my-4 {
    margin-top: 1.5rem !important;
}
.mr-4,
.mx-4 {
    margin-right: 1.5rem !important;
}
.mb-4,
.my-4 {
    margin-bottom: 1.5rem !important;
}
.ml-4,
.mx-4 {
    margin-left: 1.5rem !important;
}
.m-5 {
    margin: 3rem !important;
}
.mt-5,
.my-5 {
    margin-top: 3rem !important;
}
.mr-5,
.mx-5 {
    margin-right: 3rem !important;
}
.mb-5,
.my-5 {
    margin-bottom: 3rem !important;
}
.ml-5,
.mx-5 {
    margin-left: 3rem !important;
}
.m-6 {
    margin: 4.5rem !important;
}
.mt-6,
.my-6 {
    margin-top: 4.5rem !important;
}
.mr-6,
.mx-6 {
    margin-right: 4.5rem !important;
}
.mb-6,
.my-6 {
    margin-bottom: 4.5rem !important;
}
.ml-6,
.mx-6 {
    margin-left: 4.5rem !important;
}
.m-7 {
    margin: 6rem !important;
}
.mt-7,
.my-7 {
    margin-top: 6rem !important;
}
.mr-7,
.mx-7 {
    margin-right: 6rem !important;
}
.mb-7,
.my-7 {
    margin-bottom: 6rem !important;
}
.ml-7,
.mx-7 {
    margin-left: 6rem !important;
}
.m-8 {
    margin: 7.5rem !important;
}
.mt-8,
.my-8 {
    margin-top: 7.5rem !important;
}
.mr-8,
.mx-8 {
    margin-right: 7.5rem !important;
}
.mb-8,
.my-8 {
    margin-bottom: 7.5rem !important;
}
.ml-8,
.mx-8 {
    margin-left: 7.5rem !important;
}
.m-9 {
    margin: 9rem !important;
}
.mt-9,
.my-9 {
    margin-top: 9rem !important;
}
.mr-9,
.mx-9 {
    margin-right: 9rem !important;
}
.mb-9,
.my-9 {
    margin-bottom: 9rem !important;
}
.ml-9,
.mx-9 {
    margin-left: 9rem !important;
}
.m-10 {
    margin: 10.5rem !important;
}
.mt-10,
.my-10 {
    margin-top: 10.5rem !important;
}
.mr-10,
.mx-10 {
    margin-right: 10.5rem !important;
}
.mb-10,
.my-10 {
    margin-bottom: 10.5rem !important;
}
.ml-10,
.mx-10 {
    margin-left: 10.5rem !important;
}
.p-0 {
    padding: 0 !important;
}
.pt-0,
.py-0 {
    padding-top: 0 !important;
}
.pr-0,
.px-0 {
    padding-right: 0 !important;
}
.pb-0,
.py-0 {
    padding-bottom: 0 !important;
}
.pl-0,
.px-0 {
    padding-left: 0 !important;
}
.p-1 {
    padding: 0.25rem !important;
}
.pt-1,
.py-1 {
    padding-top: 0.25rem !important;
}
.pr-1,
.px-1 {
    padding-right: 0.25rem !important;
}
.pb-1,
.py-1 {
    padding-bottom: 0.25rem !important;
}
.pl-1,
.px-1 {
    padding-left: 0.25rem !important;
}
.p-2 {
    padding: 0.5rem !important;
}
.pt-2,
.py-2 {
    padding-top: 0.5rem !important;
}
.pr-2,
.px-2 {
    padding-right: 0.5rem !important;
}
.pb-2,
.py-2 {
    padding-bottom: 0.5rem !important;
}
.pl-2,
.px-2 {
    padding-left: 0.5rem !important;
}
.p-3 {
    padding: 1rem !important;
}
.pt-3,
.py-3 {
    padding-top: 1rem !important;
}
.pr-3,
.px-3 {
    padding-right: 1rem !important;
}
.pb-3,
.py-3 {
    padding-bottom: 1rem !important;
}
.pl-3,
.px-3 {
    padding-left: 1rem !important;
}
.p-4 {
    padding: 1.5rem !important;
}
.pt-4,
.py-4 {
    padding-top: 1.5rem !important;
}
.pr-4,
.px-4 {
    padding-right: 1.5rem !important;
}
.pb-4,
.py-4 {
    padding-bottom: 1.5rem !important;
}
.pl-4,
.px-4 {
    padding-left: 1.5rem !important;
}
.p-5 {
    padding: 3rem !important;
}
.pt-5,
.py-5 {
    padding-top: 3rem !important;
}
.pr-5,
.px-5 {
    padding-right: 3rem !important;
}
.pb-5,
.py-5 {
    padding-bottom: 3rem !important;
}
.pl-5,
.px-5 {
    padding-left: 3rem !important;
}
.p-6 {
    padding: 4.5rem !important;
}
.pt-6,
.py-6 {
    padding-top: 4.5rem !important;
}
.pr-6,
.px-6 {
    padding-right: 4.5rem !important;
}
.pb-6,
.py-6 {
    padding-bottom: 4.5rem !important;
}
.pl-6,
.px-6 {
    padding-left: 4.5rem !important;
}
.p-7 {
    padding: 6rem !important;
}
.pt-7,
.py-7 {
    padding-top: 6rem !important;
}
.pr-7,
.px-7 {
    padding-right: 6rem !important;
}
.pb-7,
.py-7 {
    padding-bottom: 6rem !important;
}
.pl-7,
.px-7 {
    padding-left: 6rem !important;
}
.p-8 {
    padding: 7.5rem !important;
}
.pt-8,
.py-8 {
    padding-top: 7.5rem !important;
}
.pr-8,
.px-8 {
    padding-right: 7.5rem !important;
}
.pb-8,
.py-8 {
    padding-bottom: 7.5rem !important;
}
.pl-8,
.px-8 {
    padding-left: 7.5rem !important;
}
.p-9 {
    padding: 9rem !important;
}
.pt-9,
.py-9 {
    padding-top: 9rem !important;
}
.pr-9,
.px-9 {
    padding-right: 9rem !important;
}
.pb-9,
.py-9 {
    padding-bottom: 9rem !important;
}
.pl-9,
.px-9 {
    padding-left: 9rem !important;
}
.p-10 {
    padding: 10.5rem !important;
}
.pt-10,
.py-10 {
    padding-top: 10.5rem !important;
}
.pr-10,
.px-10 {
    padding-right: 10.5rem !important;
}
.pb-10,
.py-10 {
    padding-bottom: 10.5rem !important;
}
.pl-10,
.px-10 {
    padding-left: 10.5rem !important;
}
.m-n1 {
    margin: -0.25rem !important;
}
.mt-n1,
.my-n1 {
    margin-top: -0.25rem !important;
}
.mr-n1,
.mx-n1 {
    margin-right: -0.25rem !important;
}
.mb-n1,
.my-n1 {
    margin-bottom: -0.25rem !important;
}
.ml-n1,
.mx-n1 {
    margin-left: -0.25rem !important;
}
.m-n2 {
    margin: -0.5rem !important;
}
.mt-n2,
.my-n2 {
    margin-top: -0.5rem !important;
}
.mr-n2,
.mx-n2 {
    margin-right: -0.5rem !important;
}
.mb-n2,
.my-n2 {
    margin-bottom: -0.5rem !important;
}
.ml-n2,
.mx-n2 {
    margin-left: -0.5rem !important;
}
.m-n3 {
    margin: -1rem !important;
}
.mt-n3,
.my-n3 {
    margin-top: -1rem !important;
}
.mr-n3,
.mx-n3 {
    margin-right: -1rem !important;
}
.mb-n3,
.my-n3 {
    margin-bottom: -1rem !important;
}
.ml-n3,
.mx-n3 {
    margin-left: -1rem !important;
}
.m-n4 {
    margin: -1.5rem !important;
}
.mt-n4,
.my-n4 {
    margin-top: -1.5rem !important;
}
.mr-n4,
.mx-n4 {
    margin-right: -1.5rem !important;
}
.mb-n4,
.my-n4 {
    margin-bottom: -1.5rem !important;
}
.ml-n4,
.mx-n4 {
    margin-left: -1.5rem !important;
}
.m-n5 {
    margin: -3rem !important;
}
.mt-n5,
.my-n5 {
    margin-top: -3rem !important;
}
.mr-n5,
.mx-n5 {
    margin-right: -3rem !important;
}
.mb-n5,
.my-n5 {
    margin-bottom: -3rem !important;
}
.ml-n5,
.mx-n5 {
    margin-left: -3rem !important;
}
.m-n6 {
    margin: -4.5rem !important;
}
.mt-n6,
.my-n6 {
    margin-top: -4.5rem !important;
}
.mr-n6,
.mx-n6 {
    margin-right: -4.5rem !important;
}
.mb-n6,
.my-n6 {
    margin-bottom: -4.5rem !important;
}
.ml-n6,
.mx-n6 {
    margin-left: -4.5rem !important;
}
.m-n7 {
    margin: -6rem !important;
}
.mt-n7,
.my-n7 {
    margin-top: -6rem !important;
}
.mr-n7,
.mx-n7 {
    margin-right: -6rem !important;
}
.mb-n7,
.my-n7 {
    margin-bottom: -6rem !important;
}
.ml-n7,
.mx-n7 {
    margin-left: -6rem !important;
}
.m-n8 {
    margin: -7.5rem !important;
}
.mt-n8,
.my-n8 {
    margin-top: -7.5rem !important;
}
.mr-n8,
.mx-n8 {
    margin-right: -7.5rem !important;
}
.mb-n8,
.my-n8 {
    margin-bottom: -7.5rem !important;
}
.ml-n8,
.mx-n8 {
    margin-left: -7.5rem !important;
}
.m-n9 {
    margin: -9rem !important;
}
.mt-n9,
.my-n9 {
    margin-top: -9rem !important;
}
.mr-n9,
.mx-n9 {
    margin-right: -9rem !important;
}
.mb-n9,
.my-n9 {
    margin-bottom: -9rem !important;
}
.ml-n9,
.mx-n9 {
    margin-left: -9rem !important;
}
.m-n10 {
    margin: -10.5rem !important;
}
.mt-n10,
.my-n10 {
    margin-top: -10.5rem !important;
}
.mr-n10,
.mx-n10 {
    margin-right: -10.5rem !important;
}
.mb-n10,
.my-n10 {
    margin-bottom: -10.5rem !important;
}
.ml-n10,
.mx-n10 {
    margin-left: -10.5rem !important;
}
.m-auto {
    margin: auto !important;
}
.mt-auto,
.my-auto {
    margin-top: auto !important;
}
.mr-auto,
.mx-auto {
    margin-right: auto !important;
}
.mb-auto,
.my-auto {
    margin-bottom: auto !important;
}
.ml-auto,
.mx-auto {
    margin-left: auto !important;
}
@media (min-width: 576px) {
    .m-sm-0 {
        margin: 0 !important;
    }
    .mt-sm-0,
    .my-sm-0 {
        margin-top: 0 !important;
    }
    .mr-sm-0,
    .mx-sm-0 {
        margin-right: 0 !important;
    }
    .mb-sm-0,
    .my-sm-0 {
        margin-bottom: 0 !important;
    }
    .ml-sm-0,
    .mx-sm-0 {
        margin-left: 0 !important;
    }
    .m-sm-1 {
        margin: 0.25rem !important;
    }
    .mt-sm-1,
    .my-sm-1 {
        margin-top: 0.25rem !important;
    }
    .mr-sm-1,
    .mx-sm-1 {
        margin-right: 0.25rem !important;
    }
    .mb-sm-1,
    .my-sm-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-sm-1,
    .mx-sm-1 {
        margin-left: 0.25rem !important;
    }
    .m-sm-2 {
        margin: 0.5rem !important;
    }
    .mt-sm-2,
    .my-sm-2 {
        margin-top: 0.5rem !important;
    }
    .mr-sm-2,
    .mx-sm-2 {
        margin-right: 0.5rem !important;
    }
    .mb-sm-2,
    .my-sm-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-sm-2,
    .mx-sm-2 {
        margin-left: 0.5rem !important;
    }
    .m-sm-3 {
        margin: 1rem !important;
    }
    .mt-sm-3,
    .my-sm-3 {
        margin-top: 1rem !important;
    }
    .mr-sm-3,
    .mx-sm-3 {
        margin-right: 1rem !important;
    }
    .mb-sm-3,
    .my-sm-3 {
        margin-bottom: 1rem !important;
    }
    .ml-sm-3,
    .mx-sm-3 {
        margin-left: 1rem !important;
    }
    .m-sm-4 {
        margin: 1.5rem !important;
    }
    .mt-sm-4,
    .my-sm-4 {
        margin-top: 1.5rem !important;
    }
    .mr-sm-4,
    .mx-sm-4 {
        margin-right: 1.5rem !important;
    }
    .mb-sm-4,
    .my-sm-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-sm-4,
    .mx-sm-4 {
        margin-left: 1.5rem !important;
    }
    .m-sm-5 {
        margin: 3rem !important;
    }
    .mt-sm-5,
    .my-sm-5 {
        margin-top: 3rem !important;
    }
    .mr-sm-5,
    .mx-sm-5 {
        margin-right: 3rem !important;
    }
    .mb-sm-5,
    .my-sm-5 {
        margin-bottom: 3rem !important;
    }
    .ml-sm-5,
    .mx-sm-5 {
        margin-left: 3rem !important;
    }
    .m-sm-6 {
        margin: 4.5rem !important;
    }
    .mt-sm-6,
    .my-sm-6 {
        margin-top: 4.5rem !important;
    }
    .mr-sm-6,
    .mx-sm-6 {
        margin-right: 4.5rem !important;
    }
    .mb-sm-6,
    .my-sm-6 {
        margin-bottom: 4.5rem !important;
    }
    .ml-sm-6,
    .mx-sm-6 {
        margin-left: 4.5rem !important;
    }
    .m-sm-7 {
        margin: 6rem !important;
    }
    .mt-sm-7,
    .my-sm-7 {
        margin-top: 6rem !important;
    }
    .mr-sm-7,
    .mx-sm-7 {
        margin-right: 6rem !important;
    }
    .mb-sm-7,
    .my-sm-7 {
        margin-bottom: 6rem !important;
    }
    .ml-sm-7,
    .mx-sm-7 {
        margin-left: 6rem !important;
    }
    .m-sm-8 {
        margin: 7.5rem !important;
    }
    .mt-sm-8,
    .my-sm-8 {
        margin-top: 7.5rem !important;
    }
    .mr-sm-8,
    .mx-sm-8 {
        margin-right: 7.5rem !important;
    }
    .mb-sm-8,
    .my-sm-8 {
        margin-bottom: 7.5rem !important;
    }
    .ml-sm-8,
    .mx-sm-8 {
        margin-left: 7.5rem !important;
    }
    .m-sm-9 {
        margin: 9rem !important;
    }
    .mt-sm-9,
    .my-sm-9 {
        margin-top: 9rem !important;
    }
    .mr-sm-9,
    .mx-sm-9 {
        margin-right: 9rem !important;
    }
    .mb-sm-9,
    .my-sm-9 {
        margin-bottom: 9rem !important;
    }
    .ml-sm-9,
    .mx-sm-9 {
        margin-left: 9rem !important;
    }
    .m-sm-10 {
        margin: 10.5rem !important;
    }
    .mt-sm-10,
    .my-sm-10 {
        margin-top: 10.5rem !important;
    }
    .mr-sm-10,
    .mx-sm-10 {
        margin-right: 10.5rem !important;
    }
    .mb-sm-10,
    .my-sm-10 {
        margin-bottom: 10.5rem !important;
    }
    .ml-sm-10,
    .mx-sm-10 {
        margin-left: 10.5rem !important;
    }
    .p-sm-0 {
        padding: 0 !important;
    }
    .pt-sm-0,
    .py-sm-0 {
        padding-top: 0 !important;
    }
    .pr-sm-0,
    .px-sm-0 {
        padding-right: 0 !important;
    }
    .pb-sm-0,
    .py-sm-0 {
        padding-bottom: 0 !important;
    }
    .pl-sm-0,
    .px-sm-0 {
        padding-left: 0 !important;
    }
    .p-sm-1 {
        padding: 0.25rem !important;
    }
    .pt-sm-1,
    .py-sm-1 {
        padding-top: 0.25rem !important;
    }
    .pr-sm-1,
    .px-sm-1 {
        padding-right: 0.25rem !important;
    }
    .pb-sm-1,
    .py-sm-1 {
        padding-bottom: 0.25rem !important;
    }
    .pl-sm-1,
    .px-sm-1 {
        padding-left: 0.25rem !important;
    }
    .p-sm-2 {
        padding: 0.5rem !important;
    }
    .pt-sm-2,
    .py-sm-2 {
        padding-top: 0.5rem !important;
    }
    .pr-sm-2,
    .px-sm-2 {
        padding-right: 0.5rem !important;
    }
    .pb-sm-2,
    .py-sm-2 {
        padding-bottom: 0.5rem !important;
    }
    .pl-sm-2,
    .px-sm-2 {
        padding-left: 0.5rem !important;
    }
    .p-sm-3 {
        padding: 1rem !important;
    }
    .pt-sm-3,
    .py-sm-3 {
        padding-top: 1rem !important;
    }
    .pr-sm-3,
    .px-sm-3 {
        padding-right: 1rem !important;
    }
    .pb-sm-3,
    .py-sm-3 {
        padding-bottom: 1rem !important;
    }
    .pl-sm-3,
    .px-sm-3 {
        padding-left: 1rem !important;
    }
    .p-sm-4 {
        padding: 1.5rem !important;
    }
    .pt-sm-4,
    .py-sm-4 {
        padding-top: 1.5rem !important;
    }
    .pr-sm-4,
    .px-sm-4 {
        padding-right: 1.5rem !important;
    }
    .pb-sm-4,
    .py-sm-4 {
        padding-bottom: 1.5rem !important;
    }
    .pl-sm-4,
    .px-sm-4 {
        padding-left: 1.5rem !important;
    }
    .p-sm-5 {
        padding: 3rem !important;
    }
    .pt-sm-5,
    .py-sm-5 {
        padding-top: 3rem !important;
    }
    .pr-sm-5,
    .px-sm-5 {
        padding-right: 3rem !important;
    }
    .pb-sm-5,
    .py-sm-5 {
        padding-bottom: 3rem !important;
    }
    .pl-sm-5,
    .px-sm-5 {
        padding-left: 3rem !important;
    }
    .p-sm-6 {
        padding: 4.5rem !important;
    }
    .pt-sm-6,
    .py-sm-6 {
        padding-top: 4.5rem !important;
    }
    .pr-sm-6,
    .px-sm-6 {
        padding-right: 4.5rem !important;
    }
    .pb-sm-6,
    .py-sm-6 {
        padding-bottom: 4.5rem !important;
    }
    .pl-sm-6,
    .px-sm-6 {
        padding-left: 4.5rem !important;
    }
    .p-sm-7 {
        padding: 6rem !important;
    }
    .pt-sm-7,
    .py-sm-7 {
        padding-top: 6rem !important;
    }
    .pr-sm-7,
    .px-sm-7 {
        padding-right: 6rem !important;
    }
    .pb-sm-7,
    .py-sm-7 {
        padding-bottom: 6rem !important;
    }
    .pl-sm-7,
    .px-sm-7 {
        padding-left: 6rem !important;
    }
    .p-sm-8 {
        padding: 7.5rem !important;
    }
    .pt-sm-8,
    .py-sm-8 {
        padding-top: 7.5rem !important;
    }
    .pr-sm-8,
    .px-sm-8 {
        padding-right: 7.5rem !important;
    }
    .pb-sm-8,
    .py-sm-8 {
        padding-bottom: 7.5rem !important;
    }
    .pl-sm-8,
    .px-sm-8 {
        padding-left: 7.5rem !important;
    }
    .p-sm-9 {
        padding: 9rem !important;
    }
    .pt-sm-9,
    .py-sm-9 {
        padding-top: 9rem !important;
    }
    .pr-sm-9,
    .px-sm-9 {
        padding-right: 9rem !important;
    }
    .pb-sm-9,
    .py-sm-9 {
        padding-bottom: 9rem !important;
    }
    .pl-sm-9,
    .px-sm-9 {
        padding-left: 9rem !important;
    }
    .p-sm-10 {
        padding: 10.5rem !important;
    }
    .pt-sm-10,
    .py-sm-10 {
        padding-top: 10.5rem !important;
    }
    .pr-sm-10,
    .px-sm-10 {
        padding-right: 10.5rem !important;
    }
    .pb-sm-10,
    .py-sm-10 {
        padding-bottom: 10.5rem !important;
    }
    .pl-sm-10,
    .px-sm-10 {
        padding-left: 10.5rem !important;
    }
    .m-sm-n1 {
        margin: -0.25rem !important;
    }
    .mt-sm-n1,
    .my-sm-n1 {
        margin-top: -0.25rem !important;
    }
    .mr-sm-n1,
    .mx-sm-n1 {
        margin-right: -0.25rem !important;
    }
    .mb-sm-n1,
    .my-sm-n1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-sm-n1,
    .mx-sm-n1 {
        margin-left: -0.25rem !important;
    }
    .m-sm-n2 {
        margin: -0.5rem !important;
    }
    .mt-sm-n2,
    .my-sm-n2 {
        margin-top: -0.5rem !important;
    }
    .mr-sm-n2,
    .mx-sm-n2 {
        margin-right: -0.5rem !important;
    }
    .mb-sm-n2,
    .my-sm-n2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-sm-n2,
    .mx-sm-n2 {
        margin-left: -0.5rem !important;
    }
    .m-sm-n3 {
        margin: -1rem !important;
    }
    .mt-sm-n3,
    .my-sm-n3 {
        margin-top: -1rem !important;
    }
    .mr-sm-n3,
    .mx-sm-n3 {
        margin-right: -1rem !important;
    }
    .mb-sm-n3,
    .my-sm-n3 {
        margin-bottom: -1rem !important;
    }
    .ml-sm-n3,
    .mx-sm-n3 {
        margin-left: -1rem !important;
    }
    .m-sm-n4 {
        margin: -1.5rem !important;
    }
    .mt-sm-n4,
    .my-sm-n4 {
        margin-top: -1.5rem !important;
    }
    .mr-sm-n4,
    .mx-sm-n4 {
        margin-right: -1.5rem !important;
    }
    .mb-sm-n4,
    .my-sm-n4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-sm-n4,
    .mx-sm-n4 {
        margin-left: -1.5rem !important;
    }
    .m-sm-n5 {
        margin: -3rem !important;
    }
    .mt-sm-n5,
    .my-sm-n5 {
        margin-top: -3rem !important;
    }
    .mr-sm-n5,
    .mx-sm-n5 {
        margin-right: -3rem !important;
    }
    .mb-sm-n5,
    .my-sm-n5 {
        margin-bottom: -3rem !important;
    }
    .ml-sm-n5,
    .mx-sm-n5 {
        margin-left: -3rem !important;
    }
    .m-sm-n6 {
        margin: -4.5rem !important;
    }
    .mt-sm-n6,
    .my-sm-n6 {
        margin-top: -4.5rem !important;
    }
    .mr-sm-n6,
    .mx-sm-n6 {
        margin-right: -4.5rem !important;
    }
    .mb-sm-n6,
    .my-sm-n6 {
        margin-bottom: -4.5rem !important;
    }
    .ml-sm-n6,
    .mx-sm-n6 {
        margin-left: -4.5rem !important;
    }
    .m-sm-n7 {
        margin: -6rem !important;
    }
    .mt-sm-n7,
    .my-sm-n7 {
        margin-top: -6rem !important;
    }
    .mr-sm-n7,
    .mx-sm-n7 {
        margin-right: -6rem !important;
    }
    .mb-sm-n7,
    .my-sm-n7 {
        margin-bottom: -6rem !important;
    }
    .ml-sm-n7,
    .mx-sm-n7 {
        margin-left: -6rem !important;
    }
    .m-sm-n8 {
        margin: -7.5rem !important;
    }
    .mt-sm-n8,
    .my-sm-n8 {
        margin-top: -7.5rem !important;
    }
    .mr-sm-n8,
    .mx-sm-n8 {
        margin-right: -7.5rem !important;
    }
    .mb-sm-n8,
    .my-sm-n8 {
        margin-bottom: -7.5rem !important;
    }
    .ml-sm-n8,
    .mx-sm-n8 {
        margin-left: -7.5rem !important;
    }
    .m-sm-n9 {
        margin: -9rem !important;
    }
    .mt-sm-n9,
    .my-sm-n9 {
        margin-top: -9rem !important;
    }
    .mr-sm-n9,
    .mx-sm-n9 {
        margin-right: -9rem !important;
    }
    .mb-sm-n9,
    .my-sm-n9 {
        margin-bottom: -9rem !important;
    }
    .ml-sm-n9,
    .mx-sm-n9 {
        margin-left: -9rem !important;
    }
    .m-sm-n10 {
        margin: -10.5rem !important;
    }
    .mt-sm-n10,
    .my-sm-n10 {
        margin-top: -10.5rem !important;
    }
    .mr-sm-n10,
    .mx-sm-n10 {
        margin-right: -10.5rem !important;
    }
    .mb-sm-n10,
    .my-sm-n10 {
        margin-bottom: -10.5rem !important;
    }
    .ml-sm-n10,
    .mx-sm-n10 {
        margin-left: -10.5rem !important;
    }
    .m-sm-auto {
        margin: auto !important;
    }
    .mt-sm-auto,
    .my-sm-auto {
        margin-top: auto !important;
    }
    .mr-sm-auto,
    .mx-sm-auto {
        margin-right: auto !important;
    }
    .mb-sm-auto,
    .my-sm-auto {
        margin-bottom: auto !important;
    }
    .ml-sm-auto,
    .mx-sm-auto {
        margin-left: auto !important;
    }
}
@media (min-width: 768px) {
    .m-md-0 {
        margin: 0 !important;
    }
    .mt-md-0,
    .my-md-0 {
        margin-top: 0 !important;
    }
    .mr-md-0,
    .mx-md-0 {
        margin-right: 0 !important;
    }
    .mb-md-0,
    .my-md-0 {
        margin-bottom: 0 !important;
    }
    .ml-md-0,
    .mx-md-0 {
        margin-left: 0 !important;
    }
    .m-md-1 {
        margin: 0.25rem !important;
    }
    .mt-md-1,
    .my-md-1 {
        margin-top: 0.25rem !important;
    }
    .mr-md-1,
    .mx-md-1 {
        margin-right: 0.25rem !important;
    }
    .mb-md-1,
    .my-md-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-md-1,
    .mx-md-1 {
        margin-left: 0.25rem !important;
    }
    .m-md-2 {
        margin: 0.5rem !important;
    }
    .mt-md-2,
    .my-md-2 {
        margin-top: 0.5rem !important;
    }
    .mr-md-2,
    .mx-md-2 {
        margin-right: 0.5rem !important;
    }
    .mb-md-2,
    .my-md-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-md-2,
    .mx-md-2 {
        margin-left: 0.5rem !important;
    }
    .m-md-3 {
        margin: 1rem !important;
    }
    .mt-md-3,
    .my-md-3 {
        margin-top: 1rem !important;
    }
    .mr-md-3,
    .mx-md-3 {
        margin-right: 1rem !important;
    }
    .mb-md-3,
    .my-md-3 {
        margin-bottom: 1rem !important;
    }
    .ml-md-3,
    .mx-md-3 {
        margin-left: 1rem !important;
    }
    .m-md-4 {
        margin: 1.5rem !important;
    }
    .mt-md-4,
    .my-md-4 {
        margin-top: 1.5rem !important;
    }
    .mr-md-4,
    .mx-md-4 {
        margin-right: 1.5rem !important;
    }
    .mb-md-4,
    .my-md-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-md-4,
    .mx-md-4 {
        margin-left: 1.5rem !important;
    }
    .m-md-5 {
        margin: 3rem !important;
    }
    .mt-md-5,
    .my-md-5 {
        margin-top: 3rem !important;
    }
    .mr-md-5,
    .mx-md-5 {
        margin-right: 3rem !important;
    }
    .mb-md-5,
    .my-md-5 {
        margin-bottom: 3rem !important;
    }
    .ml-md-5,
    .mx-md-5 {
        margin-left: 3rem !important;
    }
    .m-md-6 {
        margin: 4.5rem !important;
    }
    .mt-md-6,
    .my-md-6 {
        margin-top: 4.5rem !important;
    }
    .mr-md-6,
    .mx-md-6 {
        margin-right: 4.5rem !important;
    }
    .mb-md-6,
    .my-md-6 {
        margin-bottom: 4.5rem !important;
    }
    .ml-md-6,
    .mx-md-6 {
        margin-left: 4.5rem !important;
    }
    .m-md-7 {
        margin: 6rem !important;
    }
    .mt-md-7,
    .my-md-7 {
        margin-top: 6rem !important;
    }
    .mr-md-7,
    .mx-md-7 {
        margin-right: 6rem !important;
    }
    .mb-md-7,
    .my-md-7 {
        margin-bottom: 6rem !important;
    }
    .ml-md-7,
    .mx-md-7 {
        margin-left: 6rem !important;
    }
    .m-md-8 {
        margin: 7.5rem !important;
    }
    .mt-md-8,
    .my-md-8 {
        margin-top: 7.5rem !important;
    }
    .mr-md-8,
    .mx-md-8 {
        margin-right: 7.5rem !important;
    }
    .mb-md-8,
    .my-md-8 {
        margin-bottom: 7.5rem !important;
    }
    .ml-md-8,
    .mx-md-8 {
        margin-left: 7.5rem !important;
    }
    .m-md-9 {
        margin: 9rem !important;
    }
    .mt-md-9,
    .my-md-9 {
        margin-top: 9rem !important;
    }
    .mr-md-9,
    .mx-md-9 {
        margin-right: 9rem !important;
    }
    .mb-md-9,
    .my-md-9 {
        margin-bottom: 9rem !important;
    }
    .ml-md-9,
    .mx-md-9 {
        margin-left: 9rem !important;
    }
    .m-md-10 {
        margin: 10.5rem !important;
    }
    .mt-md-10,
    .my-md-10 {
        margin-top: 10.5rem !important;
    }
    .mr-md-10,
    .mx-md-10 {
        margin-right: 10.5rem !important;
    }
    .mb-md-10,
    .my-md-10 {
        margin-bottom: 10.5rem !important;
    }
    .ml-md-10,
    .mx-md-10 {
        margin-left: 10.5rem !important;
    }
    .p-md-0 {
        padding: 0 !important;
    }
    .pt-md-0,
    .py-md-0 {
        padding-top: 0 !important;
    }
    .pr-md-0,
    .px-md-0 {
        padding-right: 0 !important;
    }
    .pb-md-0,
    .py-md-0 {
        padding-bottom: 0 !important;
    }
    .pl-md-0,
    .px-md-0 {
        padding-left: 0 !important;
    }
    .p-md-1 {
        padding: 0.25rem !important;
    }
    .pt-md-1,
    .py-md-1 {
        padding-top: 0.25rem !important;
    }
    .pr-md-1,
    .px-md-1 {
        padding-right: 0.25rem !important;
    }
    .pb-md-1,
    .py-md-1 {
        padding-bottom: 0.25rem !important;
    }
    .pl-md-1,
    .px-md-1 {
        padding-left: 0.25rem !important;
    }
    .p-md-2 {
        padding: 0.5rem !important;
    }
    .pt-md-2,
    .py-md-2 {
        padding-top: 0.5rem !important;
    }
    .pr-md-2,
    .px-md-2 {
        padding-right: 0.5rem !important;
    }
    .pb-md-2,
    .py-md-2 {
        padding-bottom: 0.5rem !important;
    }
    .pl-md-2,
    .px-md-2 {
        padding-left: 0.5rem !important;
    }
    .p-md-3 {
        padding: 1rem !important;
    }
    .pt-md-3,
    .py-md-3 {
        padding-top: 1rem !important;
    }
    .pr-md-3,
    .px-md-3 {
        padding-right: 1rem !important;
    }
    .pb-md-3,
    .py-md-3 {
        padding-bottom: 1rem !important;
    }
    .pl-md-3,
    .px-md-3 {
        padding-left: 1rem !important;
    }
    .p-md-4 {
        padding: 1.5rem !important;
    }
    .pt-md-4,
    .py-md-4 {
        padding-top: 1.5rem !important;
    }
    .pr-md-4,
    .px-md-4 {
        padding-right: 1.5rem !important;
    }
    .pb-md-4,
    .py-md-4 {
        padding-bottom: 1.5rem !important;
    }
    .pl-md-4,
    .px-md-4 {
        padding-left: 1.5rem !important;
    }
    .p-md-5 {
        padding: 3rem !important;
    }
    .pt-md-5,
    .py-md-5 {
        padding-top: 3rem !important;
    }
    .pr-md-5,
    .px-md-5 {
        padding-right: 3rem !important;
    }
    .pb-md-5,
    .py-md-5 {
        padding-bottom: 3rem !important;
    }
    .pl-md-5,
    .px-md-5 {
        padding-left: 3rem !important;
    }
    .p-md-6 {
        padding: 4.5rem !important;
    }
    .pt-md-6,
    .py-md-6 {
        padding-top: 4.5rem !important;
    }
    .pr-md-6,
    .px-md-6 {
        padding-right: 4.5rem !important;
    }
    .pb-md-6,
    .py-md-6 {
        padding-bottom: 4.5rem !important;
    }
    .pl-md-6,
    .px-md-6 {
        padding-left: 4.5rem !important;
    }
    .p-md-7 {
        padding: 6rem !important;
    }
    .pt-md-7,
    .py-md-7 {
        padding-top: 6rem !important;
    }
    .pr-md-7,
    .px-md-7 {
        padding-right: 6rem !important;
    }
    .pb-md-7,
    .py-md-7 {
        padding-bottom: 6rem !important;
    }
    .pl-md-7,
    .px-md-7 {
        padding-left: 6rem !important;
    }
    .p-md-8 {
        padding: 7.5rem !important;
    }
    .pt-md-8,
    .py-md-8 {
        padding-top: 7.5rem !important;
    }
    .pr-md-8,
    .px-md-8 {
        padding-right: 7.5rem !important;
    }
    .pb-md-8,
    .py-md-8 {
        padding-bottom: 7.5rem !important;
    }
    .pl-md-8,
    .px-md-8 {
        padding-left: 7.5rem !important;
    }
    .p-md-9 {
        padding: 9rem !important;
    }
    .pt-md-9,
    .py-md-9 {
        padding-top: 9rem !important;
    }
    .pr-md-9,
    .px-md-9 {
        padding-right: 9rem !important;
    }
    .pb-md-9,
    .py-md-9 {
        padding-bottom: 9rem !important;
    }
    .pl-md-9,
    .px-md-9 {
        padding-left: 9rem !important;
    }
    .p-md-10 {
        padding: 10.5rem !important;
    }
    .pt-md-10,
    .py-md-10 {
        padding-top: 10.5rem !important;
    }
    .pr-md-10,
    .px-md-10 {
        padding-right: 10.5rem !important;
    }
    .pb-md-10,
    .py-md-10 {
        padding-bottom: 10.5rem !important;
    }
    .pl-md-10,
    .px-md-10 {
        padding-left: 10.5rem !important;
    }
    .m-md-n1 {
        margin: -0.25rem !important;
    }
    .mt-md-n1,
    .my-md-n1 {
        margin-top: -0.25rem !important;
    }
    .mr-md-n1,
    .mx-md-n1 {
        margin-right: -0.25rem !important;
    }
    .mb-md-n1,
    .my-md-n1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-md-n1,
    .mx-md-n1 {
        margin-left: -0.25rem !important;
    }
    .m-md-n2 {
        margin: -0.5rem !important;
    }
    .mt-md-n2,
    .my-md-n2 {
        margin-top: -0.5rem !important;
    }
    .mr-md-n2,
    .mx-md-n2 {
        margin-right: -0.5rem !important;
    }
    .mb-md-n2,
    .my-md-n2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-md-n2,
    .mx-md-n2 {
        margin-left: -0.5rem !important;
    }
    .m-md-n3 {
        margin: -1rem !important;
    }
    .mt-md-n3,
    .my-md-n3 {
        margin-top: -1rem !important;
    }
    .mr-md-n3,
    .mx-md-n3 {
        margin-right: -1rem !important;
    }
    .mb-md-n3,
    .my-md-n3 {
        margin-bottom: -1rem !important;
    }
    .ml-md-n3,
    .mx-md-n3 {
        margin-left: -1rem !important;
    }
    .m-md-n4 {
        margin: -1.5rem !important;
    }
    .mt-md-n4,
    .my-md-n4 {
        margin-top: -1.5rem !important;
    }
    .mr-md-n4,
    .mx-md-n4 {
        margin-right: -1.5rem !important;
    }
    .mb-md-n4,
    .my-md-n4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-md-n4,
    .mx-md-n4 {
        margin-left: -1.5rem !important;
    }
    .m-md-n5 {
        margin: -3rem !important;
    }
    .mt-md-n5,
    .my-md-n5 {
        margin-top: -3rem !important;
    }
    .mr-md-n5,
    .mx-md-n5 {
        margin-right: -3rem !important;
    }
    .mb-md-n5,
    .my-md-n5 {
        margin-bottom: -3rem !important;
    }
    .ml-md-n5,
    .mx-md-n5 {
        margin-left: -3rem !important;
    }
    .m-md-n6 {
        margin: -4.5rem !important;
    }
    .mt-md-n6,
    .my-md-n6 {
        margin-top: -4.5rem !important;
    }
    .mr-md-n6,
    .mx-md-n6 {
        margin-right: -4.5rem !important;
    }
    .mb-md-n6,
    .my-md-n6 {
        margin-bottom: -4.5rem !important;
    }
    .ml-md-n6,
    .mx-md-n6 {
        margin-left: -4.5rem !important;
    }
    .m-md-n7 {
        margin: -6rem !important;
    }
    .mt-md-n7,
    .my-md-n7 {
        margin-top: -6rem !important;
    }
    .mr-md-n7,
    .mx-md-n7 {
        margin-right: -6rem !important;
    }
    .mb-md-n7,
    .my-md-n7 {
        margin-bottom: -6rem !important;
    }
    .ml-md-n7,
    .mx-md-n7 {
        margin-left: -6rem !important;
    }
    .m-md-n8 {
        margin: -7.5rem !important;
    }
    .mt-md-n8,
    .my-md-n8 {
        margin-top: -7.5rem !important;
    }
    .mr-md-n8,
    .mx-md-n8 {
        margin-right: -7.5rem !important;
    }
    .mb-md-n8,
    .my-md-n8 {
        margin-bottom: -7.5rem !important;
    }
    .ml-md-n8,
    .mx-md-n8 {
        margin-left: -7.5rem !important;
    }
    .m-md-n9 {
        margin: -9rem !important;
    }
    .mt-md-n9,
    .my-md-n9 {
        margin-top: -9rem !important;
    }
    .mr-md-n9,
    .mx-md-n9 {
        margin-right: -9rem !important;
    }
    .mb-md-n9,
    .my-md-n9 {
        margin-bottom: -9rem !important;
    }
    .ml-md-n9,
    .mx-md-n9 {
        margin-left: -9rem !important;
    }
    .m-md-n10 {
        margin: -10.5rem !important;
    }
    .mt-md-n10,
    .my-md-n10 {
        margin-top: -10.5rem !important;
    }
    .mr-md-n10,
    .mx-md-n10 {
        margin-right: -10.5rem !important;
    }
    .mb-md-n10,
    .my-md-n10 {
        margin-bottom: -10.5rem !important;
    }
    .ml-md-n10,
    .mx-md-n10 {
        margin-left: -10.5rem !important;
    }
    .m-md-auto {
        margin: auto !important;
    }
    .mt-md-auto,
    .my-md-auto {
        margin-top: auto !important;
    }
    .mr-md-auto,
    .mx-md-auto {
        margin-right: auto !important;
    }
    .mb-md-auto,
    .my-md-auto {
        margin-bottom: auto !important;
    }
    .ml-md-auto,
    .mx-md-auto {
        margin-left: auto !important;
    }
}
@media (min-width: 992px) {
    .m-lg-0 {
        margin: 0 !important;
    }
    .mt-lg-0,
    .my-lg-0 {
        margin-top: 0 !important;
    }
    .mr-lg-0,
    .mx-lg-0 {
        margin-right: 0 !important;
    }
    .mb-lg-0,
    .my-lg-0 {
        margin-bottom: 0 !important;
    }
    .ml-lg-0,
    .mx-lg-0 {
        margin-left: 0 !important;
    }
    .m-lg-1 {
        margin: 0.25rem !important;
    }
    .mt-lg-1,
    .my-lg-1 {
        margin-top: 0.25rem !important;
    }
    .mr-lg-1,
    .mx-lg-1 {
        margin-right: 0.25rem !important;
    }
    .mb-lg-1,
    .my-lg-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-lg-1,
    .mx-lg-1 {
        margin-left: 0.25rem !important;
    }
    .m-lg-2 {
        margin: 0.5rem !important;
    }
    .mt-lg-2,
    .my-lg-2 {
        margin-top: 0.5rem !important;
    }
    .mr-lg-2,
    .mx-lg-2 {
        margin-right: 0.5rem !important;
    }
    .mb-lg-2,
    .my-lg-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-lg-2,
    .mx-lg-2 {
        margin-left: 0.5rem !important;
    }
    .m-lg-3 {
        margin: 1rem !important;
    }
    .mt-lg-3,
    .my-lg-3 {
        margin-top: 1rem !important;
    }
    .mr-lg-3,
    .mx-lg-3 {
        margin-right: 1rem !important;
    }
    .mb-lg-3,
    .my-lg-3 {
        margin-bottom: 1rem !important;
    }
    .ml-lg-3,
    .mx-lg-3 {
        margin-left: 1rem !important;
    }
    .m-lg-4 {
        margin: 1.5rem !important;
    }
    .mt-lg-4,
    .my-lg-4 {
        margin-top: 1.5rem !important;
    }
    .mr-lg-4,
    .mx-lg-4 {
        margin-right: 1.5rem !important;
    }
    .mb-lg-4,
    .my-lg-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-lg-4,
    .mx-lg-4 {
        margin-left: 1.5rem !important;
    }
    .m-lg-5 {
        margin: 3rem !important;
    }
    .mt-lg-5,
    .my-lg-5 {
        margin-top: 3rem !important;
    }
    .mr-lg-5,
    .mx-lg-5 {
        margin-right: 3rem !important;
    }
    .mb-lg-5,
    .my-lg-5 {
        margin-bottom: 3rem !important;
    }
    .ml-lg-5,
    .mx-lg-5 {
        margin-left: 3rem !important;
    }
    .m-lg-6 {
        margin: 4.5rem !important;
    }
    .mt-lg-6,
    .my-lg-6 {
        margin-top: 4.5rem !important;
    }
    .mr-lg-6,
    .mx-lg-6 {
        margin-right: 4.5rem !important;
    }
    .mb-lg-6,
    .my-lg-6 {
        margin-bottom: 4.5rem !important;
    }
    .ml-lg-6,
    .mx-lg-6 {
        margin-left: 4.5rem !important;
    }
    .m-lg-7 {
        margin: 6rem !important;
    }
    .mt-lg-7,
    .my-lg-7 {
        margin-top: 6rem !important;
    }
    .mr-lg-7,
    .mx-lg-7 {
        margin-right: 6rem !important;
    }
    .mb-lg-7,
    .my-lg-7 {
        margin-bottom: 6rem !important;
    }
    .ml-lg-7,
    .mx-lg-7 {
        margin-left: 6rem !important;
    }
    .m-lg-8 {
        margin: 7.5rem !important;
    }
    .mt-lg-8,
    .my-lg-8 {
        margin-top: 7.5rem !important;
    }
    .mr-lg-8,
    .mx-lg-8 {
        margin-right: 7.5rem !important;
    }
    .mb-lg-8,
    .my-lg-8 {
        margin-bottom: 7.5rem !important;
    }
    .ml-lg-8,
    .mx-lg-8 {
        margin-left: 7.5rem !important;
    }
    .m-lg-9 {
        margin: 9rem !important;
    }
    .mt-lg-9,
    .my-lg-9 {
        margin-top: 9rem !important;
    }
    .mr-lg-9,
    .mx-lg-9 {
        margin-right: 9rem !important;
    }
    .mb-lg-9,
    .my-lg-9 {
        margin-bottom: 9rem !important;
    }
    .ml-lg-9,
    .mx-lg-9 {
        margin-left: 9rem !important;
    }
    .m-lg-10 {
        margin: 10.5rem !important;
    }
    .mt-lg-10,
    .my-lg-10 {
        margin-top: 10.5rem !important;
    }
    .mr-lg-10,
    .mx-lg-10 {
        margin-right: 10.5rem !important;
    }
    .mb-lg-10,
    .my-lg-10 {
        margin-bottom: 10.5rem !important;
    }
    .ml-lg-10,
    .mx-lg-10 {
        margin-left: 10.5rem !important;
    }
    .p-lg-0 {
        padding: 0 !important;
    }
    .pt-lg-0,
    .py-lg-0 {
        padding-top: 0 !important;
    }
    .pr-lg-0,
    .px-lg-0 {
        padding-right: 0 !important;
    }
    .pb-lg-0,
    .py-lg-0 {
        padding-bottom: 0 !important;
    }
    .pl-lg-0,
    .px-lg-0 {
        padding-left: 0 !important;
    }
    .p-lg-1 {
        padding: 0.25rem !important;
    }
    .pt-lg-1,
    .py-lg-1 {
        padding-top: 0.25rem !important;
    }
    .pr-lg-1,
    .px-lg-1 {
        padding-right: 0.25rem !important;
    }
    .pb-lg-1,
    .py-lg-1 {
        padding-bottom: 0.25rem !important;
    }
    .pl-lg-1,
    .px-lg-1 {
        padding-left: 0.25rem !important;
    }
    .p-lg-2 {
        padding: 0.5rem !important;
    }
    .pt-lg-2,
    .py-lg-2 {
        padding-top: 0.5rem !important;
    }
    .pr-lg-2,
    .px-lg-2 {
        padding-right: 0.5rem !important;
    }
    .pb-lg-2,
    .py-lg-2 {
        padding-bottom: 0.5rem !important;
    }
    .pl-lg-2,
    .px-lg-2 {
        padding-left: 0.5rem !important;
    }
    .p-lg-3 {
        padding: 1rem !important;
    }
    .pt-lg-3,
    .py-lg-3 {
        padding-top: 1rem !important;
    }
    .pr-lg-3,
    .px-lg-3 {
        padding-right: 1rem !important;
    }
    .pb-lg-3,
    .py-lg-3 {
        padding-bottom: 1rem !important;
    }
    .pl-lg-3,
    .px-lg-3 {
        padding-left: 1rem !important;
    }
    .p-lg-4 {
        padding: 1.5rem !important;
    }
    .pt-lg-4,
    .py-lg-4 {
        padding-top: 1.5rem !important;
    }
    .pr-lg-4,
    .px-lg-4 {
        padding-right: 1.5rem !important;
    }
    .pb-lg-4,
    .py-lg-4 {
        padding-bottom: 1.5rem !important;
    }
    .pl-lg-4,
    .px-lg-4 {
        padding-left: 1.5rem !important;
    }
    .p-lg-5 {
        padding: 3rem !important;
    }
    .pt-lg-5,
    .py-lg-5 {
        padding-top: 3rem !important;
    }
    .pr-lg-5,
    .px-lg-5 {
        padding-right: 3rem !important;
    }
    .pb-lg-5,
    .py-lg-5 {
        padding-bottom: 3rem !important;
    }
    .pl-lg-5,
    .px-lg-5 {
        padding-left: 3rem !important;
    }
    .p-lg-6 {
        padding: 4.5rem !important;
    }
    .pt-lg-6,
    .py-lg-6 {
        padding-top: 4.5rem !important;
    }
    .pr-lg-6,
    .px-lg-6 {
        padding-right: 4.5rem !important;
    }
    .pb-lg-6,
    .py-lg-6 {
        padding-bottom: 4.5rem !important;
    }
    .pl-lg-6,
    .px-lg-6 {
        padding-left: 4.5rem !important;
    }
    .p-lg-7 {
        padding: 6rem !important;
    }
    .pt-lg-7,
    .py-lg-7 {
        padding-top: 6rem !important;
    }
    .pr-lg-7,
    .px-lg-7 {
        padding-right: 6rem !important;
    }
    .pb-lg-7,
    .py-lg-7 {
        padding-bottom: 6rem !important;
    }
    .pl-lg-7,
    .px-lg-7 {
        padding-left: 6rem !important;
    }
    .p-lg-8 {
        padding: 7.5rem !important;
    }
    .pt-lg-8,
    .py-lg-8 {
        padding-top: 7.5rem !important;
    }
    .pr-lg-8,
    .px-lg-8 {
        padding-right: 7.5rem !important;
    }
    .pb-lg-8,
    .py-lg-8 {
        padding-bottom: 7.5rem !important;
    }
    .pl-lg-8,
    .px-lg-8 {
        padding-left: 7.5rem !important;
    }
    .p-lg-9 {
        padding: 9rem !important;
    }
    .pt-lg-9,
    .py-lg-9 {
        padding-top: 9rem !important;
    }
    .pr-lg-9,
    .px-lg-9 {
        padding-right: 9rem !important;
    }
    .pb-lg-9,
    .py-lg-9 {
        padding-bottom: 9rem !important;
    }
    .pl-lg-9,
    .px-lg-9 {
        padding-left: 9rem !important;
    }
    .p-lg-10 {
        padding: 10.5rem !important;
    }
    .pt-lg-10,
    .py-lg-10 {
        padding-top: 10.5rem !important;
    }
    .pr-lg-10,
    .px-lg-10 {
        padding-right: 10.5rem !important;
    }
    .pb-lg-10,
    .py-lg-10 {
        padding-bottom: 10.5rem !important;
    }
    .pl-lg-10,
    .px-lg-10 {
        padding-left: 10.5rem !important;
    }
    .m-lg-n1 {
        margin: -0.25rem !important;
    }
    .mt-lg-n1,
    .my-lg-n1 {
        margin-top: -0.25rem !important;
    }
    .mr-lg-n1,
    .mx-lg-n1 {
        margin-right: -0.25rem !important;
    }
    .mb-lg-n1,
    .my-lg-n1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-lg-n1,
    .mx-lg-n1 {
        margin-left: -0.25rem !important;
    }
    .m-lg-n2 {
        margin: -0.5rem !important;
    }
    .mt-lg-n2,
    .my-lg-n2 {
        margin-top: -0.5rem !important;
    }
    .mr-lg-n2,
    .mx-lg-n2 {
        margin-right: -0.5rem !important;
    }
    .mb-lg-n2,
    .my-lg-n2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-lg-n2,
    .mx-lg-n2 {
        margin-left: -0.5rem !important;
    }
    .m-lg-n3 {
        margin: -1rem !important;
    }
    .mt-lg-n3,
    .my-lg-n3 {
        margin-top: -1rem !important;
    }
    .mr-lg-n3,
    .mx-lg-n3 {
        margin-right: -1rem !important;
    }
    .mb-lg-n3,
    .my-lg-n3 {
        margin-bottom: -1rem !important;
    }
    .ml-lg-n3,
    .mx-lg-n3 {
        margin-left: -1rem !important;
    }
    .m-lg-n4 {
        margin: -1.5rem !important;
    }
    .mt-lg-n4,
    .my-lg-n4 {
        margin-top: -1.5rem !important;
    }
    .mr-lg-n4,
    .mx-lg-n4 {
        margin-right: -1.5rem !important;
    }
    .mb-lg-n4,
    .my-lg-n4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-lg-n4,
    .mx-lg-n4 {
        margin-left: -1.5rem !important;
    }
    .m-lg-n5 {
        margin: -3rem !important;
    }
    .mt-lg-n5,
    .my-lg-n5 {
        margin-top: -3rem !important;
    }
    .mr-lg-n5,
    .mx-lg-n5 {
        margin-right: -3rem !important;
    }
    .mb-lg-n5,
    .my-lg-n5 {
        margin-bottom: -3rem !important;
    }
    .ml-lg-n5,
    .mx-lg-n5 {
        margin-left: -3rem !important;
    }
    .m-lg-n6 {
        margin: -4.5rem !important;
    }
    .mt-lg-n6,
    .my-lg-n6 {
        margin-top: -4.5rem !important;
    }
    .mr-lg-n6,
    .mx-lg-n6 {
        margin-right: -4.5rem !important;
    }
    .mb-lg-n6,
    .my-lg-n6 {
        margin-bottom: -4.5rem !important;
    }
    .ml-lg-n6,
    .mx-lg-n6 {
        margin-left: -4.5rem !important;
    }
    .m-lg-n7 {
        margin: -6rem !important;
    }
    .mt-lg-n7,
    .my-lg-n7 {
        margin-top: -6rem !important;
    }
    .mr-lg-n7,
    .mx-lg-n7 {
        margin-right: -6rem !important;
    }
    .mb-lg-n7,
    .my-lg-n7 {
        margin-bottom: -6rem !important;
    }
    .ml-lg-n7,
    .mx-lg-n7 {
        margin-left: -6rem !important;
    }
    .m-lg-n8 {
        margin: -7.5rem !important;
    }
    .mt-lg-n8,
    .my-lg-n8 {
        margin-top: -7.5rem !important;
    }
    .mr-lg-n8,
    .mx-lg-n8 {
        margin-right: -7.5rem !important;
    }
    .mb-lg-n8,
    .my-lg-n8 {
        margin-bottom: -7.5rem !important;
    }
    .ml-lg-n8,
    .mx-lg-n8 {
        margin-left: -7.5rem !important;
    }
    .m-lg-n9 {
        margin: -9rem !important;
    }
    .mt-lg-n9,
    .my-lg-n9 {
        margin-top: -9rem !important;
    }
    .mr-lg-n9,
    .mx-lg-n9 {
        margin-right: -9rem !important;
    }
    .mb-lg-n9,
    .my-lg-n9 {
        margin-bottom: -9rem !important;
    }
    .ml-lg-n9,
    .mx-lg-n9 {
        margin-left: -9rem !important;
    }
    .m-lg-n10 {
        margin: -10.5rem !important;
    }
    .mt-lg-n10,
    .my-lg-n10 {
        margin-top: -10.5rem !important;
    }
    .mr-lg-n10,
    .mx-lg-n10 {
        margin-right: -10.5rem !important;
    }
    .mb-lg-n10,
    .my-lg-n10 {
        margin-bottom: -10.5rem !important;
    }
    .ml-lg-n10,
    .mx-lg-n10 {
        margin-left: -10.5rem !important;
    }
    .m-lg-auto {
        margin: auto !important;
    }
    .mt-lg-auto,
    .my-lg-auto {
        margin-top: auto !important;
    }
    .mr-lg-auto,
    .mx-lg-auto {
        margin-right: auto !important;
    }
    .mb-lg-auto,
    .my-lg-auto {
        margin-bottom: auto !important;
    }
    .ml-lg-auto,
    .mx-lg-auto {
        margin-left: auto !important;
    }
}
@media (min-width: 1200px) {
    .m-xl-0 {
        margin: 0 !important;
    }
    .mt-xl-0,
    .my-xl-0 {
        margin-top: 0 !important;
    }
    .mr-xl-0,
    .mx-xl-0 {
        margin-right: 0 !important;
    }
    .mb-xl-0,
    .my-xl-0 {
        margin-bottom: 0 !important;
    }
    .ml-xl-0,
    .mx-xl-0 {
        margin-left: 0 !important;
    }
    .m-xl-1 {
        margin: 0.25rem !important;
    }
    .mt-xl-1,
    .my-xl-1 {
        margin-top: 0.25rem !important;
    }
    .mr-xl-1,
    .mx-xl-1 {
        margin-right: 0.25rem !important;
    }
    .mb-xl-1,
    .my-xl-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-xl-1,
    .mx-xl-1 {
        margin-left: 0.25rem !important;
    }
    .m-xl-2 {
        margin: 0.5rem !important;
    }
    .mt-xl-2,
    .my-xl-2 {
        margin-top: 0.5rem !important;
    }
    .mr-xl-2,
    .mx-xl-2 {
        margin-right: 0.5rem !important;
    }
    .mb-xl-2,
    .my-xl-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-xl-2,
    .mx-xl-2 {
        margin-left: 0.5rem !important;
    }
    .m-xl-3 {
        margin: 1rem !important;
    }
    .mt-xl-3,
    .my-xl-3 {
        margin-top: 1rem !important;
    }
    .mr-xl-3,
    .mx-xl-3 {
        margin-right: 1rem !important;
    }
    .mb-xl-3,
    .my-xl-3 {
        margin-bottom: 1rem !important;
    }
    .ml-xl-3,
    .mx-xl-3 {
        margin-left: 1rem !important;
    }
    .m-xl-4 {
        margin: 1.5rem !important;
    }
    .mt-xl-4,
    .my-xl-4 {
        margin-top: 1.5rem !important;
    }
    .mr-xl-4,
    .mx-xl-4 {
        margin-right: 1.5rem !important;
    }
    .mb-xl-4,
    .my-xl-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-xl-4,
    .mx-xl-4 {
        margin-left: 1.5rem !important;
    }
    .m-xl-5 {
        margin: 3rem !important;
    }
    .mt-xl-5,
    .my-xl-5 {
        margin-top: 3rem !important;
    }
    .mr-xl-5,
    .mx-xl-5 {
        margin-right: 3rem !important;
    }
    .mb-xl-5,
    .my-xl-5 {
        margin-bottom: 3rem !important;
    }
    .ml-xl-5,
    .mx-xl-5 {
        margin-left: 3rem !important;
    }
    .m-xl-6 {
        margin: 4.5rem !important;
    }
    .mt-xl-6,
    .my-xl-6 {
        margin-top: 4.5rem !important;
    }
    .mr-xl-6,
    .mx-xl-6 {
        margin-right: 4.5rem !important;
    }
    .mb-xl-6,
    .my-xl-6 {
        margin-bottom: 4.5rem !important;
    }
    .ml-xl-6,
    .mx-xl-6 {
        margin-left: 4.5rem !important;
    }
    .m-xl-7 {
        margin: 6rem !important;
    }
    .mt-xl-7,
    .my-xl-7 {
        margin-top: 6rem !important;
    }
    .mr-xl-7,
    .mx-xl-7 {
        margin-right: 6rem !important;
    }
    .mb-xl-7,
    .my-xl-7 {
        margin-bottom: 6rem !important;
    }
    .ml-xl-7,
    .mx-xl-7 {
        margin-left: 6rem !important;
    }
    .m-xl-8 {
        margin: 7.5rem !important;
    }
    .mt-xl-8,
    .my-xl-8 {
        margin-top: 7.5rem !important;
    }
    .mr-xl-8,
    .mx-xl-8 {
        margin-right: 7.5rem !important;
    }
    .mb-xl-8,
    .my-xl-8 {
        margin-bottom: 7.5rem !important;
    }
    .ml-xl-8,
    .mx-xl-8 {
        margin-left: 7.5rem !important;
    }
    .m-xl-9 {
        margin: 9rem !important;
    }
    .mt-xl-9,
    .my-xl-9 {
        margin-top: 9rem !important;
    }
    .mr-xl-9,
    .mx-xl-9 {
        margin-right: 9rem !important;
    }
    .mb-xl-9,
    .my-xl-9 {
        margin-bottom: 9rem !important;
    }
    .ml-xl-9,
    .mx-xl-9 {
        margin-left: 9rem !important;
    }
    .m-xl-10 {
        margin: 10.5rem !important;
    }
    .mt-xl-10,
    .my-xl-10 {
        margin-top: 10.5rem !important;
    }
    .mr-xl-10,
    .mx-xl-10 {
        margin-right: 10.5rem !important;
    }
    .mb-xl-10,
    .my-xl-10 {
        margin-bottom: 10.5rem !important;
    }
    .ml-xl-10,
    .mx-xl-10 {
        margin-left: 10.5rem !important;
    }
    .p-xl-0 {
        padding: 0 !important;
    }
    .pt-xl-0,
    .py-xl-0 {
        padding-top: 0 !important;
    }
    .pr-xl-0,
    .px-xl-0 {
        padding-right: 0 !important;
    }
    .pb-xl-0,
    .py-xl-0 {
        padding-bottom: 0 !important;
    }
    .pl-xl-0,
    .px-xl-0 {
        padding-left: 0 !important;
    }
    .p-xl-1 {
        padding: 0.25rem !important;
    }
    .pt-xl-1,
    .py-xl-1 {
        padding-top: 0.25rem !important;
    }
    .pr-xl-1,
    .px-xl-1 {
        padding-right: 0.25rem !important;
    }
    .pb-xl-1,
    .py-xl-1 {
        padding-bottom: 0.25rem !important;
    }
    .pl-xl-1,
    .px-xl-1 {
        padding-left: 0.25rem !important;
    }
    .p-xl-2 {
        padding: 0.5rem !important;
    }
    .pt-xl-2,
    .py-xl-2 {
        padding-top: 0.5rem !important;
    }
    .pr-xl-2,
    .px-xl-2 {
        padding-right: 0.5rem !important;
    }
    .pb-xl-2,
    .py-xl-2 {
        padding-bottom: 0.5rem !important;
    }
    .pl-xl-2,
    .px-xl-2 {
        padding-left: 0.5rem !important;
    }
    .p-xl-3 {
        padding: 1rem !important;
    }
    .pt-xl-3,
    .py-xl-3 {
        padding-top: 1rem !important;
    }
    .pr-xl-3,
    .px-xl-3 {
        padding-right: 1rem !important;
    }
    .pb-xl-3,
    .py-xl-3 {
        padding-bottom: 1rem !important;
    }
    .pl-xl-3,
    .px-xl-3 {
        padding-left: 1rem !important;
    }
    .p-xl-4 {
        padding: 1.5rem !important;
    }
    .pt-xl-4,
    .py-xl-4 {
        padding-top: 1.5rem !important;
    }
    .pr-xl-4,
    .px-xl-4 {
        padding-right: 1.5rem !important;
    }
    .pb-xl-4,
    .py-xl-4 {
        padding-bottom: 1.5rem !important;
    }
    .pl-xl-4,
    .px-xl-4 {
        padding-left: 1.5rem !important;
    }
    .p-xl-5 {
        padding: 3rem !important;
    }
    .pt-xl-5,
    .py-xl-5 {
        padding-top: 3rem !important;
    }
    .pr-xl-5,
    .px-xl-5 {
        padding-right: 3rem !important;
    }
    .pb-xl-5,
    .py-xl-5 {
        padding-bottom: 3rem !important;
    }
    .pl-xl-5,
    .px-xl-5 {
        padding-left: 3rem !important;
    }
    .p-xl-6 {
        padding: 4.5rem !important;
    }
    .pt-xl-6,
    .py-xl-6 {
        padding-top: 4.5rem !important;
    }
    .pr-xl-6,
    .px-xl-6 {
        padding-right: 4.5rem !important;
    }
    .pb-xl-6,
    .py-xl-6 {
        padding-bottom: 4.5rem !important;
    }
    .pl-xl-6,
    .px-xl-6 {
        padding-left: 4.5rem !important;
    }
    .p-xl-7 {
        padding: 6rem !important;
    }
    .pt-xl-7,
    .py-xl-7 {
        padding-top: 6rem !important;
    }
    .pr-xl-7,
    .px-xl-7 {
        padding-right: 6rem !important;
    }
    .pb-xl-7,
    .py-xl-7 {
        padding-bottom: 6rem !important;
    }
    .pl-xl-7,
    .px-xl-7 {
        padding-left: 6rem !important;
    }
    .p-xl-8 {
        padding: 7.5rem !important;
    }
    .pt-xl-8,
    .py-xl-8 {
        padding-top: 7.5rem !important;
    }
    .pr-xl-8,
    .px-xl-8 {
        padding-right: 7.5rem !important;
    }
    .pb-xl-8,
    .py-xl-8 {
        padding-bottom: 7.5rem !important;
    }
    .pl-xl-8,
    .px-xl-8 {
        padding-left: 7.5rem !important;
    }
    .p-xl-9 {
        padding: 9rem !important;
    }
    .pt-xl-9,
    .py-xl-9 {
        padding-top: 9rem !important;
    }
    .pr-xl-9,
    .px-xl-9 {
        padding-right: 9rem !important;
    }
    .pb-xl-9,
    .py-xl-9 {
        padding-bottom: 9rem !important;
    }
    .pl-xl-9,
    .px-xl-9 {
        padding-left: 9rem !important;
    }
    .p-xl-10 {
        padding: 10.5rem !important;
    }
    .pt-xl-10,
    .py-xl-10 {
        padding-top: 10.5rem !important;
    }
    .pr-xl-10,
    .px-xl-10 {
        padding-right: 10.5rem !important;
    }
    .pb-xl-10,
    .py-xl-10 {
        padding-bottom: 10.5rem !important;
    }
    .pl-xl-10,
    .px-xl-10 {
        padding-left: 10.5rem !important;
    }
    .m-xl-n1 {
        margin: -0.25rem !important;
    }
    .mt-xl-n1,
    .my-xl-n1 {
        margin-top: -0.25rem !important;
    }
    .mr-xl-n1,
    .mx-xl-n1 {
        margin-right: -0.25rem !important;
    }
    .mb-xl-n1,
    .my-xl-n1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-xl-n1,
    .mx-xl-n1 {
        margin-left: -0.25rem !important;
    }
    .m-xl-n2 {
        margin: -0.5rem !important;
    }
    .mt-xl-n2,
    .my-xl-n2 {
        margin-top: -0.5rem !important;
    }
    .mr-xl-n2,
    .mx-xl-n2 {
        margin-right: -0.5rem !important;
    }
    .mb-xl-n2,
    .my-xl-n2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-xl-n2,
    .mx-xl-n2 {
        margin-left: -0.5rem !important;
    }
    .m-xl-n3 {
        margin: -1rem !important;
    }
    .mt-xl-n3,
    .my-xl-n3 {
        margin-top: -1rem !important;
    }
    .mr-xl-n3,
    .mx-xl-n3 {
        margin-right: -1rem !important;
    }
    .mb-xl-n3,
    .my-xl-n3 {
        margin-bottom: -1rem !important;
    }
    .ml-xl-n3,
    .mx-xl-n3 {
        margin-left: -1rem !important;
    }
    .m-xl-n4 {
        margin: -1.5rem !important;
    }
    .mt-xl-n4,
    .my-xl-n4 {
        margin-top: -1.5rem !important;
    }
    .mr-xl-n4,
    .mx-xl-n4 {
        margin-right: -1.5rem !important;
    }
    .mb-xl-n4,
    .my-xl-n4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-xl-n4,
    .mx-xl-n4 {
        margin-left: -1.5rem !important;
    }
    .m-xl-n5 {
        margin: -3rem !important;
    }
    .mt-xl-n5,
    .my-xl-n5 {
        margin-top: -3rem !important;
    }
    .mr-xl-n5,
    .mx-xl-n5 {
        margin-right: -3rem !important;
    }
    .mb-xl-n5,
    .my-xl-n5 {
        margin-bottom: -3rem !important;
    }
    .ml-xl-n5,
    .mx-xl-n5 {
        margin-left: -3rem !important;
    }
    .m-xl-n6 {
        margin: -4.5rem !important;
    }
    .mt-xl-n6,
    .my-xl-n6 {
        margin-top: -4.5rem !important;
    }
    .mr-xl-n6,
    .mx-xl-n6 {
        margin-right: -4.5rem !important;
    }
    .mb-xl-n6,
    .my-xl-n6 {
        margin-bottom: -4.5rem !important;
    }
    .ml-xl-n6,
    .mx-xl-n6 {
        margin-left: -4.5rem !important;
    }
    .m-xl-n7 {
        margin: -6rem !important;
    }
    .mt-xl-n7,
    .my-xl-n7 {
        margin-top: -6rem !important;
    }
    .mr-xl-n7,
    .mx-xl-n7 {
        margin-right: -6rem !important;
    }
    .mb-xl-n7,
    .my-xl-n7 {
        margin-bottom: -6rem !important;
    }
    .ml-xl-n7,
    .mx-xl-n7 {
        margin-left: -6rem !important;
    }
    .m-xl-n8 {
        margin: -7.5rem !important;
    }
    .mt-xl-n8,
    .my-xl-n8 {
        margin-top: -7.5rem !important;
    }
    .mr-xl-n8,
    .mx-xl-n8 {
        margin-right: -7.5rem !important;
    }
    .mb-xl-n8,
    .my-xl-n8 {
        margin-bottom: -7.5rem !important;
    }
    .ml-xl-n8,
    .mx-xl-n8 {
        margin-left: -7.5rem !important;
    }
    .m-xl-n9 {
        margin: -9rem !important;
    }
    .mt-xl-n9,
    .my-xl-n9 {
        margin-top: -9rem !important;
    }
    .mr-xl-n9,
    .mx-xl-n9 {
        margin-right: -9rem !important;
    }
    .mb-xl-n9,
    .my-xl-n9 {
        margin-bottom: -9rem !important;
    }
    .ml-xl-n9,
    .mx-xl-n9 {
        margin-left: -9rem !important;
    }
    .m-xl-n10 {
        margin: -10.5rem !important;
    }
    .mt-xl-n10,
    .my-xl-n10 {
        margin-top: -10.5rem !important;
    }
    .mr-xl-n10,
    .mx-xl-n10 {
        margin-right: -10.5rem !important;
    }
    .mb-xl-n10,
    .my-xl-n10 {
        margin-bottom: -10.5rem !important;
    }
    .ml-xl-n10,
    .mx-xl-n10 {
        margin-left: -10.5rem !important;
    }
    .m-xl-auto {
        margin: auto !important;
    }
    .mt-xl-auto,
    .my-xl-auto {
        margin-top: auto !important;
    }
    .mr-xl-auto,
    .mx-xl-auto {
        margin-right: auto !important;
    }
    .mb-xl-auto,
    .my-xl-auto {
        margin-bottom: auto !important;
    }
    .ml-xl-auto,
    .mx-xl-auto {
        margin-left: auto !important;
    }
}
.text-monospace {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono,
        Courier New, monospace !important;
}
.text-justify {
    text-align: justify !important;
}
.text-wrap {
    white-space: normal !important;
}
.text-nowrap {
    white-space: nowrap !important;
}
.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.text-left {
    text-align: left !important;
}
.text-right {
    text-align: right !important;
}
.text-center {
    text-align: center !important;
}
@media (min-width: 576px) {
    .text-sm-left {
        text-align: left !important;
    }
    .text-sm-right {
        text-align: right !important;
    }
    .text-sm-center {
        text-align: center !important;
    }
}
@media (min-width: 768px) {
    .text-md-left {
        text-align: left !important;
    }
    .text-md-right {
        text-align: right !important;
    }
    .text-md-center {
        text-align: center !important;
    }
}
@media (min-width: 992px) {
    .text-lg-left {
        text-align: left !important;
    }
    .text-lg-right {
        text-align: right !important;
    }
    .text-lg-center {
        text-align: center !important;
    }
}
@media (min-width: 1200px) {
    .text-xl-left {
        text-align: left !important;
    }
    .text-xl-right {
        text-align: right !important;
    }
    .text-xl-center {
        text-align: center !important;
    }
}
.text-lowercase {
    text-transform: lowercase !important;
}
.text-uppercase {
    text-transform: uppercase !important;
}
.text-capitalize {
    text-transform: capitalize !important;
}
.font-weight-light {
    font-weight: 300 !important;
}
.font-weight-lighter {
    font-weight: lighter !important;
}
.font-weight-normal {
    font-weight: 400 !important;
}
.font-weight-bold {
    font-weight: 600 !important;
}
.font-italic {
    font-style: italic !important;
}
.text-primary {
    color: {{ $settings->website_theme }} !important;
}
a.text-primary:focus,
a.text-primary:hover {
    color: {{ $settings->website_theme }} !important;
}
.text-secondary {
    color: #eff2f7 !important;
}
a.text-secondary:focus,
a.text-secondary:hover {
    color: #bcc9de !important;
}
.text-success {
    color: #36b37e !important;
}
a.text-success:focus,
a.text-success:hover {
    color: #247855 !important;
}
.text-info {
    color: #00b8d9 !important;
}
a.text-info:focus,
a.text-info:hover {
    color: #00778d !important;
}
.text-warning {
    color: #ffab00 !important;
}
a.text-warning:focus,
a.text-warning:hover {
    color: #b37800 !important;
}
.text-danger {
    color: #ff5630 !important;
}
a.text-danger:focus,
a.text-danger:hover {
    color: #e32a00 !important;
}
.text-light {
    color: #eff2f7 !important;
}
a.text-light:focus,
a.text-light:hover {
    color: #bcc9de !important;
}
.text-dark {
    color: #273444 !important;
}
a.text-dark:focus,
a.text-dark:hover {
    color: #0b0f13 !important;
}
.text-neutral {
    color: #fff !important;
}
a.text-neutral:focus,
a.text-neutral:hover {
    color: #d9d9d9 !important;
}
.text-white {
    color: #fff !important;
}
a.text-white:focus,
a.text-white:hover {
    color: #d9d9d9 !important;
}
.text-body,
.text-muted {
    color: #8492a6 !important;
}
.text-black-50 {
    color: rgba(31, 45, 61, 0.5) !important;
}
.text-white-50 {
    color: hsla(0, 0%, 100%, 0.5) !important;
}
.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}
.text-decoration-none {
    text-decoration: none !important;
}
.text-break {
    word-break: break-word !important;
    overflow-wrap: break-word !important;
}
.text-reset {
    color: inherit !important;
}
.visible {
    visibility: visible !important;
}
.invisible {
    visibility: hidden !important;
}
@media print {
    *,
    :after,
    :before {
        text-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }
    a:not(.btn) {
        text-decoration: underline;
    }
    abbr[title]:after {
        content: " (" attr(title) ")";
    }
    pre {
        white-space: pre-wrap !important;
    }
    blockquote,
    pre {
        border: 1px solid #d3dce6;
        page-break-inside: avoid;
    }
    thead {
        display: table-header-group;
    }
    img,
    tr {
        page-break-inside: avoid;
    }
    h2,
    h3,
    p {
        orphans: 3;
        widows: 3;
    }
    h2,
    h3 {
        page-break-after: avoid;
    }
    @page {
        size: a3;
    }
    .container,
    body {
        min-width: 992px !important;
    }
    .navbar {
        display: none;
    }
    .badge {
        border: 1px solid #1f2d3d;
    }
    .table {
        border-collapse: collapse !important;
    }
    .table td,
    .table th {
        background-color: #fff !important;
    }
    .table-bordered td,
    .table-bordered th {
        border: 1px solid #e5e9f2 !important;
    }
    .table-dark {
        color: inherit;
    }
    .table-dark tbody + tbody,
    .table-dark td,
    .table-dark th,
    .table-dark thead th {
        border-color: #eff2f7;
    }
    .table .thead-dark th {
        color: inherit;
        border-color: #eff2f7;
    }
}
iframe {
    border: 0;
}
figcaption,
figure,
main {
    display: block;
    margin: 0;
}
figure {
    max-width: 100%;
    min-height: 1px;
}
main {
    position: relative;
}
button:focus {
    outline: none;
}
svg {
    vertical-align: middle;
    overflow: hidden;
}
@media (-ms-high-contrast: none), screen and (-ms-high-contrast: active) {
    img[src$=".svg"] {
        width: 100%;
    }
}
:root {
    --primary-dark: #5800cc;
    --primary-light: #8b33ff;
    --secondary-dark: #cdd6e6;
    --secondary-light: #fff;
    --success-dark: #2a8c62;
    --success-light: #51cb97;
    --info-dark: #008da6;
    --info-light: #0ddaff;
    --warning-dark: #cc8900;
    --warning-light: #ffbc33;
    --danger-dark: #fc2e00;
    --danger-light: #ff8063;
    --light-dark: #cdd6e6;
    --light-light: #fff;
    --dark-dark: #141b24;
    --dark-light: #3a4d64;
    --neutral-dark: #e6e6e6;
    --neutral-light: #fff;
    --white-dark: #e6e6e6;
    --white-light: #fff;
}
[data-animate-hover] .animate-this {
    position: relative;
    top: 0;
    -webkit-transform: translateY(0);
    transform: translateY(0);
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    [data-animate-hover] .animate-this {
        -webkit-transition: none;
        transition: none;
    }
}
[data-animate-hover="1"]:hover .animate-this {
    -webkit-transform: translateY(-1rem);
    transform: translateY(-1rem);
}
[data-animate-hover="1"]:hover .animate-this,
[data-animate-hover="2"]:hover .animate-this {
    -webkit-box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
    box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
}
[data-animate-hover="2"]:hover .animate-this {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    z-index: 10;
}
[data-animate-items] .animate-item,
[data-animate-items] .animate-item--visible {
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    [data-animate-items] .animate-item,
    [data-animate-items] .animate-item--visible {
        -webkit-transition: none;
        transition: none;
    }
}
[data-animate-items] .animate-item {
    display: none;
    opacity: 0;
    -webkit-animation: hide_item 0.2s ease forwards;
    animation: hide_item 0.2s ease forwards;
    -webkit-animation-delay: 0.5s;
    animation-delay: 0.5s;
}
[data-animate-items]:hover .animate-item {
    display: block;
    -webkit-animation: show_item 0.2s ease forwards;
    animation: show_item 0.2s ease forwards;
    -webkit-animation-delay: 0.5s;
    animation-delay: 0.5s;
}
@-webkit-keyframes text_slide {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    to {
        -webkit-transform: translateX(300px);
        transform: translateX(300px);
    }
}
@keyframes text_slide {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    to {
        -webkit-transform: translateX(300px);
        transform: translateX(300px);
    }
}
@-webkit-keyframes show_item {
    0% {
        opacity: 0;
        -webkit-transform: translateY(300px);
        transform: translateY(300px);
    }
    to {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}
@keyframes show_item {
    0% {
        opacity: 0;
        -webkit-transform: translateY(300px);
        transform: translateY(300px);
    }
    to {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}
@-webkit-keyframes hide_item {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    to {
        opacity: 0;
        -webkit-transform: translateY(300px);
        transform: translateY(300px);
    }
}
@keyframes hide_item {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    to {
        opacity: 0;
        -webkit-transform: translateY(300px);
        transform: translateY(300px);
    }
}
.hover-blurable {
    position: relative;
}
.hover-blurable .blurable-item {
    -webkit-transition: 1s cubic-bezier(0.19, 1, 0.22, 1);
    transition: 1s cubic-bezier(0.19, 1, 0.22, 1);
    -webkit-filter: blur(0);
    filter: blur(0);
    opacity: 1;
}
.hover-blurable .blurable-hidden {
    position: absolute;
    top: calc(50% + 7px);
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    opacity: 0;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .hover-blurable .blurable-hidden {
        -webkit-transition: none;
        transition: none;
    }
}
.hover-blurable:hover .blurable-item {
    opacity: 0.8;
    -webkit-filter: blur(10px);
    filter: blur(10px);
    -webkit-transform: scale(0.95);
    transform: scale(0.95);
}
.hover-blurable:hover .blurable-hidden {
    opacity: 1;
    top: 50%;
}
.bg-primary-light {
    background-color: #8b33ff !important;
}
a.bg-primary-light:focus,
a.bg-primary-light:hover,
button.bg-primary-light:focus,
button.bg-primary-light:hover {
    background-color: {{ $settings->website_theme }} !important;
}
.bg-primary-dark {
    background-color: #5800cc !important;
}
a.bg-primary-dark:focus,
a.bg-primary-dark:hover,
button.bg-primary-dark:focus,
button.bg-primary-dark:hover {
    background-color: #420099 !important;
}
.bg-secondary-light {
    background-color: #fff !important;
}
a.bg-secondary-light:focus,
a.bg-secondary-light:hover,
button.bg-secondary-light:focus,
button.bg-secondary-light:hover {
    background-color: #dde3ee !important;
}
.bg-secondary-dark {
    background-color: #cdd6e6 !important;
}
a.bg-secondary-dark:focus,
a.bg-secondary-dark:hover,
button.bg-secondary-dark:focus,
button.bg-secondary-dark:hover {
    background-color: #abbbd5 !important;
}
.bg-success-light {
    background-color: #51cb97 !important;
}
a.bg-success-light:focus,
a.bg-success-light:hover,
button.bg-success-light:focus,
button.bg-success-light:hover {
    background-color: #36b37e !important;
}
.bg-success-dark {
    background-color: #2a8c62 !important;
}
a.bg-success-dark:focus,
a.bg-success-dark:hover,
button.bg-success-dark:focus,
button.bg-success-dark:hover {
    background-color: #1e6547 !important;
}
.bg-info-light {
    background-color: #0ddaff !important;
}
a.bg-info-light:focus,
a.bg-info-light:hover,
button.bg-info-light:focus,
button.bg-info-light:hover {
    background-color: #00b8d9 !important;
}
.bg-info-dark {
    background-color: #008da6 !important;
}
a.bg-info-dark:focus,
a.bg-info-dark:hover,
button.bg-info-dark:focus,
button.bg-info-dark:hover {
    background-color: #006273 !important;
}
.bg-warning-light {
    background-color: #ffbc33 !important;
}
a.bg-warning-light:focus,
a.bg-warning-light:hover,
button.bg-warning-light:focus,
button.bg-warning-light:hover {
    background-color: #ffab00 !important;
}
.bg-warning-dark {
    background-color: #cc8900 !important;
}
a.bg-warning-dark:focus,
a.bg-warning-dark:hover,
button.bg-warning-dark:focus,
button.bg-warning-dark:hover {
    background-color: #996700 !important;
}
.bg-danger-light {
    background-color: #ff8063 !important;
}
a.bg-danger-light:focus,
a.bg-danger-light:hover,
button.bg-danger-light:focus,
button.bg-danger-light:hover {
    background-color: #ff5630 !important;
}
.bg-danger-dark {
    background-color: #fc2e00 !important;
}
a.bg-danger-dark:focus,
a.bg-danger-dark:hover,
button.bg-danger-dark:focus,
button.bg-danger-dark:hover {
    background-color: #c92500 !important;
}
.bg-light-light {
    background-color: #fff !important;
}
a.bg-light-light:focus,
a.bg-light-light:hover,
button.bg-light-light:focus,
button.bg-light-light:hover {
    background-color: #dde3ee !important;
}
.bg-light-dark {
    background-color: #cdd6e6 !important;
}
a.bg-light-dark:focus,
a.bg-light-dark:hover,
button.bg-light-dark:focus,
button.bg-light-dark:hover {
    background-color: #abbbd5 !important;
}
.bg-dark-light {
    background-color: #3a4d64 !important;
}
a.bg-dark-light:focus,
a.bg-dark-light:hover,
button.bg-dark-light:focus,
button.bg-dark-light:hover {
    background-color: #273444 !important;
}
.bg-dark-dark {
    background-color: #141b24 !important;
}
a.bg-dark-dark:focus,
a.bg-dark-dark:hover,
button.bg-dark-dark:focus,
button.bg-dark-dark:hover {
    background-color: #020203 !important;
}
.bg-neutral-light {
    background-color: #fff !important;
}
.bg-neutral-dark,
a.bg-neutral-light:focus,
a.bg-neutral-light:hover,
button.bg-neutral-light:focus,
button.bg-neutral-light:hover {
    background-color: #e6e6e6 !important;
}
a.bg-neutral-dark:focus,
a.bg-neutral-dark:hover,
button.bg-neutral-dark:focus,
button.bg-neutral-dark:hover {
    background-color: #ccc !important;
}
.bg-white-light {
    background-color: #fff !important;
}
.bg-white-dark,
a.bg-white-light:focus,
a.bg-white-light:hover,
button.bg-white-light:focus,
button.bg-white-light:hover {
    background-color: #e6e6e6 !important;
}
a.bg-white-dark:focus,
a.bg-white-dark:hover,
button.bg-white-dark:focus,
button.bg-white-dark:hover {
    background-color: #ccc !important;
}
.bg-gradient-primary {
    background: linear-gradient(50deg, {{ $settings->website_theme }}, #b0f) !important;
}
.bg-gradient-secondary {
    background: linear-gradient(50deg, #eff2f7, #eff0f7) !important;
}
.bg-gradient-success {
    background: linear-gradient(50deg, #36b37e, #36b3a4) !important;
}
.bg-gradient-info {
    background: linear-gradient(50deg, #00b8d9, #0077d9) !important;
}
.bg-gradient-warning {
    background: linear-gradient(50deg, #ffab00, #fff800) !important;
}
.bg-gradient-danger {
    background: linear-gradient(50deg, #ff5630, #ff9430) !important;
}
.bg-gradient-light {
    background: linear-gradient(50deg, #eff2f7, #eff0f7) !important;
}
.bg-gradient-dark {
    background: linear-gradient(50deg, #273444, #272b44) !important;
}
.bg-gradient-neutral,
.bg-gradient-white {
    background: linear-gradient(50deg, #fff, #fff) !important;
}
.bg-translucent-primary {
    background-color: rgba(95, 0, 219, 0.6) !important;
}
a.bg-translucent-primary:focus,
a.bg-translucent-primary:hover,
button.bg-translucent-primary:focus,
button.bg-translucent-primary:hover {
    background-color: rgba(84, 0, 194, 0.6) !important;
}
.bg-translucent-secondary {
    background-color: rgba(215, 223, 235, 0.6) !important;
}
a.bg-translucent-secondary:focus,
a.bg-translucent-secondary:hover,
button.bg-translucent-secondary:focus,
button.bg-translucent-secondary:hover {
    background-color: rgba(198, 209, 227, 0.6) !important;
}
.bg-translucent-success {
    background-color: rgba(46, 152, 107, 0.6) !important;
}
a.bg-translucent-success:focus,
a.bg-translucent-success:hover,
button.bg-translucent-success:focus,
button.bg-translucent-success:hover {
    background-color: rgba(40, 132, 93, 0.6) !important;
}
.bg-translucent-info {
    background-color: rgba(0, 154, 181, 0.6) !important;
}
a.bg-translucent-info:focus,
a.bg-translucent-info:hover,
button.bg-translucent-info:focus,
button.bg-translucent-info:hover {
    background-color: rgba(0, 132, 156, 0.6) !important;
}
.bg-translucent-warning {
    background-color: rgba(219, 147, 0, 0.6) !important;
}
a.bg-translucent-warning:focus,
a.bg-translucent-warning:hover,
button.bg-translucent-warning:focus,
button.bg-translucent-warning:hover {
    background-color: rgba(194, 130, 0, 0.6) !important;
}
.bg-translucent-danger {
    background-color: rgba(255, 57, 12, 0.6) !important;
}
a.bg-translucent-danger:focus,
a.bg-translucent-danger:hover,
button.bg-translucent-danger:focus,
button.bg-translucent-danger:hover {
    background-color: rgba(242, 44, 0, 0.6) !important;
}
.bg-translucent-light {
    background-color: rgba(215, 223, 235, 0.6) !important;
}
a.bg-translucent-light:focus,
a.bg-translucent-light:hover,
button.bg-translucent-light:focus,
button.bg-translucent-light:hover {
    background-color: rgba(198, 209, 227, 0.6) !important;
}
.bg-translucent-dark {
    background-color: rgba(26, 35, 45, 0.6) !important;
}
a.bg-translucent-dark:focus,
a.bg-translucent-dark:hover,
button.bg-translucent-dark:focus,
button.bg-translucent-dark:hover {
    background-color: rgba(17, 22, 29, 0.6) !important;
}
.bg-translucent-neutral {
    background-color: hsla(0, 0%, 92.9%, 0.6) !important;
}
a.bg-translucent-neutral:focus,
a.bg-translucent-neutral:hover,
button.bg-translucent-neutral:focus,
button.bg-translucent-neutral:hover {
    background-color: hsla(0, 0%, 87.8%, 0.6) !important;
}
.bg-translucent-white {
    background-color: hsla(0, 0%, 92.9%, 0.6) !important;
}
a.bg-translucent-white:focus,
a.bg-translucent-white:hover,
button.bg-translucent-white:focus,
button.bg-translucent-white:hover {
    background-color: hsla(0, 0%, 87.8%, 0.6) !important;
}
.bg-soft-primary {
    background-color: #e2ccff;
}
.bg-soft-secondary {
    background-color: #fcfcfd;
}
.bg-soft-success {
    background-color: #d7f0e5;
}
.bg-soft-info {
    background-color: #ccf1f7;
}
.bg-soft-warning {
    background-color: #fec;
}
.bg-soft-danger {
    background-color: #ffddd6;
}
.bg-soft-light {
    background-color: #fcfcfd;
}
.bg-soft-dark {
    background-color: #d4d6da;
}
.bg-soft-neutral,
.bg-soft-white {
    background-color: #fff;
}
.bg-section-primary {
    background-color: {{ $settings->website_theme }} !important;
}
.bg-section-secondary {
    background-color: #fafbfe !important;
}
.bg-section-light {
    background-color: #e0e6ed !important;
}
.bg-section-dark {
    background-color: #1a232d !important;
}
.bg-brand-facebook {
    background-color: #3b5999 !important;
}
a.bg-brand-facebook:focus,
a.bg-brand-facebook:hover,
button.bg-brand-facebook:focus,
button.bg-brand-facebook:hover {
    background-color: #2d4474 !important;
}
.bg-brand-twitter {
    background-color: #1da1f2 !important;
}
a.bg-brand-twitter:focus,
a.bg-brand-twitter:hover,
button.bg-brand-twitter:focus,
button.bg-brand-twitter:hover {
    background-color: #0c85d0 !important;
}
.bg-brand-google-plus {
    background-color: #dd4b39 !important;
}
a.bg-brand-google-plus:focus,
a.bg-brand-google-plus:hover,
button.bg-brand-google-plus:focus,
button.bg-brand-google-plus:hover {
    background-color: #c23321 !important;
}
.bg-brand-instagram {
    background-color: #e4405f !important;
}
a.bg-brand-instagram:focus,
a.bg-brand-instagram:hover,
button.bg-brand-instagram:focus,
button.bg-brand-instagram:hover {
    background-color: #d31e40 !important;
}
.bg-brand-pinterest {
    background-color: #bd081c !important;
}
a.bg-brand-pinterest:focus,
a.bg-brand-pinterest:hover,
button.bg-brand-pinterest:focus,
button.bg-brand-pinterest:hover {
    background-color: #8c0615 !important;
}
.bg-brand-youtube {
    background-color: #cd201f !important;
}
a.bg-brand-youtube:focus,
a.bg-brand-youtube:hover,
button.bg-brand-youtube:focus,
button.bg-brand-youtube:hover {
    background-color: #a11918 !important;
}
.bg-brand-slack {
    background-color: #3aaf85 !important;
}
a.bg-brand-slack:focus,
a.bg-brand-slack:hover,
button.bg-brand-slack:focus,
button.bg-brand-slack:hover {
    background-color: #2d8968 !important;
}
.bg-brand-dribbble {
    background-color: #ea4c89 !important;
}
a.bg-brand-dribbble:focus,
a.bg-brand-dribbble:hover,
button.bg-brand-dribbble:focus,
button.bg-brand-dribbble:hover {
    background-color: #e51e6b !important;
}
.bg-brand-github {
    background-color: #222 !important;
}
a.bg-brand-github:focus,
a.bg-brand-github:hover,
button.bg-brand-github:focus,
button.bg-brand-github:hover {
    background-color: #090909 !important;
}
.bg-brand-vimeo {
    background-color: #04a0f0 !important;
}
a.bg-brand-vimeo:focus,
a.bg-brand-vimeo:hover,
button.bg-brand-vimeo:focus,
button.bg-brand-vimeo:hover {
    background-color: #037fbe !important;
}
.bg-gray-100 {
    background-color: #fafbfe !important;
}
a.bg-gray-100:focus,
a.bg-gray-100:hover,
button.bg-gray-100:focus,
button.bg-gray-100:hover {
    background-color: #d0d9f6 !important;
}
.bg-gray-200 {
    background-color: #eff2f7 !important;
}
a.bg-gray-200:focus,
a.bg-gray-200:hover,
button.bg-gray-200:focus,
button.bg-gray-200:hover {
    background-color: #cdd6e6 !important;
}
.bg-gray-300 {
    background-color: #e5e9f2 !important;
}
a.bg-gray-300:focus,
a.bg-gray-300:hover,
button.bg-gray-300:focus,
button.bg-gray-300:hover {
    background-color: #c3cce1 !important;
}
.bg-gray-400 {
    background-color: #e0e6ed !important;
}
a.bg-gray-400:focus,
a.bg-gray-400:hover,
button.bg-gray-400:focus,
button.bg-gray-400:hover {
    background-color: #c0ccda !important;
}
.bg-gray-500 {
    background-color: #d3dce6 !important;
}
a.bg-gray-500:focus,
a.bg-gray-500:hover,
button.bg-gray-500:focus,
button.bg-gray-500:hover {
    background-color: #b2c2d4 !important;
}
.bg-gray-600 {
    background-color: #c0ccda !important;
}
a.bg-gray-600:focus,
a.bg-gray-600:hover,
button.bg-gray-600:focus,
button.bg-gray-600:hover {
    background-color: #a0b2c7 !important;
}
.bg-gray-700 {
    background-color: #8492a6 !important;
}
a.bg-gray-700:focus,
a.bg-gray-700:hover,
button.bg-gray-700:focus,
button.bg-gray-700:hover {
    background-color: #68788f !important;
}
.bg-gray-800 {
    background-color: #3c4858 !important;
}
a.bg-gray-800:focus,
a.bg-gray-800:hover,
button.bg-gray-800:focus,
button.bg-gray-800:hover {
    background-color: #272f3a !important;
}
.bg-gray-900 {
    background-color: #273444 !important;
}
a.bg-gray-900:focus,
a.bg-gray-900:hover,
button.bg-gray-900:focus,
button.bg-gray-900:hover {
    background-color: #141b24 !important;
}
.bg-black {
    background-color: #1f2d3d !important;
}
a.bg-black:focus,
a.bg-black:hover,
button.bg-black:focus,
button.bg-black:hover {
    background-color: #0e141b !important;
}
.fill-blue {
    fill: #2684ff !important;
}
.stroke-blue {
    stroke: #2684ff !important;
}
.fill-indigo {
    fill: {{ $settings->website_theme }} !important;
}
.stroke-indigo {
    stroke: {{ $settings->website_theme }} !important;
}
.fill-purple {
    fill: #510fa8 !important;
}
.stroke-purple {
    stroke: #510fa8 !important;
}
.fill-pink {
    fill: #f074ad !important;
}
.stroke-pink {
    stroke: #f074ad !important;
}
.fill-red {
    fill: #ff5630 !important;
}
.stroke-red {
    stroke: #ff5630 !important;
}
.fill-orange {
    fill: #ffab00 !important;
}
.stroke-orange {
    stroke: #ffab00 !important;
}
.fill-yellow {
    fill: #fc0 !important;
}
.stroke-yellow {
    stroke: #fc0 !important;
}
.fill-green {
    fill: #36b37e !important;
}
.stroke-green {
    stroke: #36b37e !important;
}
.fill-teal {
    fill: #00b8d9 !important;
}
.stroke-teal {
    stroke: #00b8d9 !important;
}
.fill-cyan {
    fill: #4bd6e5 !important;
}
.stroke-cyan {
    stroke: #4bd6e5 !important;
}
.fill-gray {
    fill: #c0ccda !important;
}
.stroke-gray {
    stroke: #c0ccda !important;
}
.fill-gray-dark {
    fill: #3c4858 !important;
}
.stroke-gray-dark {
    stroke: #3c4858 !important;
}
.fill-primary {
    fill: {{ $settings->website_theme }} !important;
}
.stroke-primary {
    stroke: {{ $settings->website_theme }} !important;
}
.fill-secondary {
    fill: #eff2f7 !important;
}
.stroke-secondary {
    stroke: #eff2f7 !important;
}
.fill-success {
    fill: #36b37e !important;
}
.stroke-success {
    stroke: #36b37e !important;
}
.fill-info {
    fill: #00b8d9 !important;
}
.stroke-info {
    stroke: #00b8d9 !important;
}
.fill-warning {
    fill: #ffab00 !important;
}
.stroke-warning {
    stroke: #ffab00 !important;
}
.fill-danger {
    fill: #ff5630 !important;
}
.stroke-danger {
    stroke: #ff5630 !important;
}
.fill-light {
    fill: #eff2f7 !important;
}
.stroke-light {
    stroke: #eff2f7 !important;
}
.fill-dark {
    fill: #273444 !important;
}
.stroke-dark {
    stroke: #273444 !important;
}
.fill-neutral {
    fill: #fff !important;
}
.stroke-neutral {
    stroke: #fff !important;
}
.fill-white {
    fill: #fff !important;
}
.stroke-white {
    stroke: #fff !important;
}
.fill-primary-100 {
    fill: #fff !important;
}
.fill-primary-200 {
    fill: #e2ccff !important;
}
.fill-primary-300 {
    fill: #c599ff !important;
}
.fill-primary-400 {
    fill: #a866ff !important;
}
.fill-primary-500 {
    fill: #8b33ff !important;
}
.fill-primary-600 {
    fill: #7d1aff !important;
}
.stroke-primary-100 {
    stroke: #fff !important;
}
.stroke-primary-200 {
    stroke: #e2ccff !important;
}
.stroke-primary-300 {
    stroke: #c599ff !important;
}
.stroke-primary-400 {
    stroke: #a866ff !important;
}
.stroke-primary-500 {
    stroke: #8b33ff !important;
}
.stroke-primary-600 {
    stroke: #7d1aff !important;
}
.fill-section-primary {
    fill: #f8f8fb !important;
}
.stroke-section-primary {
    stroke: #f8f8fb !important;
}
.fill-section-secondary {
    fill: #fafbfe !important;
}
.stroke-section-secondary {
    stroke: #fafbfe !important;
}
.fill-section-light {
    fill: #e0e6ed !important;
}
.stroke-section-light {
    stroke: #e0e6ed !important;
}
.fill-section-dark {
    fill: #1a232d !important;
}
.stroke-section-dark {
    stroke: #1a232d !important;
}
.bg-cover {
    position: relative;
    background-repeat: no-repeat;
}
.bg-absolute-cover {
    background-repeat: no-repeat;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 100;
}
.bg-absolute-cover svg {
    height: 1000px;
    pointer-events: none;
}
@media (max-width: 1199.98px) {
    .bg-lg-cover {
        background-image: none !important;
    }
}
@media (max-width: 991.98px) {
    .bg-md-cover {
        background-image: none !important;
    }
}
.bg-size--cover {
    background-size: cover;
}
.bg-size--contain {
    background-size: contain;
}
.bg-text {
    color: hsla(0, 0%, 100%, 0.2);
    position: absolute;
    top: 50%;
    left: 0;
    white-space: nowrap;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    text-transform: uppercase;
    font-size: 40rem;
    font-weight: 700;
}
.bg-inner--text {
    height: 1em;
    line-height: 1em;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
    -webkit-transition: 2s 0s;
    transition: 2s 0s;
    display: block;
    -webkit-animation: text_slide 40s linear infinite;
    animation: text_slide 40s linear infinite;
    width: auto;
    max-width: none;
    white-space: nowrap;
    display: inline-block;
}
.bg-noise {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAAUVBMVEWFhYWDg4N3d3dtbW17e3t1dXWBgYGHh4d5eXlzc3OLi4ubm5uVlZWPj4+NjY19fX2JiYl/f39ra2uRkZGZmZlpaWmXl5dvb29xcXGTk5NnZ2c8TV1mAAAAG3RSTlNAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEAvEOwtAAAFVklEQVR4XpWWB67c2BUFb3g557T/hRo9/WUMZHlgr4Bg8Z4qQgQJlHI4A8SzFVrapvmTF9O7dmYRFZ60YiBhJRCgh1FYhiLAmdvX0CzTOpNE77ME0Zty/nWWzchDtiqrmQDeuv3powQ5ta2eN0FY0InkqDD73lT9c9lEzwUNqgFHs9VQce3TVClFCQrSTfOiYkVJQBmpbq2L6iZavPnAPcoU0dSw0SUTqz/GtrGuXfbyyBniKykOWQWGqwwMA7QiYAxi+IlPdqo+hYHnUt5ZPfnsHJyNiDtnpJyayNBkF6cWoYGAMY92U2hXHF/C1M8uP/ZtYdiuj26UdAdQQSXQErwSOMzt/XWRWAz5GuSBIkwG1H3FabJ2OsUOUhGC6tK4EMtJO0ttC6IBD3kM0ve0tJwMdSfjZo+EEISaeTr9P3wYrGjXqyC1krcKdhMpxEnt5JetoulscpyzhXN5FRpuPHvbeQaKxFAEB6EN+cYN6xD7RYGpXpNndMmZgM5Dcs3YSNFDHUo2LGfZuukSWyUYirJAdYbF3MfqEKmjM+I2EfhA94iG3L7uKrR+GdWD73ydlIB+6hgref1QTlmgmbM3/LeX5GI1Ux1RWpgxpLuZ2+I+IjzZ8wqE4nilvQdkUdfhzI5QDWy+kw5Wgg2pGpeEVeCCA7b85BO3F9DzxB3cdqvBzWcmzbyMiqhzuYqtHRVG2y4x+KOlnyqla8AoWWpuBoYRxzXrfKuILl6SfiWCbjxoZJUaCBj1CjH7GIaDbc9kqBY3W/Rgjda1iqQcOJu2WW+76pZC9QG7M00dffe9hNnseupFL53r8F7YHSwJWUKP2q+k7RdsxyOB11n0xtOvnW4irMMFNV4H0uqwS5ExsmP9AxbDTc9JwgneAT5vTiUSm1E7BSflSt3bfa1tv8Di3R8n3Af7MNWzs49hmauE2wP+ttrq+AsWpFG2awvsuOqbipWHgtuvuaAE+A1Z/7gC9hesnr+7wqCwG8c5yAg3AL1fm8T9AZtp/bbJGwl1pNrE7RuOX7PeMRUERVaPpEs+yqeoSmuOlokqw49pgomjLeh7icHNlG19yjs6XXOMedYm5xH2YxpV2tc0Ro2jJfxC50ApuxGob7lMsxfTbeUv07TyYxpeLucEH1gNd4IKH2LAg5TdVhlCafZvpskfncCfx8pOhJzd76bJWeYFnFciwcYfubRc12Ip/ppIhA1/mSZ/RxjFDrJC5xifFjJpY2Xl5zXdguFqYyTR1zSp1Y9p+tktDYYSNflcxI0iyO4TPBdlRcpeqjK/piF5bklq77VSEaA+z8qmJTFzIWiitbnzR794USKBUaT0NTEsVjZqLaFVqJoPN9ODG70IPbfBHKK+/q/AWR0tJzYHRULOa4MP+W/HfGadZUbfw177G7j/OGbIs8TahLyynl4X4RinF793Oz+BU0saXtUHrVBFT/DnA3ctNPoGbs4hRIjTok8i+algT1lTHi4SxFvONKNrgQFAq2/gFnWMXgwffgYMJpiKYkmW3tTg3ZQ9Jq+f8XN+A5eeUKHWvJWJ2sgJ1Sop+wwhqFVijqWaJhwtD8MNlSBeWNNWTa5Z5kPZw5+LbVT99wqTdx29lMUH4OIG/D86ruKEauBjvH5xy6um/Sfj7ei6UUVk4AIl3MyD4MSSTOFgSwsH/QJWaQ5as7ZcmgBZkzjjU1UrQ74ci1gWBCSGHtuV1H2mhSnO3Wp/3fEV5a+4wz//6qy8JxjZsmxxy5+4w9CDNJY09T072iKG0EnOS0arEYgXqYnXcYHwjTtUNAcMelOd4xpkoqiTYICWFq0JSiPfPDQdnt+4/wuqcXY47QILbgAAAABJRU5ErkJggg==);
}
@media (max-width: 991.98px) {
    .bg-img-holder {
        background-image: none !important;
    }
    .bg-img-holder img {
        max-width: 100%;
    }
}
@media (min-width: 992px) {
    .bg-img-holder {
        position: absolute;
        height: 100%;
        min-height: 20rem;
        background-repeat: no-repeat;
        z-index: -1;
    }
    .bg-img-holder img {
        display: none;
    }
}
.img-bg:after {
    position: absolute;
    content: "";
    background: none no-repeat 50%;
    background-image: none;
    background-size: auto auto;
    background-size: contain;
    width: 783px;
    height: 725px;
    left: 31px;
    top: -168px;
    z-index: 1;
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='783' height='726' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M606.14 725.179c144.64-.87 225.447-587.194 144.64-694.046-73.915-97.74-579.852 50.733-716.756 222.443-12.763 16.009-22.32 32.22-28.019 48.451-66.83 190.337 442.822 424.098 600.136 423.152z' fill='%23EFF2F7' fill-rule='evenodd'/%3E%3C/svg%3E");
}
.img-bg img {
    position: relative;
    z-index: 2;
}
.border-sm {
    border-width: 2px !important;
}
.border-md {
    border-width: 3px !important;
}
.border-dashed {
    border-style: dashed !important;
}
.border-dotted {
    border-style: dotted !important;
}
.border-groove {
    border-style: groove !important;
}
.rounded-left-pill {
    border-top-left-radius: 50rem !important;
    border-bottom-left-radius: 50rem !important;
}
.rounded-right-pill {
    border-top-right-radius: 50rem !important;
    border-bottom-right-radius: 50rem !important;
}
.delimiter-bottom,
.delimiter-top {
    position: relative;
    border: 0;
}
.delimiter-top:before {
    top: 0;
}
.delimiter-bottom:after,
.delimiter-top:before {
    content: "";
    display: block;
    width: 80%;
    position: absolute;
    left: 50%;
    margin-left: -40%;
    height: 1px;
    background: radial-gradient(
        ellipse at center,
        #dee4ef 0,
        hsla(0, 0%, 100%, 0) 75%
    );
}
.delimiter-bottom:after {
    bottom: 0;
}
.delimiter-dark:after,
.delimiter-dark:before {
    background: radial-gradient(
        ellipse at center,
        hsla(0, 0%, 100%, 0.2) 0,
        rgba(31, 45, 61, 0) 75%
    );
}
.floating {
    -webkit-animation: floating 3s ease infinite;
    animation: floating 3s ease infinite;
    will-change: transform;
}
.floating:hover {
    -webkit-animation-play-state: paused;
    animation-play-state: paused;
}
.floating-lg {
    -webkit-animation: floating-lg 3s ease infinite;
    animation: floating-lg 3s ease infinite;
}
.floating-sm {
    -webkit-animation: floating-sm 3s ease infinite;
    animation: floating-sm 3s ease infinite;
}
@-webkit-keyframes floating-lg {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    50% {
        -webkit-transform: translateY(15px);
        transform: translateY(15px);
    }
    to {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}
@keyframes floating-lg {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    50% {
        -webkit-transform: translateY(15px);
        transform: translateY(15px);
    }
    to {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}
@-webkit-keyframes floating {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    50% {
        -webkit-transform: translateY(10px);
        transform: translateY(10px);
    }
    to {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}
@keyframes floating {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    50% {
        -webkit-transform: translateY(10px);
        transform: translateY(10px);
    }
    to {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}
@-webkit-keyframes floating-sm {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    50% {
        -webkit-transform: translateY(5px);
        transform: translateY(5px);
    }
    to {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}
.floatfix:after,
.floatfix:before {
    content: "";
    display: table;
}
.floatfix:after {
    clear: both;
}
.overflow-visible {
    overflow: visible !important;
}
.overflow-hidden {
    overflow: hidden !important;
}
[class*="alpha"] {
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
[class*="faded"] {
    position: relative;
}
[class*="faded"]:after {
    content: "";
    position: absolute;
    width: 100%;
    height: 30%;
}
.faded-top:after {
    top: 0;
    background: -webkit-gradient(
        linear,
        left bottom,
        left top,
        from(transparent),
        to(rgba(0, 0, 0, 0.6))
    );
    background: linear-gradient(0deg, transparent 0, rgba(0, 0, 0, 0.6));
}
.faded-bottom:after,
.faded-top:after {
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr= "#00000000",endColorstr="#a6000000",GradientType=0);
}
.faded-bottom:after {
    bottom: 0;
    background: -webkit-gradient(
        linear,
        left top,
        left bottom,
        from(transparent),
        to(rgba(0, 0, 0, 0.6))
    );
    background: linear-gradient(180deg, transparent 0, rgba(0, 0, 0, 0.6));
}
[class*="hover-"] {
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    [class*="hover-"] {
        -webkit-transition: none;
        transition: none;
    }
}
.img-center {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.img-grayscale {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
}
.img-saturate {
    -webkit-filter: saturate(150%);
    filter: saturate(150%);
}
.img-back-shape img {
    background: url(../img/svg/backgrounds/bg-circles-1.svg) no-repeat scroll
        50%/100% 100% border-box;
}
.hover-opacity-0:hover,
.opacity-0,
.opacity-container:hover .hover-opacity-0 {
    opacity: 0;
}
.hover-opacity-1:hover,
.opacity-1,
.opacity-container:hover .hover-opacity-1 {
    opacity: 0.1;
}
.hover-opacity-2:hover,
.opacity-2,
.opacity-container:hover .hover-opacity-2 {
    opacity: 0.2;
}
.hover-opacity-3:hover,
.opacity-3,
.opacity-container:hover .hover-opacity-3 {
    opacity: 0.3;
}
.hover-opacity-4:hover,
.opacity-4,
.opacity-container:hover .hover-opacity-4 {
    opacity: 0.4;
}
.hover-opacity-5:hover,
.opacity-5,
.opacity-container:hover .hover-opacity-5 {
    opacity: 0.5;
}
.hover-opacity-6:hover,
.opacity-6,
.opacity-container:hover .hover-opacity-6 {
    opacity: 0.6;
}
.hover-opacity-7:hover,
.opacity-7,
.opacity-container:hover .hover-opacity-7 {
    opacity: 0.7;
}
.hover-opacity-8:hover,
.opacity-8,
.opacity-container:hover .hover-opacity-8 {
    opacity: 0.8;
}
.hover-opacity-9:hover,
.opacity-9,
.opacity-container:hover .hover-opacity-9 {
    opacity: 0.9;
}
.hover-opacity-10:hover,
.opacity-10,
.opacity-container:hover .hover-opacity-10 {
    opacity: 1;
}
.top-0 {
    top: 0;
}
.right-0 {
    right: 0;
}
.bottom-0 {
    bottom: 0;
}
.left-0 {
    left: 0;
}
.top-1 {
    top: 0.25rem;
}
.right-1 {
    right: 0.25rem;
}
.bottom-1 {
    bottom: 0.25rem;
}
.left-1 {
    left: 0.25rem;
}
.top-2 {
    top: 0.5rem;
}
.right-2 {
    right: 0.5rem;
}
.bottom-2 {
    bottom: 0.5rem;
}
.left-2 {
    left: 0.5rem;
}
.top-3 {
    top: 1rem;
}
.right-3 {
    right: 1rem;
}
.bottom-3 {
    bottom: 1rem;
}
.left-3 {
    left: 1rem;
}
.top-4 {
    top: 1.5rem;
}
.right-4 {
    right: 1.5rem;
}
.bottom-4 {
    bottom: 1.5rem;
}
.left-4 {
    left: 1.5rem;
}
.top-5 {
    top: 3rem;
}
.right-5 {
    right: 3rem;
}
.bottom-5 {
    bottom: 3rem;
}
.left-5 {
    left: 3rem;
}
.top-6 {
    top: 4.5rem;
}
.right-6 {
    right: 4.5rem;
}
.bottom-6 {
    bottom: 4.5rem;
}
.left-6 {
    left: 4.5rem;
}
.top-7 {
    top: 6rem;
}
.right-7 {
    right: 6rem;
}
.bottom-7 {
    bottom: 6rem;
}
.left-7 {
    left: 6rem;
}
.top-8 {
    top: 7.5rem;
}
.right-8 {
    right: 7.5rem;
}
.bottom-8 {
    bottom: 7.5rem;
}
.left-8 {
    left: 7.5rem;
}
.top-9 {
    top: 9rem;
}
.right-9 {
    right: 9rem;
}
.bottom-9 {
    bottom: 9rem;
}
.left-9 {
    left: 9rem;
}
.top-10 {
    top: 10.5rem;
}
.right-10 {
    right: 10.5rem;
}
.bottom-10 {
    bottom: 10.5rem;
}
.left-10 {
    left: 10.5rem;
}
.top-n1 {
    top: -0.25rem;
}
.right-n1 {
    right: -0.25rem;
}
.bottom-n1 {
    bottom: -0.25rem;
}
.left-n1 {
    left: -0.25rem;
}
.top-n2 {
    top: -0.5rem;
}
.right-n2 {
    right: -0.5rem;
}
.bottom-n2 {
    bottom: -0.5rem;
}
.left-n2 {
    left: -0.5rem;
}
.top-n3 {
    top: -1rem;
}
.right-n3 {
    right: -1rem;
}
.bottom-n3 {
    bottom: -1rem;
}
.left-n3 {
    left: -1rem;
}
.top-n4 {
    top: -1.5rem;
}
.right-n4 {
    right: -1.5rem;
}
.bottom-n4 {
    bottom: -1.5rem;
}
.left-n4 {
    left: -1.5rem;
}
.top-n5 {
    top: -3rem;
}
.right-n5 {
    right: -3rem;
}
.bottom-n5 {
    bottom: -3rem;
}
.left-n5 {
    left: -3rem;
}
.top-n6 {
    top: -4.5rem;
}
.right-n6 {
    right: -4.5rem;
}
.bottom-n6 {
    bottom: -4.5rem;
}
.left-n6 {
    left: -4.5rem;
}
.top-n7 {
    top: -6rem;
}
.right-n7 {
    right: -6rem;
}
.bottom-n7 {
    bottom: -6rem;
}
.left-n7 {
    left: -6rem;
}
.top-n8 {
    top: -7.5rem;
}
.right-n8 {
    right: -7.5rem;
}
.bottom-n8 {
    bottom: -7.5rem;
}
.left-n8 {
    left: -7.5rem;
}
.top-n9 {
    top: -9rem;
}
.right-n9 {
    right: -9rem;
}
.bottom-n9 {
    bottom: -9rem;
}
.left-n9 {
    left: -9rem;
}
.top-n10 {
    top: -10.5rem;
}
.right-n10 {
    right: -10.5rem;
}
.bottom-n10 {
    bottom: -10.5rem;
}
.left-n10 {
    left: -10.5rem;
}
.center {
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}
.middle {
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
@media (max-width: 991.98px) {
    [data-separator="rounded"][data-separator-orientation="bottom"] {
        border-radius: 0 0 3rem 3rem;
    }
    [data-separator="rounded"][data-separator-orientation="top"] {
        border-radius: 3rem 3rem 0 0;
    }
    [data-separator="rounded-left"][data-separator-orientation="bottom"] {
        border-radius: 0 0 0 3rem;
    }
    [data-separator="rounded-left"][data-separator-orientation="top"] {
        border-radius: 3rem 0 0 0;
    }
    [data-separator="rounded-right"][data-separator-orientation="bottom"] {
        border-radius: 0 0 3rem 0;
    }
    [data-separator="rounded-right"][data-separator-orientation="top"] {
        border-radius: 0 3rem 0 0;
    }
}
@media (min-width: 768px) {
    [data-separator="rounded"][data-separator-orientation="bottom"] {
        border-radius: 0 0 5rem 5rem;
    }
    [data-separator="rounded"][data-separator-orientation="top"] {
        border-radius: 5rem 5rem 0 0;
    }
    [data-separator="rounded-left"][data-separator-orientation="bottom"] {
        border-radius: 0 0 0 5rem;
    }
    [data-separator="rounded-left"][data-separator-orientation="top"] {
        border-radius: 5rem 0 0 0;
    }
    [data-separator="rounded-right"][data-separator-orientation="bottom"] {
        border-radius: 0 0 5rem 0;
    }
    [data-separator="rounded-right"][data-separator-orientation="top"] {
        border-radius: 0 5rem 0 0;
    }
}
[data-separator="rounded-continuous"] {
    position: relative;
    margin-bottom: 5rem;
    border-radius: 0 0 0 5rem;
}
[data-separator="rounded-continuous"]:after,
[data-separator="rounded-continuous"]:before {
    content: "";
    position: absolute;
    pointer-events: none;
    left: 0;
    height: 5rem;
}
[data-separator="rounded-continuous"]:before {
    top: 100%;
    width: 100%;
    border-radius: 0 5rem 0 0;
}
[data-separator="rounded-continuous"]:after {
    bottom: 0;
    z-index: -1;
    width: 50%;
}
[data-separator="rounded-continuous"] + section {
    padding-bottom: 5rem;
}
[data-separator-bg="primary"]:after,
[data-separator-bg="primary"]:before {
    background: {{ $settings->website_theme }};
}
[data-separator-bg="secondary"]:after,
[data-separator-bg="secondary"]:before {
    background: #fafbfe;
}
[data-separator-bg="light"]:after,
[data-separator-bg="light"]:before {
    background: #e0e6ed;
}
[data-separator-bg="dark"]:after,
[data-separator-bg="dark"]:before {
    background: #1a232d;
}
.shape-container {
    position: absolute;
    left: 0;
    right: 0;
    width: 100%;
    height: 150px;
    z-index: 2;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    overflow: hidden;
}
.shape-container svg {
    fill: #f8f8fb;
    pointer-events: none;
    vertical-align: baseline;
}
.shape-container[data-shape-position="top"] {
    top: 0;
    bottom: auto;
    margin-top: -1px;
}
.shape-container[data-shape-position="bottom"] {
    top: auto;
    bottom: 0;
    margin-bottom: -1px;
}
.shape-container[data-shape-orientation="inverse"] {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}
.shape-position-top {
    top: 0;
    margin-top: -1px;
}
.shape-position-bottom {
    bottom: 0;
    margin-bottom: -1px;
}
.shape-orientation-inverse {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}
@media screen and (-ms-high-contrast: active),
    screen and (-ms-high-contrast: none) {
    .ie-shape-wave-1 {
        height: 504px;
    }
    .ie-shape-wave-3 {
        height: 231px;
    }
    .ie-shape-clouds {
        height: 400px;
    }
}
.h-100vh {
    height: 100vh !important;
}
.row-grid + .row-grid,
.row-grid > [class*="col-"] + [class*="col-"] {
    margin-top: 3rem;
}
@media (min-width: 992px) {
    .row.row-grid > [class*="col-lg-"] + [class*="col-lg-"] {
        margin-top: 0;
    }
}
@media (min-width: 768px) {
    .row.row-grid > [class*="col-md-"] + [class*="col-md-"] {
        margin-top: 0;
    }
}
@media (min-width: 576px) {
    .row.row-grid > [class*="col-sm-"] + [class*="col-sm-"] {
        margin-top: 0;
    }
}
@media (min-width: 992px) {
    [class*="mb--"],
    [class*="ml--"],
    [class*="mr--"],
    [class*="mt--"] {
        position: relative;
        z-index: 5;
    }
    .mt--100 {
        margin-top: -100px !important;
    }
    .mr--100 {
        margin-right: -100px !important;
    }
    .mb--100 {
        margin-bottom: -100px !important;
    }
    .ml--100 {
        margin-left: -100px !important;
    }
    .mt--150 {
        margin-top: -150px !important;
    }
    .mb--150 {
        margin-bottom: -150px !important;
    }
    .mt--200 {
        margin-top: -200px !important;
    }
    .mb--200 {
        margin-bottom: -200px !important;
    }
    .mt--300 {
        margin-top: -300px !important;
    }
    .mb--300 {
        margin-bottom: -300px !important;
    }
    .pt-100 {
        padding-top: 100px !important;
    }
    .pb-100 {
        padding-bottom: 100px !important;
    }
    .pt-150 {
        padding-top: 150px !important;
    }
    .pb-150 {
        padding-bottom: 150px !important;
    }
    .pt-200 {
        padding-top: 200px !important;
    }
    .pb-200 {
        padding-bottom: 200px !important;
    }
    .pt-250 {
        padding-top: 250px !important;
    }
    .pb-250 {
        padding-bottom: 250px !important;
    }
    .pt-300 {
        padding-top: 300px !important;
    }
    .pb-300 {
        padding-bottom: 300px !important;
    }
}
[data-negative-margin].is_stuck {
    margin: 0 !important;
}
[class*="shadow"] {
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
.hover-shadow-sm:hover {
    -webkit-box-shadow: 0 0.125rem 0.25rem rgba(31, 45, 61, 0.08) !important;
    box-shadow: 0 0.125rem 0.25rem rgba(31, 45, 61, 0.08) !important;
}
.hover-shadow:hover {
    -webkit-box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08) !important;
    box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08) !important;
}
.hover-shadow-lg:hover {
    -webkit-box-shadow: 0 1rem 3rem rgba(31, 45, 61, 0.125) !important;
    box-shadow: 0 1rem 3rem rgba(31, 45, 61, 0.125) !important;
}
.hover-shadow-none:hover,
.shadow-none {
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}
.shadow-primary-sm {
    -webkit-box-shadow: 0 0.125rem 0.25rem rgba(110, 0, 255, 0.4) !important;
    box-shadow: 0 0.125rem 0.25rem rgba(110, 0, 255, 0.4) !important;
}
.shadow-primary {
    -webkit-box-shadow: 0 0.5rem 1rem rgba(110, 0, 255, 0.4) !important;
    box-shadow: 0 0.5rem 1rem rgba(110, 0, 255, 0.4) !important;
}
.shadow-primary-lg {
    -webkit-box-shadow: 0 1rem 3rem rgba(110, 0, 255, 0.4) !important;
    box-shadow: 0 1rem 3rem rgba(110, 0, 255, 0.4) !important;
}
.shadow-secondary-sm {
    -webkit-box-shadow: 0 0.125rem 0.25rem rgba(239, 242, 247, 0.4) !important;
    box-shadow: 0 0.125rem 0.25rem rgba(239, 242, 247, 0.4) !important;
}
.shadow-secondary {
    -webkit-box-shadow: 0 0.5rem 1rem rgba(239, 242, 247, 0.4) !important;
    box-shadow: 0 0.5rem 1rem rgba(239, 242, 247, 0.4) !important;
}
.shadow-secondary-lg {
    -webkit-box-shadow: 0 1rem 3rem rgba(239, 242, 247, 0.4) !important;
    box-shadow: 0 1rem 3rem rgba(239, 242, 247, 0.4) !important;
}
.shadow-success-sm {
    -webkit-box-shadow: 0 0.125rem 0.25rem rgba(54, 179, 126, 0.4) !important;
    box-shadow: 0 0.125rem 0.25rem rgba(54, 179, 126, 0.4) !important;
}
.shadow-success {
    -webkit-box-shadow: 0 0.5rem 1rem rgba(54, 179, 126, 0.4) !important;
    box-shadow: 0 0.5rem 1rem rgba(54, 179, 126, 0.4) !important;
}
.shadow-success-lg {
    -webkit-box-shadow: 0 1rem 3rem rgba(54, 179, 126, 0.4) !important;
    box-shadow: 0 1rem 3rem rgba(54, 179, 126, 0.4) !important;
}
.shadow-info-sm {
    -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 184, 217, 0.4) !important;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 184, 217, 0.4) !important;
}
.shadow-info {
    -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 184, 217, 0.4) !important;
    box-shadow: 0 0.5rem 1rem rgba(0, 184, 217, 0.4) !important;
}
.shadow-info-lg {
    -webkit-box-shadow: 0 1rem 3rem rgba(0, 184, 217, 0.4) !important;
    box-shadow: 0 1rem 3rem rgba(0, 184, 217, 0.4) !important;
}
.shadow-warning-sm {
    -webkit-box-shadow: 0 0.125rem 0.25rem rgba(255, 171, 0, 0.4) !important;
    box-shadow: 0 0.125rem 0.25rem rgba(255, 171, 0, 0.4) !important;
}
.shadow-warning {
    -webkit-box-shadow: 0 0.5rem 1rem rgba(255, 171, 0, 0.4) !important;
    box-shadow: 0 0.5rem 1rem rgba(255, 171, 0, 0.4) !important;
}
.shadow-warning-lg {
    -webkit-box-shadow: 0 1rem 3rem rgba(255, 171, 0, 0.4) !important;
    box-shadow: 0 1rem 3rem rgba(255, 171, 0, 0.4) !important;
}
.shadow-danger-sm {
    -webkit-box-shadow: 0 0.125rem 0.25rem rgba(255, 86, 48, 0.4) !important;
    box-shadow: 0 0.125rem 0.25rem rgba(255, 86, 48, 0.4) !important;
}
.shadow-danger {
    -webkit-box-shadow: 0 0.5rem 1rem rgba(255, 86, 48, 0.4) !important;
    box-shadow: 0 0.5rem 1rem rgba(255, 86, 48, 0.4) !important;
}
.shadow-danger-lg {
    -webkit-box-shadow: 0 1rem 3rem rgba(255, 86, 48, 0.4) !important;
    box-shadow: 0 1rem 3rem rgba(255, 86, 48, 0.4) !important;
}
.shadow-light-sm {
    -webkit-box-shadow: 0 0.125rem 0.25rem rgba(239, 242, 247, 0.4) !important;
    box-shadow: 0 0.125rem 0.25rem rgba(239, 242, 247, 0.4) !important;
}
.shadow-light {
    -webkit-box-shadow: 0 0.5rem 1rem rgba(239, 242, 247, 0.4) !important;
    box-shadow: 0 0.5rem 1rem rgba(239, 242, 247, 0.4) !important;
}
.shadow-light-lg {
    -webkit-box-shadow: 0 1rem 3rem rgba(239, 242, 247, 0.4) !important;
    box-shadow: 0 1rem 3rem rgba(239, 242, 247, 0.4) !important;
}
.shadow-dark-sm {
    -webkit-box-shadow: 0 0.125rem 0.25rem rgba(39, 52, 68, 0.4) !important;
    box-shadow: 0 0.125rem 0.25rem rgba(39, 52, 68, 0.4) !important;
}
.shadow-dark {
    -webkit-box-shadow: 0 0.5rem 1rem rgba(39, 52, 68, 0.4) !important;
    box-shadow: 0 0.5rem 1rem rgba(39, 52, 68, 0.4) !important;
}
.shadow-dark-lg {
    -webkit-box-shadow: 0 1rem 3rem rgba(39, 52, 68, 0.4) !important;
    box-shadow: 0 1rem 3rem rgba(39, 52, 68, 0.4) !important;
}
.shadow-neutral-sm {
    -webkit-box-shadow: 0 0.125rem 0.25rem hsla(0, 0%, 100%, 0.4) !important;
    box-shadow: 0 0.125rem 0.25rem hsla(0, 0%, 100%, 0.4) !important;
}
.shadow-neutral {
    -webkit-box-shadow: 0 0.5rem 1rem hsla(0, 0%, 100%, 0.4) !important;
    box-shadow: 0 0.5rem 1rem hsla(0, 0%, 100%, 0.4) !important;
}
.shadow-neutral-lg {
    -webkit-box-shadow: 0 1rem 3rem hsla(0, 0%, 100%, 0.4) !important;
    box-shadow: 0 1rem 3rem hsla(0, 0%, 100%, 0.4) !important;
}
.shadow-white-sm {
    -webkit-box-shadow: 0 0.125rem 0.25rem hsla(0, 0%, 100%, 0.4) !important;
    box-shadow: 0 0.125rem 0.25rem hsla(0, 0%, 100%, 0.4) !important;
}
.shadow-white {
    -webkit-box-shadow: 0 0.5rem 1rem hsla(0, 0%, 100%, 0.4) !important;
    box-shadow: 0 0.5rem 1rem hsla(0, 0%, 100%, 0.4) !important;
}
.shadow-white-lg {
    -webkit-box-shadow: 0 1rem 3rem hsla(0, 0%, 100%, 0.4) !important;
    box-shadow: 0 1rem 3rem hsla(0, 0%, 100%, 0.4) !important;
}
.font-weight-300 {
    font-weight: 300 !important;
}
.font-weight-400 {
    font-weight: 400 !important;
}
.font-weight-500 {
    font-weight: 500 !important;
}
.font-weight-600 {
    font-weight: 600 !important;
}
.font-weight-700 {
    font-weight: 700 !important;
}
.font-weight-800 {
    font-weight: 800 !important;
}
.font-weight-900 {
    font-weight: 900 !important;
}
.font-weight-bolder {
    font-weight: 700 !important;
}
.text-underline {
    text-decoration: underline !important;
}
.text-underline--dashed {
    border-bottom: 1px dashed !important;
}
.text-line-through {
    text-decoration: line-through !important;
}
a.text-muted:hover {
    color: #68788f !important;
}
.text-xs {
    font-size: 0.75rem !important;
}
.text-sm {
    font-size: 0.875rem !important;
}
.text-lg {
    font-size: 1.25rem !important;
}
.text-xl {
    font-size: 1.5rem !important;
}
.lh-100 {
    line-height: 1 !important;
}
.lh-110 {
    line-height: 1.1 !important;
}
.lh-120 {
    line-height: 1.2 !important;
}
.lh-130 {
    line-height: 1.3 !important;
}
.lh-140 {
    line-height: 1.4 !important;
}
.lh-150 {
    line-height: 1.5 !important;
}
.lh-160 {
    line-height: 1.6 !important;
}
.lh-170 {
    line-height: 1.7 !important;
}
.lh-180 {
    line-height: 1.8 !important;
}
.ls-1 {
    letter-spacing: 0.0625rem !important;
}
.ls-15 {
    letter-spacing: 0.09375rem !important;
}
.ls-2 {
    letter-spacing: 0.125rem !important;
}
.text-limit {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.transform-none {
    -webkit-transform: none !important;
    transform: none !important;
}
.hover-translate-y-n3:hover,
.translate-y-n3 {
    -webkit-transform: translateY(-3px) !important;
    transform: translateY(-3px) !important;
}
.hover-translate-y-n10:hover,
.translate-y-n10 {
    -webkit-transform: translateY(-10px) !important;
    transform: translateY(-10px) !important;
}
.hover-translate-x-50:hover,
.translate-x-50 {
    -webkit-transform: translateX(50%) !important;
    transform: translateX(50%) !important;
}
.translate-y-50 {
    -webkit-transform: translateY(50%) !important;
    transform: translateY(50%) !important;
}
.translate-x-100 {
    -webkit-transform: translateX(100%) !important;
    transform: translateX(100%) !important;
}
.translate-y-100 {
    -webkit-transform: translateY(100%) !important;
    transform: translateY(100%) !important;
}
.translate-x-n50 {
    -webkit-transform: translateX(-50%) !important;
    transform: translateX(-50%) !important;
}
.translate-y-n50 {
    -webkit-transform: translateY(-50%) !important;
    transform: translateY(-50%) !important;
}
.translate-x-n100 {
    -webkit-transform: translateX(-100%) !important;
    transform: translateX(-100%) !important;
}
.translate-y-n100 {
    -webkit-transform: translateY(-100%) !important;
    transform: translateY(-100%) !important;
}
.scale-90 {
    -webkit-transform: scale(0.9) !important;
    transform: scale(0.9) !important;
}
.scale-x-90 {
    -webkit-transform: scaleX(0.9) !important;
    transform: scaleX(0.9) !important;
}
.scale-y-90 {
    -webkit-transform: scaleY(0.9) !important;
    transform: scaleY(0.9) !important;
}
.scale-100 {
    -webkit-transform: scale(1) !important;
    transform: scale(1) !important;
}
.scale-x-100 {
    -webkit-transform: scaleX(1) !important;
    transform: scaleX(1) !important;
}
.scale-y-100 {
    -webkit-transform: scaleY(1) !important;
    transform: scaleY(1) !important;
}
.hover-scale-110:hover,
.scale-110 {
    -webkit-transform: scale(1.1) !important;
    transform: scale(1.1) !important;
}
.hover-scale-x-110:hover,
.scale-x-110 {
    -webkit-transform: scaleX(1.1) !important;
    transform: scaleX(1.1) !important;
}
.scale-y-110 {
    -webkit-transform: scaleY(1.1) !important;
    transform: scaleY(1.1) !important;
}
.hover-rotate-90:hover,
.rotate-90 {
    -webkit-transform: rotate(90deg) !important;
    transform: rotate(90deg) !important;
}
.hover-rotate-180:hover,
.rotate-180 {
    -webkit-transform: rotate(180deg) !important;
    transform: rotate(180deg) !important;
}
.hover-rotate-270:hover,
.rotate-270 {
    -webkit-transform: rotate(270deg) !important;
    transform: rotate(270deg) !important;
}
.hover-rotate-360:hover,
.rotate-360 {
    -webkit-transform: rotate(1turn) !important;
    transform: rotate(1turn) !important;
}
.hover-rotate-n90:hover,
.rotate-n90 {
    -webkit-transform: rotate(-90deg) !important;
    transform: rotate(-90deg) !important;
}
.skew-x-5 {
    -webkit-transform: skewX(5deg) !important;
    transform: skewX(5deg) !important;
}
.skew-y-5 {
    -webkit-transform: skewY(5deg) !important;
    transform: skewY(5deg) !important;
}
.skew-x-n10 {
    -webkit-transform: skewX(-10deg) !important;
    transform: skewX(-10deg) !important;
}
.skew-y-n10 {
    -webkit-transform: skewY(-10deg) !important;
    transform: skewY(-10deg) !important;
}
.perspective-left {
    -webkit-transform: scale(1) perspective(2000px) rotateY(11deg) rotateX(2deg)
        rotate(-2deg);
    transform: scale(1) perspective(2000px) rotateY(11deg) rotateX(2deg)
        rotate(-2deg);
}
.perspective-right {
    -webkit-transform: scale(1) perspective(1040px) rotateY(-11deg)
        rotateX(2deg) rotate(2deg);
    transform: scale(1) perspective(1040px) rotateY(-11deg) rotateX(2deg)
        rotate(2deg);
}
.transform-origin-t {
    -webkit-transform-origin: 50% 0 !important;
    transform-origin: 50% 0 !important;
}
.transform-origin-r {
    -webkit-transform-origin: 100% 50% !important;
    transform-origin: 100% 50% !important;
}
.transform-origin-b {
    -webkit-transform-origin: 50% 100% !important;
    transform-origin: 50% 100% !important;
}
.transform-origin-l {
    -webkit-transform-origin: 0 50% !important;
    transform-origin: 0 50% !important;
}
.zindex-100 {
    z-index: 100 !important;
}
.zindex-101 {
    z-index: 101 !important;
}
.zindex-102 {
    z-index: 102 !important;
}
.action-item {
    display: inline-block;
    font-size: 0.875rem;
    cursor: pointer;
    color: #8492a6;
    background: transparent;
    border: 0;
    padding: 0.25rem;
    -webkit-transition: color 0.3s;
    transition: color 0.3s;
}
@media (prefers-reduced-motion: reduce) {
    .action-item {
        -webkit-transition: none;
        transition: none;
    }
}
.action-item:hover {
    color: #a2acbb;
}
.action-item span {
    padding-left: 0.35rem;
    display: inline-block;
}
.actions-dark .action-item {
    color: hsla(0, 0%, 100%, 0.7);
}
.actions-dark .action-item:hover {
    color: #fff;
}
.action-favorite {
    color: #fc0;
}
.action-favorite.active,
.action-favorite:hover {
    color: #dbaf00;
}
.action-love {
    color: #ff5630;
}
.action-love.active,
.action-love:hover {
    color: #ff390c;
}
.action-like {
    color: #2684ff;
}
.action-like.active,
.action-like:hover {
    color: #0270ff;
}
.action-item-lg {
    font-size: 1.25rem;
}
.card > .actions {
    position: absolute;
    right: 0.875rem;
    top: 1rem;
}
.card-stats .actions {
    right: 0.75rem;
    top: 0.5rem;
}
.actions-toolbar {
    position: relative;
}
.actions-search {
    display: none;
    opacity: 0;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
    border-color: #eff2f7;
    z-index: 1;
    -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
    box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
    border-radius: 0.375rem;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .actions-search {
        -webkit-transition: none;
        transition: none;
    }
}
.actions-search.show {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    opacity: 1;
}
.alert {
    font-size: 0.875rem;
}
.alert strong {
    font-weight: 600;
}
.alert hr {
    margin: 0.875rem 0;
}
.alert p:last-child {
    margin-bottom: 0;
}
.alert-heading {
    font-weight: 600;
    font-size: 1.5rem;
    margin-top: 0.15rem;
}
.alert-flush {
    border-radius: 0;
    border-left: 0;
    border-right: 0;
}
.alert-modern {
    display: inline-block;
    padding: 0.375rem 1rem 0.375rem 0.5rem;
    border-radius: 50rem;
}
.alert-modern:after {
    margin-left: 10.2px;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    font-family: Font Awesome\5 Pro, Font Awesome\5 Free;
    font-weight: 700;
    content: "\F105";
}
.alert-modern:empty:after {
    margin-left: 0;
}
.alert-modern .badge + .alert-content {
    margin-left: 0.5rem;
}
.alert-dark {
    background-color: #273444;
    color: #fff;
    border: 0;
}
.alert-dark .alert-link,
.alert-dark .close:focus > span:not(.sr-only),
.alert-dark .close:hover > span:not(.sr-only),
.alert-dark .close > span:not(.sr-only) {
    color: #fff;
}
.alert-dark hr {
    border-color: rgba(216, 203, 187, 0.1);
}
[class*="alert-outline-"] {
    border-right: 1px solid;
}
[class*="alert-outline-"] .alert-group-prepend {
    padding-right: 0.875rem;
}
.alert-outline-primary {
    background: transparent;
    color: #4816a2;
    border-color: {{ $settings->website_theme }};
}
.alert-outline-primary hr {
    border-top-color: #e5d2ff;
}
.alert-outline-primary .alert-link {
    color: #4816a2;
}
.alert-outline-primary .alert-group-prepend {
    border-right: 1px solid {{ $settings->website_theme }};
}
.alert-outline-secondary {
    background: transparent;
    color: #8b939e;
    border-color: #fbfbfd;
}
.alert-outline-secondary hr {
    border-top-color: #fff;
}
.alert-outline-secondary .alert-link {
    color: #8b939e;
}
.alert-outline-secondary .alert-group-prepend {
    border-right: 1px solid #fbfbfd;
}
.alert-outline-success {
    background: transparent;
    color: #2b735f;
    border-color: #c7eadb;
}
.alert-outline-success hr {
    border-top-color: #daf1e7;
}
.alert-outline-success .alert-link {
    color: #2b735f;
}
.alert-outline-success .alert-group-prepend {
    border-right: 1px solid #c7eadb;
}
.alert-outline-info {
    background: transparent;
    color: #0f758e;
    border-color: #b8ebf4;
}
.alert-outline-info hr {
    border-top-color: #cef1f7;
}
.alert-outline-info .alert-link {
    color: #0f758e;
}
.alert-outline-info .alert-group-prepend {
    border-right: 1px solid #b8ebf4;
}
.alert-outline-warning {
    background: transparent;
    color: #936f1d;
    border-color: #ffe7b8;
}
.alert-outline-warning hr {
    border-top-color: #fff0d2;
}
.alert-outline-warning .alert-link {
    color: #936f1d;
}
.alert-outline-warning .alert-group-prepend {
    border-right: 1px solid #ffe7b8;
}
.alert-outline-danger {
    background: transparent;
    color: #934236;
    border-color: #ffd0c5;
}
.alert-outline-danger hr {
    border-top-color: #ffe5df;
}
.alert-outline-danger .alert-link {
    color: #934236;
}
.alert-outline-danger .alert-group-prepend {
    border-right: 1px solid #ffd0c5;
}
.alert-outline-light {
    background: transparent;
    color: #8b939e;
    border-color: #fbfbfd;
}
.alert-outline-light hr {
    border-top-color: #fff;
}
.alert-outline-light .alert-link {
    color: #8b939e;
}
.alert-outline-light .alert-group-prepend {
    border-right: 1px solid #fbfbfd;
}
.alert-outline-dark {
    background: transparent;
    color: #233141;
    border-color: #c3c6cb;
}
.alert-outline-dark hr {
    border-top-color: #d1d3d7;
}
.alert-outline-dark .alert-link {
    color: #233141;
}
.alert-outline-dark .alert-group-prepend {
    border-right: 1px solid #c3c6cb;
}
.alert-outline-neutral {
    background: transparent;
    color: #939aa2;
    border-color: #fff;
}
.alert-outline-neutral hr {
    border-top-color: #fff;
}
.alert-outline-neutral .alert-link {
    color: #939aa2;
}
.alert-outline-neutral .alert-group-prepend {
    border-right: 1px solid #fff;
}
.alert-outline-white {
    background: transparent;
    color: #939aa2;
    border-color: #fff;
}
.alert-outline-white hr {
    border-top-color: #fff;
}
.alert-outline-white .alert-link {
    color: #939aa2;
}
.alert-outline-white .alert-group-prepend {
    border-right: 1px solid #fff;
}
.alert-messages:not(:last-child) {
    margin-bottom: 1.25rem;
}
.alert-notify {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    max-width: 600px;
    width: calc(100% - 30px);
    padding-right: 80px;
    -webkit-box-shadow: 0 1rem 3rem rgba(31, 45, 61, 0.125);
    box-shadow: 0 1rem 3rem rgba(31, 45, 61, 0.125);
}
.alert-notify:hover {
    z-index: 1081 !important;
}
.alert-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 0;
    padding-bottom: 0;
}
.alert-group .alert-group-prepend {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    vertical-align: middle;
    margin-right: 0.5rem;
}
.alert-group .alert-action,
.alert-group .alert-content,
.alert-group .alert-group-prepend {
    padding-top: 0.875rem;
    padding-bottom: 0.875rem;
}
.alert-group .alert-action {
    margin-left: auto;
}
.alert-group .btn {
    padding: 0.25rem 0.75rem;
    font-size: 0.875rem;
    line-height: 1.6;
}
.alert-group[class*="alert-outline"] .alert-group-prepend {
    margin-right: 0.875rem;
}
.alert-group-icon {
    display: inline-block;
    min-width: 26px;
    text-align: center;
}
.alert-dismissible .alert-group-prepend {
    display: block;
}
.alert-dismissible .close {
    top: 50%;
    right: 0.875rem;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    padding: 0;
}
.avatar {
    position: relative;
    color: #fff;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    vertical-align: middle;
    font-size: 1rem;
    font-weight: 600;
    height: 3.125rem;
    width: 3.125rem;
}
.avatar,
.avatar img {
    border-radius: 0.25rem;
}
.avatar img {
    width: 100%;
}
.avatar.rounded-circle img {
    border-radius: 50%;
}
.avatar span {
    background-color: {{ $settings->website_theme }};
}
.avatar + .avatar {
    margin-left: 0.25rem;
}
.avatar + .avatar-content {
    display: inline-block;
    margin-left: 0.75rem;
}
.avatar-xl {
    width: 6rem;
    height: 6rem;
    font-size: 1.375rem;
}
.avatar-lg {
    width: 4rem;
    height: 4rem;
    font-size: 1.25rem;
}
.avatar-sm {
    width: 2.4375rem;
    height: 2.4375rem;
    font-size: 0.75rem;
    border-radius: 0.2rem;
}
.avatar-group {
    display: inline-block;
    line-height: 1;
}
.avatar-group .avatar {
    z-index: 1;
    -webkit-transition: margin 0.15s ease-in-out;
    transition: margin 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .avatar-group .avatar {
        -webkit-transition: none;
        transition: none;
    }
}
.avatar-group .avatar img {
    border: 2px solid #fff;
}
.avatar-group .avatar:hover {
    z-index: 2;
}
.avatar-group .avatar + .avatar {
    margin-left: -1.25rem;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.avatar-group .avatar-sm + .avatar-sm {
    margin-left: -1rem;
}
.avatar-group:hover .avatar {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.avatar-group:hover .avatar-sm {
    border-top-left-radius: 0.2rem;
    border-bottom-left-radius: 0.2rem;
}
.hover-avatar-ungroup:hover .avatar:not(:first-child) {
    margin-left: 0;
}
.avatar-parent-child {
    display: inline-block;
    position: relative;
}
.avatar-child {
    position: absolute;
    right: 0;
    bottom: 0;
    background-color: #fff;
    border: 2px solid #fff;
    border-radius: 0.2rem;
}
.avatar.rounded-circle + .avatar-child {
    border-radius: 50%;
}
.avatar + .avatar-child {
    width: 20px;
    height: 20px;
}
.avatar-lg + .avatar-child {
    width: 24px;
    height: 24px;
}
.avatar-sm + .avatar-child {
    width: 16px;
    height: 16px;
}
.avatar + .avatar-badge {
    width: 14px;
    height: 14px;
    right: -6px;
    bottom: 15px;
}
.avatar-lg + .avatar-badge {
    width: 16px;
    height: 16px;
    right: -5px;
    bottom: 20px;
}
.avatar-sm + .badge {
    width: 12px;
    height: 12px;
    right: -6px;
    bottom: 10px;
}
.avatar-connect {
    position: relative;
}
.avatar-connect:before {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    border-bottom: 2px dashed #eff2f7;
}
.avatar-connect ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
.badge {
    display: inline;
    text-transform: none;
}
.badge i:not(:last-child) {
    margin-right: 0.5rem;
}
.badge-group .badge {
    display: inline-block;
    margin-top: 0.125rem;
    margin-bottom: 0.125rem;
    margin-right: 0.25rem;
}
.badge-xs {
    padding: 0.25em 0.5em;
    font-size: 60%;
}
.badge-md {
    padding: 0.65em 1em;
}
.badge-lg {
    padding: 0.85em 1.375em;
}
.badge-inline {
    margin-right: 0.625rem;
}
.badge-inline + span {
    top: 2px;
    position: relative;
}
.badge-inline + span > a {
    text-decoration: underline;
}
.btn .badge:not(:first-child) {
    margin-left: 0.5rem;
}
.btn .badge:not(:last-child) {
    margin-right: 0.5rem;
}
.badge-soft-primary {
    color: {{ $settings->website_theme }};
    background-color: #e2ccff;
}
.badge-soft-primary[href]:focus,
.badge-soft-primary[href]:hover {
    color: {{ $settings->website_theme }};
    text-decoration: none;
    background-color: #d4b3ff;
}
.badge-soft-secondary {
    color: #eff2f7;
    background-color: #fcfcfd;
}
.badge-soft-secondary[href]:focus,
.badge-soft-secondary[href]:hover {
    color: #eff2f7;
    text-decoration: none;
    background-color: #ededf3;
}
.badge-soft-success {
    color: #36b37e;
    background-color: #d7f0e5;
}
.badge-soft-success[href]:focus,
.badge-soft-success[href]:hover {
    color: #36b37e;
    text-decoration: none;
    background-color: #c4e9d9;
}
.badge-soft-info {
    color: #00b8d9;
    background-color: #ccf1f7;
}
.badge-soft-info[href]:focus,
.badge-soft-info[href]:hover {
    color: #00b8d9;
    text-decoration: none;
    background-color: #b6ebf4;
}
.badge-soft-warning {
    color: #ffab00;
    background-color: #fec;
}
.badge-soft-warning[href]:focus,
.badge-soft-warning[href]:hover {
    color: #ffab00;
    text-decoration: none;
    background-color: #ffe6b3;
}
.badge-soft-danger {
    color: #ff5630;
    background-color: #ffddd6;
}
.badge-soft-danger[href]:focus,
.badge-soft-danger[href]:hover {
    color: #ff5630;
    text-decoration: none;
    background-color: #ffc8bd;
}
.badge-soft-light {
    color: #eff2f7;
    background-color: #fcfcfd;
}
.badge-soft-light[href]:focus,
.badge-soft-light[href]:hover {
    color: #eff2f7;
    text-decoration: none;
    background-color: #ededf3;
}
.badge-soft-dark {
    color: #273444;
    background-color: #d4d6da;
}
.badge-soft-dark[href]:focus,
.badge-soft-dark[href]:hover {
    color: #273444;
    text-decoration: none;
    background-color: #c6c9ce;
}
.badge-soft-neutral {
    color: #fff;
    background-color: #fff;
}
.badge-soft-neutral[href]:focus,
.badge-soft-neutral[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #f2f2f2;
}
.badge-soft-white {
    color: #fff;
    background-color: #fff;
}
.badge-soft-white[href]:focus,
.badge-soft-white[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #f2f2f2;
}
.badge-dot {
    padding-left: 0;
    padding-right: 0;
    background: transparent;
    color: #8492a6;
    font-size: 0.875rem;
}
.badge-dot i {
    display: inline-block;
    vertical-align: middle;
    width: 0.375rem;
    height: 0.375rem;
    border-radius: 50%;
    margin-right: 0.375rem;
}
.badge-dot.badge-md i {
    width: 0.5rem;
    height: 0.5rem;
}
.badge-dot.badge-lg i {
    width: 0.625rem;
    height: 0.625rem;
}
.badge-circle {
    text-align: center;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 50%;
    padding: 0 !important;
    min-width: 1.25rem;
    min-height: 1.25rem;
    font-size: 0.75rem;
    font-weight: 600;
}
.badge-circle.badge-md {
    width: 1.5rem;
    height: 1.5rem;
}
.badge-circle.badge-lg {
    width: 2rem;
    height: 2rem;
}
.btn .badge-floating {
    position: absolute;
    top: -50%;
    right: 0;
    -webkit-transform: translate(50%, 50%);
    transform: translate(50%, 50%);
    margin: 0;
    border: 3px solid;
}
.bg-shape-circle {
    display: block;
    border-radius: 50%;
    background-color: rgba(31, 45, 61, 0.05);
    position: absolute;
    margin: auto;
}
.bg-shape-circle-lg {
    width: 800px;
    height: 800px;
}
.breadcrumb {
    border: 1px solid #eff2f7;
}
.breadcrumb-sm {
    font-size: 0.875rem;
}
.breadcrumb-links {
    border: 0;
    background-color: transparent;
    border-radius: 0;
}
.breadcrumb-links .breadcrumb-item + .breadcrumb-item:before {
    content: "";
    width: 0.3rem;
    height: 0.6rem;
    margin-right: 0.5rem;
    -webkit-mask: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iMTYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTIgMTRsNi02LTYtNiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utd2lkdGg9IjIuNSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz48L3N2Zz4=)
        no-repeat 50% 50%;
    mask: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iMTYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTIgMTRsNi02LTYtNiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utd2lkdGg9IjIuNSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz48L3N2Zz4=)
        no-repeat 50% 50%;
    -webkit-mask-size: contain;
    mask-size: contain;
    background: #e0e6ed;
}
.breadcrumb-dark .breadcrumb-item a {
    color: hsla(0, 0%, 100%, 0.8);
}
.breadcrumb-dark .breadcrumb-item a:hover {
    color: #fff;
}
.breadcrumb-dark .breadcrumb-item + .breadcrumb-item:before {
    color: hsla(0, 0%, 100%, 0.8);
}
.breadcrumb-light .breadcrumb-item a {
    color: rgba(39, 52, 68, 0.8);
}
.breadcrumb-light .breadcrumb-item a:hover {
    color: #273444;
}
.breadcrumb-light .breadcrumb-item + .breadcrumb-item:before {
    color: rgba(39, 52, 68, 0.8);
}
.btn {
    position: relative;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .btn {
        -webkit-transition: none;
        transition: none;
    }
}
.btn:not(:last-child) {
    margin-right: 0.5rem;
}
.btn-group > .btn {
    margin: 0;
}
.btn-neutral {
    background-color: #fff;
    color: #273444;
    border: 1px solid #eff2f7;
}
.btn-neutral:hover {
    border-color: #e5eaf2;
    background-color: #f7f7f7;
}
.btn-neutral:not(:disabled):not(.disabled).active {
    border-color: {{ $settings->website_theme }};
    color: {{ $settings->website_theme }};
    background-color: #fff;
}
.btn-xs {
    padding: 0.375rem 1rem;
    font-size: 0.75rem;
    line-height: 1.5;
    border-radius: 0.25rem;
}
.btn-xl {
    padding: 1.5rem 2rem;
    font-size: 1.5rem;
    line-height: 1.5;
    border-radius: 0.5rem;
}
@media (max-width: 1200px) {
    .btn-xl {
        font-size: calc(1.275rem + 0.3vw);
    }
}
.btn-nobg {
    padding: 0;
}
.btn-nobg,
.btn-nobg:hover {
    background: transparent !important;
}
.btn-nobg:hover {
    border-color: transparent !important;
}
.btn-nobg--hover:hover {
    background-color: transparent;
}
.btn-soft-primary {
    color: {{ $settings->website_theme }};
    background-color: #e2ccff;
    border-color: #e2ccff;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-soft-primary:hover {
    color: #fff;
    background-color: {{ $settings->website_theme }};
    border-color: {{ $settings->website_theme }};
    -webkit-box-shadow: 0 4px 11px rgba(226, 204, 255, 0.35);
    box-shadow: 0 4px 11px rgba(226, 204, 255, 0.35);
}
.btn-soft-primary.focus,
.btn-soft-primary:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(99, 8, 227, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(99, 8, 227, 0.5);
}
.btn-soft-primary.disabled,
.btn-soft-primary:disabled {
    color: {{ $settings->website_theme }};
    background-color: #e2ccff;
    border-color: #e2ccff;
}
.btn-soft-primary:not(:disabled):not(.disabled).active,
.btn-soft-primary:not(:disabled):not(.disabled):active,
.show > .btn-soft-primary.dropdown-toggle {
    color: #fff;
    background-color: {{ $settings->website_theme }};
    border-color: {{ $settings->website_theme }};
}
.btn-soft-primary:not(:disabled):not(.disabled).active:focus,
.btn-soft-primary:not(:disabled):not(.disabled):active:focus,
.show > .btn-soft-primary.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(99, 8, 227, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(99, 8, 227, 0.5);
}
.btn-soft-secondary {
    color: #eff2f7;
    background-color: #fcfcfd;
    border-color: #fcfcfd;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-soft-secondary:hover {
    color: #273444;
    background-color: #eff2f7;
    border-color: #eff2f7;
    -webkit-box-shadow: 0 4px 11px rgba(252, 252, 253, 0.35);
    box-shadow: 0 4px 11px rgba(252, 252, 253, 0.35);
}
.btn-soft-secondary.focus,
.btn-soft-secondary:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(209, 214, 220, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(209, 214, 220, 0.5);
}
.btn-soft-secondary.disabled,
.btn-soft-secondary:disabled {
    color: #eff2f7;
    background-color: #fcfcfd;
    border-color: #fcfcfd;
}
.btn-soft-secondary:not(:disabled):not(.disabled).active,
.btn-soft-secondary:not(:disabled):not(.disabled):active,
.show > .btn-soft-secondary.dropdown-toggle {
    color: #273444;
    background-color: #eff2f7;
    border-color: #eff2f7;
}
.btn-soft-secondary:not(:disabled):not(.disabled).active:focus,
.btn-soft-secondary:not(:disabled):not(.disabled):active:focus,
.show > .btn-soft-secondary.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(209, 214, 220, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(209, 214, 220, 0.5);
}
.btn-soft-success {
    color: #36b37e;
    background-color: #d7f0e5;
    border-color: #d7f0e5;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-soft-success:hover {
    color: #fff;
    background-color: #36b37e;
    border-color: #36b37e;
    -webkit-box-shadow: 0 4px 11px rgba(215, 240, 229, 0.35);
    box-shadow: 0 4px 11px rgba(215, 240, 229, 0.35);
}
.btn-soft-success.focus,
.btn-soft-success:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(52, 160, 117, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(52, 160, 117, 0.5);
}
.btn-soft-success.disabled,
.btn-soft-success:disabled {
    color: #36b37e;
    background-color: #d7f0e5;
    border-color: #d7f0e5;
}
.btn-soft-success:not(:disabled):not(.disabled).active,
.btn-soft-success:not(:disabled):not(.disabled):active,
.show > .btn-soft-success.dropdown-toggle {
    color: #fff;
    background-color: #36b37e;
    border-color: #36b37e;
}
.btn-soft-success:not(:disabled):not(.disabled).active:focus,
.btn-soft-success:not(:disabled):not(.disabled):active:focus,
.show > .btn-soft-success.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(52, 160, 117, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(52, 160, 117, 0.5);
}
.btn-soft-info {
    color: #00b8d9;
    background-color: #ccf1f7;
    border-color: #ccf1f7;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-soft-info:hover {
    color: #fff;
    background-color: #00b8d9;
    border-color: #00b8d9;
    -webkit-box-shadow: 0 4px 11px rgba(204, 241, 247, 0.35);
    box-shadow: 0 4px 11px rgba(204, 241, 247, 0.35);
}
.btn-soft-info.focus,
.btn-soft-info:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(6, 164, 195, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(6, 164, 195, 0.5);
}
.btn-soft-info.disabled,
.btn-soft-info:disabled {
    color: #00b8d9;
    background-color: #ccf1f7;
    border-color: #ccf1f7;
}
.btn-soft-info:not(:disabled):not(.disabled).active,
.btn-soft-info:not(:disabled):not(.disabled):active,
.show > .btn-soft-info.dropdown-toggle {
    color: #fff;
    background-color: #00b8d9;
    border-color: #00b8d9;
}
.btn-soft-info:not(:disabled):not(.disabled).active:focus,
.btn-soft-info:not(:disabled):not(.disabled):active:focus,
.show > .btn-soft-info.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(6, 164, 195, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(6, 164, 195, 0.5);
}
.btn-soft-warning {
    color: #ffab00;
    background-color: #fec;
    border-color: #fec;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-soft-warning:hover {
    color: #fff;
    background-color: #ffab00;
    border-color: #ffab00;
    -webkit-box-shadow: 0 4px 11px rgba(255, 238, 204, 0.35);
    box-shadow: 0 4px 11px rgba(255, 238, 204, 0.35);
}
.btn-soft-warning.focus,
.btn-soft-warning:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 153, 10, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 153, 10, 0.5);
}
.btn-soft-warning.disabled,
.btn-soft-warning:disabled {
    color: #ffab00;
    background-color: #fec;
    border-color: #fec;
}
.btn-soft-warning:not(:disabled):not(.disabled).active,
.btn-soft-warning:not(:disabled):not(.disabled):active,
.show > .btn-soft-warning.dropdown-toggle {
    color: #fff;
    background-color: #ffab00;
    border-color: #ffab00;
}
.btn-soft-warning:not(:disabled):not(.disabled).active:focus,
.btn-soft-warning:not(:disabled):not(.disabled):active:focus,
.show > .btn-soft-warning.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 153, 10, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 153, 10, 0.5);
}
.btn-soft-danger {
    color: #ff5630;
    background-color: #ffddd6;
    border-color: #ffddd6;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-soft-danger:hover {
    color: #fff;
    background-color: #ff5630;
    border-color: #ff5630;
    -webkit-box-shadow: 0 4px 11px rgba(255, 221, 214, 0.35);
    box-shadow: 0 4px 11px rgba(255, 221, 214, 0.35);
}
.btn-soft-danger.focus,
.btn-soft-danger:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 81, 51, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 81, 51, 0.5);
}
.btn-soft-danger.disabled,
.btn-soft-danger:disabled {
    color: #ff5630;
    background-color: #ffddd6;
    border-color: #ffddd6;
}
.btn-soft-danger:not(:disabled):not(.disabled).active,
.btn-soft-danger:not(:disabled):not(.disabled):active,
.show > .btn-soft-danger.dropdown-toggle {
    color: #fff;
    background-color: #ff5630;
    border-color: #ff5630;
}
.btn-soft-danger:not(:disabled):not(.disabled).active:focus,
.btn-soft-danger:not(:disabled):not(.disabled):active:focus,
.show > .btn-soft-danger.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 81, 51, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 81, 51, 0.5);
}
.btn-soft-light {
    color: #eff2f7;
    background-color: #fcfcfd;
    border-color: #fcfcfd;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-soft-light:hover {
    color: #273444;
    background-color: #eff2f7;
    border-color: #eff2f7;
    -webkit-box-shadow: 0 4px 11px rgba(252, 252, 253, 0.35);
    box-shadow: 0 4px 11px rgba(252, 252, 253, 0.35);
}
.btn-soft-light.focus,
.btn-soft-light:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(209, 214, 220, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(209, 214, 220, 0.5);
}
.btn-soft-light.disabled,
.btn-soft-light:disabled {
    color: #eff2f7;
    background-color: #fcfcfd;
    border-color: #fcfcfd;
}
.btn-soft-light:not(:disabled):not(.disabled).active,
.btn-soft-light:not(:disabled):not(.disabled):active,
.show > .btn-soft-light.dropdown-toggle {
    color: #273444;
    background-color: #eff2f7;
    border-color: #eff2f7;
}
.btn-soft-light:not(:disabled):not(.disabled).active:focus,
.btn-soft-light:not(:disabled):not(.disabled):active:focus,
.show > .btn-soft-light.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(209, 214, 220, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(209, 214, 220, 0.5);
}
.btn-soft-dark {
    color: #273444;
    background-color: #d4d6da;
    border-color: #d4d6da;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-soft-dark:hover {
    color: #fff;
    background-color: #273444;
    border-color: #273444;
    -webkit-box-shadow: 0 4px 11px rgba(212, 214, 218, 0.35);
    box-shadow: 0 4px 11px rgba(212, 214, 218, 0.35);
}
.btn-soft-dark.focus,
.btn-soft-dark:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(39, 52, 68, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(39, 52, 68, 0.5);
}
.btn-soft-dark.disabled,
.btn-soft-dark:disabled {
    color: #273444;
    background-color: #d4d6da;
    border-color: #d4d6da;
}
.btn-soft-dark:not(:disabled):not(.disabled).active,
.btn-soft-dark:not(:disabled):not(.disabled):active,
.show > .btn-soft-dark.dropdown-toggle {
    color: #fff;
    background-color: #273444;
    border-color: #273444;
}
.btn-soft-dark:not(:disabled):not(.disabled).active:focus,
.btn-soft-dark:not(:disabled):not(.disabled):active:focus,
.show > .btn-soft-dark.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(39, 52, 68, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(39, 52, 68, 0.5);
}
.btn-soft-neutral {
    color: #fff;
    background-color: #fff;
    border-color: #fff;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-soft-neutral:hover {
    color: #273444;
    background-color: #fff;
    border-color: #fff;
    -webkit-box-shadow: 0 4px 11px hsla(0, 0%, 100%, 0.35);
    box-shadow: 0 4px 11px hsla(0, 0%, 100%, 0.35);
}
.btn-soft-neutral.focus,
.btn-soft-neutral:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 225, 227, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 225, 227, 0.5);
}
.btn-soft-neutral.disabled,
.btn-soft-neutral:disabled {
    color: #fff;
    background-color: #fff;
    border-color: #fff;
}
.btn-soft-neutral:not(:disabled):not(.disabled).active,
.btn-soft-neutral:not(:disabled):not(.disabled):active,
.show > .btn-soft-neutral.dropdown-toggle {
    color: #273444;
    background-color: #fff;
    border-color: #fff;
}
.btn-soft-neutral:not(:disabled):not(.disabled).active:focus,
.btn-soft-neutral:not(:disabled):not(.disabled):active:focus,
.show > .btn-soft-neutral.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 225, 227, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 225, 227, 0.5);
}
.btn-soft-white {
    color: #fff;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-soft-white,
.btn-soft-white:hover {
    background-color: #fff;
    border-color: #fff;
}
.btn-soft-white:hover {
    color: #273444;
    -webkit-box-shadow: 0 4px 11px hsla(0, 0%, 100%, 0.35);
    box-shadow: 0 4px 11px hsla(0, 0%, 100%, 0.35);
}
.btn-soft-white.focus,
.btn-soft-white:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 225, 227, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 225, 227, 0.5);
}
.btn-soft-white.disabled,
.btn-soft-white:disabled {
    color: #fff;
    background-color: #fff;
    border-color: #fff;
}
.btn-soft-white:not(:disabled):not(.disabled).active,
.btn-soft-white:not(:disabled):not(.disabled):active,
.show > .btn-soft-white.dropdown-toggle {
    color: #273444;
    background-color: #fff;
    border-color: #fff;
}
.btn-soft-white:not(:disabled):not(.disabled).active:focus,
.btn-soft-white:not(:disabled):not(.disabled):active:focus,
.show > .btn-soft-white.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 225, 227, 0.5);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 0 rgba(223, 225, 227, 0.5);
}
.btn-facebook {
    color: #fff;
    background-color: #3b5999;
    border-color: #3b5999;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-facebook:hover {
    color: #fff;
    background-color: #30497d;
    border-color: #2d4474;
}
.btn-facebook.focus,
.btn-facebook:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(59, 89, 153, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(59, 89, 153, 0.35);
}
.btn-facebook.disabled,
.btn-facebook:disabled {
    color: #fff;
    background-color: #3b5999;
    border-color: #3b5999;
}
.btn-facebook:not(:disabled):not(.disabled).active,
.btn-facebook:not(:disabled):not(.disabled):active,
.show > .btn-facebook.dropdown-toggle {
    color: #fff;
    background-color: #2d4474;
    border-color: #293e6b;
}
.btn-facebook:not(:disabled):not(.disabled).active:focus,
.btn-facebook:not(:disabled):not(.disabled):active:focus,
.show > .btn-facebook.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(59, 89, 153, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(59, 89, 153, 0.35);
}
.btn-twitter {
    color: #fff;
    background-color: #1da1f2;
    border-color: #1da1f2;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-twitter:hover {
    color: #fff;
    background-color: #0d8ddc;
    border-color: #0c85d0;
}
.btn-twitter.focus,
.btn-twitter:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(29, 161, 242, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(29, 161, 242, 0.35);
}
.btn-twitter.disabled,
.btn-twitter:disabled {
    color: #fff;
    background-color: #1da1f2;
    border-color: #1da1f2;
}
.btn-twitter:not(:disabled):not(.disabled).active,
.btn-twitter:not(:disabled):not(.disabled):active,
.show > .btn-twitter.dropdown-toggle {
    color: #fff;
    background-color: #0c85d0;
    border-color: #0b7ec4;
}
.btn-twitter:not(:disabled):not(.disabled).active:focus,
.btn-twitter:not(:disabled):not(.disabled):active:focus,
.show > .btn-twitter.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(29, 161, 242, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(29, 161, 242, 0.35);
}
.btn-google-plus {
    color: #fff;
    background-color: #dd4b39;
    border-color: #dd4b39;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-google-plus:hover {
    color: #fff;
    background-color: #cd3623;
    border-color: #c23321;
}
.btn-google-plus.focus,
.btn-google-plus:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(221, 75, 57, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(221, 75, 57, 0.35);
}
.btn-google-plus.disabled,
.btn-google-plus:disabled {
    color: #fff;
    background-color: #dd4b39;
    border-color: #dd4b39;
}
.btn-google-plus:not(:disabled):not(.disabled).active,
.btn-google-plus:not(:disabled):not(.disabled):active,
.show > .btn-google-plus.dropdown-toggle {
    color: #fff;
    background-color: #c23321;
    border-color: #b7301f;
}
.btn-google-plus:not(:disabled):not(.disabled).active:focus,
.btn-google-plus:not(:disabled):not(.disabled):active:focus,
.show > .btn-google-plus.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(221, 75, 57, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(221, 75, 57, 0.35);
}
.btn-instagram {
    color: #fff;
    background-color: #e4405f;
    border-color: #e4405f;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-instagram:hover {
    color: #fff;
    background-color: #de1f44;
    border-color: #d31e40;
}
.btn-instagram.focus,
.btn-instagram:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(228, 64, 95, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(228, 64, 95, 0.35);
}
.btn-instagram.disabled,
.btn-instagram:disabled {
    color: #fff;
    background-color: #e4405f;
    border-color: #e4405f;
}
.btn-instagram:not(:disabled):not(.disabled).active,
.btn-instagram:not(:disabled):not(.disabled):active,
.show > .btn-instagram.dropdown-toggle {
    color: #fff;
    background-color: #d31e40;
    border-color: #c81c3d;
}
.btn-instagram:not(:disabled):not(.disabled).active:focus,
.btn-instagram:not(:disabled):not(.disabled):active:focus,
.show > .btn-instagram.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(228, 64, 95, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(228, 64, 95, 0.35);
}
.btn-pinterest {
    color: #fff;
    background-color: #bd081c;
    border-color: #bd081c;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-pinterest:hover {
    color: #fff;
    background-color: #980617;
    border-color: #8c0615;
}
.btn-pinterest.focus,
.btn-pinterest:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(189, 8, 28, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(189, 8, 28, 0.35);
}
.btn-pinterest.disabled,
.btn-pinterest:disabled {
    color: #fff;
    background-color: #bd081c;
    border-color: #bd081c;
}
.btn-pinterest:not(:disabled):not(.disabled).active,
.btn-pinterest:not(:disabled):not(.disabled):active,
.show > .btn-pinterest.dropdown-toggle {
    color: #fff;
    background-color: #8c0615;
    border-color: #800513;
}
.btn-pinterest:not(:disabled):not(.disabled).active:focus,
.btn-pinterest:not(:disabled):not(.disabled):active:focus,
.show > .btn-pinterest.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(189, 8, 28, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(189, 8, 28, 0.35);
}
.btn-youtube {
    color: #fff;
    background-color: #cd201f;
    border-color: #cd201f;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-youtube:hover {
    color: #fff;
    background-color: #ac1b1a;
    border-color: #a11918;
}
.btn-youtube.focus,
.btn-youtube:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(205, 32, 31, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(205, 32, 31, 0.35);
}
.btn-youtube.disabled,
.btn-youtube:disabled {
    color: #fff;
    background-color: #cd201f;
    border-color: #cd201f;
}
.btn-youtube:not(:disabled):not(.disabled).active,
.btn-youtube:not(:disabled):not(.disabled):active,
.show > .btn-youtube.dropdown-toggle {
    color: #fff;
    background-color: #a11918;
    border-color: #961717;
}
.btn-youtube:not(:disabled):not(.disabled).active:focus,
.btn-youtube:not(:disabled):not(.disabled):active:focus,
.show > .btn-youtube.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(205, 32, 31, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(205, 32, 31, 0.35);
}
.btn-slack {
    color: #fff;
    background-color: #3aaf85;
    border-color: #3aaf85;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-slack:hover {
    color: #fff;
    background-color: #30926f;
    border-color: #2d8968;
}
.btn-slack.focus,
.btn-slack:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(58, 175, 133, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(58, 175, 133, 0.35);
}
.btn-slack.disabled,
.btn-slack:disabled {
    color: #fff;
    background-color: #3aaf85;
    border-color: #3aaf85;
}
.btn-slack:not(:disabled):not(.disabled).active,
.btn-slack:not(:disabled):not(.disabled):active,
.show > .btn-slack.dropdown-toggle {
    color: #fff;
    background-color: #2d8968;
    border-color: #2a7f61;
}
.btn-slack:not(:disabled):not(.disabled).active:focus,
.btn-slack:not(:disabled):not(.disabled):active:focus,
.show > .btn-slack.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(58, 175, 133, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(58, 175, 133, 0.35);
}
.btn-dribbble {
    color: #fff;
    background-color: #ea4c89;
    border-color: #ea4c89;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-dribbble:hover {
    color: #fff;
    background-color: #e62a72;
    border-color: #e51e6b;
}
.btn-dribbble.focus,
.btn-dribbble:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(234, 76, 137, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(234, 76, 137, 0.35);
}
.btn-dribbble.disabled,
.btn-dribbble:disabled {
    color: #fff;
    background-color: #ea4c89;
    border-color: #ea4c89;
}
.btn-dribbble:not(:disabled):not(.disabled).active,
.btn-dribbble:not(:disabled):not(.disabled):active,
.show > .btn-dribbble.dropdown-toggle {
    color: #fff;
    background-color: #e51e6b;
    border-color: #dc1a65;
}
.btn-dribbble:not(:disabled):not(.disabled).active:focus,
.btn-dribbble:not(:disabled):not(.disabled):active:focus,
.show > .btn-dribbble.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(234, 76, 137, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(234, 76, 137, 0.35);
}
.btn-github {
    color: #fff;
    background-color: #222;
    border-color: #222;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-github:hover {
    color: #fff;
    background-color: #0f0f0f;
    border-color: #090909;
}
.btn-github.focus,
.btn-github:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(34, 34, 34, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(34, 34, 34, 0.35);
}
.btn-github.disabled,
.btn-github:disabled {
    color: #fff;
    background-color: #222;
    border-color: #222;
}
.btn-github:not(:disabled):not(.disabled).active,
.btn-github:not(:disabled):not(.disabled):active,
.show > .btn-github.dropdown-toggle {
    color: #fff;
    background-color: #090909;
    border-color: #020202;
}
.btn-github:not(:disabled):not(.disabled).active:focus,
.btn-github:not(:disabled):not(.disabled):active:focus,
.show > .btn-github.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(34, 34, 34, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(34, 34, 34, 0.35);
}
.btn-vimeo {
    color: #fff;
    background-color: #04a0f0;
    border-color: #04a0f0;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.btn-vimeo:hover {
    color: #fff;
    background-color: #0387ca;
    border-color: #037fbe;
}
.btn-vimeo.focus,
.btn-vimeo:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(4, 160, 240, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(4, 160, 240, 0.35);
}
.btn-vimeo.disabled,
.btn-vimeo:disabled {
    color: #fff;
    background-color: #04a0f0;
    border-color: #04a0f0;
}
.btn-vimeo:not(:disabled):not(.disabled).active,
.btn-vimeo:not(:disabled):not(.disabled):active,
.show > .btn-vimeo.dropdown-toggle {
    color: #fff;
    background-color: #037fbe;
    border-color: #0376b1;
}
.btn-vimeo:not(:disabled):not(.disabled).active:focus,
.btn-vimeo:not(:disabled):not(.disabled):active:focus,
.show > .btn-vimeo.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(4, 160, 240, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(4, 160, 240, 0.35);
}
.btn i:not(:first-child),
.btn svg:not(:first-child) {
    margin-left: 0.5rem;
}
.btn i:not(:last-child),
.btn svg:not(:last-child) {
    margin-right: 0.5rem;
}
.btn-icon .btn-inner--text:not(:first-child) {
    margin-left: 0.75em;
}
.btn-icon .btn-inner--text:not(:last-child) {
    margin-right: 0.75em;
}
.btn-icon-only {
    width: 3.125rem;
    height: 3.125rem;
    line-height: 3.125rem;
    padding: 0;
}
.btn-icon-only.btn-xs {
    width: 2rem;
    height: 2rem;
    line-height: 2rem;
}
.btn-group-sm > .btn-icon-only.btn,
.btn-icon-only.btn-sm {
    width: 2.4375rem;
    height: 2.4375rem;
    line-height: 2.4375rem;
}
.btn-group-lg > .btn-icon-only.btn,
.btn-icon-only.btn-lg {
    width: 4rem;
    height: 4rem;
    line-height: 4rem;
}
.btn-square-lg {
    width: 150px !important;
    height: 150px !important;
}
.btn-square {
    width: 108px !important;
    height: 108px !important;
    padding: 1rem;
    border-radius: 1rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}
.btn-square-sm {
    width: 50px !important;
    height: 50px !important;
}
.btn-square-xs {
    width: 25px !important;
    height: 25px !important;
}
.btn-animated {
    overflow: hidden;
}
.btn-animated,
.btn-animated .btn-inner--visible {
    position: relative;
}
.btn-animated .btn-inner--hidden {
    position: absolute;
    width: 100%;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
.btn-animated-x .btn-inner--visible {
    right: 0;
    -webkit-transition: right 0.3s ease 0s;
    transition: right 0.3s ease 0s;
}
@media (prefers-reduced-motion: reduce) {
    .btn-animated-x .btn-inner--visible {
        -webkit-transition: none;
        transition: none;
    }
}
.btn-animated-x .btn-inner--hidden {
    right: -100%;
    -webkit-transition: right 0.3s ease 0s;
    transition: right 0.3s ease 0s;
}
@media (prefers-reduced-motion: reduce) {
    .btn-animated-x .btn-inner--hidden {
        -webkit-transition: none;
        transition: none;
    }
}
.btn-animated-x:hover .btn-inner--hidden {
    right: 0;
}
.btn-animated-x:hover .btn-inner--visible {
    right: 150%;
}
.btn-animated-y .btn-inner--visible {
    top: 0;
    -webkit-transition: top 0.3s ease 0s;
    transition: top 0.3s ease 0s;
}
@media (prefers-reduced-motion: reduce) {
    .btn-animated-y .btn-inner--visible {
        -webkit-transition: none;
        transition: none;
    }
}
.btn-animated-y .btn-inner--hidden {
    left: 0;
    top: -100%;
    -webkit-transition: top 0.3s ease;
    transition: top 0.3s ease;
}
@media (prefers-reduced-motion: reduce) {
    .btn-animated-y .btn-inner--hidden {
        -webkit-transition: none;
        transition: none;
    }
}
.btn-animated-y:hover .btn-inner--hidden {
    top: 50%;
}
.btn-animated-y:hover .btn-inner--visible {
    top: 100px;
}
.btn-action-label .btn-label:hover {
    background: transparent;
    color: #3c4858;
}
.btn-action-label .btn-secondary:hover {
    color: {{ $settings->website_theme }};
}
.btn-icon-label {
    position: relative;
}
.btn-icon-label .btn-inner--icon {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: absolute;
    height: 100%;
    line-height: 1;
    border-radius: 0;
    text-align: center;
    margin: 0;
    width: 3em;
    background-color: rgba(0, 0, 0, 0.1);
}
.btn-icon-label .btn-inner--icon:not(:first-child) {
    right: 0;
    top: 0;
    border-top-right-radius: inherit;
    border-bottom-right-radius: inherit;
}
.btn-icon-label .btn-inner--icon:not(:last-child) {
    left: 0;
    top: 0;
    border-top-left-radius: inherit;
    border-bottom-left-radius: inherit;
}
.btn-icon-label .btn-inner--icon svg {
    position: relative;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
.btn-icon-label .btn-inner--text:not(:first-child) {
    padding-left: 3em;
}
.btn-icon-label .btn-inner--text:not(:last-child) {
    padding-right: 3em;
}
.btn-app-store {
    background: #000;
    color: #fff;
    position: relative;
    padding-left: 4.5rem;
    padding-right: 1.5rem;
}
.btn-app-store i,
.btn-app-store svg {
    font-size: 2.5rem;
    position: absolute;
    left: 1.25rem;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
.btn-app-store .btn-inner--text {
    display: block;
    font-size: 0.75rem;
    line-height: 0.75rem;
    margin-bottom: 0.125rem;
}
.btn-app-store .btn-inner--brand {
    display: block;
    text-align: left;
    font-size: 21px;
    line-height: 21px;
}
.btn-app-store:hover {
    background-color: #5f00db;
    color: #fff;
}
.btn-group-options .btn {
    min-height: 4.8rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
[data-toggle="buttons"]:not(.btn-group-colors) > .btn {
    background-color: #fafbfe;
    cursor: pointer;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 0;
    margin: 0;
}
[data-toggle="buttons"]:not(.btn-group-colors) > .btn:not(.active) {
    color: #8492a6;
}
[data-toggle="buttons"]:not(.btn-group-colors) > .btn.active {
    background-color: {{ $settings->website_theme }};
    color: #fff;
}
.btn-group-colors > .btn {
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 50% !important;
    width: 30px;
    height: 30px;
    padding: 0;
    margin-right: 0.5rem;
    margin-bottom: 0.25rem;
    position: relative;
}
.btn-group-colors > .btn:not([class*="bg-"]) {
    border-color: #fafbfe !important;
}
.btn-group-colors > .btn:before {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    line-height: 28px;
    color: #fff;
    -webkit-transform: scale(0);
    transform: scale(0);
    opacity: 0;
    content: "\F00C";
    font-family: Font Awesome\5 Pro, Font Awesome\5 Free;
    font-size: 12px;
    -webkit-transition: opacity 0.2s, -webkit-transform 0.2s;
    transition: opacity 0.2s, -webkit-transform 0.2s;
    transition: transform 0.2s, opacity 0.2s;
    transition: transform 0.2s, opacity 0.2s, -webkit-transform 0.2s;
}
@media (prefers-reduced-motion: reduce) {
    .btn-group-colors > .btn:before {
        -webkit-transition: none;
        transition: none;
    }
}
.btn-group-colors > .btn.btn:not([class*="bg-"]) {
    border: 1px solid #d0d9e4;
}
.btn-group-colors > .btn.btn:not([class*="bg-"]):before {
    color: #8492a6;
}
.btn-group-colors > .btn.active:before {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
}
.card {
    position: relative;
    margin-bottom: 20px;
    -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
    box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
}
.card.hover-scale-110:hover {
    z-index: 2;
    border-radius: 0.375rem !important;
}
.card-fluid {
    height: calc(100% - 20px);
}
.card-header {
    border-bottom: 1px solid #eff2f7;
}
.card-header .action-item {
    padding-top: 0;
    padding-bottom: 0;
}
.card-btn {
    border-top-left-radius: 0 !important;
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0.375rem !important;
    border-bottom-left-radius: 0.375rem !important;
}
.card-deck + .row {
    margin-top: 20px;
}
.card-wrapper .card:last-child {
    margin-bottom: 0 !important;
}
.card-img-bg {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    background-size: cover;
    border-radius: 0.375rem;
    -webkit-backface-visibility: hidden;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .card-img-bg {
        -webkit-transition: none;
        transition: none;
    }
}
.card-img-bg ~ .card-body {
    position: relative;
}
.card:hover .card-img-bg {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
.card .animate-this,
.card .card-image,
.card > a {
    min-height: 1px;
}
.card-group .card .mask {
    border-radius: 0;
}
.card-columns-2 {
    -webkit-column-count: 2 !important;
    -moz-column-count: 2 !important;
    column-count: 2 !important;
}
@media (min-width: 992px) {
    .card-columns-3 {
        -webkit-column-count: 3 !important;
        -moz-column-count: 3 !important;
        column-count: 3 !important;
    }
}
@media (max-width: 1199.98px) {
    .card-columns-3 {
        -webkit-column-count: 2 !important;
        -moz-column-count: 2 !important;
        column-count: 2 !important;
    }
}
@media (max-width: 767.98px) {
    .card-columns-3 {
        -webkit-column-count: 1 !important;
        -moz-column-count: 1 !important;
        column-count: 1 !important;
    }
}
@media (min-width: 992px) {
    .card-columns-4 {
        -webkit-column-count: 4 !important;
        -moz-column-count: 4 !important;
        column-count: 4 !important;
    }
}
.card-translucent-dark {
    background: hsla(0, 0%, 100%, 0.2);
}
.card-translucent-light {
    background: rgba(0, 0, 0, 0.2);
}
.card-comment-box {
    width: 100%;
}
.card-comment-box input,
.card-comment-box textarea {
    font-size: 0.875rem;
    border: 0;
    padding: 0.3125rem 0;
    margin: 0;
    color: #3c4858;
    outline: none;
    resize: none;
}
.card-comment-box input,
.card-comment-box input:focus,
.card-comment-box textarea,
.card-comment-box textarea:focus {
    -webkit-box-shadow: none;
    box-shadow: none;
    background: transparent;
}
.card-profile .card-profile-image {
    width: 7rem;
    height: 7rem;
    border: 0.1875rem solid #fff;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
.card-profile .card-profile-image:hover {
    -webkit-transform: scale(1.1) translateY(-50%);
    transform: scale(1.1) translateY(-50%);
}
.card-profile .card-body {
    position: relative;
    z-index: 2;
    margin-top: -3.5rem;
}
.card-profile-cover {
    max-height: 300px;
    overflow: hidden;
}
.card-pricing .card-header {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
}
.card-pricing .list-unstyled li {
    padding: 0.5rem 0;
}
.card-pricing.popular {
    z-index: 1;
}
.card-pricing.scale-110 {
    border-radius: 0.375rem !important;
}
@media (max-width: 991.98px) {
    .card-pricing.scale-110 {
        -webkit-transform: scale(1) !important;
        transform: scale(1) !important;
    }
}
.card-product {
    overflow: hidden;
}
.card-product .card-image {
    padding: 1.5rem;
}
.card-product .card-image img {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
}
@media (prefers-reduced-motion: reduce) {
    .card-product .card-image img {
        -webkit-transition: none;
        transition: none;
    }
}
.card-product:hover .card-image img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
.card-product .card-price,
.card-product .card-title {
    font-size: 1rem;
    font-weight: 600;
}
.card-product .card-price {
    display: block;
}
.card-product .product-colors a {
    display: inline-block;
    float: none !important;
    width: 1rem;
    height: 1rem;
    margin-right: 3px;
    margin-bottom: 0;
    border-radius: 50%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .card-product .product-colors a {
        -webkit-transition: none;
        transition: none;
    }
}
.card-product .product-colors a:hover {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
.card-product .card-product-actions {
    opacity: 0;
    width: 80px;
    height: 40px;
    position: absolute;
    top: 10px;
    left: 10px;
}
.card-product .card-product-actions.in {
    opacity: 1;
}
.card-product .card-product-actions.animated {
    -webkit-animation-duration: 0.5s;
    animation-duration: 0.5s;
}
.card-product .card-product-actions .action-item {
    display: inline-block;
    float: left;
    width: 40px;
    height: 40px;
    line-height: 40px;
}
.card-browser {
    background-color: #273444;
    position: relative;
}
.card-browser:before {
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: -webkit-linear-gradient(40deg, transparent, #273444);
    content: "";
    border-radius: 6px;
    will-change: transform;
}
.card-browser .card-header {
    position: relative;
    background-color: rgba(58, 77, 100, 0.8);
    border: 0;
}
.card-browser .card-header .dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 3px;
}
.card-browser .card-body {
    min-height: 300px;
    position: relative;
    overflow-x: hidden;
}
.card-browser .card-body pre {
    color: #fff;
    margin: 0;
}
.card-overlay .card-img-overlay {
    color: #fff;
}
.card-overlay .card-footer {
    background-color: #fff;
    border: 0;
}
.card-hover-overlay {
    overflow: hidden;
}
.card-hover-overlay .card-img-overlay {
    opacity: 0;
    background-color: rgba(39, 52, 68, 0.4);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: opacity 0.35s;
    transition: opacity 0.35s;
}
@media (prefers-reduced-motion: reduce) {
    .card-hover-overlay .card-img-overlay {
        -webkit-transition: none;
        transition: none;
    }
}
.card-hover-overlay .card-img-overlay:after,
.card-hover-overlay .card-img-overlay:before {
    pointer-events: none;
}
.card-hover-overlay .card-img-overlay .actions .action-item,
.card-hover-overlay .card-img-overlay .overlay-actions,
.card-hover-overlay .card-img-overlay .overlay-text {
    -webkit-transform: translate3d(0, 200%, 0);
    transform: translate3d(0, 200%, 0);
    -webkit-transition: -webkit-transform 0.35s;
    transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
    transition: transform 0.35s, -webkit-transform 0.35s;
}
@media (prefers-reduced-motion: reduce) {
    .card-hover-overlay .card-img-overlay .actions .action-item,
    .card-hover-overlay .card-img-overlay .overlay-actions,
    .card-hover-overlay .card-img-overlay .overlay-text {
        -webkit-transition: none;
        transition: none;
    }
}
.card-hover-overlay:hover .card-img-overlay {
    opacity: 1;
}
.card-hover-overlay:hover .card-img-overlay .actions .action-item,
.card-hover-overlay:hover .card-img-overlay .overlay-actions,
.card-hover-overlay:hover .card-img-overlay .overlay-text {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
}
.card-hover-overlay:hover .card-img-overlay .actions .action-item:first-child {
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
}
.card-hover-overlay:hover .card-img-overlay .actions .action-item:nth-child(2) {
    -webkit-transition-delay: 0.15s;
    transition-delay: 0.15s;
}
.card-hover-overlay:hover .card-img-overlay .actions .action-item:nth-child(3) {
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
}
.accordion .card {
    margin-bottom: 0;
}
.accordion .card-header {
    position: relative;
    cursor: pointer;
}
.accordion .card-header:after {
    content: "+";
    position: absolute;
    right: 1.5rem;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    font-family: Nunito, sans-serif;
    font-weight: 700;
}
.accordion .card-header[aria-expanded="false"]:after {
    content: "+";
}
.accordion .card-header[aria-expanded="true"]:after {
    content: "-";
}
.accordion .card-header[aria-expanded="true"] .heading {
    color: {{ $settings->website_theme }};
}
.accordion-spaced .card {
    margin-bottom: 1.5rem;
    border-radius: 0.375rem !important;
}
.card-progress {
    margin-bottom: 0.75rem;
}
.card-progress .card-body {
    padding: 1rem;
}
.card-progress .progress {
    height: 2px;
    margin: 2px 4px;
}
.card-list {
    background-color: #fff;
    border: 1px solid #eff2f7;
    padding: 1rem;
    margin-bottom: 20px;
    border-radius: 0.375rem;
    -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
    box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
}
.card-list .card {
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}
.card-list-body .card:last-of-type {
    margin-bottom: 0 !important;
}
.empty-container:after {
    pointer-events: none;
    content: attr(data-placeholder);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 0.875rem;
    font-weight: 500;
    color: #becdd9;
    border: 1px dashed #becdd9;
    height: 0;
    opacity: 0;
    border-radius: 0.375rem;
    -webkit-transition: opacity 0.35s ease;
    transition: opacity 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
    .empty-container:after {
        -webkit-transition: none;
        transition: none;
    }
}
.empty-container:only-child:after {
    opacity: 1;
    height: 70px;
}
.card-list-flush {
    border: 0;
    border-radius: 0;
}
.card-list-flush,
.card-placeholder {
    -webkit-box-shadow: none;
    box-shadow: none;
}
.card-placeholder {
    padding: 3rem 0;
    background-color: transparent;
    border: 1px dashed #e5e9f2;
}
.card-placeholder:hover {
    border-color: #cdd5e6;
}
.card-placeholder .card-body {
    text-align: center;
}
.chart {
    position: relative;
    height: 300px;
}
.chart-sm {
    height: 230px;
}
.chart-legend {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-top: 2.5rem;
    font-size: 0.875rem;
    text-align: center;
    color: #8492a6;
}
.chart-legend-item {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.chart-legend-item + .chart-legend-item {
    margin-left: 1rem;
}
.chart-legend-indicator {
    display: inline-block;
    width: 0.5rem;
    height: 0.5rem;
    margin-right: 0.375rem;
    border-radius: 50%;
}
#chart-tooltip {
    z-index: 0;
}
#chart-tooltip .arrow {
    top: 100%;
    left: 50%;
    -webkit-transform: translateX(-50%) translateX(-0.5rem);
    transform: translateX(-50%) translateX(-0.5rem);
}
.chart-info-overlay {
    position: absolute;
    top: 0;
    left: 5%;
    max-width: 350px;
    padding: 20px;
    z-index: 1;
}
.client img {
    width: 100%;
    max-width: 6rem;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}
.close > span:not(.sr-only) {
    color: rgba(31, 45, 61, 0.5);
}
.close:focus > span:not(.sr-only),
.close:hover > span:not(.sr-only) {
    color: rgba(31, 45, 61, 0.8);
}
.collage {
    height: 600px;
}
.collage .bg-img-holder {
    position: relative;
    width: 100%;
    height: 100%;
    z-index: 0;
}
.collage .collage-bg {
    z-index: 3;
}
.collage .collage-back {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}
.collage .collage-back img {
    max-width: 100%;
}
.collage .collage-front {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
}
.collage .collage-front img {
    max-height: 100%;
}
@media (max-width: 991.98px) {
    .collage .collage-front {
        height: 100% !important;
    }
}
.custom-control-label {
    line-height: 1.8;
}
.checklist .custom-control-input:checked ~ .custom-control-label {
    text-decoration: line-through;
}
.checklist .card {
    margin-bottom: 0.5rem;
}
.checklist .card:last-child {
    margin-bottom: 0;
}
.custom-color {
    list-style: none;
}
.custom-color:after,
.custom-color:before {
    content: "";
    display: table;
}
.custom-color:after {
    clear: both;
}
.custom-color label {
    width: 2.25rem;
    height: 2.25rem;
    float: left;
    padding: 0.375rem;
    margin-bottom: 0;
    margin-right: 0.375rem;
    display: block;
    text-align: center;
    opacity: 0.7;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
    -webkit-transform: scale(0.95);
    transform: scale(0.95);
}
@media (prefers-reduced-motion: reduce) {
    .custom-color label {
        -webkit-transition: none;
        transition: none;
    }
}
.custom-color label:hover {
    cursor: pointer;
    opacity: 1;
}
.custom-color label i,
.custom-color label svg {
    opacity: 0;
    color: hsla(0, 0%, 100%, 0.7);
}
.custom-color input {
    left: -9999px;
    position: absolute;
}
.custom-color input:checked + label {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    opacity: 1;
}
.custom-color input:checked + label i,
.custom-color input:checked + label svg {
    opacity: 1;
}
.custom-color-sm label {
    width: 1.25rem;
    height: 1.25rem;
}
.checkbox-alphanumeric {
    list-style: none;
}
.checkbox-alphanumeric + .checkbox-alphanumeric {
    margin-left: 0.25rem;
}
.checkbox-alphanumeric:after,
.checkbox-alphanumeric:before {
    content: "";
    display: table;
}
.checkbox-alphanumeric:after {
    clear: both;
}
.checkbox-alphanumeric > :not(:last-child) label {
    margin-right: 0.375rem;
}
.checkbox-alphanumeric label {
    width: 2.25rem;
    height: 2.25rem;
    float: left;
    padding: 0.375rem 0;
    margin-bottom: 0;
    display: block;
    color: #c0ccda;
    font-weight: 400;
    font-size: 0.875rem;
    text-align: center;
    background: transparent;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    -webkit-transform: scale(0.95);
    transform: scale(0.95);
    background: #e5e9f2;
    border: 0 solid #eff2f7;
    border-radius: 0.25rem;
}
.checkbox-alphanumeric label img {
    max-width: 100%;
}
.checkbox-alphanumeric label:hover {
    cursor: pointer;
    border-color: #e5e9f2;
}
.checkbox-alphanumeric input {
    left: -9999px;
    position: absolute;
}
.checkbox-alphanumeric input:checked ~ label {
    color: {{ $settings->website_theme }};
    border-color: {{ $settings->website_theme }};
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
.checkbox-alphanumeric-sm label {
    width: 1.25rem;
    height: 1.25rem;
}
.custom-input-file {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    outline: none;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}
.custom-input-file + label {
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
    display: block;
    overflow: hidden;
    padding: 0.625rem 1.25rem;
    border: 1px solid #e0e6ed;
    border-radius: 0.25rem;
    color: #8492a6;
    background-color: #fff;
    outline: none;
    margin: 0;
}
.custom-input-file + label i {
    width: 1em;
    height: 1em;
    vertical-align: middle;
    fill: currentColor;
    margin-top: -0.25em;
    margin-right: 0.5em;
}
.custom-input-file + label:hover,
.custom-input-file.has-focus + label,
.custom-input-file:focus + label {
    background-color: #fff;
}
.no-js .custom-input-file + label {
    display: none;
}
.custom-input-file--2 + label {
    color: #fff;
    border-color: {{ $settings->website_theme }};
    background: {{ $settings->website_theme }};
}
.custom-input-file--2 + label:hover,
.custom-input-file--2.has-focus + label,
.custom-input-file--2:focus + label {
    color: #fff;
    border-color: #5800cc;
    background: #5800cc;
}
.custom-input-file-link + label {
    padding: 0;
    border: 0;
    background: transparent;
    color: {{ $settings->website_theme }};
    font-size: 0.875rem;
    font-weight: 600;
}
.custom-input-file-link + label:hover,
.custom-input-file-link.has-focus + label,
.custom-input-file-link:focus + label {
    background-color: transparent;
}
.custom-switch {
    min-height: 1.5rem;
}
.custom-switch .custom-control-label:before {
    top: 0;
    height: 1.5rem;
    border-radius: 0.75rem;
}
.custom-switch .custom-control-label:after {
    top: 0.1875rem;
    left: -3.5625rem;
    background-color: #fff;
}
.custom-switch .custom-control-input:checked ~ .custom-control-label:after {
    background-color: #fff;
    -webkit-transform: translateX(1.5rem);
    transform: translateX(1.5rem);
}
.divider {
    position: relative;
    border: 0;
    width: 100%;
}
.divider-md {
    width: 60%;
}
.divider-sm {
    width: 40%;
}
.divider-fade:before {
    content: "";
    display: block;
    width: 80%;
    position: relative;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    height: 1px;
    background: radial-gradient(
        ellipse at center,
        #dee4ef 0,
        hsla(0, 0%, 100%, 0) 75%
    );
}
.divider-fade.divider-dark:before {
    background: radial-gradient(
        ellipse at center,
        hsla(0, 0%, 100%, 0.2) 0,
        rgba(31, 45, 61, 0) 75%
    );
}
.divider-icon {
    height: 20px;
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle fill='none' stroke='%23dee4ef' stroke-width='1' cx='10' cy='10' r='7'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: 50% 50%;
}
.divider-icon:after,
.divider-icon:before {
    content: "";
    position: absolute;
    top: 50%;
    max-width: calc(50% - 25px);
    width: 100%;
    border-bottom: 1px solid #dee4ef;
}
.divider-icon:before {
    right: calc(50% + 25px);
}
.divider-icon:after {
    left: calc(50% + 25px);
}
.divider-icon-fade:after,
.divider-icon-fade:before {
    border: 0;
    height: 1px;
}
.divider-icon-fade:before {
    background: radial-gradient(
        ellipse at right,
        #dee4ef 0,
        hsla(0, 0%, 100%, 0) 75%
    );
}
.divider-icon-fade:after {
    background: radial-gradient(
        ellipse at left,
        #dee4ef 0,
        hsla(0, 0%, 100%, 0) 75%
    );
}
.divider-vertical {
    width: 1px;
    height: 100px;
    margin-left: auto;
    margin-right: auto;
    border-left: 1px solid #dee4ef;
}
.divider-vertical-fade {
    border: 0;
    background: radial-gradient(
        ellipse at center,
        #dee4ef 0,
        hsla(0, 0%, 100%, 0) 75%
    );
}
.dropdown,
.dropleft,
.dropright,
.dropup {
    display: inline-block;
}
.dropdown-menu {
    font-size: 0.875rem;
}
.dropdown-menu .dropdown-item > i,
.dropdown-menu .dropdown-item > svg {
    margin-right: 1rem;
    font-size: 1rem;
}
.dropdown-menu .dropdown-item img,
.dropdown-menu .dropdown-item svg {
    width: auto;
    height: 14px;
    margin-right: 0.5rem;
    position: relative;
    top: -1px;
}
.dropdown-menu .list-group-item .media p {
    color: #8492a6;
    line-height: 1.4;
}
.dropdown-menu .list-group-item .media:hover .heading {
    color: {{ $settings->website_theme }};
}
.dropdown-menu-dark {
    background: #282f37;
    border: 0;
}
.dropdown-menu-dark .dropdown-item {
    color: hsla(0, 0%, 100%, 0.9);
}
.dropdown-menu-dark .dropdown-item:active,
.dropdown-menu-dark .dropdown-item:focus,
.dropdown-menu-dark .dropdown-item:hover {
    color: #fff;
    background: rgba(60, 72, 88, 0.1);
}
.dropdown-menu-dark .dropdown-divider {
    background: rgba(31, 45, 61, 0.2);
}
@media (min-width: 992px) {
    .dropdown-menu-arrow:before {
        content: "";
        background: #fff;
        -webkit-box-shadow: none;
        box-shadow: none;
        display: block;
        height: 16px;
        width: 16px;
        left: 1.25rem;
        position: absolute;
        z-index: -5;
        border-radius: 0.2rem;
    }
    .dropdown-menu-arrow:before,
    .dropdown-menu-arrow[x-placement="bottom-end"]:before {
        bottom: 100%;
        -webkit-transform: rotate(-45deg) translateY(1rem);
        transform: rotate(-45deg) translateY(1rem);
    }
    .dropdown-menu-arrow[x-placement="top-end"]:before {
        bottom: 0;
        -webkit-transform: rotate(-45deg) translateY(0.5rem);
        transform: rotate(-45deg) translateY(0.5rem);
    }
    .dropdown-menu-arrow.dropdown-menu-right:before {
        right: 2.5rem;
        left: auto;
    }
    .dropdown-menu-sm {
        min-width: 10rem !important;
        border: 0.2rem;
    }
    .dropdown-menu-sm.dropdown-menu-arrow.dropdown-menu-right:before {
        right: 2rem;
        left: auto;
    }
    .dropdown-menu-lg {
        min-width: 25rem !important;
        border-radius: 0.25rem;
    }
    .dropdown-menu-xl {
        min-width: 35rem !important;
        border-radius: 0.25rem;
    }
}
@media (min-width: 992px) {
    .dropdown-fluid {
        position: static;
    }
    .dropdown-fluid .dropdown-menu {
        width: calc(100% - 20px);
        max-width: 1200px;
        left: 10px;
        right: auto;
    }
    .dropdown-fluid .dropdown-menu-right {
        right: 10px;
        left: auto;
    }
}
@media (min-width: 992px) {
    .dropdown-animate > .dropdown-menu {
        opacity: 0;
        position: absolute;
        display: block;
        pointer-events: none;
    }
    .dropdown-animate:not([data-toggle="hover"]) .dropdown-menu.show {
        pointer-events: auto;
        -webkit-animation: show-dropdown 0.3s ease forwards;
        animation: show-dropdown 0.3s ease forwards;
    }
    .dropdown-animate:not([data-toggle="hover"]) .dropdown-menu.hide {
        display: block;
        -webkit-animation: hide-dropdown 0.3s ease backwards;
        animation: hide-dropdown 0.3s ease backwards;
    }
    .dropdown-animate[data-toggle="hover"] > .dropdown-menu {
        display: block;
        margin: 0;
        -webkit-transform: translateX(0) translateY(-3px) scale(0.97);
        transform: translateX(0) translateY(-3px) scale(0.97);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (min-width: 992px) and (prefers-reduced-motion: reduce) {
    .dropdown-animate[data-toggle="hover"] > .dropdown-menu {
        -webkit-transition: none;
        transition: none;
    }
}
@media (min-width: 992px) {
    .dropdown-animate[data-toggle="hover"]:hover > .dropdown-menu {
        display: block;
        opacity: 1;
        pointer-events: auto;
        visibility: visible;
        -webkit-transform: translateX(0) translateY(-3px) scale(1);
        transform: translateX(0) translateY(-3px) scale(1);
    }
}
@-webkit-keyframes show-dropdown {
    0% {
        opacity: 0;
        -webkit-transform: translateX(0) translateY(-3px) scale(0.97);
        transform: translateX(0) translateY(-3px) scale(0.97);
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    to {
        -webkit-transform: translateX(0) translateY(-3px) scale(1);
        transform: translateX(0) translateY(-3px) scale(1);
        opacity: 1;
    }
}
@keyframes show-dropdown {
    0% {
        opacity: 0;
        -webkit-transform: translateX(0) translateY(-3px) scale(0.97);
        transform: translateX(0) translateY(-3px) scale(0.97);
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    to {
        -webkit-transform: translateX(0) translateY(-3px) scale(1);
        transform: translateX(0) translateY(-3px) scale(1);
        opacity: 1;
    }
}
@-webkit-keyframes hide-dropdown {
    0% {
        opacity: 1;
        -webkit-transform: translateX(-16px) translateY(-3px) scale(1);
        transform: translateX(-16px) translateY(-3px) scale(1);
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    to {
        opacity: 0;
        -webkit-transform: translateX(-16px) translateY(-3px) scale(0.97);
        transform: translateX(-16px) translateY(-3px) scale(0.97);
    }
}
@keyframes hide-dropdown {
    0% {
        opacity: 1;
        -webkit-transform: translateX(-16px) translateY(-3px) scale(1);
        transform: translateX(-16px) translateY(-3px) scale(1);
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    to {
        opacity: 0;
        -webkit-transform: translateX(-16px) translateY(-3px) scale(0.97);
        transform: translateX(-16px) translateY(-3px) scale(0.97);
    }
}
.dropdown-menu .dropdown-menu {
    left: 100%;
    margin: 0;
    right: auto;
    top: 0;
}
.dropdown-submenu {
    display: block;
    position: relative;
}
.dropdown-submenu > .dropdown-menu:after {
    border: 0 !important;
}
.dropdown-submenu > .dropdown-item:after,
.dropdown-submenu > .list-group-item:after {
    margin-left: 10.2px;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    font-family: Font Awesome\5 Pro, Font Awesome\5 Free;
    font-weight: 700;
    content: "\F105";
}
.dropdown-submenu > .dropdown-item:empty:after,
.dropdown-submenu > .list-group-item:empty:after {
    margin-left: 0;
}
.dropdown-submenu > .dropdown-item:after,
.dropdown-submenu > .list-group-item:after {
    position: absolute;
    top: 50%;
    right: 1rem;
    margin-left: 0;
    font-size: 0.75rem;
}
@media (max-width: 991.98px) {
    .dropdown-submenu .dropdown-menu {
        padding: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        top: 0;
    }
    .dropdown-submenu .dropdown-item {
        padding-left: 3rem;
    }
}
.dropdown-extend {
    position: static;
}
.dropdown-extend .dropdown-menu {
    width: 100%;
    padding-right: 10px;
    padding-left: 10px;
    margin-right: auto;
    margin-left: auto;
}
@media (min-width: 576px) {
    .dropdown-extend .dropdown-menu {
        max-width: 540px;
    }
}
@media (min-width: 768px) {
    .dropdown-extend .dropdown-menu {
        max-width: 720px;
    }
}
@media (min-width: 992px) {
    .dropdown-extend .dropdown-menu {
        max-width: 960px;
    }
}
@media (min-width: 1200px) {
    .dropdown-extend .dropdown-menu {
        max-width: 1320px;
    }
}
.footer {
    background-color: #f8f8fb;
    padding-top: 3rem;
}
.footer .nav-link {
    font-size: 0.875rem;
}
.footer .list-unstyled li a {
    display: inline-block;
    padding: 0.125rem 0;
}
.footer-light p {
    color: #8492a6;
}
.footer-light .heading {
    color: #3c4858;
}
.footer-light .list-unstyled li a {
    color: #8492a6;
}
.footer-light .list-unstyled li a:hover {
    color: #8492a6;
    text-decoration: underline;
}
.footer-light .copyright a {
    color: #8492a6;
}
.footer-light .copyright a:hover {
    color: {{ $settings->website_theme }};
}
.footer-dark p {
    color: hsla(0, 0%, 100%, 0.8);
}
.footer-dark .heading {
    color: #fff;
}
.footer-dark .list-unstyled li a {
    color: hsla(0, 0%, 100%, 0.8);
}
.footer-dark .copyright a,
.footer-dark .list-unstyled li a:hover {
    color: hsla(0, 0%, 100%, 0.9);
}
.footer-dark .copyright a:hover {
    color: #fff;
}
.footer-dark {
    background-color: #273444;
    color: #d3dce6;
}
.footer-dark .heading {
    color: #eff2f7;
}
.footer-dark .footer-link,
.footer-dark .list-unstyled li a,
.footer-dark .nav .nav-item .nav-link {
    color: #d3dce6;
}
.footer-dark .footer-link:hover,
.footer-dark .list-unstyled li a:hover,
.footer-dark .nav .nav-item .nav-link:hover {
    color: #fff;
}
.footer-dark hr {
    border-color: rgba(216, 203, 187, 0.1);
}
.footer-rotate {
    max-width: 1990px;
    margin-top: -26rem;
    margin-left: auto;
    margin-right: auto;
    padding-top: 26rem;
    position: relative;
    overflow: hidden;
}
.footer-rotate:before {
    content: "";
    background: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 2000 1000' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23f8f8fb' d='M2000,0V923.45l-195.85-538.1a76.07875,76.07875,0,0,0-58.25-48.89L536.65,123.24a76.12151,76.12151,0,0,0-71.44,26L0,703.65V0Z'/%3E%3C/svg%3E")
        no-repeat scroll 50%/100% 100% border-box;
    right: calc(50% - 1000px);
    display: block;
    min-width: 2000px;
    height: 1000px;
    pointer-events: none;
    position: absolute;
    width: calc(100% + 10px);
    z-index: 10;
    top: 0;
}
.form-control:focus::-webkit-input-placeholder {
    color: #d3dce6;
}
.form-control:focus::-moz-placeholder {
    color: #d3dce6;
}
.form-control:focus:-ms-input-placeholder {
    color: #d3dce6;
}
.form-control:focus::-ms-input-placeholder {
    color: #d3dce6;
}
.form-control:focus::placeholder {
    color: #d3dce6;
}
.form-control-muted {
    border-color: #edf0f5;
}
.form-control-muted,
.form-control-muted:focus {
    background-color: #edf0f5;
}
.form-control-emphasized {
    background-color: #fff;
    border-color: #fff;
    -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1),
        0 2px 4px rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.1);
}
.form-control-emphasized:focus {
    background-color: #fff;
    border-color: transparent;
    -webkit-box-shadow: 0 0 0 2px {{ $settings->website_theme }};
    box-shadow: 0 0 0 2px {{ $settings->website_theme }};
}
.form-control-flush {
    padding: 0;
}
.form-control-flush,
.form-control-flush:focus {
    border-width: 0;
    background-color: transparent;
    -webkit-box-shadow: none;
    box-shadow: none;
}
textarea[resize="none"] {
    resize: none !important;
}
textarea[resize="both"] {
    resize: both !important;
}
textarea[resize="vertical"] {
    resize: vertical !important;
}
textarea[resize="horizontal"] {
    resize: horizontal !important;
}
.form-control-xl {
    padding: 1.5rem 2rem;
    font-size: 1.5rem;
    line-height: 1.5;
    border-radius: 0.5rem;
}
.form-primary .form-control {
    color: #fff;
    background-color: #5400c2;
    border: 1px solid #5400c2;
}
.form-primary .form-control:focus {
    background-color: #4b00ad;
    border: 1px solid {{ $settings->website_theme }};
}
.form-primary .form-control::-webkit-input-placeholder {
    color: hsla(0, 0%, 100%, 0.8);
}
.form-primary .form-control::-moz-placeholder {
    color: hsla(0, 0%, 100%, 0.8);
}
.form-primary .form-control:-ms-input-placeholder {
    color: hsla(0, 0%, 100%, 0.8);
}
.form-primary .form-control::-ms-input-placeholder {
    color: hsla(0, 0%, 100%, 0.8);
}
.form-primary .form-control::placeholder {
    color: hsla(0, 0%, 100%, 0.8);
}
.form-danger .form-control {
    color: #fff;
    background-color: #f22c00;
    border: 1px solid #f22c00;
}
.form-danger .form-control:focus {
    background-color: #dd2900;
    border: 1px solid #dd2900;
}
.form-danger .form-control::-webkit-input-placeholder {
    color: hsla(0, 0%, 100%, 0.8);
}
.form-danger .form-control::-moz-placeholder {
    color: hsla(0, 0%, 100%, 0.8);
}
.form-danger .form-control:-ms-input-placeholder {
    color: hsla(0, 0%, 100%, 0.8);
}
.form-danger .form-control::-ms-input-placeholder {
    color: hsla(0, 0%, 100%, 0.8);
}
.form-danger .form-control::placeholder {
    color: hsla(0, 0%, 100%, 0.8);
}
.form-control-label {
    color: #3c4858;
    font-size: 0.875rem;
    font-weight: 600;
}
.has-floating-label {
    position: relative;
}
.has-floating-label .control-label {
    font-size: 1rem;
    pointer-events: none;
    position: absolute;
    top: 50%;
    padding: 0 0.625rem;
    margin: 0 0.625rem;
    color: #aabacd;
    -webkit-transform: translateY(-50%) scale(1);
    transform: translateY(-50%) scale(1);
    -webkit-transform-origin: left top;
    transform-origin: left top;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    z-index: 1;
}
.has-floating-label .input-group .control-label {
    left: 2rem;
}
.has-floating-label.focused .control-label {
    padding: 0;
    margin: 0;
    top: -1.25rem;
    left: 0;
    -webkit-transform: translateY(0) scale(0.85);
    transform: translateY(0) scale(0.85);
}
.has-floating-label .control-label-xl {
    font-size: 1.5rem;
    padding: 0 1rem;
    margin: 0 1rem;
}
.has-floating-label .control-label-lg {
    font-size: 1.25rem;
    padding: 0 0.9375rem;
    margin: 0 0.9375rem;
}
.has-floating-label .control-label-sm {
    font-size: 0.875rem;
    padding: 0 0.625rem;
    margin: 0 0.625rem;
}
.form-stacked .form-control {
    position: relative;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.form-stacked .form-control:first-of-type {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.form-stacked .form-control:not(:first-of-type):not(:last-of-type) {
    margin-bottom: -1px;
    border-radius: 0;
}
.form-stacked .form-control:last-of-type {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.form-stacked .form-control:focus {
    z-index: 2;
}
.frame-laptop {
    position: relative;
}
.frame-laptop .frame-inner {
    overflow: hidden;
    position: absolute;
    width: 78%;
    height: 74%;
    left: 0;
    top: 0;
    background-color: #111;
    margin: 7.5% 11% 0;
    border-radius: 0.25rem;
    -webkit-box-shadow: inset 0 2px 5px 0 rgba(0, 0, 0, 0.2);
    box-shadow: inset 0 2px 5px 0 rgba(0, 0, 0, 0.2);
}
.kanban-board {
    -ms-flex: 1;
    flex: 1;
    white-space: nowrap;
    overflow-x: scroll;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-right: -6.6666666667px;
    margin-left: -6.6666666667px;
}
.kanban-board,
.kanban-col {
    -webkit-box-flex: 1;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.kanban-col {
    max-width: 19.5rem;
    -ms-flex: 1 0 auto;
    flex: 1 0 auto;
    width: calc(100vw - 24px);
    max-height: 100%;
    padding-right: 6.6666666667px;
    padding-left: 6.6666666667px;
    outline: none;
}
.kanban-col .card-list {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    max-height: 100%;
    height: 100%;
    margin-bottom: 0;
    overflow: hidden;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}
.kanban-col .card-list-body {
    height: 100%;
}
.kanban-col .card-list-flush {
    border-right: 1px solid #eff2f7;
}
.kanban-col:first-child .card-list-flush {
    margin-left: 1rem;
}
.kanban-col:last-child .card-list-flush {
    margin-right: 1rem;
    border-right: 0;
}
#header-main + section {
    padding-top: 7rem !important;
}
#header-main + .header-1 {
    padding-top: 14rem !important;
}
@media (min-width: 768px) {
    .header-account-page {
        height: 350px;
    }
}
@media (max-width: 991.98px) {
    .header-account-page {
        padding-top: 9rem;
    }
}
.header-account-page .btn-group-nav {
    position: relative;
    z-index: 1;
    -webkit-transform: translateY(50%);
    transform: translateY(50%);
}
@media (min-width: 768px) {
    .header-web-app .row:last-of-type {
        margin-bottom: -12rem;
        z-index: 2;
        position: relative;
    }
    .header-web-app + section {
        padding-top: 12rem;
    }
}
.icon {
    width: 3rem;
    height: 3rem;
}
.icon i,
.icon svg {
    font-size: 2.75rem;
}
.icon img {
    width: 3rem;
    height: 3rem;
}
.icon + .icon-text {
    padding-left: 1rem;
    width: calc(100% - 3rem - 1);
}
.icon-xl {
    width: 5rem;
    height: 5rem;
}
.icon-xl i,
.icon-xl svg {
    font-size: 4.75rem;
}
.icon-xl img {
    width: 5rem;
    height: 5rem;
}
.icon-xl + .icon-text {
    width: calc(100% - 5rem - 1);
}
.icon-lg {
    width: 4rem;
    height: 4rem;
}
.icon-lg i,
.icon-lg svg {
    font-size: 3.75rem;
}
.icon-lg img {
    width: 4rem;
    height: 4rem;
}
.icon-lg + .icon-text {
    width: calc(100% - 4rem - 1);
}
.icon-sm {
    width: 2rem;
    height: 2rem;
}
.icon-sm i,
.icon-sm svg {
    font-size: 1.75rem;
}
.icon-sm img {
    width: 2rem;
    height: 2rem;
}
.icon-sm + .icon-text {
    width: calc(100% - 2rem - 1);
}
.icon-xs {
    width: 1rem;
    height: 1rem;
}
.icon-xs i,
.icon-xs svg {
    font-size: 0.75rem;
}
.icon-xs img {
    width: 1rem;
    height: 1rem;
}
.icon-xs + .icon-text {
    width: calc(100% - 1rem - 1);
}
.icon-shape {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    vertical-align: middle;
    border-radius: 0.25rem;
}
.icon-shape i,
.icon-shape svg {
    font-size: 1.125rem;
}
.icon-shape.icon-xl i,
.icon-shape.icon-xl svg {
    font-size: 2.25rem;
}
.icon-shape.icon-lg i,
.icon-shape.icon-lg svg {
    font-size: 1.75rem;
}
.icon-shape.icon-sm i,
.icon-shape.icon-sm svg {
    font-size: 1rem;
}
.icon-shape.icon-xs i,
.icon-shape.icon-xs svg {
    font-size: 0.75rem;
}
.icon-primary {
    color: {{ $settings->website_theme }};
    background-color: {{ $settings->website_theme }};
}
.icon-outline-primary {
    color: #4f00b8;
    border: 3px solid rgba(139, 51, 255, 0.5);
}
.icon-secondary {
    color: #eff2f7;
    background-color: #fcfcfd;
}
.icon-outline-secondary {
    color: #bdcbe2;
    border: 3px solid hsla(0, 0%, 100%, 0.5);
}
.icon-success {
    color: #36b37e;
    background-color: #d7f0e5;
}
.icon-outline-success {
    color: #218058;
    border: 3px solid rgba(81, 203, 151, 0.5);
}
.icon-info {
    color: #00b8d9;
    background-color: #ccf1f7;
}
.icon-outline-info {
    color: #007b92;
    border: 3px solid rgba(13, 218, 255, 0.5);
}
.icon-warning {
    color: #ffab00;
    background-color: #fec;
}
.icon-outline-warning {
    color: #b87b00;
    border: 3px solid rgba(255, 188, 51, 0.5);
}
.icon-danger {
    color: #ff5630;
    background-color: #ffddd6;
}
.icon-outline-danger {
    color: #e82b00;
    border: 3px solid rgba(255, 128, 99, 0.5);
}
.icon-light {
    color: #eff2f7;
    background-color: #fcfcfd;
}
.icon-outline-light {
    color: #bdcbe2;
    border: 3px solid hsla(0, 0%, 100%, 0.5);
}
.icon-dark {
    color: #273444;
    background-color: #d4d6da;
}
.icon-outline-dark {
    color: #0c1118;
    border: 3px solid rgba(58, 77, 100, 0.5);
}
.icon-neutral {
    color: #fff;
    background-color: #fff;
}
.icon-outline-neutral {
    color: #dddada;
    border: 3px solid hsla(0, 0%, 100%, 0.5);
}
.icon-white {
    color: #fff;
    background-color: #fff;
}
.icon-outline-white {
    color: #dddada;
    border: 3px solid hsla(0, 0%, 100%, 0.5);
}
.icon-actions > a {
    display: inline-block;
    margin-right: 0.75rem;
    color: #c0ccda;
    font-size: 0.875rem;
}
.icon-actions > a:last-of-type {
    margin-right: 0;
}
.icon-actions > a span {
    margin-left: 0.1875rem;
    font-weight: 600;
    color: #8492a6;
}
.icon-actions > a:hover span {
    color: #68788f;
}
.icon-actions > a,
.icon-actions > a.active,
.icon-actions > a:hover {
    color: #3c4858;
}
.icon-actions > .favorite.active,
.icon-actions > .favorite:hover {
    color: #fc0;
}
.icon-actions > .love.active,
.icon-actions > .love:hover {
    color: #ff5630;
}
.icon-actions > .like.active,
.icon-actions > .like:hover {
    color: #2684ff;
}
.icon-actions-lg a {
    font-size: 1.25rem;
    margin-right: 0.875rem;
}
.has-floating-items {
    padding-bottom: 18rem !important;
}
.has-floating-items svg {
    height: auto;
}
@media (min-width: 768px) {
    .has-floating-items {
        padding-bottom: 18rem !important;
    }
}
.floating-items {
    position: relative;
    left: 50%;
    margin-left: -570px;
    z-index: 10;
}
.icon-floating {
    position: absolute;
    text-align: center;
    -webkit-box-shadow: 0 30px 40px 0 rgba(31, 45, 61, 0.1);
    box-shadow: 0 30px 40px 0 rgba(31, 45, 61, 0.1);
    border-radius: 50%;
}
.icon-floating svg {
    width: 50px;
}
.icon-floating span {
    height: 100%;
}
.icon-floating img {
    max-width: 100%;
}
.icon-floating img,
.icon-floating span {
    display: inline-block;
    vertical-align: middle;
}
.icon-floating:first-child {
    top: 140px;
    left: -60px;
    width: 120px;
    height: 120px;
}
.icon-floating:nth-child(2) {
    top: 200px;
    left: 180px;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 0.5s;
    animation-delay: 0.5s;
}
.icon-floating:nth-child(3) {
    top: 120px;
    left: 480px;
    width: 80px;
    height: 80px;
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
}
.icon-floating:nth-child(4) {
    top: 210px;
    left: 680px;
    width: 140px;
    height: 140px;
    -webkit-animation-delay: 1.5s;
    animation-delay: 1.5s;
}
.icon-floating:nth-child(5) {
    top: 100px;
    left: 920px;
    width: 100px;
    height: 100px;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
}
.icon-floating:nth-child(6) {
    top: 200px;
    left: 1120px;
    width: 80px;
    height: 80px;
    -webkit-animation-delay: 2.5s;
    animation-delay: 2.5s;
}
.icon-sm svg {
    width: 36px;
}
.icon-lg svg {
    width: 76px;
}
@media (min-width: 992px) and (max-width: 1199.98px) {
    .icon-floating:first-child,
    .icon-floating:nth-child(6) {
        display: none;
    }
}
@media (max-width: 991.98px) {
    .icon-floating:first-child,
    .icon-floating:nth-child(2),
    .icon-floating:nth-child(3) {
        display: none;
    }
    .icon-floating:nth-child(4),
    .icon-floating:nth-child(5),
    .icon-floating:nth-child(6) {
        width: 100px;
        height: 100px;
        top: 80px;
    }
    .icon-floating:nth-child(4) {
        left: 300px;
    }
    .icon-floating:nth-child(5) {
        left: 500px;
    }
    .icon-floating:nth-child(6) {
        left: 700px;
    }
    .icon-floating svg {
        width: 40px;
    }
}
@media (max-width: 767.98px) {
    .icon-floating:nth-child(4),
    .icon-floating:nth-child(5),
    .icon-floating:nth-child(6) {
        width: 80px;
        height: 80px;
        top: 80px;
    }
    .icon-floating:nth-child(4) {
        left: 400px;
    }
    .icon-floating:nth-child(5) {
        left: 530px;
    }
    .icon-floating:nth-child(6) {
        left: 660px;
    }
}
.floating-color {
    position: absolute;
    background-color: #fff;
    -webkit-box-shadow: 0 30px 40px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 30px 40px 0 rgba(0, 0, 0, 0.1);
    text-align: center;
    border-radius: 50%;
    -webkit-animation: floating 3s ease infinite;
    animation: floating 3s ease infinite;
}
.floating-color span {
    display: inline-block;
    border-radius: 20px;
    position: relative;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: 0.875rem;
    color: hsla(0, 0%, 100%, 0.5);
}
.floating-color:first-child {
    top: 140px;
    left: -60px;
    width: 120px;
    height: 120px;
}
.floating-color:nth-child(2) {
    top: 200px;
    left: 180px;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 0.5s;
    animation-delay: 0.5s;
}
.floating-color:nth-child(3) {
    top: 120px;
    left: 480px;
    width: 80px;
    height: 80px;
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
}
.floating-color:nth-child(4) {
    top: 210px;
    left: 680px;
    width: 140px;
    height: 140px;
    -webkit-animation-delay: 1.5s;
    animation-delay: 1.5s;
}
.floating-color:nth-child(5) {
    top: 100px;
    left: 920px;
    width: 100px;
    height: 100px;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
}
.floating-color:nth-child(6) {
    top: 200px;
    left: 1120px;
    width: 80px;
    height: 80px;
    -webkit-animation-delay: 2.5s;
    animation-delay: 2.5s;
}
.input-group-text {
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
.input-group-flush .form-control,
.input-group-flush .input-group-text {
    border: 0 !important;
}
.focused .input-group {
    -webkit-box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075),
        0 0 20px rgba(110, 0, 255, 0.1);
    box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075),
        0 0 20px rgba(110, 0, 255, 0.1);
}
.focused .input-group .form-control {
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}
.focused .input-group-text {
    color: {{ $settings->website_theme }};
    background-color: #eff2f7;
    border-color: rgba(110, 0, 255, 0.5);
}
.input-group-merge .input-group-text {
    color: #aabacd;
    background-color: #fff;
    border: 1px solid #e0e6ed;
}
.input-group-merge .form-control {
    -webkit-box-shadow: none;
    box-shadow: none;
}
.input-group-merge
    .form-control:not(:first-child):not(.is-valid):not(.is-invalid) {
    border-left: 0;
    padding-left: 0;
}
.input-group-merge
    .form-control:not(:last-child):not(.is-valid):not(.is-invalid) {
    border-right: 0;
    padding-right: 0;
}
.input-group-merge.rounded-pill .form-control:first-child {
    padding-left: 1.5rem;
    border-top-left-radius: 50rem;
    border-bottom-left-radius: 50rem;
}
.input-group-merge.rounded-pill .input-group-append > .btn {
    padding-right: 1.5rem;
    border-top-right-radius: 50rem;
    border-bottom-right-radius: 50rem;
}
.focused .input-group-merge .input-group-text {
    background-color: #fff;
    border-color: rgba(110, 0, 255, 0.5);
}
.application {
    opacity: 0;
}
.application.ready {
    opacity: 1;
}
.purpose .container-application {
    max-width: 1420px;
    overflow-x: hidden;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    padding-left: 0;
    padding-right: 0;
}
@media (min-width: 576px) {
    .purpose .container-application .footer,
    .purpose .container-application .page-content {
        padding-left: 20px;
        padding-right: 20px;
    }
}
@media (max-width: 767.98px) {
    .purpose .container-application .footer,
    .purpose .container-application .page-content {
        padding-left: 10px;
        padding-right: 10px;
    }
}
.purpose .navbar {
    margin-bottom: 1.5rem;
    padding-left: 0;
    padding-right: 0;
}
.purpose .navbar .container,
.purpose .navbar .container-fluid {
    width: calc(100% + 20px);
    padding-left: 0;
    padding-right: 0;
}
.purpose .navbar-collapse {
    padding-left: 20px;
    padding-right: 20px;
}
@media (max-width: 767.98px) {
    .purpose .navbar-collapse {
        padding-left: 10px;
        padding-right: 10px;
    }
}
.purpose .main-content {
    width: 100%;
    overflow: hidden;
}
.purpose .main-content .container,
.purpose .main-content .container-fluid {
    position: relative;
}
.purpose .page-title + .card,
.purpose .page-title + .row {
    margin-top: 1.5rem;
}
.purpose .sidenav {
    display: none;
}
.purpose .sidenav.show {
    display: block;
    margin-left: 40px;
    width: 250px;
    min-width: 250px;
}
@media (min-width: 1200px) {
    .purpose .sidenav.show + .main-content {
        max-width: calc(100% - 250px);
        padding-left: 40px;
    }
}
@media (min-width: 576px) and (max-width: 1199.98px) {
    .purpose .sidenav.show + .main-content {
        min-width: 100%;
        -webkit-transform: translateX(20px);
        transform: translateX(20px);
    }
}
@media (max-width: 767.98px) {
    .purpose .sidenav.show {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding-left: calc((100% - 250px) / 2);
        padding-right: calc((100% - 250px) / 2);
        overflow-y: scroll;
        background: #fff;
        margin-left: 0;
        z-index: 1040;
        -webkit-box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
        box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
    }
    .purpose .sidenav.show:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: -1;
        pointer-events: none;
        height: 430px;
        background-color: {{ $settings->website_theme }};
        border-bottom-left-radius: 2.5rem;
    }
    .purpose .sidenav.show + .main-content {
        pointer-events: none;
        overflow: hidden;
        height: 100%;
    }
}
.purpose .sidenav .nav-application {
    margin-top: 50px;
}
.purpose .sidenav-header {
    padding: 1.5rem 0;
    margin-bottom: 1.5rem;
}
.purpose .sidenav-header .navbar-brand img {
    height: 1.5rem;
}
.purpose .sidenav-user {
    height: 290px;
}
.purpose .page-title + .nav-tabs {
    margin-bottom: 20px;
}
.application-offset .container-application:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: -1;
    pointer-events: none;
    height: 430px;
    background-color: {{ $settings->website_theme }};
    border-bottom-left-radius: 2.5rem;
}
@media (min-width: 576px) {
    .docs .container-fluid {
        padding-left: 20px;
        padding-right: 20px;
    }
}
@media (max-width: 767.98px) {
    .docs .container-fluid {
        padding-left: 10px;
        padding-right: 10px;
    }
}
.docs .container-docs {
    -ms-flex: 1;
    flex: 1;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
}
.docs .container-docs,
.docs .main-content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
}
.docs .main-content {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 0;
    margin: 0;
    min-width: 0;
    max-width: 100%;
}
.docs .main-content .container,
.docs .main-content .container-fluid {
    position: relative;
}
.docs .main-content-title + .card,
.docs .main-content-title + .row {
    margin-top: 20px;
}
.docs .docs-content {
    max-width: 750px;
}
@media (min-width: 992px) {
    .docs .docs-content {
        margin: 0 70px;
    }
}
@media (min-width: 768px) {
    .docs .docs-content {
        margin: 0 50px;
    }
}
@media (max-width: 991.98px) {
    .docs .docs-content {
        margin: 0 20px;
    }
}
.docs .docs-title {
    padding: 48px 0;
    margin-bottom: 36px;
    border-bottom: 2px solid #eff2f7;
}
.docs .sidenav {
    margin-bottom: 0;
    border: 0;
    border-radius: 0;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .docs .sidenav {
        -webkit-transition: none;
        transition: none;
    }
}
@media (min-width: 992px) {
    .docs .sidenav {
        max-width: 250px !important;
        height: 100vh;
        -webkit-transform: translateX(0);
        transform: translateX(0);
        border-right: 1px solid #eff2f7;
        border-radius: 0;
    }
}
@media (max-width: 991.98px) {
    .docs .sidenav {
        max-width: 0;
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        -webkit-transform: translateX(-150%);
        transform: translateX(-150%);
        border: 0;
    }
}
.docs .sidenav.show {
    max-width: 250px !important;
    -webkit-transform: translateX(0);
    transform: translateX(0);
    border-right: 1px solid #eff2f7;
    z-index: 1050;
    border-radius: 0;
}
.docs .sidenav-header {
    padding: 1.5rem 0;
    margin-bottom: 1.5rem;
}
.docs .sidenav-header .navbar-brand img {
    height: 1.5rem;
}
.docs .main-content-title + .nav-tabs {
    margin-bottom: 20px;
}
.sidenav-toggler {
    border: 0;
    background: transparent;
    cursor: pointer;
}
.sidenav-toggler-inner,
.sidenav-toggler-line {
    width: 18px;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .sidenav-toggler-inner,
    .sidenav-toggler-line {
        -webkit-transition: none;
        transition: none;
    }
}
.sidenav-toggler-inner {
    position: relative;
}
.sidenav-toggler-inner:before {
    content: "";
    position: absolute;
    width: 40px;
    height: 40px;
    left: -11px;
    top: -14px;
    border-radius: 50%;
    -webkit-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 0.2s cubic-bezier(0.77, 0, 0.2, 2.25);
    transition: all 0.2s cubic-bezier(0.77, 0, 0.2, 2.25);
}
@media (prefers-reduced-motion: reduce) {
    .sidenav-toggler-inner:before {
        -webkit-transition: none;
        transition: none;
    }
}
.sidenav-toggler-line {
    height: 2px;
    background-color: rgba(31, 45, 61, 0.5);
    display: block;
    position: relative;
}
.sidenav-toggler-line:not(:last-child) {
    margin-bottom: 3px;
}
.sidenav-toggler.active .sidenav-toggler-inner:before {
    -webkit-transform: scale(1);
    transform: scale(1);
}
.sidenav-toggler.active .sidenav-toggler-line:first-child,
.sidenav-toggler.active .sidenav-toggler-line:last-child {
    width: 13px;
    -webkit-transform: translateX(5px);
    transform: translateX(5px);
}
.navbar-dark .sidenav-toggler-line,
.sidenav-toggler-dark .sidenav-toggler-line {
    background-color: hsla(0, 0%, 100%, 0.85) !important;
}
.list-group {
    list-style-type: none;
}
.list-group-space .list-group-item {
    mardin-bottom: 1.5rem;
    border-radius: 0.25rem;
}
.list-group-img {
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    vertical-align: top;
    margin: -0.1rem 1.2rem 0 -0.2rem;
}
.list-group-content {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    min-width: 0;
}
.list-group-content p {
    line-height: 1.5;
    margin: 0.2rem 0 0;
}
.list-group-heading {
    color: #3c4858;
}
.list-group-heading > small {
    float: right;
    color: #d3dce6;
    font-weight: 500;
}
.list-group-sm .list-group-item {
    padding: 0.675rem 1.25rem;
    font-size: 0.875rem;
}
.list-group-emphasized .list-group-item {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .list-group-emphasized .list-group-item {
        -webkit-transition: none;
        transition: none;
    }
}
.list-group-emphasized .list-group-item.active {
    z-index: 11;
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
    background-color: #fafbfe;
    -webkit-box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
    box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
    border-radius: 0.375rem;
}
.list-group-emphasized .list-group-item.active .media a {
    color: {{ $settings->website_theme }};
}
.list-icon i,
.list-icon svg {
    margin-right: 1rem;
    font-size: 0.875rem;
    position: relative;
}
.list-bullet i,
.list-bullet svg {
    margin-right: 1rem;
    font-size: 8px;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    top: 2px;
    position: relative;
}
.list-unstyled .list-link {
    display: block;
    color: #8492a6;
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
}
.list-unstyled .list-link:hover {
    color: {{ $settings->website_theme }};
}
.list-unstyled .list-link i {
    margin-right: 0.5rem;
    font-size: 0.75rem;
}
.map-canvas {
    position: relative;
    width: 100%;
    height: 400px;
    border-radius: 0.25rem;
}
.mask {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .mask {
        -webkit-transition: none;
        transition: none;
    }
}
.mask + .container {
    position: relative;
}
.card .mask {
    border-radius: 0.375rem;
}
.card .hover-mask {
    opacity: 0;
    -webkit-transition-delay: 0.15s;
    transition-delay: 0.15s;
}
.card:hover .hover-mask {
    opacity: 0.4;
}
.mask-body {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
    z-index: 1040;
}
.mask-body-dark {
    background: rgba(31, 45, 61, 0.3);
}
.mask-body-light {
    background: hsla(0, 0%, 100%, 0.3);
}
.mask-fade-bottom {
    background: -webkit-gradient(
        linear,
        left bottom,
        left top,
        from(#1f2d3d),
        color-stop(0, #000),
        color-stop(60%, rgba(31, 45, 61, 0))
    );
    background: linear-gradient(0deg, #1f2d3d, #000 0, rgba(31, 45, 61, 0) 60%);
}
.media > i {
    position: relative;
    top: 4px;
}
.media-pill {
    position: relative;
    padding: 2px 1rem 2px 2px;
    background-color: rgba(31, 45, 61, 0.15);
    border-radius: 50rem;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .media-pill {
        -webkit-transition: none;
        transition: none;
    }
}
.media-pill:hover {
    background-color: rgba(31, 45, 61, 0.3);
}
.media-pill .avatar {
    display: inline;
}
.show .media-pill {
    background-color: rgba(31, 45, 61, 0.3);
}
.media-comment + .media-comment {
    margin-top: 1.25rem;
}
.media-comment-bubble {
    border-radius: 20px;
    border-top-left-radius: 0;
    position: relative;
    background-color: #f6f8fd;
    padding: 1rem 1.25rem;
}
.media-comment-bubble.left-top:after {
    content: " ";
    position: absolute;
    width: 0;
    height: 0;
    left: -16px;
    right: auto;
    top: 0;
    bottom: auto;
    border: 18px solid transparent;
    border-top-color: #f6f8fd;
}
.modal-content {
    border: 0;
    border-radius: 0.375rem;
}
.modal-fluid .modal-dialog {
    margin-top: 0;
    margin-bottom: 0;
}
.modal-fluid .modal-content {
    border-radius: 0;
}
.modal-primary .modal-title {
    color: #fff;
}
.modal-primary .modal-footer,
.modal-primary .modal-header {
    border-color: hsla(0, 0%, 100%, 0.075);
}
.modal-primary .modal-content {
    background-color: {{ $settings->website_theme }};
    color: #fff;
}
.modal-primary .close > span:not(.sr-only),
.modal-primary .modal-content .heading {
    color: #fff;
}
.modal-secondary .modal-title {
    color: #273444;
}
.modal-secondary .modal-footer,
.modal-secondary .modal-header {
    border-color: rgba(39, 52, 68, 0.075);
}
.modal-secondary .modal-content {
    background-color: #eff2f7;
    color: #273444;
}
.modal-secondary .modal-content .heading {
    color: #273444;
}
.modal-secondary .close > span:not(.sr-only),
.modal-success .modal-title {
    color: #fff;
}
.modal-success .modal-footer,
.modal-success .modal-header {
    border-color: hsla(0, 0%, 100%, 0.075);
}
.modal-success .modal-content {
    background-color: #36b37e;
    color: #fff;
}
.modal-info .modal-title,
.modal-success .close > span:not(.sr-only),
.modal-success .modal-content .heading {
    color: #fff;
}
.modal-info .modal-footer,
.modal-info .modal-header {
    border-color: hsla(0, 0%, 100%, 0.075);
}
.modal-info .modal-content {
    background-color: #00b8d9;
    color: #fff;
}
.modal-info .close > span:not(.sr-only),
.modal-info .modal-content .heading,
.modal-warning .modal-title {
    color: #fff;
}
.modal-warning .modal-footer,
.modal-warning .modal-header {
    border-color: hsla(0, 0%, 100%, 0.075);
}
.modal-warning .modal-content {
    background-color: #ffab00;
    color: #fff;
}
.modal-danger .modal-title,
.modal-warning .close > span:not(.sr-only),
.modal-warning .modal-content .heading {
    color: #fff;
}
.modal-danger .modal-footer,
.modal-danger .modal-header {
    border-color: hsla(0, 0%, 100%, 0.075);
}
.modal-danger .modal-content {
    background-color: #ff5630;
    color: #fff;
}
.modal-danger .close > span:not(.sr-only),
.modal-danger .modal-content .heading {
    color: #fff;
}
.modal-light .modal-title {
    color: #273444;
}
.modal-light .modal-footer,
.modal-light .modal-header {
    border-color: rgba(39, 52, 68, 0.075);
}
.modal-light .modal-content {
    background-color: #eff2f7;
    color: #273444;
}
.modal-light .modal-content .heading {
    color: #273444;
}
.modal-dark .modal-title,
.modal-light .close > span:not(.sr-only) {
    color: #fff;
}
.modal-dark .modal-footer,
.modal-dark .modal-header {
    border-color: hsla(0, 0%, 100%, 0.075);
}
.modal-dark .modal-content {
    background-color: #273444;
    color: #fff;
}
.modal-dark .close > span:not(.sr-only),
.modal-dark .modal-content .heading {
    color: #fff;
}
.modal-neutral .modal-title {
    color: #273444;
}
.modal-neutral .modal-footer,
.modal-neutral .modal-header {
    border-color: rgba(39, 52, 68, 0.075);
}
.modal-neutral .modal-content {
    background-color: #fff;
    color: #273444;
}
.modal-neutral .modal-content .heading {
    color: #273444;
}
.modal-neutral .close > span:not(.sr-only) {
    color: #fff;
}
.modal-white .modal-title {
    color: #273444;
}
.modal-white .modal-footer,
.modal-white .modal-header {
    border-color: rgba(39, 52, 68, 0.075);
}
.modal-white .modal-content {
    background-color: #fff;
    color: #273444;
}
.modal-white .modal-content .heading {
    color: #273444;
}
.modal-white .close > span:not(.sr-only) {
    color: #fff;
}
.modal-vertical {
    height: calc(100% - 0.5rem);
    max-width: 350px;
    margin: 0.5rem 0;
}
.modal-vertical.modal-lg {
    max-width: 450px;
}
.modal-vertical .modal-content {
    height: inherit;
    border-width: 0;
    border-radius: 0.375rem 0 0 0.375rem;
}
.modal-vertical .modal-body {
    height: inherit;
    overflow-y: auto;
}
.modal.fade .modal-dialog-vertical {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
}
.modal.show .modal-dialog-vertical {
    -webkit-transform: translateX(0);
    transform: translateX(0);
}
.modal.fixed-right {
    padding-right: 0 !important;
}
.modal.fixed-right .modal-vertical {
    margin-left: auto;
}
.modal.fixed-right.fade .modal-vertical {
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
}
.modal.fixed-right.show .modal-vertical {
    -webkit-transform: translateX(0);
    transform: translateX(0);
}
.nav-link {
    color: #8492a6;
}
.nav-link.active,
.nav-link:hover {
    color: {{ $settings->website_theme }};
}
.nav-pills-icon .nav-link:not(.active) {
    background-color: #eff2f7;
}
.nav-pills-icon .nav-link:not(:last-child) {
    margin-right: 0.5rem;
}
@media (min-width: 768px) {
    .nav-pills-circle {
        padding: 0 50px;
    }
    .nav-pills-circle .nav-item {
        min-width: 200px;
        background: transparent;
        border: 0;
        padding: 0;
        position: relative;
    }
    .nav-pills-circle .nav-link {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 80px;
        height: 80px;
        margin: auto;
        border-radius: 50%;
        background: #eff2f7;
        color: #273444;
        z-index: 10;
    }
    .nav-pills-circle.nav-pills-connect .nav-item:not(:last-child):before {
        content: "";
        display: block;
        position: relative;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(50%, 50%);
        transform: translate(50%, 50%);
        height: 1px;
        width: 50%;
        background: #eff2f7;
        z-index: 0;
    }
}
.nav-pills-contained {
    padding: 3px;
    background-color: #eff2f7;
    border-radius: 0.25rem;
}
.nav-pills-contained .nav-link.active {
    background: #fff;
    color: #8492a6;
}
.nav-tabs .nav-item {
    margin-left: 1rem;
    margin-right: 1rem;
}
.nav-tabs .nav-link {
    padding: 15px 0;
    border-bottom: 1px solid transparent;
    border-left-width: 0;
    border-right-width: 0;
    border-top-width: 0;
}
.nav-tabs .nav-link:not(.active) {
    color: #c0ccda;
}
.nav-tabs .nav-link:not(.active):hover {
    color: #8492a6;
}
.nav-tabs .nav-item:first-child {
    margin-left: 0;
}
.nav-tabs .nav-item:last-child {
    margin-right: 0;
}
.nav-tabs .nav-item.show .nav-link {
    border-color: transparent;
}
.nav-tabs.nav-dark {
    border-color: hsla(0, 0%, 100%, 0.2);
}
.nav-tabs.nav-dark .nav-link:not(.active) {
    color: hsla(0, 0%, 100%, 0.6);
}
.nav-tabs.nav-dark .nav-link:not(.active):hover {
    color: hsla(0, 0%, 100%, 0.8);
}
.nav-tabs.nav-dark .nav-link.active {
    color: #fff;
    border-color: #fff;
}
.nav-dots {
    top: 50%;
    right: 2rem;
    position: fixed;
    z-index: 200;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
.nav-dots .nav-link {
    display: block;
    margin: 5px;
    position: relative;
}
.nav-dots .nav-link:before {
    content: "";
    border-radius: 50%;
    position: absolute;
    z-index: 1;
    height: 6px;
    width: 6px;
    border: 0;
    background: #fff;
    left: 50%;
    top: 50%;
    margin: -2px 0 0 -2px;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
}
.nav-dots .nav-link.active:before,
.nav-dots .nav-link:hover:before {
    height: 12px;
    width: 12px;
}
.nav-application > .btn {
    width: 113px !important;
    height: 113px !important;
    float: left;
    background: transparent;
    color: #8492a6;
    margin: 0 0 24px;
}
.nav-application > .btn:nth-child(odd) {
    margin-right: 24px;
}
.nav-application > .btn.active {
    background-color: {{ $settings->website_theme }};
    color: #fff;
    -webkit-box-shadow: 0 1rem 3rem rgba(31, 45, 61, 0.125) !important;
    box-shadow: 0 1rem 3rem rgba(31, 45, 61, 0.125) !important;
}
.nav-application > .btn:hover:not(.active) {
    color: {{ $settings->website_theme }};
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
}
.navbar {
    z-index: 101;
}
.navbar,
.navbar .container {
    position: relative;
}
.navbar-nav .nav-link {
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: none;
    letter-spacing: 0;
    -webkit-transition: all 0.15s linear;
    transition: all 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
    .navbar-nav .nav-link {
        -webkit-transition: none;
        transition: none;
    }
}
.navbar-nav .nav-link i,
.navbar-nav .nav-link img,
.navbar-nav .nav-link svg {
    margin-right: 0.5rem;
}
.navbar-nav .media-pill .avatar {
    width: 36px;
    height: 36px;
}
.nav-link > img {
    width: auto;
    height: 14px;
    margin-right: 0.5rem;
    position: relative;
    top: -1px;
}
.navbar-text {
    font-size: 0.875rem;
}
.navbar-user {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: distribute;
    justify-content: space-around;
}
.navbar-shadow {
    -webkit-box-shadow: 0 0 10px rgba(31, 45, 61, 0.03);
    box-shadow: 0 0 10px rgba(31, 45, 61, 0.03);
}
.header,
.navbar,
.navbar-top {
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .header,
    .navbar,
    .navbar-top {
        -webkit-transition: none;
        transition: none;
    }
}
.navbar-border.navbar-dark {
    border-bottom: 1px solid hsla(0, 0%, 100%, 0.1) !important;
}
.navbar-border.navbar-dark .navbar-collapse.collapsing,
.navbar-border.navbar-dark .navbar-collapse.show {
    border-top: 1px solid hsla(0, 0%, 100%, 0.1) !important;
}
.navbar-border.navbar-light {
    border-bottom: 1px solid rgba(31, 45, 61, 0.04) !important;
}
.navbar-border.navbar-light .navbar-collapse.collapsing,
.navbar-border.navbar-light .navbar-collapse.show {
    border-top: 1px solid rgba(31, 45, 61, 0.04) !important;
}
.header-transparent {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}
.header-transparent .navbar-top {
    border: 0;
    padding-left: 1rem;
    padding-right: 1rem;
}
.header-transparent .navbar-top:not(.navbar-collapsed) {
    background-color: transparent !important;
}
.header-transparent .navbar:not(.sticky):not(.navbar-collapsed) {
    background-color: transparent !important;
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.header-transparent
    + main
    section:first-child:not([data-spotlight])
    .container {
    padding-top: 5rem;
}
.header-collapse-show {
    min-height: 100%;
    width: 100%;
    position: fixed;
    top: 0;
    z-index: 1000;
}
.navbar-sticky {
    position: -webkit-sticky;
}
.navbar-sticky.sticky {
    position: fixed;
    width: 100%;
    left: 0;
    top: -100px;
    -webkit-transform: translateY(100px);
    transform: translateY(100px);
    z-index: 1030;
    border-top: 0;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .navbar-sticky.sticky {
        -webkit-transition: none;
        transition: none;
    }
}
.navbar-top {
    position: relative;
    z-index: 110;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
}
.navbar-top .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
}
.navbar-top .navbar-nav .nav-item:last-child {
    margin-right: 0;
}
.navbar-top .navbar-nav .nav-link {
    padding: 0.5rem;
}
@media (max-width: 575.98px) {
    .navbar-expand-sm .navbar-collapse {
        padding-top: 0.75rem;
        margin-top: 0.75rem;
    }
    .navbar-expand-sm.navbar-collapsed {
        height: 100vh;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: start;
        overflow-y: scroll;
    }
    .navbar-expand-sm .navbar-brand img {
        height: 1.25rem;
    }
    .navbar-expand-sm .navbar-brand.dropdown-toggle:after {
        float: none;
        font-size: 1rem;
        opacity: 0.6;
    }
    .navbar-expand-sm .navbar-brand.dropdown-toggle:hover:after {
        opacity: 1;
    }
    .navbar-expand-sm .navbar-nav:not(.flex-row) .nav-link {
        padding: 0.625rem 0;
    }
    .navbar-expand-sm .navbar-nav:not(.flex-row) .dropdown-menu {
        -webkit-box-shadow: none;
        box-shadow: none;
        min-width: auto;
    }
    .navbar-expand-sm .navbar-nav:not(.flex-row) .dropdown-menu .media svg {
        width: 30px;
    }
    .navbar-expand-sm .navbar-nav.flex-row .nav-link {
        padding-left: 0.675rem;
        padding-right: 0.675rem;
    }
    .navbar-expand-sm .navbar-nav.flex-row .dropdown {
        position: static;
    }
    .navbar-expand-sm .navbar-nav.flex-row .dropdown-menu {
        width: calc(100% - 20px);
        position: absolute;
        top: 60px;
        left: 10px;
        right: auto;
    }
    .navbar-expand-sm .navbar-collapse-fade {
        z-index: 1050;
        height: auto !important;
        opacity: 0;
    }
    .navbar-expand-sm .navbar-collapse-fade.collapsing,
    .navbar-expand-sm .navbar-collapse-fade.show {
        -webkit-animation: show-navbar-collapse 0.2s ease forwards;
        animation: show-navbar-collapse 0.2s ease forwards;
        -webkit-animation-delay: 0.15s;
        animation-delay: 0.15s;
    }
    .navbar-expand-sm .navbar-collapse-fade.collapsing-out {
        opacity: 0;
        -webkit-transition: opacity 0.3s linear;
        transition: opacity 0.3s linear;
        -webkit-animation-delay: 0;
        animation-delay: 0;
        -webkit-animation: none;
        animation: none;
    }
}
@media (min-width: 576px) {
    .navbar-expand-sm .navbar-brand img {
        height: 1.5rem;
    }
    .navbar-expand-sm .navbar-brand.dropdown-toggle:after {
        display: none;
    }
    .navbar-expand-sm .navbar-nav .nav-item {
        margin-right: 0.5rem;
    }
    .navbar-expand-sm .navbar-nav .nav-item:last-child {
        margin-right: 0;
    }
    .navbar-expand-sm .navbar-nav .nav-link {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        border-radius: 0;
    }
    .navbar-expand-sm .navbar-nav .nav-link-icon {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
        border-radius: 0;
    }
    .navbar-expand-sm .navbar-nav .nav-link-icon i {
        margin-right: 0;
    }
}
@media (max-width: 767.98px) {
    .navbar-expand-md .navbar-collapse {
        padding-top: 0.75rem;
        margin-top: 0.75rem;
    }
    .navbar-expand-md.navbar-collapsed {
        height: 100vh;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: start;
        overflow-y: scroll;
    }
    .navbar-expand-md .navbar-brand img {
        height: 1.25rem;
    }
    .navbar-expand-md .navbar-brand.dropdown-toggle:after {
        float: none;
        font-size: 1rem;
        opacity: 0.6;
    }
    .navbar-expand-md .navbar-brand.dropdown-toggle:hover:after {
        opacity: 1;
    }
    .navbar-expand-md .navbar-nav:not(.flex-row) .nav-link {
        padding: 0.625rem 0;
    }
    .navbar-expand-md .navbar-nav:not(.flex-row) .dropdown-menu {
        -webkit-box-shadow: none;
        box-shadow: none;
        min-width: auto;
    }
    .navbar-expand-md .navbar-nav:not(.flex-row) .dropdown-menu .media svg {
        width: 30px;
    }
    .navbar-expand-md .navbar-nav.flex-row .nav-link {
        padding-left: 0.675rem;
        padding-right: 0.675rem;
    }
    .navbar-expand-md .navbar-nav.flex-row .dropdown {
        position: static;
    }
    .navbar-expand-md .navbar-nav.flex-row .dropdown-menu {
        width: calc(100% - 20px);
        position: absolute;
        top: 60px;
        left: 10px;
        right: auto;
    }
    .navbar-expand-md .navbar-collapse-fade {
        z-index: 1050;
        height: auto !important;
        opacity: 0;
    }
    .navbar-expand-md .navbar-collapse-fade.collapsing,
    .navbar-expand-md .navbar-collapse-fade.show {
        -webkit-animation: show-navbar-collapse 0.2s ease forwards;
        animation: show-navbar-collapse 0.2s ease forwards;
        -webkit-animation-delay: 0.15s;
        animation-delay: 0.15s;
    }
    .navbar-expand-md .navbar-collapse-fade.collapsing-out {
        opacity: 0;
        -webkit-transition: opacity 0.3s linear;
        transition: opacity 0.3s linear;
        -webkit-animation-delay: 0;
        animation-delay: 0;
        -webkit-animation: none;
        animation: none;
    }
}
@media (min-width: 768px) {
    .navbar-expand-md .navbar-brand img {
        height: 1.5rem;
    }
    .navbar-expand-md .navbar-brand.dropdown-toggle:after {
        display: none;
    }
    .navbar-expand-md .navbar-nav .nav-item {
        margin-right: 0.5rem;
    }
    .navbar-expand-md .navbar-nav .nav-item:last-child {
        margin-right: 0;
    }
    .navbar-expand-md .navbar-nav .nav-link {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        border-radius: 0;
    }
    .navbar-expand-md .navbar-nav .nav-link-icon {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
        border-radius: 0;
    }
    .navbar-expand-md .navbar-nav .nav-link-icon i {
        margin-right: 0;
    }
}
@media (max-width: 991.98px) {
    .navbar-expand-lg .navbar-collapse {
        padding-top: 0.75rem;
        margin-top: 0.75rem;
    }
    .navbar-expand-lg.navbar-collapsed {
        height: 100vh;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: start;
        overflow-y: scroll;
    }
    .navbar-expand-lg .navbar-brand img {
        height: 1.25rem;
    }
    .navbar-expand-lg .navbar-brand.dropdown-toggle:after {
        float: none;
        font-size: 1rem;
        opacity: 0.6;
    }
    .navbar-expand-lg .navbar-brand.dropdown-toggle:hover:after {
        opacity: 1;
    }
    .navbar-expand-lg .navbar-nav:not(.flex-row) .nav-link {
        padding: 0.625rem 0;
    }
    .navbar-expand-lg .navbar-nav:not(.flex-row) .dropdown-menu {
        -webkit-box-shadow: none;
        box-shadow: none;
        min-width: auto;
    }
    .navbar-expand-lg .navbar-nav:not(.flex-row) .dropdown-menu .media svg {
        width: 30px;
    }
    .navbar-expand-lg .navbar-nav.flex-row .nav-link {
        padding-left: 0.675rem;
        padding-right: 0.675rem;
    }
    .navbar-expand-lg .navbar-nav.flex-row .dropdown {
        position: static;
    }
    .navbar-expand-lg .navbar-nav.flex-row .dropdown-menu {
        width: calc(100% - 20px);
        position: absolute;
        top: 60px;
        left: 10px;
        right: auto;
    }
    .navbar-expand-lg .navbar-collapse-fade {
        z-index: 1050;
        height: auto !important;
        opacity: 0;
    }
    .navbar-expand-lg .navbar-collapse-fade.collapsing,
    .navbar-expand-lg .navbar-collapse-fade.show {
        -webkit-animation: show-navbar-collapse 0.2s ease forwards;
        animation: show-navbar-collapse 0.2s ease forwards;
        -webkit-animation-delay: 0.15s;
        animation-delay: 0.15s;
    }
    .navbar-expand-lg .navbar-collapse-fade.collapsing-out {
        opacity: 0;
        -webkit-transition: opacity 0.3s linear;
        transition: opacity 0.3s linear;
        -webkit-animation-delay: 0;
        animation-delay: 0;
        -webkit-animation: none;
        animation: none;
    }
}
@media (min-width: 992px) {
    .navbar-expand-lg .navbar-brand img {
        height: 1.5rem;
    }
    .navbar-expand-lg .navbar-brand.dropdown-toggle:after {
        display: none;
    }
    .navbar-expand-lg .navbar-nav .nav-item {
        margin-right: 0.5rem;
    }
    .navbar-expand-lg .navbar-nav .nav-item:last-child {
        margin-right: 0;
    }
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        border-radius: 0;
    }
    .navbar-expand-lg .navbar-nav .nav-link-icon {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
        border-radius: 0;
    }
    .navbar-expand-lg .navbar-nav .nav-link-icon i {
        margin-right: 0;
    }
}
@media (max-width: 1199.98px) {
    .navbar-expand-xl .navbar-collapse {
        padding-top: 0.75rem;
        margin-top: 0.75rem;
    }
    .navbar-expand-xl.navbar-collapsed {
        height: 100vh;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: start;
        overflow-y: scroll;
    }
    .navbar-expand-xl .navbar-brand img {
        height: 1.25rem;
    }
    .navbar-expand-xl .navbar-brand.dropdown-toggle:after {
        float: none;
        font-size: 1rem;
        opacity: 0.6;
    }
    .navbar-expand-xl .navbar-brand.dropdown-toggle:hover:after {
        opacity: 1;
    }
    .navbar-expand-xl .navbar-nav:not(.flex-row) .nav-link {
        padding: 0.625rem 0;
    }
    .navbar-expand-xl .navbar-nav:not(.flex-row) .dropdown-menu {
        -webkit-box-shadow: none;
        box-shadow: none;
        min-width: auto;
    }
    .navbar-expand-xl .navbar-nav:not(.flex-row) .dropdown-menu .media svg {
        width: 30px;
    }
    .navbar-expand-xl .navbar-nav.flex-row .nav-link {
        padding-left: 0.675rem;
        padding-right: 0.675rem;
    }
    .navbar-expand-xl .navbar-nav.flex-row .dropdown {
        position: static;
    }
    .navbar-expand-xl .navbar-nav.flex-row .dropdown-menu {
        width: calc(100% - 20px);
        position: absolute;
        top: 60px;
        left: 10px;
        right: auto;
    }
    .navbar-expand-xl .navbar-collapse-fade {
        z-index: 1050;
        height: auto !important;
        opacity: 0;
    }
    .navbar-expand-xl .navbar-collapse-fade.collapsing,
    .navbar-expand-xl .navbar-collapse-fade.show {
        -webkit-animation: show-navbar-collapse 0.2s ease forwards;
        animation: show-navbar-collapse 0.2s ease forwards;
        -webkit-animation-delay: 0.15s;
        animation-delay: 0.15s;
    }
    .navbar-expand-xl .navbar-collapse-fade.collapsing-out {
        opacity: 0;
        -webkit-transition: opacity 0.3s linear;
        transition: opacity 0.3s linear;
        -webkit-animation-delay: 0;
        animation-delay: 0;
        -webkit-animation: none;
        animation: none;
    }
}
@media (min-width: 1200px) {
    .navbar-expand-xl .navbar-brand img {
        height: 1.5rem;
    }
    .navbar-expand-xl .navbar-brand.dropdown-toggle:after {
        display: none;
    }
    .navbar-expand-xl .navbar-nav .nav-item {
        margin-right: 0.5rem;
    }
    .navbar-expand-xl .navbar-nav .nav-item:last-child {
        margin-right: 0;
    }
    .navbar-expand-xl .navbar-nav .nav-link {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        border-radius: 0;
    }
    .navbar-expand-xl .navbar-nav .nav-link-icon {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
        border-radius: 0;
    }
    .navbar-expand-xl .navbar-nav .nav-link-icon i {
        margin-right: 0;
    }
}
.navbar-expand .navbar-collapse {
    padding-top: 0.75rem;
    margin-top: 0.75rem;
}
.navbar-expand.navbar-collapsed {
    height: 100vh;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: start;
    overflow-y: scroll;
}
.navbar-expand .navbar-brand img {
    height: 1.25rem;
}
.navbar-expand .navbar-brand.dropdown-toggle:after {
    float: none;
    font-size: 1rem;
    opacity: 0.6;
}
.navbar-expand .navbar-brand.dropdown-toggle:hover:after {
    opacity: 1;
}
.navbar-expand .navbar-nav:not(.flex-row) .nav-link {
    padding: 0.625rem 0;
}
.navbar-expand .navbar-nav:not(.flex-row) .dropdown-menu {
    -webkit-box-shadow: none;
    box-shadow: none;
    min-width: auto;
}
.navbar-expand .navbar-nav:not(.flex-row) .dropdown-menu .media svg {
    width: 30px;
}
.navbar-expand .navbar-nav.flex-row .nav-link {
    padding-left: 0.675rem;
    padding-right: 0.675rem;
}
.navbar-expand .navbar-nav.flex-row .dropdown {
    position: static;
}
.navbar-expand .navbar-nav.flex-row .dropdown-menu {
    width: calc(100% - 20px);
    position: absolute;
    top: 60px;
    left: 10px;
    right: auto;
}
.navbar-expand .navbar-collapse-fade {
    z-index: 1050;
    height: auto !important;
    opacity: 0;
}
.navbar-expand .navbar-collapse-fade.collapsing,
.navbar-expand .navbar-collapse-fade.show {
    -webkit-animation: show-navbar-collapse 0.2s ease forwards;
    animation: show-navbar-collapse 0.2s ease forwards;
    -webkit-animation-delay: 0.15s;
    animation-delay: 0.15s;
}
.navbar-expand .navbar-collapse-fade.collapsing-out {
    opacity: 0;
    -webkit-transition: opacity 0.3s linear;
    transition: opacity 0.3s linear;
    -webkit-animation-delay: 0;
    animation-delay: 0;
    -webkit-animation: none;
    animation: none;
}
.navbar-expand .navbar-brand img {
    height: 1.5rem;
}
.navbar-expand .navbar-brand.dropdown-toggle:after {
    display: none;
}
.navbar-expand .navbar-nav .nav-item {
    margin-right: 0.5rem;
}
.navbar-expand .navbar-nav .nav-item:last-child {
    margin-right: 0;
}
.navbar-expand .navbar-nav .nav-link {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    border-radius: 0;
}
.navbar-expand .navbar-nav .nav-link-icon {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
    border-radius: 0;
}
.navbar-expand .navbar-nav .nav-link-icon i {
    margin-right: 0;
}
.navbar-toggler-icon {
    width: 1.25em;
    height: 1.25em;
}
@-webkit-keyframes show-navbar-collapse {
    0% {
        opacity: 0;
        -webkit-transform: translateX(30px);
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}
@keyframes show-navbar-collapse {
    0% {
        opacity: 0;
        -webkit-transform: translateX(30px);
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}
.navbar-vertical {
    padding-top: 0;
    border-width: 0 0 1px;
    border-style: solid;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}
.navbar-vertical.navbar-light {
    background-color: #fff;
    border-color: #eff2f7;
}
.navbar-vertical.navbar-dark {
    background-color: transparent;
    border-color: hsla(0, 0%, 100%, 0.1);
}
.navbar-vertical .navbar-brand {
    margin-right: 0;
}
@media (min-width: 768px) {
    .navbar-vertical .navbar-collapse {
        margin-left: -1rem;
        margin-right: -1rem;
    }
}
.navbar-vertical .navbar-nav {
    margin-left: -1rem;
    margin-right: -1rem;
}
.navbar-vertical .navbar-nav .nav-link {
    padding-left: 1rem;
    padding-right: 1rem;
    font-size: 0.875rem;
    font-weight: 600;
}
.navbar-vertical .navbar-nav .nav-link.active {
    position: relative;
}
.navbar-vertical .navbar-nav .nav-link > i {
    min-width: 2rem;
    margin-right: 0;
    font-size: 0.9375rem;
    line-height: 1.7rem;
}
.navbar-vertical .navbar-nav .nav-link .dropdown-menu {
    border: none;
}
.navbar-vertical .navbar-nav .nav-link .dropdown-menu .dropdown-menu {
    margin-left: 0.5rem;
}
.navbar-vertical .navbar-nav .nav-sm .nav-link {
    font-size: 0.8125rem;
}
.navbar-vertical .navbar-nav .nav-link {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.navbar-vertical .navbar-nav .nav-link[data-toggle="collapse"]:after {
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    font-family: Font Awesome\5 Pro, Font Awesome\5 Free;
    font-weight: 700;
    content: "\F105";
    margin-left: auto;
    color: #e0e6ed;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .navbar-vertical .navbar-nav .nav-link[data-toggle="collapse"]:after {
        -webkit-transition: none;
        transition: none;
    }
}
.navbar-vertical
    .navbar-nav
    .nav-link[data-toggle="collapse"][aria-expanded="true"]:after {
    color: {{ $settings->website_theme }};
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
}
.navbar-vertical .navbar-nav .nav .nav-link {
    padding-left: 3rem;
}
.navbar-vertical .navbar-nav .nav .nav .nav-link {
    padding-left: 3.5rem;
}
.navbar-vertical .navbar-heading {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.04em;
}
.navbar-vertical.navbar-expand-xs {
    display: block;
    width: 100%;
    max-width: 0;
    overflow-y: auto;
    padding-left: 0;
    padding-right: 0;
}
.navbar-vertical.navbar-expand-xs.fixed-left,
.navbar-vertical.navbar-expand-xs.fixed-right {
    position: fixed;
    top: 0;
    bottom: 0;
}
.navbar-vertical.navbar-expand-xs .navbar-inner {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}
.navbar-vertical.navbar-expand-xs > [class*="container"] {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    min-height: 100%;
    padding-left: 0;
    padding-right: 0;
}
@media (-ms-high-contrast: active), (-ms-high-contrast: none) {
    .navbar-vertical.navbar-expand-xs > [class*="container"] {
        min-height: none;
        height: 100%;
    }
}
.navbar-vertical.navbar-expand-xs.fixed-left {
    left: 0;
    border-width: 0 1px 0 0;
}
.navbar-vertical.navbar-expand-xs.fixed-right {
    right: 0;
    border-width: 0 0 0 1px;
}
.navbar-vertical.navbar-expand-xs .navbar-collapse {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    margin-left: -1.5rem;
    margin-right: -1.5rem;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    opacity: 1;
}
.navbar-vertical.navbar-expand-xs .navbar-collapse > * {
    min-width: 100%;
}
.navbar-vertical.navbar-expand-xs .navbar-nav {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-left: -1.5rem;
    margin-right: -1.5rem;
}
.navbar-vertical.navbar-expand-xs .navbar-nav .nav-link {
    padding: 0.375rem 1.5rem;
}
.navbar-vertical.navbar-expand-xs .navbar-nav > .nav-item {
    margin-top: 2px;
}
.navbar-vertical.navbar-expand-xs .navbar-nav > .nav-item > .nav-link.active {
    background: #fafbfe;
    margin-right: 0.5rem;
    margin-left: 0.5rem;
    padding-left: 1rem;
    padding-right: 1rem;
    border-radius: 0.25rem;
}
.navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav-link {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    padding-left: 3.5rem;
}
.navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav .nav-link {
    padding-left: 4.25rem;
}
@media (min-width: 576px) {
    .navbar-vertical.navbar-expand-sm {
        display: block;
        width: 100%;
        max-width: 0;
        overflow-y: auto;
        padding-left: 0;
        padding-right: 0;
    }
    .navbar-vertical.navbar-expand-sm.fixed-left,
    .navbar-vertical.navbar-expand-sm.fixed-right {
        position: fixed;
        top: 0;
        bottom: 0;
    }
    .navbar-vertical.navbar-expand-sm .navbar-inner {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
    .navbar-vertical.navbar-expand-sm > [class*="container"] {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        min-height: 100%;
        padding-left: 0;
        padding-right: 0;
    }
}
@media (min-width: 576px) and (-ms-high-contrast: active),
    (min-width: 576px) and (-ms-high-contrast: none) {
    .navbar-vertical.navbar-expand-sm > [class*="container"] {
        min-height: none;
        height: 100%;
    }
}
@media (min-width: 576px) {
    .navbar-vertical.navbar-expand-sm.fixed-left {
        left: 0;
        border-width: 0 1px 0 0;
    }
}
@media (min-width: 576px) {
    .navbar-vertical.navbar-expand-sm.fixed-right {
        right: 0;
        border-width: 0 0 0 1px;
    }
}
@media (min-width: 576px) {
    .navbar-vertical.navbar-expand-sm .navbar-collapse {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        margin-left: -1.5rem;
        margin-right: -1.5rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        opacity: 1;
    }
    .navbar-vertical.navbar-expand-sm .navbar-collapse > * {
        min-width: 100%;
    }
}
@media (min-width: 576px) {
    .navbar-vertical.navbar-expand-sm .navbar-nav {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-left: -1.5rem;
        margin-right: -1.5rem;
    }
}
@media (min-width: 576px) {
    .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link {
        padding: 0.375rem 1.5rem;
    }
}
@media (min-width: 576px) {
    .navbar-vertical.navbar-expand-sm .navbar-nav > .nav-item {
        margin-top: 2px;
    }
    .navbar-vertical.navbar-expand-sm
        .navbar-nav
        > .nav-item
        > .nav-link.active {
        background: #fafbfe;
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-left: 1rem;
        padding-right: 1rem;
        border-radius: 0.25rem;
    }
}
@media (min-width: 576px) {
    .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav-link {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        padding-left: 3.5rem;
    }
}
@media (min-width: 576px) {
    .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav .nav-link {
        padding-left: 4.25rem;
    }
}
@media (min-width: 768px) {
    .navbar-vertical.navbar-expand-md {
        display: block;
        width: 100%;
        max-width: 0;
        overflow-y: auto;
        padding-left: 0;
        padding-right: 0;
    }
    .navbar-vertical.navbar-expand-md.fixed-left,
    .navbar-vertical.navbar-expand-md.fixed-right {
        position: fixed;
        top: 0;
        bottom: 0;
    }
    .navbar-vertical.navbar-expand-md .navbar-inner {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
    .navbar-vertical.navbar-expand-md > [class*="container"] {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        min-height: 100%;
        padding-left: 0;
        padding-right: 0;
    }
}
@media (min-width: 768px) and (-ms-high-contrast: active),
    (min-width: 768px) and (-ms-high-contrast: none) {
    .navbar-vertical.navbar-expand-md > [class*="container"] {
        min-height: none;
        height: 100%;
    }
}
@media (min-width: 768px) {
    .navbar-vertical.navbar-expand-md.fixed-left {
        left: 0;
        border-width: 0 1px 0 0;
    }
}
@media (min-width: 768px) {
    .navbar-vertical.navbar-expand-md.fixed-right {
        right: 0;
        border-width: 0 0 0 1px;
    }
}
@media (min-width: 768px) {
    .navbar-vertical.navbar-expand-md .navbar-collapse {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        margin-left: -1.5rem;
        margin-right: -1.5rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        opacity: 1;
    }
    .navbar-vertical.navbar-expand-md .navbar-collapse > * {
        min-width: 100%;
    }
}
@media (min-width: 768px) {
    .navbar-vertical.navbar-expand-md .navbar-nav {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-left: -1.5rem;
        margin-right: -1.5rem;
    }
}
@media (min-width: 768px) {
    .navbar-vertical.navbar-expand-md .navbar-nav .nav-link {
        padding: 0.375rem 1.5rem;
    }
}
@media (min-width: 768px) {
    .navbar-vertical.navbar-expand-md .navbar-nav > .nav-item {
        margin-top: 2px;
    }
    .navbar-vertical.navbar-expand-md
        .navbar-nav
        > .nav-item
        > .nav-link.active {
        background: #fafbfe;
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-left: 1rem;
        padding-right: 1rem;
        border-radius: 0.25rem;
    }
}
@media (min-width: 768px) {
    .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav-link {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        padding-left: 3.5rem;
    }
}
@media (min-width: 768px) {
    .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav .nav-link {
        padding-left: 4.25rem;
    }
}
@media (min-width: 992px) {
    .navbar-vertical.navbar-expand-lg {
        display: block;
        width: 100%;
        max-width: 0;
        overflow-y: auto;
        padding-left: 0;
        padding-right: 0;
    }
    .navbar-vertical.navbar-expand-lg.fixed-left,
    .navbar-vertical.navbar-expand-lg.fixed-right {
        position: fixed;
        top: 0;
        bottom: 0;
    }
    .navbar-vertical.navbar-expand-lg .navbar-inner {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
    .navbar-vertical.navbar-expand-lg > [class*="container"] {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        min-height: 100%;
        padding-left: 0;
        padding-right: 0;
    }
}
@media (min-width: 992px) and (-ms-high-contrast: active),
    (min-width: 992px) and (-ms-high-contrast: none) {
    .navbar-vertical.navbar-expand-lg > [class*="container"] {
        min-height: none;
        height: 100%;
    }
}
@media (min-width: 992px) {
    .navbar-vertical.navbar-expand-lg.fixed-left {
        left: 0;
        border-width: 0 1px 0 0;
    }
}
@media (min-width: 992px) {
    .navbar-vertical.navbar-expand-lg.fixed-right {
        right: 0;
        border-width: 0 0 0 1px;
    }
}
@media (min-width: 992px) {
    .navbar-vertical.navbar-expand-lg .navbar-collapse {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        margin-left: -1.5rem;
        margin-right: -1.5rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        opacity: 1;
    }
    .navbar-vertical.navbar-expand-lg .navbar-collapse > * {
        min-width: 100%;
    }
}
@media (min-width: 992px) {
    .navbar-vertical.navbar-expand-lg .navbar-nav {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-left: -1.5rem;
        margin-right: -1.5rem;
    }
}
@media (min-width: 992px) {
    .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link {
        padding: 0.375rem 1.5rem;
    }
}
@media (min-width: 992px) {
    .navbar-vertical.navbar-expand-lg .navbar-nav > .nav-item {
        margin-top: 2px;
    }
    .navbar-vertical.navbar-expand-lg
        .navbar-nav
        > .nav-item
        > .nav-link.active {
        background: #fafbfe;
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-left: 1rem;
        padding-right: 1rem;
        border-radius: 0.25rem;
    }
}
@media (min-width: 992px) {
    .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav-link {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        padding-left: 3.5rem;
    }
}
@media (min-width: 992px) {
    .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav .nav-link {
        padding-left: 4.25rem;
    }
}
@media (min-width: 1200px) {
    .navbar-vertical.navbar-expand-xl {
        display: block;
        width: 100%;
        max-width: 0;
        overflow-y: auto;
        padding-left: 0;
        padding-right: 0;
    }
    .navbar-vertical.navbar-expand-xl.fixed-left,
    .navbar-vertical.navbar-expand-xl.fixed-right {
        position: fixed;
        top: 0;
        bottom: 0;
    }
    .navbar-vertical.navbar-expand-xl .navbar-inner {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
    .navbar-vertical.navbar-expand-xl > [class*="container"] {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        min-height: 100%;
        padding-left: 0;
        padding-right: 0;
    }
}
@media (min-width: 1200px) and (-ms-high-contrast: active),
    (min-width: 1200px) and (-ms-high-contrast: none) {
    .navbar-vertical.navbar-expand-xl > [class*="container"] {
        min-height: none;
        height: 100%;
    }
}
@media (min-width: 1200px) {
    .navbar-vertical.navbar-expand-xl.fixed-left {
        left: 0;
        border-width: 0 1px 0 0;
    }
}
@media (min-width: 1200px) {
    .navbar-vertical.navbar-expand-xl.fixed-right {
        right: 0;
        border-width: 0 0 0 1px;
    }
}
@media (min-width: 1200px) {
    .navbar-vertical.navbar-expand-xl .navbar-collapse {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        margin-left: -1.5rem;
        margin-right: -1.5rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        opacity: 1;
    }
    .navbar-vertical.navbar-expand-xl .navbar-collapse > * {
        min-width: 100%;
    }
}
@media (min-width: 1200px) {
    .navbar-vertical.navbar-expand-xl .navbar-nav {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-left: -1.5rem;
        margin-right: -1.5rem;
    }
}
@media (min-width: 1200px) {
    .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link {
        padding: 0.375rem 1.5rem;
    }
}
@media (min-width: 1200px) {
    .navbar-vertical.navbar-expand-xl .navbar-nav > .nav-item {
        margin-top: 2px;
    }
    .navbar-vertical.navbar-expand-xl
        .navbar-nav
        > .nav-item
        > .nav-link.active {
        background: #fafbfe;
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-left: 1rem;
        padding-right: 1rem;
        border-radius: 0.25rem;
    }
}
@media (min-width: 1200px) {
    .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav-link {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        padding-left: 3.5rem;
    }
}
@media (min-width: 1200px) {
    .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav .nav-link {
        padding-left: 4.25rem;
    }
}
.navbar .dropdown-menu {
    min-width: 20rem;
    padding: 1rem 1.5rem;
    background-color: #fff;
    border: 0 solid rgba(31, 45, 61, 0);
    border-radius: 0.375rem;
    -webkit-box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1);
    box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1);
}
.navbar .dropdown-menu .list-group > li:first-child .list-group-item {
    border-top-left-radius: 0.375rem;
    border-top-right-radius: 0.375rem;
}
.navbar .dropdown-menu .list-group > li:last-child .list-group-item {
    border-bottom-right-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}
.navbar .dropdown-header {
    color: #4a596d;
}
.navbar .dropdown-item {
    padding: 0.5rem 0;
    color: #3c4858;
    font-size: 1rem;
}
.navbar .dropdown-item:first-child {
    border-top-left-radius: 0.375rem;
    border-top-right-radius: 0.375rem;
}
.navbar .dropdown-item:last-child {
    padding-bottom: 0;
    border-bottom-right-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}
.navbar .dropdown-item:focus,
.navbar .dropdown-item:hover {
    color: #657a95;
    text-decoration: none;
    background: transparent;
}
.navbar .dropdown-item.active,
.navbar .dropdown-item:active {
    color: #657a95;
    text-decoration: none;
    background-color: transparent;
}
.navbar .dropdown-menu-links {
    background-color: #fafafa;
}
@media (max-width: 575.98px) {
    .navbar-expand-sm .navbar-collapse .dropdown-menu {
        background: transparent;
        padding: 0 0 0 1rem;
    }
    .navbar-expand-sm .navbar-collapse .dropdown-menu-links,
    .navbar-expand-sm .navbar-collapse .dropdown-menu-links:before {
        background: transparent;
    }
    .navbar-expand-sm .navbar-collapse .dropdown-item {
        position: relative;
        font-size: 0.875rem;
        font-weight: 600;
    }
    .navbar-expand-sm
        .navbar-collapse
        .dropdown-submenu.show
        .dropdown-toggle:after {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-sm
        .navbar-collapse
        .dropdown-submenu.show
        .dropdown-toggle:after {
        -webkit-transition: none;
        transition: none;
    }
}
@media (max-width: 575.98px) {
    .navbar-expand-sm
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle.nav-link {
        padding-right: 1rem;
    }
    .navbar-expand-sm
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle.nav-link:after {
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-sm
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle.nav-link:after {
        -webkit-transition: none;
        transition: none;
    }
}
@media (max-width: 575.98px) {
    .navbar-expand-sm
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle:after {
        font-size: 0.75rem;
        float: right;
    }
}
@media (max-width: 575.98px) {
    .navbar-expand-sm
        .navbar-collapse
        .nav-item.dropdown.show
        .dropdown-toggle.nav-link:after {
        -webkit-transform: rotate(0);
        transform: rotate(0);
    }
}
@media (max-width: 575.98px) {
    .navbar-expand-sm.navbar-dark .navbar-collapse .dropdown-item {
        color: hsla(0, 0%, 100%, 0.85);
    }
}
@media (max-width: 575.98px) {
    .navbar-expand-sm.navbar-light .navbar-collapse .dropdown-item {
        color: rgba(31, 45, 61, 0.5);
    }
}
@media (min-width: 576px) {
    .navbar-expand-sm
        .dropdown:not(.dropdown-submenu):not(.dropdown-fluid)
        > .dropdown-menu:not(.dropdown-menu-right) {
        margin-left: -1.25rem;
    }
    .navbar-expand-sm
        .dropdown:not(.dropdown-submenu):not(.dropdown-fluid)
        > .dropdown-menu-right {
        margin-right: -1.25rem;
    }
    .navbar-expand-sm .dropdown-menu .list-group > li .list-group-item {
        border: 0;
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (min-width: 576px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-sm .dropdown-menu .list-group > li .list-group-item {
        -webkit-transition: none;
        transition: none;
    }
}
@media (min-width: 576px) {
    .navbar-expand-sm .dropdown-menu .list-group > li .media-body * {
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (min-width: 576px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-sm .dropdown-menu .list-group > li .media-body * {
        -webkit-transition: none;
        transition: none;
    }
}
@media (min-width: 576px) {
    .navbar-expand-sm .dropdown-menu .list-group > li:hover .list-group-item {
        z-index: 11;
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
        background-color: #fafbfe;
        -webkit-box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
        box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
        border-radius: 0.375rem;
    }
}
@media (min-width: 576px) {
    .navbar-expand-sm .dropdown-submenu .dropdown-menu {
        min-width: 16rem;
        margin-left: 1rem;
    }
    .navbar-expand-sm .dropdown-submenu .dropdown-menu:before {
        content: "";
        border-left: 1.5rem solid transparent;
        position: absolute;
        left: -1rem;
        top: 0;
        height: 100%;
    }
    .navbar-expand-sm .dropdown-submenu .dropdown-item:after {
        right: 0;
    }
}
@media (min-width: 576px) {
    .navbar-expand-sm .dropdown-fluid .dropdown-menu {
        overflow: hidden;
        padding: 0;
        min-width: 1000px;
    }
    .navbar-expand-sm .dropdown-fluid .dropdown-col-image {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        overflow: hidden;
    }
}
@media (max-width: 767.98px) {
    .navbar-expand-md .navbar-collapse .dropdown-menu {
        background: transparent;
        padding: 0 0 0 1rem;
    }
    .navbar-expand-md .navbar-collapse .dropdown-menu-links,
    .navbar-expand-md .navbar-collapse .dropdown-menu-links:before {
        background: transparent;
    }
    .navbar-expand-md .navbar-collapse .dropdown-item {
        position: relative;
        font-size: 0.875rem;
        font-weight: 600;
    }
    .navbar-expand-md
        .navbar-collapse
        .dropdown-submenu.show
        .dropdown-toggle:after {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-md
        .navbar-collapse
        .dropdown-submenu.show
        .dropdown-toggle:after {
        -webkit-transition: none;
        transition: none;
    }
}
@media (max-width: 767.98px) {
    .navbar-expand-md
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle.nav-link {
        padding-right: 1rem;
    }
    .navbar-expand-md
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle.nav-link:after {
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-md
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle.nav-link:after {
        -webkit-transition: none;
        transition: none;
    }
}
@media (max-width: 767.98px) {
    .navbar-expand-md
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle:after {
        font-size: 0.75rem;
        float: right;
    }
}
@media (max-width: 767.98px) {
    .navbar-expand-md
        .navbar-collapse
        .nav-item.dropdown.show
        .dropdown-toggle.nav-link:after {
        -webkit-transform: rotate(0);
        transform: rotate(0);
    }
}
@media (max-width: 767.98px) {
    .navbar-expand-md.navbar-dark .navbar-collapse .dropdown-item {
        color: hsla(0, 0%, 100%, 0.85);
    }
}
@media (max-width: 767.98px) {
    .navbar-expand-md.navbar-light .navbar-collapse .dropdown-item {
        color: rgba(31, 45, 61, 0.5);
    }
}
@media (min-width: 768px) {
    .navbar-expand-md
        .dropdown:not(.dropdown-submenu):not(.dropdown-fluid)
        > .dropdown-menu:not(.dropdown-menu-right) {
        margin-left: -1.25rem;
    }
    .navbar-expand-md
        .dropdown:not(.dropdown-submenu):not(.dropdown-fluid)
        > .dropdown-menu-right {
        margin-right: -1.25rem;
    }
    .navbar-expand-md .dropdown-menu .list-group > li .list-group-item {
        border: 0;
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (min-width: 768px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-md .dropdown-menu .list-group > li .list-group-item {
        -webkit-transition: none;
        transition: none;
    }
}
@media (min-width: 768px) {
    .navbar-expand-md .dropdown-menu .list-group > li .media-body * {
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (min-width: 768px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-md .dropdown-menu .list-group > li .media-body * {
        -webkit-transition: none;
        transition: none;
    }
}
@media (min-width: 768px) {
    .navbar-expand-md .dropdown-menu .list-group > li:hover .list-group-item {
        z-index: 11;
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
        background-color: #fafbfe;
        -webkit-box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
        box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
        border-radius: 0.375rem;
    }
}
@media (min-width: 768px) {
    .navbar-expand-md .dropdown-submenu .dropdown-menu {
        min-width: 16rem;
        margin-left: 1rem;
    }
    .navbar-expand-md .dropdown-submenu .dropdown-menu:before {
        content: "";
        border-left: 1.5rem solid transparent;
        position: absolute;
        left: -1rem;
        top: 0;
        height: 100%;
    }
    .navbar-expand-md .dropdown-submenu .dropdown-item:after {
        right: 0;
    }
}
@media (min-width: 768px) {
    .navbar-expand-md .dropdown-fluid .dropdown-menu {
        overflow: hidden;
        padding: 0;
        min-width: 1000px;
    }
    .navbar-expand-md .dropdown-fluid .dropdown-col-image {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        overflow: hidden;
    }
}
@media (max-width: 991.98px) {
    .navbar-expand-lg .navbar-collapse .dropdown-menu {
        background: transparent;
        padding: 0 0 0 1rem;
    }
    .navbar-expand-lg .navbar-collapse .dropdown-menu-links,
    .navbar-expand-lg .navbar-collapse .dropdown-menu-links:before {
        background: transparent;
    }
    .navbar-expand-lg .navbar-collapse .dropdown-item {
        position: relative;
        font-size: 0.875rem;
        font-weight: 600;
    }
    .navbar-expand-lg
        .navbar-collapse
        .dropdown-submenu.show
        .dropdown-toggle:after {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (max-width: 991.98px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-lg
        .navbar-collapse
        .dropdown-submenu.show
        .dropdown-toggle:after {
        -webkit-transition: none;
        transition: none;
    }
}
@media (max-width: 991.98px) {
    .navbar-expand-lg
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle.nav-link {
        padding-right: 1rem;
    }
    .navbar-expand-lg
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle.nav-link:after {
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (max-width: 991.98px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-lg
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle.nav-link:after {
        -webkit-transition: none;
        transition: none;
    }
}
@media (max-width: 991.98px) {
    .navbar-expand-lg
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle:after {
        font-size: 0.75rem;
        float: right;
    }
}
@media (max-width: 991.98px) {
    .navbar-expand-lg
        .navbar-collapse
        .nav-item.dropdown.show
        .dropdown-toggle.nav-link:after {
        -webkit-transform: rotate(0);
        transform: rotate(0);
    }
}
@media (max-width: 991.98px) {
    .navbar-expand-lg.navbar-dark .navbar-collapse .dropdown-item {
        color: hsla(0, 0%, 100%, 0.85);
    }
}
@media (max-width: 991.98px) {
    .navbar-expand-lg.navbar-light .navbar-collapse .dropdown-item {
        color: rgba(31, 45, 61, 0.5);
    }
}
@media (min-width: 992px) {
    .navbar-expand-lg
        .dropdown:not(.dropdown-submenu):not(.dropdown-fluid)
        > .dropdown-menu:not(.dropdown-menu-right) {
        margin-left: -1.25rem;
    }
    .navbar-expand-lg
        .dropdown:not(.dropdown-submenu):not(.dropdown-fluid)
        > .dropdown-menu-right {
        margin-right: -1.25rem;
    }
    .navbar-expand-lg .dropdown-menu .list-group > li .list-group-item {
        border: 0;
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (min-width: 992px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-lg .dropdown-menu .list-group > li .list-group-item {
        -webkit-transition: none;
        transition: none;
    }
}
@media (min-width: 992px) {
    .navbar-expand-lg .dropdown-menu .list-group > li .media-body * {
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (min-width: 992px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-lg .dropdown-menu .list-group > li .media-body * {
        -webkit-transition: none;
        transition: none;
    }
}
@media (min-width: 992px) {
    .navbar-expand-lg .dropdown-menu .list-group > li:hover .list-group-item {
        z-index: 11;
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
        background-color: #fafbfe;
        -webkit-box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
        box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
        border-radius: 0.375rem;
    }
}
@media (min-width: 992px) {
    .navbar-expand-lg .dropdown-submenu .dropdown-menu {
        min-width: 16rem;
        margin-left: 1rem;
    }
    .navbar-expand-lg .dropdown-submenu .dropdown-menu:before {
        content: "";
        border-left: 1.5rem solid transparent;
        position: absolute;
        left: -1rem;
        top: 0;
        height: 100%;
    }
    .navbar-expand-lg .dropdown-submenu .dropdown-item:after {
        right: 0;
    }
}
@media (min-width: 992px) {
    .navbar-expand-lg .dropdown-fluid .dropdown-menu {
        overflow: hidden;
        padding: 0;
        min-width: 1000px;
    }
    .navbar-expand-lg .dropdown-fluid .dropdown-col-image {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        overflow: hidden;
    }
}
@media (max-width: 1199.98px) {
    .navbar-expand-xl .navbar-collapse .dropdown-menu {
        background: transparent;
        padding: 0 0 0 1rem;
    }
    .navbar-expand-xl .navbar-collapse .dropdown-menu-links,
    .navbar-expand-xl .navbar-collapse .dropdown-menu-links:before {
        background: transparent;
    }
    .navbar-expand-xl .navbar-collapse .dropdown-item {
        position: relative;
        font-size: 0.875rem;
        font-weight: 600;
    }
    .navbar-expand-xl
        .navbar-collapse
        .dropdown-submenu.show
        .dropdown-toggle:after {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (max-width: 1199.98px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-xl
        .navbar-collapse
        .dropdown-submenu.show
        .dropdown-toggle:after {
        -webkit-transition: none;
        transition: none;
    }
}
@media (max-width: 1199.98px) {
    .navbar-expand-xl
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle.nav-link {
        padding-right: 1rem;
    }
    .navbar-expand-xl
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle.nav-link:after {
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (max-width: 1199.98px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-xl
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle.nav-link:after {
        -webkit-transition: none;
        transition: none;
    }
}
@media (max-width: 1199.98px) {
    .navbar-expand-xl
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle:after {
        font-size: 0.75rem;
        float: right;
    }
}
@media (max-width: 1199.98px) {
    .navbar-expand-xl
        .navbar-collapse
        .nav-item.dropdown.show
        .dropdown-toggle.nav-link:after {
        -webkit-transform: rotate(0);
        transform: rotate(0);
    }
}
@media (max-width: 1199.98px) {
    .navbar-expand-xl.navbar-dark .navbar-collapse .dropdown-item {
        color: hsla(0, 0%, 100%, 0.85);
    }
}
@media (max-width: 1199.98px) {
    .navbar-expand-xl.navbar-light .navbar-collapse .dropdown-item {
        color: rgba(31, 45, 61, 0.5);
    }
}
@media (min-width: 1200px) {
    .navbar-expand-xl
        .dropdown:not(.dropdown-submenu):not(.dropdown-fluid)
        > .dropdown-menu:not(.dropdown-menu-right) {
        margin-left: -1.25rem;
    }
    .navbar-expand-xl
        .dropdown:not(.dropdown-submenu):not(.dropdown-fluid)
        > .dropdown-menu-right {
        margin-right: -1.25rem;
    }
    .navbar-expand-xl .dropdown-menu .list-group > li .list-group-item {
        border: 0;
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (min-width: 1200px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-xl .dropdown-menu .list-group > li .list-group-item {
        -webkit-transition: none;
        transition: none;
    }
}
@media (min-width: 1200px) {
    .navbar-expand-xl .dropdown-menu .list-group > li .media-body * {
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
}
@media (min-width: 1200px) and (prefers-reduced-motion: reduce) {
    .navbar-expand-xl .dropdown-menu .list-group > li .media-body * {
        -webkit-transition: none;
        transition: none;
    }
}
@media (min-width: 1200px) {
    .navbar-expand-xl .dropdown-menu .list-group > li:hover .list-group-item {
        z-index: 11;
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
        background-color: #fafbfe;
        -webkit-box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
        box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
        border-radius: 0.375rem;
    }
}
@media (min-width: 1200px) {
    .navbar-expand-xl .dropdown-submenu .dropdown-menu {
        min-width: 16rem;
        margin-left: 1rem;
    }
    .navbar-expand-xl .dropdown-submenu .dropdown-menu:before {
        content: "";
        border-left: 1.5rem solid transparent;
        position: absolute;
        left: -1rem;
        top: 0;
        height: 100%;
    }
    .navbar-expand-xl .dropdown-submenu .dropdown-item:after {
        right: 0;
    }
}
@media (min-width: 1200px) {
    .navbar-expand-xl .dropdown-fluid .dropdown-menu {
        overflow: hidden;
        padding: 0;
        min-width: 1000px;
    }
    .navbar-expand-xl .dropdown-fluid .dropdown-col-image {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        overflow: hidden;
    }
}
.navbar-expand .navbar-collapse .dropdown-menu {
    background: transparent;
    padding: 0 0 0 1rem;
}
.navbar-expand .navbar-collapse .dropdown-menu-links,
.navbar-expand .navbar-collapse .dropdown-menu-links:before {
    background: transparent;
}
.navbar-expand .navbar-collapse .dropdown-item {
    position: relative;
    font-size: 0.875rem;
    font-weight: 600;
}
.navbar-expand .navbar-collapse .dropdown-submenu.show .dropdown-toggle:after {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .navbar-expand
        .navbar-collapse
        .dropdown-submenu.show
        .dropdown-toggle:after {
        -webkit-transition: none;
        transition: none;
    }
}
.navbar-expand .navbar-collapse .nav-item.dropdown .dropdown-toggle.nav-link {
    padding-right: 1rem;
}
.navbar-expand
    .navbar-collapse
    .nav-item.dropdown
    .dropdown-toggle.nav-link:after {
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .navbar-expand
        .navbar-collapse
        .nav-item.dropdown
        .dropdown-toggle.nav-link:after {
        -webkit-transition: none;
        transition: none;
    }
}
.navbar-expand .navbar-collapse .nav-item.dropdown .dropdown-toggle:after {
    font-size: 0.75rem;
    float: right;
}
.navbar-expand
    .navbar-collapse
    .nav-item.dropdown.show
    .dropdown-toggle.nav-link:after {
    -webkit-transform: rotate(0);
    transform: rotate(0);
}
.navbar-expand.navbar-dark .navbar-collapse .dropdown-item {
    color: hsla(0, 0%, 100%, 0.85);
}
.navbar-expand.navbar-light .navbar-collapse .dropdown-item {
    color: rgba(31, 45, 61, 0.5);
}
.navbar-expand
    .dropdown:not(.dropdown-submenu):not(.dropdown-fluid)
    > .dropdown-menu:not(.dropdown-menu-right) {
    margin-left: -1.25rem;
}
.navbar-expand
    .dropdown:not(.dropdown-submenu):not(.dropdown-fluid)
    > .dropdown-menu-right {
    margin-right: -1.25rem;
}
.navbar-expand .dropdown-menu .list-group > li .list-group-item {
    border: 0;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .navbar-expand .dropdown-menu .list-group > li .list-group-item {
        -webkit-transition: none;
        transition: none;
    }
}
.navbar-expand .dropdown-menu .list-group > li .media-body * {
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .navbar-expand .dropdown-menu .list-group > li .media-body * {
        -webkit-transition: none;
        transition: none;
    }
}
.navbar-expand .dropdown-menu .list-group > li:hover .list-group-item {
    z-index: 11;
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
    background-color: #fafbfe;
    -webkit-box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
    box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
    border-radius: 0.375rem;
}
.navbar-expand .dropdown-submenu .dropdown-menu {
    min-width: 16rem;
    margin-left: 1rem;
}
.navbar-expand .dropdown-submenu .dropdown-menu:before {
    content: "";
    border-left: 1.5rem solid transparent;
    position: absolute;
    left: -1rem;
    top: 0;
    height: 100%;
}
.navbar-expand .dropdown-submenu .dropdown-item:after {
    right: 0;
}
.navbar-expand .dropdown-fluid .dropdown-menu {
    overflow: hidden;
    padding: 0;
    min-width: 1000px;
}
.navbar-expand .dropdown-fluid .dropdown-col-image {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    overflow: hidden;
}
.navbar-search .input-group {
    border-radius: 2rem;
    border: 0 solid;
    -webkit-transition: background-color 0.4s linear;
    transition: background-color 0.4s linear;
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
}
@media (prefers-reduced-motion: reduce) {
    .navbar-search .input-group {
        -webkit-transition: none;
        transition: none;
    }
}
.navbar-search .input-group .input-group-text {
    background-color: transparent;
    padding-left: 1rem;
    border: 0;
}
.navbar-search .form-control {
    width: 250px;
    background-color: transparent;
    border: 0;
    -webkit-transition: all 0.2s cubic-bezier(0.77, 0, 0.2, 2.25);
    transition: all 0.2s cubic-bezier(0.77, 0, 0.2, 2.25);
}
@media (prefers-reduced-motion: reduce) {
    .navbar-search .form-control {
        -webkit-transition: none;
        transition: none;
    }
}
.navbar-search .focused .input-group .form-control {
    width: 380px;
}
.navbar-search .close {
    display: none;
}
.navbar-search-dark .input-group {
    background-color: rgba(31, 45, 61, 0.8);
    border-color: hsla(0, 0%, 100%, 0.6);
}
.navbar-search-dark .input-group-text {
    color: hsla(0, 0%, 100%, 0.6);
}
.navbar-search-dark .form-control {
    color: hsla(0, 0%, 100%, 0.9);
}
.navbar-search-dark .form-control::-webkit-input-placeholder {
    color: hsla(0, 0%, 100%, 0.6);
}
.navbar-search-dark .form-control::-moz-placeholder {
    color: hsla(0, 0%, 100%, 0.6);
}
.navbar-search-dark .form-control:-ms-input-placeholder {
    color: hsla(0, 0%, 100%, 0.6);
}
.navbar-search-dark .form-control::-ms-input-placeholder {
    color: hsla(0, 0%, 100%, 0.6);
}
.navbar-search-dark .form-control::placeholder {
    color: hsla(0, 0%, 100%, 0.6);
}
.navbar-search-dark .focused .input-group {
    background-color: rgba(31, 45, 61, 0.9);
    border-color: hsla(0, 0%, 100%, 0.9);
}
.navbar-search-light .input-group {
    background-color: hsla(0, 0%, 100%, 0.9);
    border-color: rgba(0, 0, 0, 0.6);
}
.navbar-search-light .input-group-text {
    color: rgba(0, 0, 0, 0.6);
}
.navbar-search-light .form-control {
    color: rgba(0, 0, 0, 0.9);
}
.navbar-search-light .form-control::-webkit-input-placeholder {
    color: rgba(0, 0, 0, 0.6);
}
.navbar-search-light .form-control::-moz-placeholder {
    color: rgba(0, 0, 0, 0.6);
}
.navbar-search-light .form-control:-ms-input-placeholder {
    color: rgba(0, 0, 0, 0.6);
}
.navbar-search-light .form-control::-ms-input-placeholder {
    color: rgba(0, 0, 0, 0.6);
}
.navbar-search-light .form-control::placeholder {
    color: rgba(0, 0, 0, 0.6);
}
.navbar-search-light .focused .input-group {
    background-color: #fff;
    border-color: rgba(0, 0, 0, 0.9);
}
.pagination {
    margin-bottom: 0;
}
.page-item .page-link,
.page-item > span {
    margin: 0 3px;
    border-radius: 0.2rem;
    text-align: center;
}
.pagination-circle .page-item .page-link,
.pagination-circle .page-item > span {
    border-radius: 50% !important;
    margin: 0 5px;
    display: block;
    width: 36px;
    height: 36px;
}
.pagination-circle.pagination-lg .page-item .page-link,
.pagination-circle.pagination-lg .page-item > span {
    border-radius: 50% !important;
    margin: 0 5px;
    display: block;
    width: 52px;
    height: 52px;
}
.omnisearch {
    width: 100%;
    margin-top: 1rem;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    opacity: 0;
    background-color: transparent;
    pointer-events: none;
    -webkit-transform: translateY(0);
    transform: translateY(0);
    -webkit-transition: opacity 0.15s, -webkit-transform 0.3s;
    transition: opacity 0.15s, -webkit-transform 0.3s;
    transition: transform 0.3s, opacity 0.15s;
    transition: transform 0.3s, opacity 0.15s, -webkit-transform 0.3s;
}
@media (prefers-reduced-motion: reduce) {
    .omnisearch {
        -webkit-transition: none;
        transition: none;
    }
}
.omnisearch.show {
    opacity: 1;
    -webkit-transform: translateY(50%);
    transform: translateY(50%);
}
.omnisearch .container {
    position: relative;
    height: 100%;
}
.omnisearch .omnisearch-form {
    display: block;
    position: relative;
    z-index: 700;
    background: #fff;
    border-radius: 0.375rem;
    width: 680px;
    margin: auto;
}
.omnisearch .omnisearch-form .input-group-text {
    font-size: 1.25rem;
    background: transparent;
}
.omnisearch .omnisearch-form .form-control {
    display: block;
    height: 68px;
    font-size: 1.25rem;
    color: #c0ccda;
    background-color: transparent;
    background-image: none;
}
.omnisearch .omnisearch-form .form-control::-webkit-input-placeholder {
    color: #aabacd;
}
.omnisearch .omnisearch-form .form-control::-moz-placeholder {
    color: #aabacd;
}
.omnisearch .omnisearch-form .form-control:-ms-input-placeholder {
    color: #aabacd;
}
.omnisearch .omnisearch-form .form-control::-ms-input-placeholder {
    color: #aabacd;
}
.omnisearch .omnisearch-form .form-control::placeholder {
    color: #aabacd;
}
.omnisearch .omnisearch-suggestions {
    width: 680px;
    min-height: 150px;
    padding: 1.5rem;
    background: #fff;
    margin: auto;
    border-radius: 0.375rem;
    position: relative;
    opacity: 0;
    -webkit-transition: opacity 0.3s;
    transition: opacity 0.3s;
    -webkit-transition-delay: 0.21s;
    transition-delay: 0.21s;
}
@media (prefers-reduced-motion: reduce) {
    .omnisearch .omnisearch-suggestions {
        -webkit-transition: none;
        transition: none;
    }
}
.omnisearch .omnisearch-suggestions:before {
    background: #fff;
    -webkit-box-shadow: none;
    box-shadow: none;
    content: "";
    display: block;
    height: 16px;
    width: 16px;
    left: 20px;
    position: absolute;
    bottom: 100%;
    -webkit-transform: rotate(-45deg) translateY(1rem);
    transform: rotate(-45deg) translateY(1rem);
    z-index: -5;
    border-radius: 0.2rem;
}
.omnisearch .omnisearch-suggestions .heading {
    color: #8492a6;
}
.omnisearch .omnisearch-suggestions .list-link span {
    font-weight: 600;
    color: #3c4858;
}
.omnisearch .omnisearch-suggestions .list-link:hover,
.omnisearch .omnisearch-suggestions .list-link:hover span {
    color: {{ $settings->website_theme }};
}
.omnisearch.show .omnisearch-form,
.omnisearch.show .omnisearch-suggestions {
    pointer-events: auto;
}
.omnisearch.show .omnisearch-suggestions {
    opacity: 1;
}
@media (max-width: 991.98px) {
    .omnisearch .omnisearch-form,
    .omnisearch .omnisearch-suggestions {
        width: 100%;
    }
}
.omnisearch-open {
    overflow: hidden;
}
.popover {
    border: 0;
}
.popover-header {
    font-weight: 600;
}
.popover-primary {
    background-color: {{ $settings->website_theme }};
}
.popover-primary .popover-header {
    background-color: {{ $settings->website_theme }};
    color: #fff;
}
.popover-primary .popover-body {
    color: #fff;
}
.popover-primary .popover-header {
    border-color: hsla(0, 0%, 100%, 0.2);
}
.popover-primary.bs-popover-auto[x-placement^="top"] .arrow:after,
.popover-primary.bs-popover-top .arrow:after {
    border-top-color: {{ $settings->website_theme }};
}
.popover-primary.bs-popover-auto[x-placement^="right"] .arrow:after,
.popover-primary.bs-popover-right .arrow:after {
    border-right-color: {{ $settings->website_theme }};
}
.popover-primary.bs-popover-auto[x-placement^="bottom"] .arrow:after,
.popover-primary.bs-popover-bottom .arrow:after {
    border-bottom-color: {{ $settings->website_theme }};
}
.popover-primary.bs-popover-auto[x-placement^="left"] .arrow:after,
.popover-primary.bs-popover-left .arrow:after {
    border-left-color: {{ $settings->website_theme }};
}
.popover-secondary {
    background-color: #eff2f7;
}
.popover-secondary .popover-header {
    background-color: #eff2f7;
    color: #273444;
}
.popover-secondary .popover-body {
    color: #273444;
}
.popover-secondary .popover-header {
    border-color: rgba(39, 52, 68, 0.2);
}
.popover-secondary.bs-popover-auto[x-placement^="top"] .arrow:after,
.popover-secondary.bs-popover-top .arrow:after {
    border-top-color: #eff2f7;
}
.popover-secondary.bs-popover-auto[x-placement^="right"] .arrow:after,
.popover-secondary.bs-popover-right .arrow:after {
    border-right-color: #eff2f7;
}
.popover-secondary.bs-popover-auto[x-placement^="bottom"] .arrow:after,
.popover-secondary.bs-popover-bottom .arrow:after {
    border-bottom-color: #eff2f7;
}
.popover-secondary.bs-popover-auto[x-placement^="left"] .arrow:after,
.popover-secondary.bs-popover-left .arrow:after {
    border-left-color: #eff2f7;
}
.popover-success {
    background-color: #36b37e;
}
.popover-success .popover-header {
    background-color: #36b37e;
    color: #fff;
}
.popover-success .popover-body {
    color: #fff;
}
.popover-success .popover-header {
    border-color: hsla(0, 0%, 100%, 0.2);
}
.popover-success.bs-popover-auto[x-placement^="top"] .arrow:after,
.popover-success.bs-popover-top .arrow:after {
    border-top-color: #36b37e;
}
.popover-success.bs-popover-auto[x-placement^="right"] .arrow:after,
.popover-success.bs-popover-right .arrow:after {
    border-right-color: #36b37e;
}
.popover-success.bs-popover-auto[x-placement^="bottom"] .arrow:after,
.popover-success.bs-popover-bottom .arrow:after {
    border-bottom-color: #36b37e;
}
.popover-success.bs-popover-auto[x-placement^="left"] .arrow:after,
.popover-success.bs-popover-left .arrow:after {
    border-left-color: #36b37e;
}
.popover-info {
    background-color: #00b8d9;
}
.popover-info .popover-header {
    background-color: #00b8d9;
    color: #fff;
}
.popover-info .popover-body {
    color: #fff;
}
.popover-info .popover-header {
    border-color: hsla(0, 0%, 100%, 0.2);
}
.popover-info.bs-popover-auto[x-placement^="top"] .arrow:after,
.popover-info.bs-popover-top .arrow:after {
    border-top-color: #00b8d9;
}
.popover-info.bs-popover-auto[x-placement^="right"] .arrow:after,
.popover-info.bs-popover-right .arrow:after {
    border-right-color: #00b8d9;
}
.popover-info.bs-popover-auto[x-placement^="bottom"] .arrow:after,
.popover-info.bs-popover-bottom .arrow:after {
    border-bottom-color: #00b8d9;
}
.popover-info.bs-popover-auto[x-placement^="left"] .arrow:after,
.popover-info.bs-popover-left .arrow:after {
    border-left-color: #00b8d9;
}
.popover-warning {
    background-color: #ffab00;
}
.popover-warning .popover-header {
    background-color: #ffab00;
    color: #fff;
}
.popover-warning .popover-body {
    color: #fff;
}
.popover-warning .popover-header {
    border-color: hsla(0, 0%, 100%, 0.2);
}
.popover-warning.bs-popover-auto[x-placement^="top"] .arrow:after,
.popover-warning.bs-popover-top .arrow:after {
    border-top-color: #ffab00;
}
.popover-warning.bs-popover-auto[x-placement^="right"] .arrow:after,
.popover-warning.bs-popover-right .arrow:after {
    border-right-color: #ffab00;
}
.popover-warning.bs-popover-auto[x-placement^="bottom"] .arrow:after,
.popover-warning.bs-popover-bottom .arrow:after {
    border-bottom-color: #ffab00;
}
.popover-warning.bs-popover-auto[x-placement^="left"] .arrow:after,
.popover-warning.bs-popover-left .arrow:after {
    border-left-color: #ffab00;
}
.popover-danger {
    background-color: #ff5630;
}
.popover-danger .popover-header {
    background-color: #ff5630;
    color: #fff;
}
.popover-danger .popover-body {
    color: #fff;
}
.popover-danger .popover-header {
    border-color: hsla(0, 0%, 100%, 0.2);
}
.popover-danger.bs-popover-auto[x-placement^="top"] .arrow:after,
.popover-danger.bs-popover-top .arrow:after {
    border-top-color: #ff5630;
}
.popover-danger.bs-popover-auto[x-placement^="right"] .arrow:after,
.popover-danger.bs-popover-right .arrow:after {
    border-right-color: #ff5630;
}
.popover-danger.bs-popover-auto[x-placement^="bottom"] .arrow:after,
.popover-danger.bs-popover-bottom .arrow:after {
    border-bottom-color: #ff5630;
}
.popover-danger.bs-popover-auto[x-placement^="left"] .arrow:after,
.popover-danger.bs-popover-left .arrow:after {
    border-left-color: #ff5630;
}
.popover-light {
    background-color: #eff2f7;
}
.popover-light .popover-header {
    background-color: #eff2f7;
    color: #273444;
}
.popover-light .popover-body {
    color: #273444;
}
.popover-light .popover-header {
    border-color: rgba(39, 52, 68, 0.2);
}
.popover-light.bs-popover-auto[x-placement^="top"] .arrow:after,
.popover-light.bs-popover-top .arrow:after {
    border-top-color: #eff2f7;
}
.popover-light.bs-popover-auto[x-placement^="right"] .arrow:after,
.popover-light.bs-popover-right .arrow:after {
    border-right-color: #eff2f7;
}
.popover-light.bs-popover-auto[x-placement^="bottom"] .arrow:after,
.popover-light.bs-popover-bottom .arrow:after {
    border-bottom-color: #eff2f7;
}
.popover-light.bs-popover-auto[x-placement^="left"] .arrow:after,
.popover-light.bs-popover-left .arrow:after {
    border-left-color: #eff2f7;
}
.popover-dark {
    background-color: #273444;
}
.popover-dark .popover-header {
    background-color: #273444;
    color: #fff;
}
.popover-dark .popover-body {
    color: #fff;
}
.popover-dark .popover-header {
    border-color: hsla(0, 0%, 100%, 0.2);
}
.popover-dark.bs-popover-auto[x-placement^="top"] .arrow:after,
.popover-dark.bs-popover-top .arrow:after {
    border-top-color: #273444;
}
.popover-dark.bs-popover-auto[x-placement^="right"] .arrow:after,
.popover-dark.bs-popover-right .arrow:after {
    border-right-color: #273444;
}
.popover-dark.bs-popover-auto[x-placement^="bottom"] .arrow:after,
.popover-dark.bs-popover-bottom .arrow:after {
    border-bottom-color: #273444;
}
.popover-dark.bs-popover-auto[x-placement^="left"] .arrow:after,
.popover-dark.bs-popover-left .arrow:after {
    border-left-color: #273444;
}
.popover-neutral {
    background-color: #fff;
}
.popover-neutral .popover-header {
    background-color: #fff;
    color: #273444;
}
.popover-neutral .popover-body {
    color: #273444;
}
.popover-neutral .popover-header {
    border-color: rgba(39, 52, 68, 0.2);
}
.popover-neutral.bs-popover-auto[x-placement^="top"] .arrow:after,
.popover-neutral.bs-popover-top .arrow:after {
    border-top-color: #fff;
}
.popover-neutral.bs-popover-auto[x-placement^="right"] .arrow:after,
.popover-neutral.bs-popover-right .arrow:after {
    border-right-color: #fff;
}
.popover-neutral.bs-popover-auto[x-placement^="bottom"] .arrow:after,
.popover-neutral.bs-popover-bottom .arrow:after {
    border-bottom-color: #fff;
}
.popover-neutral.bs-popover-auto[x-placement^="left"] .arrow:after,
.popover-neutral.bs-popover-left .arrow:after {
    border-left-color: #fff;
}
.popover-white {
    background-color: #fff;
}
.popover-white .popover-header {
    background-color: #fff;
    color: #273444;
}
.popover-white .popover-body {
    color: #273444;
}
.popover-white .popover-header {
    border-color: rgba(39, 52, 68, 0.2);
}
.popover-white.bs-popover-auto[x-placement^="top"] .arrow:after,
.popover-white.bs-popover-top .arrow:after {
    border-top-color: #fff;
}
.popover-white.bs-popover-auto[x-placement^="right"] .arrow:after,
.popover-white.bs-popover-right .arrow:after {
    border-right-color: #fff;
}
.popover-white.bs-popover-auto[x-placement^="bottom"] .arrow:after,
.popover-white.bs-popover-bottom .arrow:after {
    border-bottom-color: #fff;
}
.popover-white.bs-popover-auto[x-placement^="left"] .arrow:after,
.popover-white.bs-popover-left .arrow:after {
    border-left-color: #fff;
}
.progress-wrapper {
    position: relative;
    padding-top: 1.5rem;
}
.progress-wrapper .progress {
    margin-bottom: 1rem;
}
.progress-inverse {
    background-color: inverse(#eff2f7);
}
.progress-heading {
    font-size: 0.875rem;
    font-weight: 600;
    margin: 0 0 2px;
    padding: 0;
}
.progress-text {
    margin-bottom: 0;
}
.progress-lg {
    height: 1rem;
}
.progress-md {
    height: 0.75rem;
}
.progress-sm {
    height: 0.375rem;
}
.progress-xs {
    height: 0.125rem;
}
.progress-group {
    position: relative;
}
.progress-prepend-icon {
    position: absolute;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: 20px;
    top: 50%;
}
.progress-prepend-icon:not(:first-child) {
    right: -17px;
}
.progress-prepend-icon:not(:last-child) {
    left: -17px;
}
.progress-tooltip {
    display: inline-block;
    background: rgba(0, 0, 0, 0.8);
    color: #fff;
    padding: 0.25rem 0.375rem;
    line-height: 1;
    font-size: 0.7rem;
    position: relative;
    bottom: 8px;
    border-radius: 3px;
    margin-left: -15px;
}
.progress-tooltip:after {
    top: 100%;
    left: 10px;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border: 5px solid rgba(51, 51, 51, 0);
    border-top-color: rgba(0, 0, 0, 0.8);
}
.progress-label {
    left: 0;
    color: #3c4858;
}
.progress-label,
.progress-percentage {
    display: inline-block;
    position: absolute;
    top: 0;
}
.progress-percentage {
    right: 0;
}
.progress-circle {
    width: 100px;
    height: 100px;
}
.progress-circle .progressbar-text {
    font-size: 1.5rem;
    font-weight: 500;
    color: #8492a6 !important;
}
.progress-circle .h1,
.progress-circle .h2,
.progress-circle .h3,
.progress-circle [class^="display"] {
    color: #3c4858 !important;
}
.progress-circle svg path {
    stroke-linecap: round;
}
.progress-circle.progress-sm {
    width: 60px;
    height: 60px;
}
.progress-circle.progress-sm .progressbar-text {
    font-size: 0.875rem;
}
.progress-circle.progress-lg {
    width: 140px;
    height: 140px;
}
.progress-circle.progress-lg .progressbar-text {
    font-size: 1.25rem;
}
.static-rating {
    display: inline-block;
}
.static-rating .star {
    color: #e0e6ed;
}
.static-rating .voted {
    color: #fc0;
}
.static-rating-sm .star {
    font-size: 0.75rem;
}
.rating {
    display: inline-block;
}
.rating .star {
    font-family: Font Awesome\5 Solid;
    font-weight: 400;
    font-style: normal;
    float: left;
    padding: 0 1px;
    cursor: pointer;
}
.rating .star:before {
    content: "\F005";
    display: block;
    font-size: 14px;
    color: #e0e6ed;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
}
.rating:hover .star:before {
    color: #e0e6ed;
}
.rating .voted:before,
.rating:hover .over:before {
    color: #fc0;
}
.rating-lg .star:before {
    font-size: 18px;
}
.rating-xl .star:before {
    font-size: 24px;
}
.ribbon {
    position: absolute;
    top: 1rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 2.5rem;
    height: 2.5rem;
    font-size: 0.75rem;
    font-weight: 600;
    z-index: 10;
}
.ribbon-left {
    left: 1rem;
}
.ribbon-right {
    right: 1rem;
}
.ribbon-primary {
    color: #fff;
    background-color: {{ $settings->website_theme }};
}
.ribbon-secondary {
    color: #273444;
    background-color: #fff;
}
.ribbon-success {
    color: #fff;
    background-color: #51cb97;
}
.ribbon-info {
    color: #fff;
    background-color: #0ddaff;
}
.ribbon-warning {
    color: #fff;
    background-color: #ffbc33;
}
.ribbon-danger {
    color: #fff;
    background-color: #ff8063;
}
.ribbon-light {
    color: #273444;
    background-color: #fff;
}
.ribbon-dark {
    color: #fff;
    background-color: #3a4d64;
}
.ribbon-neutral,
.ribbon-white {
    color: #273444;
    background-color: #fff;
}
section {
    background-color: #f8f8fb;
}
.slice {
    position: relative;
    padding-top: 4rem;
    padding-bottom: 4rem;
}
.slice-xl {
    padding-top: 8rem;
    padding-bottom: 8rem;
}
.slice-lg {
    padding-top: 6rem;
    padding-bottom: 6rem;
}
.slice-sm {
    padding-top: 2rem;
    padding-bottom: 2rem;
}
.slice:not(.border-top):not(.border-bottom):not(.delimiter-bottom):not([class*="bg-"]):not(.section-rotate)
    + .slice:not(.border-top):not(.border-bottom):not(.delimiter-top):not([class*="bg-"]) {
    padding-top: 0;
}
.slice-video {
    min-height: 600px;
}
.section-rotate {
    padding-top: 4rem;
    padding-bottom: 4rem;
    overflow: hidden;
    background: transparent;
    position: relative;
    z-index: 0;
}
.section-rotate .section-inner {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -2;
}
@media (min-width: 992px) {
    .section-rotate {
        min-height: 880px;
        padding-top: 8rem;
        padding-bottom: 8rem;
    }
    .section-rotate .section-inner {
        background: inherit;
        overflow: hidden;
    }
    .section-rotate .section-inner + .container {
        position: relative;
        z-index: 0;
    }
    .section-rotate .section-inner-bg {
        position: absolute;
        width: 100%;
        height: 100%;
    }
}
@media (min-width: 1200px) {
    .section-rotate {
        padding-top: 8rem;
        padding-bottom: 12rem;
    }
    .section-rotate .section-inner {
        top: -40%;
        left: -1rem;
        width: 130%;
        height: 124%;
        -webkit-transform: rotate(-7deg);
        transform: rotate(-7deg);
        border-bottom-left-radius: 3rem;
    }
    .section-rotate .section-inner + .container {
        padding-left: 2rem;
    }
    .section-rotate .container {
        position: relative;
    }
}
@media only screen and (min-width: 2000px) {
    .section-rotate .section-inner {
        top: -40%;
        left: -1rem;
        width: 120%;
        height: 118%;
    }
    .section-rotate .container {
        position: relative;
    }
}
.section-half-rounded {
    padding-top: 7rem;
    padding-bottom: 7rem;
    overflow: hidden;
    background: transparent;
    position: relative;
    z-index: 0;
}
.section-half-rounded .section-inner {
    position: absolute;
    top: 0;
    left: 0;
    width: 70%;
    height: 100%;
    z-index: -2;
    border-top-right-radius: 40px;
    border-bottom-right-radius: 40px;
}
@media (max-width: 991.98px) {
    .section-half-rounded .section-inner {
        width: 100%;
    }
}
.section-process {
    background: transparent;
}
.section-process-step {
    position: relative;
    padding: 4.5rem 0;
}
.section-process-step:not(:last-child):before {
    content: "";
    display: block;
    width: 360px;
    height: 100px;
    background: url("data:image/svg+xml;charset=utf8,%3Csvg width='355px' height='103px' viewBox='0 0 355 103' xmlns='http://www.w3.org/2000/svg'%3E%3Cg stroke='none' stroke-width='1' fill='none' fill-rule='evenodd' stroke-dasharray='6,12' stroke-linecap='round'%3E%3Cpath stroke='%23EFF2F7' stroke-width='3' transform='translate(173.245679, 51.548257) scale(-1, 1) translate(-173.245679, -51.548257)' d='M-6.75432109,1.54825684 C113.245679,110.326533 233.245679,130.359459 353.245679,61.647035'/%3E%3C/g%3E%3C/svg%3E")
        no-repeat 50%;
    background-size: 360px 100px;
    -webkit-transform: rotate(40deg);
    transform: rotate(40deg);
    position: absolute;
    margin: auto;
    left: 0;
    right: 0;
    bottom: -80px;
}
@media (max-width: 991.98px) {
    .section-process-step:not(:last-child):before {
        -webkit-transform: rotate(90deg) scale(0.7);
        transform: rotate(90deg) scale(0.7);
        bottom: 20px;
    }
}
.section-process-step:nth-child(2n):before {
    background: url("data:image/svg+xml;charset=utf8,%3Csvg width='355px' height='103px' viewBox='0 0 355 103' xmlns='http://www.w3.org/2000/svg'%3E%3Cg stroke='none' stroke-width='1' fill='none' fill-rule='evenodd' stroke-dasharray='6,12' stroke-linecap='round'%3E%3Cpath stroke='%23EFF2F7' stroke-width='3' d='M2.24567891,1.54825684 C122.245679,110.326533 242.245679,130.359459 362.245679,61.647035'/%3E%3C/g%3E%3C/svg%3E")
        no-repeat 50%;
    background-size: 360px 100px;
    -webkit-transform: rotate(-40deg);
    transform: rotate(-40deg);
}
@media (max-width: 991.98px) {
    .section-process-step:nth-child(2n):before {
        -webkit-transform: rotate(-90deg) scale(0.7);
        transform: rotate(-90deg) scale(0.7);
        bottom: 20px;
    }
}
.section-floating-icons {
    --icon-size: 5rem;
    --icon-sm-size: 3.75rem;
    --gutter: 7rem;
}
.section-floating-icons .icons-container {
    position: relative;
    max-width: 100%;
    height: 360px;
    margin: 0 auto;
}
.section-floating-icons .icons-container span {
    position: absolute;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    background: #fff;
    z-index: 1;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    border-radius: 50%;
    -webkit-box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
    box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
    -webkit-transition: all 0.2s cubic-bezier(0.77, 0, 0.2, 2.25);
    transition: all 0.2s cubic-bezier(0.77, 0, 0.2, 2.25);
}
@media (prefers-reduced-motion: reduce) {
    .section-floating-icons .icons-container span {
        -webkit-transition: none;
        transition: none;
    }
}
.section-floating-icons .icons-container span.icon {
    width: 5rem;
    height: 5rem;
}
.section-floating-icons .icons-container span.icon i {
    font-size: 2.3em;
}
.section-floating-icons .icons-container span.icon-sm {
    width: 3.75rem;
    height: 3.75rem;
}
.section-floating-icons .icons-container span.icon-sm i {
    font-size: 1.5em;
}
.section-floating-icons .icons-container span:first-child {
    color: #ffab00;
    z-index: 2;
}
.section-floating-icons .icons-container span img {
    max-width: 100%;
}
.section-floating-icons .icons-container span {
    opacity: 1;
}
.section-floating-icons .icons-container span:first-child {
    left: 50%;
    top: 50%;
    font-size: 42px;
    color: #00b8d9;
}
.section-floating-icons .icons-container span:nth-child(2) {
    left: calc(50% + 11.9rem);
    top: 50%;
}
.section-floating-icons .icons-container span:nth-child(3) {
    left: calc(50% + 7rem);
    top: calc(50% + 7rem);
}
.section-floating-icons .icons-container span:nth-child(4) {
    left: calc(50% + 7rem);
    top: calc(50% - 7rem);
}
.section-floating-icons .icons-container span:nth-child(5) {
    left: calc(50% + 28rem);
    top: 50%;
}
.section-floating-icons .icons-container span:nth-child(6) {
    left: calc(50% + 18.9rem);
    top: calc(50% + 10.5rem);
}
.section-floating-icons .icons-container span:nth-child(7) {
    left: calc(50% + 18.9rem);
    top: calc(50% - 10.5rem);
}
.section-floating-icons .icons-container span:nth-child(8) {
    left: calc(50% - 11.9rem);
    top: 50%;
}
.section-floating-icons .icons-container span:nth-child(9) {
    left: calc(50% - 7rem);
    top: calc(50% + 7rem);
}
.section-floating-icons .icons-container span:nth-child(10) {
    left: calc(50% - 7rem);
    top: calc(50% - 7rem);
}
.section-floating-icons .icons-container span:nth-child(11) {
    left: calc(50% - 28rem);
    top: 50%;
}
.section-floating-icons .icons-container span:nth-child(12) {
    left: calc(50% - 18.9rem);
    top: calc(50% + 10.5rem);
}
.section-floating-icons .icons-container span:nth-child(13) {
    left: calc(50% - 18.9rem);
    top: calc(50% - 10.5rem);
}
.sidebar-sticky.is_stuck {
    padding-top: 1.5rem;
}
.spotlight {
    position: relative;
}
.spotlight .container {
    height: 100%;
}
.spotlight .animated {
    opacity: 0;
}
.spotlight .animated.animation-ended {
    opacity: 1;
}
@media (min-width: 768px) {
    .spotlight-overlay-img {
        position: relative;
    }
    .spotlight-overlay-img img {
        position: absolute;
        z-index: 10;
    }
}
.table thead th {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    font-size: 0.75rem;
    text-transform: none;
    letter-spacing: 0;
    background-color: transparent;
    border-bottom-width: 1px;
}
.table th {
    font-weight: 600;
}
.table td .progress {
    height: 3px;
    width: 120px;
    margin: 0;
}
.table td,
.table th {
    font-size: 0.8125rem;
    white-space: nowrap;
}
.table.align-items-center td,
.table.align-items-center th {
    vertical-align: middle;
}
.table.table-dark thead th,
.table .thead-dark th {
    background-color: #2e3e51;
    color: #708cad;
}
.table.table-dark thead th a,
.table .thead-dark th a {
    color: #708cad;
}
.table .thead-light th {
    background-color: transparent;
    color: #8492a6;
}
.table .thead-light th a {
    color: #8492a6;
}
.table-hover tr {
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .table-hover tr {
        -webkit-transition: none;
        transition: none;
    }
}
.table-flush tbody tr:first-child td,
.table-flush tbody tr:first-child th {
    border-top: 0;
}
.table-flush tbody tr:last-child td,
.table-flush tbody tr:last-child th {
    border-bottom: 0;
}
.card .table {
    margin-bottom: 0;
}
.card .table td,
.card .table th {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}
.table .custom-toggle {
    display: block;
}
.table-flush td,
.table-flush th {
    border-left: 0;
    border-right: 0;
}
.table-flush tr:first-child td,
.table-flush tr:first-child th {
    border-top: 0;
}
.table-flush tr:last-child td,
.table-flush tr:last-child th {
    border-bottom: 0;
}
.table-cards tbody td,
.table-cards tbody th,
.table-cards thead td,
.table-cards thead th {
    border: 0 !important;
    padding: 1rem;
    position: relative;
    background-color: transparent;
}
.table-cards tbody tr:not(.table-divider) {
    border-radius: 0.375rem;
    -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
    box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
}
.table-cards tbody tr th,
.table-cards tbody tr th:after {
    border-radius: 0.375rem 0 0 0.375rem;
}
.table-cards tbody tr th:after {
    border-left: 1px solid #eff2f7;
}
.table-cards tbody tr td:last-child {
    border-radius: 0 0.375rem 0.375rem 0;
}
.table-cards tbody tr td:last-child:after {
    border-radius: 0 0.375rem 0.375rem 0;
    border-right: 1px solid #eff2f7;
}
.table-cards tbody tr td,
.table-cards tbody tr th {
    background-color: #fff;
}
.table-cards tbody tr td:after,
.table-cards tbody tr th:after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    border-top: 1px solid #eff2f7;
    border-bottom: 1px solid #eff2f7;
    left: 0;
    top: 0;
    pointer-events: none;
}
.table-cards tr.table-divider {
    height: 1rem;
}
.table-cards.table-hover tbody > tr:hover td,
.table-cards.table-hover tbody > tr:hover th {
    background-color: #fafbfe;
}
@media (min-width: 768px) {
    .table-cards.table-scale--hover tr:hover {
        -webkit-transform: scale(1.02);
        transform: scale(1.02);
    }
}
.table [data-sort] {
    cursor: pointer;
}
.table .thead-dark [data-sort]:after {
    content: url("data:image/svg+xml;utf8,<svg width='6' height='10' viewBox='0 0 6 10' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' clip-rule='evenodd' d='M3 0L6 4H0L3 0ZM3 10L0 6H6L3 10Z' fill='%23708cad'/></svg>");
    margin-left: 0.25rem;
}
.table .thead-light [data-sort]:after {
    content: url("data:image/svg+xml;utf8,<svg width='6' height='10' viewBox='0 0 6 10' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' clip-rule='evenodd' d='M3 0L6 4H0L3 0ZM3 10L0 6H6L3 10Z' fill='%238492A6'/></svg>");
    margin-left: 0.25rem;
}
.timeline {
    position: relative;
}
.timeline:before {
    content: "";
    position: absolute;
    top: 0;
    left: 1rem;
    height: 100%;
    border-right: 2px solid #eff2f7;
}
[data-timeline-axis-style="dashed"]:before {
    border-right-style: dashed !important;
}
[data-timeline-axis-style="dotted"]:before {
    border-right-style: dotted !important;
}
.timeline-block {
    position: relative;
    margin: 2em 0;
}
.timeline-block:after {
    content: "";
    display: table;
    clear: both;
}
.timeline-block:first-child {
    margin-top: 0;
}
.timeline-block:last-child {
    margin-bottom: 0;
}
.timeline-step {
    position: absolute;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    left: 0;
    width: 33px;
    height: 33px;
    border-radius: 50%;
    background: #fff;
    border: 2px solid #eff2f7;
    text-align: center;
    font-size: 1rem;
    font-weight: 600;
    z-index: 1;
}
.timeline-step i,
.timeline-step svg {
    line-height: 1.4;
}
.timeline-step-icon {
    background: #fff;
    border: 2px solid #eff2f7;
}
.timeline-step-xs {
    width: 17px;
    height: 17px;
    font-size: 0.75rem;
}
.timeline-step-sm {
    width: 23px;
    height: 23px;
    font-size: 0.75rem;
}
.timeline-step-lg {
    width: 47px;
    height: 47px;
    font-size: 1.75rem;
}
.timeline-content {
    margin-left: 60px;
    margin-right: 30px;
    position: relative;
    top: -6px;
}
.timeline-content:after {
    content: "";
    display: table;
    clear: both;
}
.timeline-body {
    padding: 1.5rem;
}
@media (min-width: 992px) {
    .timeline:before {
        left: 50%;
        margin-left: -2px;
    }
    .timeline-step {
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }
    .timeline-content {
        width: 38%;
    }
    .timeline-body {
        padding: 1.5rem;
    }
    .timeline-block:nth-child(2n) .timeline-content {
        float: right;
    }
    [data-timeline-axis-color="primary"]:before {
        border-color: {{ $settings->website_theme }};
    }
    [data-timeline-axis-color="secondary"]:before {
        border-color: #eff2f7;
    }
    [data-timeline-axis-color="success"]:before {
        border-color: #36b37e;
    }
    [data-timeline-axis-color="info"]:before {
        border-color: #00b8d9;
    }
    [data-timeline-axis-color="warning"]:before {
        border-color: #ffab00;
    }
    [data-timeline-axis-color="danger"]:before {
        border-color: #ff5630;
    }
    [data-timeline-axis-color="light"]:before {
        border-color: #eff2f7;
    }
    [data-timeline-axis-color="dark"]:before {
        border-color: #273444;
    }
    [data-timeline-axis-color="neutral"]:before,
    [data-timeline-axis-color="white"]:before {
        border-color: #fff;
    }
}
.timeline-one-side:before {
    left: 1rem;
}
.timeline-one-side .timeline-step {
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    left: 1rem;
}
.timeline-one-side .timeline-content {
    width: auto;
}
.timeline-one-side .timeline-block:nth-child(2n) .timeline-content {
    float: none;
}
.tongue {
    display: inline-block;
    position: absolute;
    top: 0;
    left: 50%;
    z-index: 1;
    -webkit-transform: rotate(180deg) translateX(50%);
    transform: rotate(180deg) translateX(50%);
    width: 138px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    color: #8492a6;
    background-size: 100%;
    background-repeat: no-repeat;
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%23f8f8fb' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
}
.tongue i {
    -webkit-animation: floating-sm 2s ease infinite;
    animation: floating-sm 2s ease infinite;
}
.tongue:hover i {
    -webkit-animation-play-state: paused;
    animation-play-state: paused;
}
.tongue-primary {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%236e00ff' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #fff;
}
.tongue-primary:hover {
    color: #fff;
}
.tongue-secondary {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%23EFF2F7' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #273444;
}
.tongue-secondary:hover {
    color: #273444;
}
.tongue-success {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%2336B37E' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #fff;
}
.tongue-success:hover {
    color: #fff;
}
.tongue-info {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%2300B8D9' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #fff;
}
.tongue-info:hover {
    color: #fff;
}
.tongue-warning {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%23FFAB00' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #fff;
}
.tongue-warning:hover {
    color: #fff;
}
.tongue-danger {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%23FF5630' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #fff;
}
.tongue-danger:hover {
    color: #fff;
}
.tongue-light {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%23EFF2F7' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #273444;
}
.tongue-light:hover {
    color: #273444;
}
.tongue-dark {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%23273444' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #fff;
}
.tongue-dark:hover {
    color: #fff;
}
.tongue-neutral {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%23FFF' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #273444;
}
.tongue-neutral:hover {
    color: #273444;
}
.tongue-white {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%23FFF' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #273444;
}
.tongue-white:hover {
    color: #273444;
}
.tongue-section-primary {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%23f8f8fb' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #273444;
}
.tongue-section-primary:hover {
    color: #273444;
}
.tongue-section-secondary {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%23FAFBFE' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #273444;
}
.tongue-section-secondary:hover {
    color: #273444;
}
.tongue-section-light {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%23E0E6ED' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #273444;
}
.tongue-section-light:hover {
    color: #273444;
}
.tongue-section-dark {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='138' height='35' viewBox='0 0 138 35'%3E%3Cpath fill='%231a232d' d='M 3.15027 34.4375C 1.74207 34.6025 0.68396 34.7266 0 35L 68.9982 35C 68.9982 35 68.9998 28.6387 69 19.5132C 69 20.7261 69.0001 21.8892 69.0001 22.9956L 69.0018 35L 138 35C 137.316 34.7266 136.258 34.6025 134.85 34.4375C 131.11 33.9995 124.903 33.2729 116.678 28.6875C 111.015 25.3901 106.523 20.9771 102.07 16.6025C 93.5474 8.23096 85.1685 -1.97984e-15 69.0018 3.55056e-31C 69.0006 5.271 69 10.4292 69 15.0952C 69 10.4287 68.9994 5.27148 68.9982 3.55056e-31C 52.8314 1.97986e-15 44.4526 8.23096 35.9302 16.6025C 31.4772 20.9771 26.985 25.3901 21.3221 28.6875C 13.0974 33.2729 6.88965 33.9995 3.15027 34.4375Z'/%3E%3C/svg%3E");
    color: #fff;
}
.tongue-section-dark:hover {
    color: #fff;
}
.tongue-top {
    top: -1px;
}
.tongue-bottom {
    top: auto;
    bottom: -1px;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}
@keyframes floating-sm {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    50% {
        -webkit-transform: translateY(5px);
        transform: translateY(5px);
    }
    to {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}
.h1,
.h2,
.h3,
h1,
h2,
h3 {
    font-weight: 500;
}
.h4,
.h5,
.h6,
h4,
h5,
h6 {
    font-weight: 600;
}
.h1 a,
.h2 a,
.h3 a,
.h4 a,
.h5 a,
.h6 a,
h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
    color: #3c4858;
}
.h1 a:hover,
.h2 a:hover,
.h3 a:hover,
.h4 a:hover,
.h5 a:hover,
.h6 a:hover,
h1 a:hover,
h2 a:hover,
h3 a:hover,
h4 a:hover,
h5 a:hover,
h6 a:hover {
    color: {{ $settings->website_theme }};
}
a {
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    a {
        -webkit-transition: none;
        transition: none;
    }
}
.fluid-paragraph {
    width: 680px;
    margin: auto;
    padding: 0 1.5rem;
    position: relative;
}
.fluid-paragraph-sm {
    width: 580px;
}
@media (max-width: 767.98px) {
    .fluid-paragraph {
        width: 100%;
    }
}
.link {
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .link {
        -webkit-transition: none;
        transition: none;
    }
}
[class*="link-underline-"] {
    padding-bottom: 8px;
    position: relative;
}
[class*="link-underline-"]:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 3px;
    border-radius: 50rem;
    -webkit-transition: all 0.2s cubic-bezier(0.77, 0, 0.2, 2.25);
    transition: all 0.2s cubic-bezier(0.77, 0, 0.2, 2.25);
}
@media (prefers-reduced-motion: reduce) {
    [class*="link-underline-"]:after {
        -webkit-transition: none;
        transition: none;
    }
}
[class*="link-underline-"]:hover:after {
    width: calc(100% + 8px);
    left: -4px;
}
.link-underline-primary {
    color: {{ $settings->website_theme }};
}
.link-underline-primary:after {
    background-color: {{ $settings->website_theme }};
}
.link-underline-primary:hover {
    color: #5800cc;
}
.link-underline-secondary {
    color: #eff2f7;
}
.link-underline-secondary:after {
    background-color: #eff2f7;
}
.link-underline-secondary:hover {
    color: #cdd6e6;
}
.link-underline-success {
    color: #36b37e;
}
.link-underline-success:after {
    background-color: #36b37e;
}
.link-underline-success:hover {
    color: #2a8c62;
}
.link-underline-info {
    color: #00b8d9;
}
.link-underline-info:after {
    background-color: #00b8d9;
}
.link-underline-info:hover {
    color: #008da6;
}
.link-underline-warning {
    color: #ffab00;
}
.link-underline-warning:after {
    background-color: #ffab00;
}
.link-underline-warning:hover {
    color: #cc8900;
}
.link-underline-danger {
    color: #ff5630;
}
.link-underline-danger:after {
    background-color: #ff5630;
}
.link-underline-danger:hover {
    color: #fc2e00;
}
.link-underline-light {
    color: #eff2f7;
}
.link-underline-light:after {
    background-color: #eff2f7;
}
.link-underline-light:hover {
    color: #cdd6e6;
}
.link-underline-dark {
    color: #273444;
}
.link-underline-dark:after {
    background-color: #273444;
}
.link-underline-dark:hover {
    color: #141b24;
}
.link-underline-neutral {
    color: #fff;
}
.link-underline-neutral:after {
    background-color: #fff;
}
.link-underline-neutral:hover {
    color: #e6e6e6;
}
.link-underline-white {
    color: #fff;
}
.link-underline-white:after {
    background-color: #fff;
}
.link-underline-white:hover {
    color: #e6e6e6;
}
.blockquote .quote {
    position: absolute;
}
.blockquote .quote:before {
    font-family: Arial;
    content: "\201C";
    color: {{ $settings->website_theme }};
    font-size: 4em;
    line-height: 1;
}
.blockquote .quote + .quote-text {
    padding-left: 2.25rem;
}
.blockquote footer {
    background: transparent;
}
.blockquote-border-left,
.blockquote-card {
    border-left: 0.5rem solid {{ $settings->website_theme }};
}
.blockquote-card {
    padding: 1.2em 30px 1.2em 75px;
    position: relative;
}
.blockquote-card:before {
    font-family: Arial;
    content: "\201C";
    color: {{ $settings->website_theme }};
    font-size: 4em;
    position: absolute;
    left: 0.875rem;
    top: -0.875rem;
}
.blockquote-card:after {
    content: "";
}
.list-icons li i,
.list-icons li svg {
    margin-right: 1rem;
    font-size: 8px;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    top: 2px;
    position: relative;
}
article h4:not(:first-child),
article h5:not(:first-child) {
    margin-top: 3rem;
}
article h4,
article h5 {
    margin-bottom: 1.5rem;
}
article figure {
    margin: 3rem 0;
}
article h5 + figure {
    margin-top: 0;
}
.customizer {
    position: fixed;
    bottom: 2rem;
    left: 2rem;
    width: 300px;
    height: 60px;
    z-index: 100;
}
.customizer .btn-skins {
    background: {{ $settings->website_theme }};
    background: linear-gradient(
        135deg,
        {{ $settings->website_theme }},
        #00b8d9 18%,
        #00b8d9 0,
        #36b37e 37%,
        #ff5630 50%,
        #ff5630 65%,
        #ffab00 83%,
        #ffab00
    );
}
.flatpickr-calendar {
    border: 0;
    width: auto;
    margin-top: -2px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background: #fff;
    -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
    box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
    border-radius: 0.25rem;
}
.flatpickr-calendar:after,
.flatpickr-calendar:before {
    display: none;
}
.flatpickr-months {
    background-color: {{ $settings->website_theme }};
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}
.flatpickr-months .flatpickr-month {
    height: 60px;
}
.flatpickr-months .flatpickr-next-month,
.flatpickr-months .flatpickr-prev-month {
    width: 35px;
    height: 35px;
    padding: 0;
    line-height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #fff;
    top: 13px;
    -webkit-transition: background-color 0.4s linear;
    transition: background-color 0.4s linear;
}
@media (prefers-reduced-motion: reduce) {
    .flatpickr-months .flatpickr-next-month,
    .flatpickr-months .flatpickr-prev-month {
        -webkit-transition: none;
        transition: none;
    }
}
.flatpickr-months .flatpickr-next-month svg,
.flatpickr-months .flatpickr-prev-month svg {
    fill: hsla(0, 0%, 100%, 0.7);
}
.flatpickr-months .flatpickr-next-month:hover,
.flatpickr-months .flatpickr-prev-month:hover {
    color: #fff;
}
.flatpickr-months .flatpickr-next-month:hover svg,
.flatpickr-months .flatpickr-prev-month:hover svg {
    fill: #fff;
}
.flatpickr-months .flatpickr-prev-month {
    margin-left: 15px;
}
.flatpickr-months .flatpickr-next-month {
    margin-right: 15px;
}
.flatpickr-current-month {
    font-size: 1.125rem;
    color: #fff;
    padding-top: 18px;
}
.flatpickr-current-month .numInputWrapper:hover,
.flatpickr-current-month span.cur-month:hover {
    background-color: transparent;
}
.flatpickr-current-month .numInputWrapper span {
    border: 0;
    right: -5px;
    padding: 0;
}
.flatpickr-current-month .numInputWrapper span:after {
    left: 3px;
}
.flatpickr-current-month .numInputWrapper span.arrowUp:after {
    border-bottom-color: hsla(0, 0%, 100%, 0.7);
}
.flatpickr-current-month .numInputWrapper span.arrowUp:hover:after {
    border-bottom-color: #fff;
}
.flatpickr-current-month .numInputWrapper span.arrowDown:after {
    border-top-color: hsla(0, 0%, 100%, 0.7);
}
.flatpickr-current-month .numInputWrapper span.arrowDown:hover:after {
    border-top-color: #fff;
}
span.flatpickr-weekday {
    font-weight: 600;
    color: #8492a6;
}
.flatpickr-day {
    font-size: 0.875rem;
    border: 0;
    color: #8492a6;
    border-radius: 0.25rem;
}
.flatpickr-day.today {
    color: {{ $settings->website_theme }} !important;
}
.flatpickr-day.today:hover,
.flatpickr-day:hover {
    background-color: transparent;
    color: {{ $settings->website_theme }};
}
.flatpickr-day.selected {
    background-color: {{ $settings->website_theme }};
    color: #fff !important;
}
.flatpickr-day.selected:hover {
    background-color: {{ $settings->website_theme }};
    color: #fff;
}
.numInputWrapper span:hover {
    background-color: transparent;
}
.flatpickr-time {
    border-top: 1px solid #eff2f7;
}
.flatpickr-innerContainer {
    padding: 15px;
}
.dropzone {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}
.dz-message {
    padding: 4rem 1rem;
    background-color: #fff;
    border: 1px solid #e0e6ed;
    border-radius: 0.25rem;
    text-align: center;
    color: #8492a6;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
    cursor: pointer;
    z-index: 100;
}
.dz-drag-hover .dz-message,
.dz-message:hover {
    background-color: #fff;
    border-color: rgba(110, 0, 255, 0.5);
    color: #8492a6;
}
.dz-drag-hover .dz-message {
    -webkit-box-shadow: 0 0 20px rgba(110, 0, 255, 0.1);
    box-shadow: 0 0 20px rgba(110, 0, 255, 0.1);
}
.dropzone-single.dz-max-files-reached .dz-message {
    background-color: rgba(31, 45, 61, 0.9);
    color: #fff;
    opacity: 0;
}
.dropzone-single.dz-max-files-reached .dz-message:hover {
    opacity: 1;
}
.dz-preview-cover,
.dz-preview-single {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 0.25rem;
}
.dz-preview-img {
    -o-object-fit: cover;
    object-fit: cover;
    width: 100%;
    height: 100%;
    border-radius: 0.25rem;
}
.dz-preview-multiple .list-group-item:last-child {
    padding-bottom: 0;
    border-bottom: 0;
}
[data-dz-size] strong {
    font-weight: 400;
}
.countdown-item {
    display: inline-block;
}
.countdown-label {
    font-size: 1.2rem;
    padding: 0 10px;
}
.countdown-sm .countdown-digit,
.countdown-sm .countdown-label {
    font-size: 1.4rem;
}
.countdown-sm .countdown-label {
    font-size: 0.875rem;
    padding: 0 10px;
}
[data-countdown-label="hide"] .countdown-label:not(.countdown-days),
[data-countdown-label="show"] .countdown-separator {
    display: none;
}
.countdown-hero .countdown-item {
    margin-right: 10px;
}
.countdown-hero .countdown-item:last-child {
    margin-right: 0;
}
.countdown-hero .countdown-digit {
    display: block;
    padding: 0 1.5rem;
    font-size: 3rem;
    font-weight: 400;
    text-align: center;
    color: #3c4858;
    cursor: default;
}
.countdown-hero .countdown-label {
    display: block;
    margin-top: 5px;
    text-align: center;
    font-size: 0.875rem;
    text-transform: capitalize;
    font-weight: 600;
}
.countdown-hero .countdown-separator {
    display: none;
}
@media (max-width: 991.98px) {
    .countdown-hero .countdown-digit {
        font-size: 2rem;
    }
}
.countdown-hero-dark .countdown-digit,
.countdown-hero-dark .countdown-label {
    color: #fff;
}
.countdown-blocks .countdown-item {
    margin-right: 10px;
}
.countdown-blocks .countdown-item:last-child {
    margin-right: 0;
}
.countdown-blocks .countdown-digit {
    display: block;
    width: 60px;
    height: 60px;
    line-height: 60px;
    background: {{ $settings->website_theme }};
    color: #fff;
    font-size: 1.5rem;
    font-weight: 400;
    text-align: center;
    border-radius: 0.25rem;
    cursor: default;
}
.countdown-blocks .countdown-label {
    display: block;
    margin-top: 5px;
    text-align: center;
    font-size: 0.875rem;
    text-transform: capitalize;
    font-weight: 600;
}
.countdown-blocks .countdown-separator,
.milestone-count-extra {
    display: none;
}
.counting-finished + .counter-extra {
    display: inline-block;
}
.draggable-item {
    cursor: -webkit-grab;
    cursor: grab;
}
.gu-mirror {
    position: fixed !important;
    margin: 0 !important;
    z-index: 9999 !important;
    opacity: 1;
    -webkit-transform: translate3d(-4px, -4px, 0) rotate(2deg);
    transform: translate3d(-4px, -4px, 0) rotate(2deg);
    cursor: -webkit-grabbing;
    cursor: grabbing;
    -webkit-box-shadow: 0 1rem 3rem rgba(31, 45, 61, 0.125);
    box-shadow: 0 1rem 3rem rgba(31, 45, 61, 0.125);
}
.gu-hide {
    display: none !important;
}
.gu-unselectable {
    -webkit-user-select: none !important;
    -moz-user-select: none !important;
    -ms-user-select: none !important;
    user-select: none !important;
}
.gu-transit {
    opacity: 0.1;
}
.quick-view-container {
    background: rgba(10, 10, 10, 0.85);
}
.quick-view-content {
    height: calc(100% - 40px);
    margin: auto;
    max-height: 650px;
    max-width: 980px;
    width: calc(100% - 40px);
}
.quick-view-carousel,
.quick-view-content {
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
}
.quick-view-carousel {
    background: #fff;
    border: 1px solid #eff2f7;
    border-radius: 0.375rem;
    width: 57%;
    z-index: 10;
    -webkit-box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
    box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
}
.quick-view-carousel .fancybox-stage {
    bottom: 30px;
}
.quick-view-aside {
    background: #fff;
    border-top-right-radius: 0.375rem;
    border-bottom-right-radius: 0.375rem;
    bottom: 2rem;
    color: #8492a6;
    left: auto;
    padding: 3rem 0 2rem;
    position: absolute;
    right: 0;
    top: 2rem;
    width: 43%;
}
.quick-view-aside > div {
    height: 100%;
    overflow: auto;
    padding: 0 2rem;
}
.quick-view-close {
    background: #f0f0f0;
    border: 0;
    border-top-right-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
    color: #222;
    cursor: pointer;
    font-family: Arial;
    font-size: 14px;
    height: 44px;
    margin: 0;
    padding: 0;
    position: absolute;
    right: 0;
    text-indent: -99999px;
    top: 2rem;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
    width: 2.75rem;
}
.quick-view-close:hover {
    background: #e4e4e4;
}
.quick-view-close:after,
.quick-view-close:before {
    background-color: #222;
    content: "";
    height: 18px;
    left: 22px;
    position: absolute;
    top: 12px;
    width: 1px;
}
.quick-view-close:before {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}
.quick-view-close:after {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
.quick-view-bullets {
    bottom: 0;
    left: 0;
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    text-align: center;
    width: 100%;
    z-index: 99999;
}
.quick-view-bullets li {
    display: inline-block;
    vertical-align: top;
}
.quick-view-bullets li a {
    display: block;
    height: 30px;
    position: relative;
    width: 20px;
}
.quick-view-bullets li a span {
    background: #d3dce6;
    border-radius: 99px;
    height: 10px;
    left: 50%;
    overflow: hidden;
    position: absolute;
    text-indent: -99999px;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    width: 10px;
}
.quick-view-bullets li.active a span {
    background: {{ $settings->website_theme }};
}
.fc-header-toolbar {
    display: none;
}
.fc-scroller {
    height: auto !important;
}
.fc th {
    padding: 0.75rem 1rem;
    font-size: 0.75rem;
    font-weight: 600;
    color: #8492a6;
    text-transform: uppercase;
}
.fc div.fc-row {
    margin-right: 0;
    border: 0;
}
.fc button .fc-icon {
    top: -5px;
}
.fc-unthemed td.fc-today {
    background-color: transparent;
}
.fc-unthemed td.fc-today span {
    color: #ffab00;
}
.fc-event {
    padding: 0;
    font-size: 0.75rem;
    border-radius: 0.2rem;
    border: 0;
}
.fc-event .fc-title {
    padding: 0.4rem 0.5rem;
    display: block;
    color: #fff;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    font-weight: 600;
}
.fc-event .fc-time {
    float: left;
    background: rgba(31, 45, 61, 0.2);
    padding: 2px 6px;
    margin: 0 0 0 -1px;
}
.fc-view,
.fc-view > table {
    border: 0;
    overflow: hidden;
}
.fc-view > table > tbody > tr .ui-widget-content {
    border-top: 0;
}
.fc-body {
    border: 0;
}
.fc-icon {
    font-size: 1rem;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    line-height: 35px;
}
.fc-icon:hover {
    color: {{ $settings->website_theme }};
}
.fc-button {
    border: 0;
    background: transparent;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.fc-button:active,
.fc-button:focus {
    outline: 0;
}
.calendar {
    z-index: 0;
}
.calendar td,
.calendar th {
    border-color: #f6f8fa;
}
.calendar .fc-toolbar {
    height: 250px;
    background-color: #fff;
    border-radius: 0.25rem 0.25rem 0 0;
    position: relative;
    margin-bottom: -2px;
    z-index: 2;
}
@media (max-width: 575.98px) {
    .calendar .fc-toolbar {
        height: 135px;
    }
}
.calendar .fc-day-number {
    padding: 0.5rem 1rem;
    width: 100%;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
@media (min-width: 576px) {
    .calendar .fc-day-number {
        font-size: 0.875rem;
        font-weight: 600;
        color: #a2acbb;
    }
}
.calendar .fc-day-header {
    text-align: left;
}
.calendar .fc-day-grid-event {
    margin: 1px 9px;
}
.card-calendar .card-header {
    border-bottom: 0;
}
.card-calendar table {
    background: transparent;
}
.card-calendar table tr > td:first-child {
    border-left-width: 0;
}
.card-calendar table tr > td:last-child {
    border-right-width: 0;
}
.widget-calendar {
    position: relative;
    z-index: 0;
}
.widget-calendar td,
.widget-calendar th {
    border-color: transparent;
    text-align: center;
}
.widget-calendar .fc-toolbar {
    margin-top: 1.25rem;
}
.widget-calendar .fc-toolbar h2 {
    font-size: 1rem;
}
.widget-calendar .fc-day-number {
    text-align: center;
    width: 100%;
    padding: 0;
}
.widget-calendar .fc table {
    font-size: 0.875rem;
}
.widget-calendar .fc th {
    padding: 0.75rem 0.5rem;
    font-size: 0.75rem;
}
.highlight {
    background-color: #212d3a;
    padding: 1.25rem;
    margin-bottom: 2rem;
    border: 1px solid #eff2f7;
    border-radius: 0.25rem;
}
.highlight pre {
    margin-bottom: 0;
    padding: 1.25rem;
}
.hljs {
    display: block;
    overflow-x: auto;
    padding: 0.5em;
}
.hljs,
.hljs pre code {
    color: #dcdcdc;
}
.hljs-keyword,
.hljs-link,
.hljs-literal,
.hljs-name,
.hljs-symbol {
    color: #569cd6;
}
.hljs-link {
    text-decoration: underline;
}
.hljs-built_in,
.hljs-type {
    color: #4ec9b0;
}
.hljs-class,
.hljs-number {
    color: #b8d7a3;
}
.hljs-meta-string,
.hljs-string {
    color: #d69d85;
}
.hljs-regexp,
.hljs-template-tag {
    color: #9a5334;
}
.hljs-formula,
.hljs-function,
.hljs-params,
.hljs-subst,
.hljs-title {
    color: #dcdcdc;
}
.hljs-comment,
.hljs-quote {
    color: #57a64a;
    font-style: italic;
}
.hljs-doctag {
    color: #608b4e;
}
.hljs-meta,
.hljs-meta-keyword,
.hljs-tag {
    color: #9b9b9b;
}
.hljs-template-variable,
.hljs-variable {
    color: #bd63c5;
}
.hljs-attr,
.hljs-attribute,
.hljs-builtin-name {
    color: #9cdcfe;
}
.hljs-section {
    color: gold;
}
.hljs-emphasis {
    font-style: italic;
}
.hljs-strong {
    font-weight: 700;
}
.hljs-bullet,
.hljs-selector-attr,
.hljs-selector-class,
.hljs-selector-id,
.hljs-selector-pseudo,
.hljs-selector-tag {
    color: #d7ba7d;
}
.hljs-addition {
    background-color: #144212;
}
.hljs-addition,
.hljs-deletion {
    display: inline-block;
    width: 100%;
}
.hljs-deletion {
    background-color: #600;
}
.masonry-filter {
    cursor: pointer;
}
.noUi-target,
.noUi-target * {
    -webkit-touch-callout: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-user-select: none;
    -ms-touch-action: none;
    touch-action: none;
    -ms-user-select: none;
    -moz-user-select: none;
    user-select: none;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.noUi-target {
    position: relative;
    direction: ltr;
}
.noUi-base,
.noUi-connects {
    width: 100%;
    height: 100%;
    position: relative;
    z-index: 1;
}
.noUi-connects {
    overflow: hidden;
    z-index: 0;
}
.noUi-connect,
.noUi-origin {
    will-change: transform;
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
}
html:not([dir="rtl"]) .noUi-horizontal .noUi-origin {
    left: auto;
    right: 0;
}
.noUi-vertical .noUi-origin {
    width: 0;
}
.noUi-horizontal .noUi-origin {
    height: 0;
}
.noUi-handle {
    position: absolute;
}
.noUi-state-tap .noUi-connect,
.noUi-state-tap .noUi-origin {
    -webkit-transition: transform 0.3s;
    -webkit-transition: -webkit-transform 0.3s;
    transition: -webkit-transform 0.3s;
    transition: transform 0.3s;
    transition: transform 0.3s, -webkit-transform 0.3s;
}
.noUi-state-drag * {
    cursor: inherit !important;
}
.noUi-horizontal .noUi-handle {
    width: 34px;
    height: 28px;
    left: -17px;
    top: -6px;
}
.noUi-vertical .noUi-handle {
    width: 28px;
    height: 34px;
    left: -6px;
    top: -17px;
}
html:not([dir="rtl"]) .noUi-horizontal .noUi-handle {
    right: -17px;
    left: auto;
}
.noUi-target {
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px #f0f0f0, 0 3px 6px -5px #bbb;
    box-shadow: inset 0 1px 1px #f0f0f0, 0 3px 6px -5px #bbb;
}
.noUi-connects {
    border-radius: 3px;
}
.noUi-draggable {
    cursor: ew-resize;
}
.noUi-vertical .noUi-draggable {
    cursor: ns-resize;
}
.noUi-handle {
    border: 1px solid #d9d9d9;
    border-radius: 3px;
    background: #fff;
    cursor: default;
    -webkit-box-shadow: inset 0 0 1px #fff, inset 0 1px 7px #ebebeb,
        0 3px 6px -3px #bbb;
    box-shadow: inset 0 0 1px #fff, inset 0 1px 7px #ebebeb, 0 3px 6px -3px #bbb;
}
.noUi-active {
    -webkit-box-shadow: inset 0 0 1px #fff, inset 0 1px 7px #ddd,
        0 3px 6px -3px #bbb;
    box-shadow: inset 0 0 1px #fff, inset 0 1px 7px #ddd, 0 3px 6px -3px #bbb;
}
[disabled] .noUi-connect {
    background: #b8b8b8;
}
[disabled].noUi-handle,
[disabled] .noUi-handle,
[disabled].noUi-target {
    cursor: not-allowed;
}
.noUi-pips,
.noUi-pips * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.noUi-pips {
    position: absolute;
    color: #999;
}
.noUi-value {
    position: absolute;
    white-space: nowrap;
    text-align: center;
}
.noUi-value-sub {
    color: #ccc;
    font-size: 10px;
}
.noUi-marker {
    position: absolute;
    background: #ccc;
}
.noUi-marker-large,
.noUi-marker-sub {
    background: #aaa;
}
.noUi-pips-horizontal {
    padding: 10px 0;
    height: 80px;
    top: 100%;
    left: 0;
    width: 100%;
}
.noUi-value-horizontal {
    -webkit-transform: translate(-50%, 50%);
    transform: translate(-50%, 50%);
}
.noUi-rtl .noUi-value-horizontal {
    -webkit-transform: translate(50%, 50%);
    transform: translate(50%, 50%);
}
.noUi-marker-horizontal.noUi-marker {
    margin-left: -1px;
    width: 2px;
    height: 5px;
}
.noUi-marker-horizontal.noUi-marker-sub {
    height: 10px;
}
.noUi-marker-horizontal.noUi-marker-large {
    height: 15px;
}
.noUi-pips-vertical {
    padding: 0 10px;
    height: 100%;
    top: 0;
    left: 100%;
}
.noUi-value-vertical {
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    padding-left: 25px;
}
.noUi-rtl .noUi-value-vertical {
    -webkit-transform: translateY(50%);
    transform: translateY(50%);
}
.noUi-marker-vertical.noUi-marker {
    width: 5px;
    height: 2px;
    margin-top: -1px;
}
.noUi-marker-vertical.noUi-marker-sub {
    width: 10px;
}
.noUi-marker-vertical.noUi-marker-large {
    width: 15px;
}
.noUi-tooltip {
    display: block;
    position: absolute;
    border: 1px solid #d9d9d9;
    border-radius: 3px;
    background: #fff;
    color: #000;
    padding: 5px;
    text-align: center;
    white-space: nowrap;
}
.noUi-horizontal .noUi-tooltip {
    -webkit-transform: translate(-50%);
    transform: translate(-50%);
    left: 50%;
    bottom: 120%;
}
.noUi-vertical .noUi-tooltip {
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    top: 50%;
    right: 120%;
}
.noUi-target {
    border-radius: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 0;
    background: #e5e9f2;
    margin: 15px 0;
}
.noUi-horizontal {
    height: 0;
}
html:not([dir="rtl"]) .noUi-horizontal .noUi-handle {
    right: -10px;
}
.noUi-vertical {
    width: 0;
}
.noUi-connect {
    background: {{ $settings->website_theme }};
    -webkit-box-shadow: none;
    box-shadow: none;
}
.noUi-horizontal .noUi-handle,
.noUi-vertical .noUi-handle {
    top: -7px;
    width: 15px;
    height: 15px;
    border: 0;
    border-radius: 100%;
    -webkit-box-shadow: none;
    box-shadow: none;
    cursor: pointer;
    background-color: {{ $settings->website_theme }};
    transition: box-shadow 0.2s, -webkit-transform 0.2s;
    -webkit-transition: -webkit-box-shadow 0.2s, -webkit-transform 0.2s;
    transition: -webkit-box-shadow 0.2s, -webkit-transform 0.2s;
    transition: box-shadow 0.2s, transform 0.2s;
    transition: box-shadow 0.2s, transform 0.2s, -webkit-box-shadow 0.2s,
        -webkit-transform 0.2s;
    transition: box-shadow 0.2s, transform 0.2s, -webkit-transform 0.2s;
}
.noUi-horizontal .noUi-handle:after,
.noUi-horizontal .noUi-handle:before,
.noUi-vertical .noUi-handle:after,
.noUi-vertical .noUi-handle:before {
    display: none;
}
.noUi-horizontal .noUi-handle.noUi-active,
.noUi-vertical .noUi-handle.noUi-active {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
}
.noUi-horizontal .noUi-active,
.noUi-vertical .noUi-active {
    -webkit-box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.1);
}
.input-slider--cyan .noUi-connect {
    background: #4bd6e5;
}
.input-slider--cyan.noUi-horizontal .noUi-handle,
.input-slider--cyan.noUi-vertical .noUi-handle {
    background-color: #4bd6e5;
}
.input-slider--red .noUi-connect {
    background: #ff5630;
}
.input-slider--red.noUi-horizontal .noUi-handle,
.input-slider--red.noUi-vertical .noUi-handle {
    background-color: #ff5630;
}
.input-slider--green .noUi-connect {
    background: #36b37e;
}
.input-slider--green.noUi-horizontal .noUi-handle,
.input-slider--green.noUi-vertical .noUi-handle {
    background-color: #36b37e;
}
.input-slider--yellow .noUi-connect {
    background: #fc0;
}
.input-slider--yellow.noUi-horizontal .noUi-handle,
.input-slider--yellow.noUi-vertical .noUi-handle {
    background-color: #fc0;
}
.input-slider--pink .noUi-connect {
    background: #f074ad;
}
.input-slider--pink.noUi-horizontal .noUi-handle,
.input-slider--pink.noUi-vertical .noUi-handle {
    background-color: #f074ad;
}
[disabled].noUi-connect,
[disabled] .noUi-connect {
    background: #b2b2b2;
}
[disabled] .noUi-handle,
[disabled].noUi-origin {
    cursor: not-allowed;
}
.range-slider-value {
    font-size: 0.75rem;
    font-weight: 500;
    background-color: rgba(39, 52, 68, 0.7);
    color: #fff;
    border-radius: 10px;
    padding: 0.4em 0.8em 0.3em 0.85em;
}
.range-slider-wrapper .upper-info {
    font-weight: 400;
    margin-bottom: 5px;
}
.input-slider-value-output {
    background: #333;
    color: #fff;
    padding: 4px 8px;
    position: relative;
    top: 12px;
    font-size: 11px;
    border-radius: 2px;
}
.input-slider-value-output:after {
    bottom: 100%;
    left: 10px;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border: 4px solid rgba(136, 183, 213, 0);
    border-bottom-color: #333;
    margin-left: -4px;
}
.input-slider-value-output.left:after {
    left: 10px;
    right: auto;
}
.input-slider-value-output.right:after {
    right: 10px;
    left: auto;
}
.ql-container {
    font-family: Nunito, sans-serif;
}
.ql-toolbar {
    position: relative;
    padding: 0.75rem 1.25rem;
    background-color: #fff;
    border: 1px solid #e0e6ed;
    border-radius: 0.25rem 0.25rem 0 0;
    color: #8492a6;
}
.ql-toolbar + .ql-container {
    margin-top: -1px;
}
.ql-toolbar + .ql-container .ql-editor {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.ql-editor {
    min-height: 6.8rem;
    display: block;
    width: 100%;
    padding: 0.75rem 1.25rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #8492a6;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e0e6ed;
    border-radius: 0.25rem;
    -webkit-box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075);
    box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075);
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .ql-editor {
        -webkit-transition: none;
        transition: none;
    }
}
.ql-editor::-ms-expand {
    background-color: transparent;
    border: 0;
}
.ql-editor:focus {
    color: #8492a6;
    background-color: #fff;
    border-color: rgba(110, 0, 255, 0.5);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075),
        0 0 20px rgba(110, 0, 255, 0.1);
    box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075),
        0 0 20px rgba(110, 0, 255, 0.1);
    border-color: #e0e6ed;
}
.ql-hidden {
    position: absolute;
    -webkit-transform: scale(0);
    transform: scale(0);
}
.ql-editor.ql-blank:before {
    top: 0.75rem;
    left: 1.25rem;
    font-style: normal;
    color: #aabacd;
}
.ql-editor:focus:before {
    display: none;
}
.ql-formats {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
}
.ql-formats:first-child {
    padding-left: 0;
}
.ql-formats:last-child {
    padding-right: 0;
}
.ql-toolbar button {
    padding: 0 0.25rem;
    background: none;
    border: none;
    color: #8492a6;
    cursor: pointer;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
.ql-toolbar button:hover {
    color: {{ $settings->website_theme }};
}
.ql-toolbar button:first-child {
    margin-left: -0.25rem;
}
.ql-toolbar .ql-active {
    color: {{ $settings->website_theme }};
}
.ql-toolbar button svg {
    height: 1.25rem;
    width: 1.25rem;
}
.ql-toolbar .ql-stroke {
    stroke: currentColor;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    fill: none;
}
.ql-toolbar .ql-thin {
    stroke-width: 1;
}
.ql-toolbar .ql-fill {
    fill: currentColor;
}
.ql-toolbar input.ql-image {
    position: absolute;
    -webkit-transform: scale(0);
    transform: scale(0);
}
.ql-tooltip {
    position: absolute;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    width: 18.5rem;
    background-color: #fff;
    border: 1px solid rgba(31, 45, 61, 0.05);
    border-radius: 0.375rem;
    padding: 0.75rem 1.25rem;
    margin-top: 0.6rem;
    -webkit-box-shadow: 0 0.5rem 2rem 0 rgba(31, 45, 61, 0.2);
    box-shadow: 0 0.5rem 2rem 0 rgba(31, 45, 61, 0.2);
}
.ql-tooltip:after,
.ql-tooltip:before {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 100%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}
.ql-tooltip:before {
    border-bottom: 0.6rem solid rgba(31, 45, 61, 0.05);
    border-left: 0.6rem solid transparent;
    border-right: 0.6rem solid transparent;
}
.ql-tooltip:after {
    border-bottom: 0.5rem solid #fff;
    border-left: 0.5rem solid transparent;
    border-right: 0.5rem solid transparent;
}
.ql-container .ql-tooltip:hover {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
.ql-tooltip .ql-preview {
    width: 100%;
    padding: 0.5rem 1.25rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    -webkit-transition: color 0.15s ease-in-out,
        background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .ql-tooltip .ql-preview {
        -webkit-transition: none;
        transition: none;
    }
}
.ql-tooltip.ql-editing .ql-preview {
    display: none;
}
.ql-tooltip input {
    display: none;
    width: 100%;
    padding-top: calc(0.5rem + 1px);
    padding-bottom: calc(0.5rem + 1px);
    background-color: transparent;
    font-size: 0.875rem;
    line-height: 1.5;
    border: none;
    color: #8492a6;
}
.ql-tooltip input:focus {
    outline: none;
}
.ql-tooltip.ql-editing input {
    display: block;
}
.ql-tooltip .ql-action,
.ql-tooltip .ql-remove {
    margin-left: 0.25rem;
}
.ql-tooltip .ql-action:before,
.ql-tooltip .ql-remove:before {
    display: inline-block;
    font-weight: 600;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    cursor: pointer;
    padding: 0.5rem 1.25rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    -webkit-transition: color 0.15s ease-in-out,
        background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
        -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .ql-tooltip .ql-action:before,
    .ql-tooltip .ql-remove:before {
        -webkit-transition: none;
        transition: none;
    }
}
.ql-tooltip .ql-action:before:focus,
.ql-tooltip .ql-action:before:hover,
.ql-tooltip .ql-remove:before:focus,
.ql-tooltip .ql-remove:before:hover {
    text-decoration: none;
}
.ql-tooltip .ql-action:before.focus,
.ql-tooltip .ql-action:before:focus,
.ql-tooltip .ql-remove:before.focus,
.ql-tooltip .ql-remove:before:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 rgba(99, 0, 230, 0.25);
    box-shadow: 0 0 0 rgba(99, 0, 230, 0.25);
}
.ql-tooltip .ql-action:before,
.ql-tooltip.ql-editing .ql-action:before {
    color: #fff;
    background-color: {{ $settings->website_theme }};
    border-color: {{ $settings->website_theme }};
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
}
.ql-tooltip .ql-action:before:hover,
.ql-tooltip.ql-editing .ql-action:before:hover {
    color: #fff;
    background-color: #5e00d9;
    border-color: #5800cc;
}
.ql-tooltip .ql-action:before.focus,
.ql-tooltip .ql-action:before:focus,
.ql-tooltip.ql-editing .ql-action:before.focus,
.ql-tooltip.ql-editing .ql-action:before:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(110, 0, 255, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(110, 0, 255, 0.35);
}
.ql-tooltip .ql-action:before.disabled,
.ql-tooltip .ql-action:before:disabled,
.ql-tooltip.ql-editing .ql-action:before.disabled,
.ql-tooltip.ql-editing .ql-action:before:disabled {
    color: #fff;
    background-color: {{ $settings->website_theme }};
    border-color: {{ $settings->website_theme }};
}
.ql-tooltip .ql-action:before:not(:disabled):not(.disabled).active,
.ql-tooltip .ql-action:before:not(:disabled):not(.disabled):active,
.ql-tooltip.ql-editing .ql-action:before:not(:disabled):not(.disabled).active,
.ql-tooltip.ql-editing .ql-action:before:not(:disabled):not(.disabled):active,
.show > .ql-tooltip .ql-action:before.dropdown-toggle,
.show > .ql-tooltip.ql-editing .ql-action:before.dropdown-toggle {
    color: #fff;
    background-color: #5800cc;
    border-color: #5300bf;
}
.ql-tooltip .ql-action:before:not(:disabled):not(.disabled).active:focus,
.ql-tooltip .ql-action:before:not(:disabled):not(.disabled):active:focus,
.ql-tooltip.ql-editing
    .ql-action:before:not(:disabled):not(.disabled).active:focus,
.ql-tooltip.ql-editing
    .ql-action:before:not(:disabled):not(.disabled):active:focus,
.show > .ql-tooltip .ql-action:before.dropdown-toggle:focus,
.show > .ql-tooltip.ql-editing .ql-action:before.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(110, 0, 255, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 rgba(110, 0, 255, 0.35);
}
.ql-tooltip .ql-action:before {
    content: "Edit";
}
.ql-tooltip.ql-editing .ql-action:before {
    content: "Save";
}
.ql-tooltip .ql-remove:before {
    color: #273444;
    background-color: #fff;
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15);
    content: "Remove";
    border-color: #e5e9f2;
}
.ql-tooltip .ql-remove:before:hover {
    color: #273444;
    background-color: #ececec;
    border-color: #e6e6e6;
}
.ql-tooltip .ql-remove:before.focus,
.ql-tooltip .ql-remove:before:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
}
.ql-tooltip .ql-remove:before.disabled,
.ql-tooltip .ql-remove:before:disabled {
    color: #273444;
    background-color: #fff;
    border-color: #fff;
}
.ql-tooltip .ql-remove:before:not(:disabled):not(.disabled).active,
.ql-tooltip .ql-remove:before:not(:disabled):not(.disabled):active,
.show > .ql-tooltip .ql-remove:before.dropdown-toggle {
    color: #273444;
    background-color: #e6e6e6;
    border-color: #dfdfdf;
}
.ql-tooltip .ql-remove:before:not(:disabled):not(.disabled).active:focus,
.ql-tooltip .ql-remove:before:not(:disabled):not(.disabled):active:focus,
.show > .ql-tooltip .ql-remove:before.dropdown-toggle:focus {
    -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.15),
        0 0 0 hsla(0, 0%, 100%, 0.35);
}
.ql-tooltip.ql-editing .ql-remove:before {
    display: none;
}
.ql-editor blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem;
}
.ql-editor img {
    max-width: 100%;
    height: auto;
}
.scroll-wrapper {
    overflow: hidden !important;
    padding: 0 !important;
    position: relative;
}
.scroll-wrapper > .scroll-content {
    border: none !important;
    -webkit-box-sizing: content-box !important;
    box-sizing: content-box !important;
    height: auto;
    left: 0;
    margin: 0;
    max-height: none;
    max-width: none !important;
    overflow: scroll !important;
    padding: 0;
    position: relative !important;
    top: 0;
    width: auto !important;
}
.scroll-wrapper > .scroll-content::-webkit-scrollbar {
    height: 0;
    width: 0;
}
.scroll-wrapper.scroll--rtl {
    direction: rtl;
}
.scroll-element {
    display: none;
}
.scroll-element,
.scroll-element div {
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
}
.scroll-element .scroll-arrow,
.scroll-element .scroll-bar {
    cursor: default;
}
.scroll-element.scroll-x.scroll-scrollx_visible,
.scroll-element.scroll-y.scroll-scrolly_visible {
    display: block;
}
.scroll-textarea {
    border: 1px solid #ccc;
    border-top-color: #999;
}
.scroll-textarea > .scroll-content {
    overflow: hidden !important;
}
.scroll-textarea > .scroll-content > textarea {
    border: none !important;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    height: 100% !important;
    margin: 0;
    max-height: none !important;
    max-width: none !important;
    overflow: scroll !important;
    outline: none;
    padding: 2px;
    position: relative !important;
    top: 0;
    width: 100% !important;
}
.scroll-textarea > .scroll-content > textarea::-webkit-scrollbar {
    height: 0;
    width: 0;
}
.scrollbar-inner > .scroll-element,
.scrollbar-inner > .scroll-element div {
    border: none;
    margin: 0;
    padding: 0;
    position: absolute;
    z-index: 10;
}
.scrollbar-inner > .scroll-element div {
    display: block;
    height: 100%;
    left: 0;
    top: 0;
    width: 100%;
}
.scrollbar-inner > .scroll-element.scroll-x {
    bottom: 2px;
    height: 8px;
    left: 0;
    width: 100%;
}
.scrollbar-inner > .scroll-element.scroll-y {
    height: 100%;
    right: 2px;
    top: 0;
    width: 8px;
}
.scrollbar-inner > .scroll-element .scroll-element_outer {
    overflow: hidden;
}
.scrollbar-inner > .scroll-element .scroll-bar,
.scrollbar-inner > .scroll-element .scroll-element_outer,
.scrollbar-inner > .scroll-element .scroll-element_track {
    border-radius: 8px;
}
.scrollbar-inner > .scroll-element .scroll-bar,
.scrollbar-inner > .scroll-element .scroll-element_track {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=40)";
    filter: alpha(opacity=40);
    opacity: 0.4;
}
.scrollbar-inner > .scroll-element .scroll-element_track {
    background-color: #e0e0e0;
}
.scrollbar-inner > .scroll-element .scroll-bar {
    background-color: #c2c2c2;
}
.scrollbar-inner > .scroll-element.scroll-draggable .scroll-bar,
.scrollbar-inner > .scroll-element:hover .scroll-bar {
    background-color: #919191;
}
.scrollbar-inner
    > .scroll-element.scroll-x.scroll-scrolly_visible
    .scroll-element_track {
    left: -12px;
}
.scrollbar-inner
    > .scroll-element.scroll-y.scroll-scrollx_visible
    .scroll-element_track {
    top: -12px;
}
.scrollbar-inner
    > .scroll-element.scroll-x.scroll-scrolly_visible
    .scroll-element_size {
    left: -12px;
}
.scrollbar-inner
    > .scroll-element.scroll-y.scroll-scrollx_visible
    .scroll-element_size {
    top: -12px;
}
.scrollbar-outer > .scroll-element,
.scrollbar-outer > .scroll-element div {
    border: none;
    margin: 0;
    padding: 0;
    position: absolute;
    z-index: 10;
}
.scrollbar-outer > .scroll-element {
    background-color: #fff;
}
.scrollbar-outer > .scroll-element div {
    display: block;
    height: 100%;
    left: 0;
    top: 0;
    width: 100%;
}
.scrollbar-outer > .scroll-element.scroll-x {
    bottom: 0;
    height: 12px;
    left: 0;
    width: 100%;
}
.scrollbar-outer > .scroll-element.scroll-y {
    height: 100%;
    right: 0;
    top: 0;
    width: 12px;
}
.scrollbar-outer > .scroll-element.scroll-x .scroll-element_outer {
    height: 8px;
    top: 2px;
}
.scrollbar-outer > .scroll-element.scroll-y .scroll-element_outer {
    left: 2px;
    width: 8px;
}
.scrollbar-outer > .scroll-element .scroll-element_outer {
    overflow: hidden;
}
.scrollbar-outer > .scroll-element .scroll-element_track {
    background-color: #eee;
}
.scrollbar-outer > .scroll-element .scroll-bar,
.scrollbar-outer > .scroll-element .scroll-element_outer,
.scrollbar-outer > .scroll-element .scroll-element_track {
    border-radius: 8px;
}
.scrollbar-outer > .scroll-element .scroll-bar {
    background-color: #d9d9d9;
}
.scrollbar-outer > .scroll-element .scroll-bar:hover {
    background-color: #c2c2c2;
}
.scrollbar-outer > .scroll-element.scroll-draggable .scroll-bar {
    background-color: #919191;
}
.scrollbar-outer > .scroll-content.scroll-scrolly_visible {
    left: -12px;
    margin-left: 12px;
}
.scrollbar-outer > .scroll-content.scroll-scrollx_visible {
    top: -12px;
    margin-top: 12px;
}
.scrollbar-outer > .scroll-element.scroll-x .scroll-bar {
    min-width: 10px;
}
.scrollbar-outer > .scroll-element.scroll-y .scroll-bar {
    min-height: 10px;
}
.scrollbar-outer
    > .scroll-element.scroll-x.scroll-scrolly_visible
    .scroll-element_track {
    left: -14px;
}
.scrollbar-outer
    > .scroll-element.scroll-y.scroll-scrollx_visible
    .scroll-element_track {
    top: -14px;
}
.scrollbar-outer
    > .scroll-element.scroll-x.scroll-scrolly_visible
    .scroll-element_size {
    left: -14px;
}
.scrollbar-outer
    > .scroll-element.scroll-y.scroll-scrollx_visible
    .scroll-element_size {
    top: -14px;
}
.scrollbar-macosx > .scroll-element,
.scrollbar-macosx > .scroll-element div {
    background: none;
    border: none;
    margin: 0;
    padding: 0;
    position: absolute;
    z-index: 10;
}
.scrollbar-macosx > .scroll-element div {
    display: block;
    height: 100%;
    left: 0;
    top: 0;
    width: 100%;
}
.scrollbar-macosx > .scroll-element .scroll-element_track {
    display: none;
}
.scrollbar-macosx > .scroll-element .scroll-bar {
    background-color: #6c6e71;
    display: block;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    opacity: 0;
    border-radius: 7px;
    -webkit-transition: opacity 0.2s linear;
    transition: opacity 0.2s linear;
}
.scrollbar-macosx:hover > .scroll-element .scroll-bar,
.scrollbar-macosx > .scroll-element.scroll-draggable .scroll-bar {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
    filter: alpha(opacity=70);
    opacity: 0.7;
}
.scrollbar-macosx > .scroll-element.scroll-x {
    bottom: 0;
    height: 0;
    left: 0;
    min-width: 100%;
    overflow: visible;
    width: 100%;
}
.scrollbar-macosx > .scroll-element.scroll-y {
    height: 100%;
    min-height: 100%;
    right: 0;
    top: 0;
    width: 0;
}
.scrollbar-macosx > .scroll-element.scroll-x .scroll-bar {
    height: 7px;
    min-width: 10px;
    top: -9px;
}
.scrollbar-macosx > .scroll-element.scroll-y .scroll-bar {
    left: -9px;
    min-height: 10px;
    width: 7px;
}
.scrollbar-macosx > .scroll-element.scroll-x .scroll-element_outer {
    left: 2px;
}
.scrollbar-macosx > .scroll-element.scroll-x .scroll-element_size {
    left: -4px;
}
.scrollbar-macosx > .scroll-element.scroll-y .scroll-element_outer {
    top: 2px;
}
.scrollbar-macosx > .scroll-element.scroll-y .scroll-element_size {
    top: -4px;
}
.scrollbar-macosx
    > .scroll-element.scroll-x.scroll-scrolly_visible
    .scroll-element_size {
    left: -11px;
}
.scrollbar-macosx
    > .scroll-element.scroll-y.scroll-scrollx_visible
    .scroll-element_size {
    top: -11px;
}
.scrollbar-light > .scroll-element,
.scrollbar-light > .scroll-element div {
    border: none;
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: absolute;
    z-index: 10;
}
.scrollbar-light > .scroll-element {
    background-color: #fff;
}
.scrollbar-light > .scroll-element div {
    display: block;
    height: 100%;
    left: 0;
    top: 0;
    width: 100%;
}
.scrollbar-light > .scroll-element .scroll-element_outer {
    border-radius: 10px;
}
.scrollbar-light > .scroll-element .scroll-element_size {
    background: #dbdbdb;
    background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxIDEiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIwJSIgeTE9IjAlIiB4Mj0iMTAwJSIgeTI9IjAlIj48c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjZGJkYmRiIi8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZThlOGU4Ii8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBmaWxsPSJ1cmwoI2EpIiBkPSJNMCAwaDF2MUgweiIvPjwvc3ZnPg==");
    background: -webkit-gradient(
        linear,
        left top,
        right top,
        from(#dbdbdb),
        to(#e8e8e8)
    );
    background: linear-gradient(90deg, #dbdbdb 0, #e8e8e8);
    border-radius: 10px;
}
.scrollbar-light > .scroll-element.scroll-x {
    bottom: 0;
    height: 17px;
    left: 0;
    min-width: 100%;
    width: 100%;
}
.scrollbar-light > .scroll-element.scroll-y {
    height: 100%;
    min-height: 100%;
    right: 0;
    top: 0;
    width: 17px;
}
.scrollbar-light > .scroll-element .scroll-bar {
    background: #fefefe;
    background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxIDEiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIwJSIgeTE9IjAlIiB4Mj0iMTAwJSIgeTI9IjAlIj48c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjZmVmZWZlIi8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZjVmNWY1Ii8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBmaWxsPSJ1cmwoI2EpIiBkPSJNMCAwaDF2MUgweiIvPjwvc3ZnPg==");
    background: -webkit-gradient(
        linear,
        left top,
        right top,
        from(#fefefe),
        to(#f5f5f5)
    );
    background: linear-gradient(90deg, #fefefe 0, #f5f5f5);
    border: 1px solid #dbdbdb;
    border-radius: 10px;
}
.scrollbar-light > .scroll-content.scroll-scrolly_visible {
    left: -17px;
    margin-left: 17px;
}
.scrollbar-light > .scroll-content.scroll-scrollx_visible {
    top: -17px;
    margin-top: 17px;
}
.scrollbar-light > .scroll-element.scroll-x .scroll-bar {
    height: 10px;
    min-width: 10px;
    top: 0;
}
.scrollbar-light > .scroll-element.scroll-y .scroll-bar {
    left: 0;
    min-height: 10px;
    width: 10px;
}
.scrollbar-light > .scroll-element.scroll-x .scroll-element_outer {
    height: 12px;
    left: 2px;
    top: 2px;
}
.scrollbar-light > .scroll-element.scroll-x .scroll-element_size {
    left: -4px;
}
.scrollbar-light > .scroll-element.scroll-y .scroll-element_outer {
    left: 2px;
    top: 2px;
    width: 12px;
}
.scrollbar-light > .scroll-element.scroll-y .scroll-element_size {
    top: -4px;
}
.scrollbar-light
    > .scroll-element.scroll-x.scroll-scrolly_visible
    .scroll-element_size {
    left: -19px;
}
.scrollbar-light
    > .scroll-element.scroll-y.scroll-scrollx_visible
    .scroll-element_size {
    top: -19px;
}
.scrollbar-light
    > .scroll-element.scroll-x.scroll-scrolly_visible
    .scroll-element_track {
    left: -19px;
}
.scrollbar-light
    > .scroll-element.scroll-y.scroll-scrollx_visible
    .scroll-element_track {
    top: -19px;
}
.scrollbar-rail > .scroll-element,
.scrollbar-rail > .scroll-element div {
    border: none;
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: absolute;
    z-index: 10;
}
.scrollbar-rail > .scroll-element {
    background-color: #fff;
}
.scrollbar-rail > .scroll-element div {
    display: block;
    height: 100%;
    left: 0;
    top: 0;
    width: 100%;
}
.scrollbar-rail > .scroll-element .scroll-element_size {
    background-color: #999;
    background-color: rgba(0, 0, 0, 0.3);
}
.scrollbar-rail
    > .scroll-element
    .scroll-element_outer:hover
    .scroll-element_size {
    background-color: #666;
    background-color: rgba(0, 0, 0, 0.5);
}
.scrollbar-rail > .scroll-element.scroll-x {
    bottom: 0;
    height: 12px;
    left: 0;
    min-width: 100%;
    padding: 3px 0 2px;
    width: 100%;
}
.scrollbar-rail > .scroll-element.scroll-y {
    height: 100%;
    min-height: 100%;
    padding: 0 2px 0 3px;
    right: 0;
    top: 0;
    width: 12px;
}
.scrollbar-rail > .scroll-element .scroll-bar {
    background-color: #d0b9a0;
    border-radius: 2px;
    -webkit-box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}
.scrollbar-rail > .scroll-element .scroll-element_outer:hover .scroll-bar {
    -webkit-box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
}
.scrollbar-rail > .scroll-content.scroll-scrolly_visible {
    left: -17px;
    margin-left: 17px;
}
.scrollbar-rail > .scroll-content.scroll-scrollx_visible {
    margin-top: 17px;
    top: -17px;
}
.scrollbar-rail > .scroll-element.scroll-x .scroll-bar {
    height: 10px;
    min-width: 10px;
    top: 1px;
}
.scrollbar-rail > .scroll-element.scroll-y .scroll-bar {
    left: 1px;
    min-height: 10px;
    width: 10px;
}
.scrollbar-rail > .scroll-element.scroll-x .scroll-element_outer {
    height: 15px;
    left: 5px;
}
.scrollbar-rail > .scroll-element.scroll-x .scroll-element_size {
    height: 2px;
    left: -10px;
    top: 5px;
}
.scrollbar-rail > .scroll-element.scroll-y .scroll-element_outer {
    top: 5px;
    width: 15px;
}
.scrollbar-rail > .scroll-element.scroll-y .scroll-element_size {
    left: 5px;
    top: -10px;
    width: 2px;
}
.scrollbar-rail
    > .scroll-element.scroll-x.scroll-scrolly_visible
    .scroll-element_size {
    left: -25px;
}
.scrollbar-rail
    > .scroll-element.scroll-y.scroll-scrollx_visible
    .scroll-element_size {
    top: -25px;
}
.scrollbar-rail
    > .scroll-element.scroll-x.scroll-scrolly_visible
    .scroll-element_track {
    left: -25px;
}
.scrollbar-rail
    > .scroll-element.scroll-y.scroll-scrollx_visible
    .scroll-element_track {
    top: -25px;
}
.scrollbar-dynamic > .scroll-element,
.scrollbar-dynamic > .scroll-element div {
    background: none;
    border: none;
    margin: 0;
    padding: 0;
    position: absolute;
    z-index: 10;
}
.scrollbar-dynamic > .scroll-element div {
    display: block;
    height: 100%;
    left: 0;
    top: 0;
    width: 100%;
}
.scrollbar-dynamic > .scroll-element.scroll-x {
    bottom: 2px;
    height: 7px;
    left: 0;
    min-width: 100%;
    width: 100%;
}
.scrollbar-dynamic > .scroll-element.scroll-y {
    height: 100%;
    min-height: 100%;
    right: 2px;
    top: 0;
    width: 7px;
}
.scrollbar-dynamic > .scroll-element .scroll-element_outer {
    opacity: 0.3;
    border-radius: 12px;
}
.scrollbar-dynamic > .scroll-element .scroll-element_size {
    background-color: #ccc;
    opacity: 0;
    border-radius: 12px;
    -webkit-transition: opacity 0.2s;
    transition: opacity 0.2s;
}
.scrollbar-dynamic > .scroll-element .scroll-bar {
    background-color: #6c6e71;
    border-radius: 7px;
}
.scrollbar-dynamic > .scroll-element.scroll-x .scroll-bar {
    bottom: 0;
    height: 7px;
    min-width: 24px;
    top: auto;
}
.scrollbar-dynamic > .scroll-element.scroll-y .scroll-bar {
    left: auto;
    min-height: 24px;
    right: 0;
    width: 7px;
}
.scrollbar-dynamic > .scroll-element.scroll-x .scroll-element_outer {
    bottom: 0;
    top: auto;
    left: 2px;
    -webkit-transition: height 0.2s;
    transition: height 0.2s;
}
.scrollbar-dynamic > .scroll-element.scroll-y .scroll-element_outer {
    left: auto;
    right: 0;
    top: 2px;
    -webkit-transition: width 0.2s;
    transition: width 0.2s;
}
.scrollbar-dynamic > .scroll-element.scroll-x .scroll-element_size {
    left: -4px;
}
.scrollbar-dynamic > .scroll-element.scroll-y .scroll-element_size {
    top: -4px;
}
.scrollbar-dynamic
    > .scroll-element.scroll-x.scroll-scrolly_visible
    .scroll-element_size {
    left: -11px;
}
.scrollbar-dynamic
    > .scroll-element.scroll-y.scroll-scrollx_visible
    .scroll-element_size {
    top: -11px;
}
.scrollbar-dynamic > .scroll-element.scroll-draggable .scroll-element_outer,
.scrollbar-dynamic > .scroll-element:hover .scroll-element_outer {
    overflow: hidden;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
    filter: alpha(opacity=70);
    opacity: 0.7;
}
.scrollbar-dynamic
    > .scroll-element.scroll-draggable
    .scroll-element_outer
    .scroll-element_size,
.scrollbar-dynamic
    > .scroll-element:hover
    .scroll-element_outer
    .scroll-element_size {
    opacity: 1;
}
.scrollbar-dynamic
    > .scroll-element.scroll-draggable
    .scroll-element_outer
    .scroll-bar,
.scrollbar-dynamic > .scroll-element:hover .scroll-element_outer .scroll-bar {
    height: 100%;
    width: 100%;
    border-radius: 12px;
}
.scrollbar-dynamic
    > .scroll-element.scroll-x.scroll-draggable
    .scroll-element_outer,
.scrollbar-dynamic > .scroll-element.scroll-x:hover .scroll-element_outer {
    height: 20px;
    min-height: 7px;
}
.scrollbar-dynamic
    > .scroll-element.scroll-y.scroll-draggable
    .scroll-element_outer,
.scrollbar-dynamic > .scroll-element.scroll-y:hover .scroll-element_outer {
    min-width: 7px;
    width: 20px;
}
.scrollbar-chrome > .scroll-element,
.scrollbar-chrome > .scroll-element div {
    border: none;
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: absolute;
    z-index: 10;
}
.scrollbar-chrome > .scroll-element {
    background-color: #fff;
}
.scrollbar-chrome > .scroll-element div {
    display: block;
    height: 100%;
    left: 0;
    top: 0;
    width: 100%;
}
.scrollbar-chrome > .scroll-element .scroll-element_track {
    background: #f1f1f1;
    border: 1px solid #dbdbdb;
}
.scrollbar-chrome > .scroll-element.scroll-x {
    bottom: 0;
    height: 16px;
    left: 0;
    min-width: 100%;
    width: 100%;
}
.scrollbar-chrome > .scroll-element.scroll-y {
    height: 100%;
    min-height: 100%;
    right: 0;
    top: 0;
    width: 16px;
}
.scrollbar-chrome > .scroll-element .scroll-bar {
    background-color: #d9d9d9;
    border: 1px solid #bdbdbd;
    cursor: default;
    border-radius: 2px;
}
.scrollbar-chrome > .scroll-element .scroll-bar:hover {
    background-color: #c2c2c2;
    border-color: #a9a9a9;
}
.scrollbar-chrome > .scroll-element.scroll-draggable .scroll-bar {
    background-color: #919191;
    border-color: #7e7e7e;
}
.scrollbar-chrome > .scroll-content.scroll-scrolly_visible {
    left: -16px;
    margin-left: 16px;
}
.scrollbar-chrome > .scroll-content.scroll-scrollx_visible {
    top: -16px;
    margin-top: 16px;
}
.scrollbar-chrome > .scroll-element.scroll-x .scroll-bar {
    height: 8px;
    min-width: 10px;
    top: 3px;
}
.scrollbar-chrome > .scroll-element.scroll-y .scroll-bar {
    left: 3px;
    min-height: 10px;
    width: 8px;
}
.scrollbar-chrome > .scroll-element.scroll-x .scroll-element_outer {
    border-left: 1px solid #dbdbdb;
}
.scrollbar-chrome > .scroll-element.scroll-x .scroll-element_track {
    height: 14px;
    left: -3px;
}
.scrollbar-chrome > .scroll-element.scroll-x .scroll-element_size {
    height: 14px;
    left: -4px;
}
.scrollbar-chrome > .scroll-element.scroll-y .scroll-element_outer {
    border-top: 1px solid #dbdbdb;
}
.scrollbar-chrome > .scroll-element.scroll-y .scroll-element_track {
    top: -3px;
    width: 14px;
}
.scrollbar-chrome > .scroll-element.scroll-y .scroll-element_size {
    top: -4px;
    width: 14px;
}
.scrollbar-chrome
    > .scroll-element.scroll-x.scroll-scrolly_visible
    .scroll-element_size {
    left: -19px;
}
.scrollbar-chrome
    > .scroll-element.scroll-y.scroll-scrollx_visible
    .scroll-element_size {
    top: -19px;
}
.scrollbar-chrome
    > .scroll-element.scroll-x.scroll-scrolly_visible
    .scroll-element_track {
    left: -19px;
}
.scrollbar-chrome
    > .scroll-element.scroll-y.scroll-scrollx_visible
    .scroll-element_track {
    top: -19px;
}
.scrollbar-inner {
    height: 100%;
}
.scrollbar-inner:not(:hover) .scroll-element {
    opacity: 0;
}
.scrollbar-inner .scroll-element {
    -webkit-transition: opacity 0.3s;
    transition: opacity 0.3s;
    margin-right: 2px;
}
.scrollbar-inner .scroll-element .scroll-bar,
.scrollbar-inner .scroll-element .scroll-element_track {
    -webkit-transition: background-color 0.3s;
    transition: background-color 0.3s;
}
.scrollbar-inner .scroll-element .scroll-element_track {
    background-color: transparent;
}
.scrollbar-inner .scroll-element:hover {
    width: 4px;
}
.scrollbar-inner .scroll-element.scroll-y {
    width: 3px;
    right: 0;
}
.scrollbar-inner .scroll-element.scroll-x {
    height: 3px;
    bottom: 0;
}
.select2-selection__arrow {
    display: none;
}
.select2.select2-container {
    width: 100% !important;
}
.select2-container--default.select2-container--focus
    .select2-selection--multiple,
.select2-container--default .select2-search--dropdown .select2-search__field,
.select2-container--default .select2-selection--multiple,
.select2-container .select2-selection--single {
    display: block;
    width: 100%;
    height: calc(1.5em + 1.5rem + 2px);
    padding: 0.75rem 1.25rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #8492a6;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e0e6ed;
    border-radius: 0.25rem;
    -webkit-box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075);
    box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075);
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .select2-container--default.select2-container--focus
        .select2-selection--multiple,
    .select2-container--default
        .select2-search--dropdown
        .select2-search__field,
    .select2-container--default .select2-selection--multiple,
    .select2-container .select2-selection--single {
        -webkit-transition: none;
        transition: none;
    }
}
.select2-container--default.select2-container--focus
    .select2-selection--multiple::-ms-expand,
.select2-container--default
    .select2-search--dropdown
    .select2-search__field::-ms-expand,
.select2-container--default .select2-selection--multiple::-ms-expand,
.select2-container .select2-selection--single::-ms-expand {
    background-color: transparent;
    border: 0;
}
.select2-container--default.select2-container--focus
    .select2-selection--multiple:focus,
.select2-container--default
    .select2-search--dropdown
    .select2-search__field:focus,
.select2-container--default .select2-selection--multiple:focus,
.select2-container .select2-selection--single:focus {
    color: #8492a6;
    background-color: #fff;
    border-color: rgba(110, 0, 255, 0.5);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075),
        0 0 20px rgba(110, 0, 255, 0.1);
    box-shadow: inset 0 1px 1px rgba(31, 45, 61, 0.075),
        0 0 20px rgba(110, 0, 255, 0.1);
}
.select2-container--default.select2-container--focus
    .select2-selection--multiple::-webkit-input-placeholder,
.select2-container--default
    .select2-search--dropdown
    .select2-search__field::-webkit-input-placeholder,
.select2-container--default
    .select2-selection--multiple::-webkit-input-placeholder,
.select2-container .select2-selection--single::-webkit-input-placeholder {
    color: #aabacd;
    opacity: 1;
}
.select2-container--default.select2-container--focus
    .select2-selection--multiple::-moz-placeholder,
.select2-container--default
    .select2-search--dropdown
    .select2-search__field::-moz-placeholder,
.select2-container--default .select2-selection--multiple::-moz-placeholder,
.select2-container .select2-selection--single::-moz-placeholder {
    color: #aabacd;
    opacity: 1;
}
.select2-container--default.select2-container--focus
    .select2-selection--multiple:-ms-input-placeholder,
.select2-container--default
    .select2-search--dropdown
    .select2-search__field:-ms-input-placeholder,
.select2-container--default .select2-selection--multiple:-ms-input-placeholder,
.select2-container .select2-selection--single:-ms-input-placeholder {
    color: #aabacd;
    opacity: 1;
}
.select2-container--default.select2-container--focus
    .select2-selection--multiple::-ms-input-placeholder,
.select2-container--default
    .select2-search--dropdown
    .select2-search__field::-ms-input-placeholder,
.select2-container--default .select2-selection--multiple::-ms-input-placeholder,
.select2-container .select2-selection--single::-ms-input-placeholder {
    color: #aabacd;
    opacity: 1;
}
.select2-container--default.select2-container--focus
    .select2-selection--multiple::placeholder,
.select2-container--default
    .select2-search--dropdown
    .select2-search__field::placeholder,
.select2-container--default .select2-selection--multiple::placeholder,
.select2-container .select2-selection--single::placeholder {
    color: #aabacd;
    opacity: 1;
}
.select2-container--default.select2-container--focus
    .select2-selection--multiple:disabled,
.select2-container--default.select2-container--focus
    .select2-selection--multiple[readonly],
.select2-container--default
    .select2-search--dropdown
    .select2-search__field:disabled,
.select2-container--default
    .select2-search--dropdown
    .select2-search__field[readonly],
.select2-container--default .select2-selection--multiple:disabled,
.select2-container--default .select2-selection--multiple[readonly],
.select2-container .select2-selection--single:disabled,
.select2-container .select2-selection--single[readonly] {
    background-color: #eff2f7;
    opacity: 1;
}
.select2-container .select2-selection--single .select2-selection__rendered {
    padding: 0;
    overflow: inherit;
    text-overflow: inherit;
    white-space: inherit;
}
.select2-container--default
    .select2-selection--single
    .select2-selection__rendered {
    color: inherit;
    line-height: inherit;
}
.select2-dropdown {
    padding: 0.35rem 0;
    background-color: #fff;
    border: 1px solid #e0e6ed;
    border-radius: 0.25rem;
}
.select2-results__option {
    padding: 0.25rem 1.25rem;
    background-color: #fff;
    color: #8492a6;
}
.select2-results__option:hover {
    color: {{ $settings->website_theme }};
}
.select2-container--default
    .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-results__option[aria-selected="true"] {
    background-color: transparent;
    color: {{ $settings->website_theme }};
}
.select2-container--default .select2-results__option[aria-disabled="true"] {
    color: #c0ccda;
}
.select2-container--default.select2-container--focus
    .select2-selection--multiple,
.select2-container--default .select2-selection--multiple {
    height: auto;
    min-height: calc(1.5em + 1.5rem + 2px);
}
.select2-container--default
    .select2-selection--multiple
    .select2-selection__rendered {
    display: block;
    margin: 0 0 -0.25rem -0.25rem;
    padding: 0;
}
.select2-container--default
    .select2-selection--multiple
    .select2-selection__choice {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    padding: 0 0.5rem;
    margin: 0 0 0.25rem 0.25rem;
    background-color: #eff2f7;
    border: none;
    border-radius: 0.2rem;
    line-height: 1.5rem;
    font-size: 0.875rem;
    color: #8492a6;
}
.select2-container--default
    .select2-selection--multiple
    .select2-selection__choice__remove {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
    margin-left: 0.5rem;
    color: #8492a6;
}
.select2-container--default
    .select2-selection--multiple
    .select2-selection__choice__remove:hover {
    color: #8492a6;
}
.select2-container .select2-search--inline {
    display: none;
}
.select2-selection[aria-expanded="true"] {
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}
.select2-search--dropdown {
    padding: 0.25rem 1.25rem;
}
.form-control-sm
    + .select2-container--default.select2-container--focus
    .select2-selection--multiple,
.form-control-sm + .select2-container--default .select2-selection--multiple,
.form-control-sm + .select2-container .select2-selection--single,
.select2-container--default .select2-search--dropdown .select2-search__field {
    height: calc(1.5em + 1rem + 2px);
    padding: 0.5rem 1.25rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}
.form-control-sm
    + .select2-container--default.select2-container--focus
    .select2-selection--multiple,
.form-control-sm + .select2-container--default .select2-selection--multiple {
    min-height: calc(1.5em + 1rem + 2px);
}
.form-control-sm
    + .select2-container--default
    .select2-selection--multiple
    .select2-selection__choice {
    line-height: 1.3125rem;
}
.form-control-lg
    + .select2-container--default.select2-container--focus
    .select2-selection--multiple,
.form-control-lg + .select2-container--default .select2-selection--multiple,
.form-control-lg + .select2-container .select2-selection--single {
    height: calc(1.5em + 2rem + 2px);
    padding: 1rem 1.875rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.375rem;
}
.form-control-lg
    + .select2-container--default.select2-container--focus
    .select2-selection--multiple,
.form-control-lg + .select2-container--default .select2-selection--multiple {
    min-height: calc(1.5em + 2rem + 2px);
}
.form-control-lg
    + .select2-container--default
    .select2-selection--multiple
    .select2-selection__choice {
    line-height: 1.875rem;
}
.swal2-popup {
    padding: 1.5rem;
}
.swal2-popup .swal2-title {
    font-size: 1.5rem;
}
.swal2-popup .swal2-content {
    font-size: 0.875rem;
}
.swal2-popup .swal2-image {
    max-width: 200px;
}
.swiper-slide .card {
    margin: 0;
}
.swiper-container-vertical {
    width: 100%;
    height: 100%;
}
.swiper-container-vertical .swiper-slide {
    text-align: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.swiper-pagination {
    left: 0;
}
.swiper-pagination-bullet {
    width: 0.65rem;
    height: 0.65rem;
    margin-right: 0.45rem;
    opacity: 0.5;
    background: #d3dce6;
    outline: none;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
.swiper-pagination-bullet:hover {
    opacity: 1;
}
.swiper-pagination-bullet-active {
    -webkit-transform: scale(1.4);
    transform: scale(1.4);
    background: {{ $settings->website_theme }};
    opacity: 1;
}
.swiper-button {
    width: auto;
    margin: 0;
    top: 0;
    left: 0;
    right: 0;
    display: inline-block;
    position: static;
    background: transparent;
    color: #d3dce6;
    font-size: 24px;
}
.swiper-button:active,
.swiper-button:focus,
.swiper-button:hover {
    background: transparent;
    color: {{ $settings->website_theme }};
    opacity: 1;
}
.swiper-button.swiper-button-next {
    margin-left: 10px;
}
.bootstrap-tagsinput {
    display: block;
    max-width: 100%;
    color: #c0ccda;
    vertical-align: middle;
    background-color: transparent;
    border: 0 solid transparent;
    border-radius: 0.25rem;
    cursor: default;
}
.bootstrap-tagsinput input {
    display: block;
    border: 0;
    color: #8492a6;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: none;
    background-color: transparent;
    padding: 0;
    margin: 0;
    width: auto;
    max-width: inherit;
}
.bootstrap-tagsinput input::-webkit-input-placeholder {
    color: #aabacd;
    opacity: 1;
}
.bootstrap-tagsinput input::-moz-placeholder {
    color: #aabacd;
    opacity: 1;
}
.bootstrap-tagsinput input:-ms-input-placeholder {
    color: #aabacd;
    opacity: 1;
}
.bootstrap-tagsinput input::-ms-input-placeholder {
    color: #aabacd;
    opacity: 1;
}
.bootstrap-tagsinput input::placeholder {
    color: #aabacd;
    opacity: 1;
}
.bootstrap-tagsinput input:focus {
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.bootstrap-tagsinput [data-role="remove"] {
    margin-left: 10px;
    cursor: pointer;
    color: #fff;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    opacity: 0;
}
.bootstrap-tagsinput [data-role="remove"]:after {
    content: "\D7";
    font-size: 16px;
}
.bootstrap-tagsinput .badge {
    display: inline-block;
    position: relative;
    padding: 0.625rem 0.625rem 0.5rem;
    margin: 0.125rem;
    border-radius: 0.25rem;
    background: {{ $settings->website_theme }};
    color: #fff;
    line-height: 1.5;
    overflow: hidden;
    -webkit-box-shadow: 0 1px 2px rgba(31, 45, 61, 0.25);
    box-shadow: 0 1px 2px rgba(31, 45, 61, 0.25);
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
@media (prefers-reduced-motion: reduce) {
    .bootstrap-tagsinput .badge {
        -webkit-transition: none;
        transition: none;
    }
}
.bootstrap-tagsinput .badge:hover {
    padding-right: 1.675rem;
}
.bootstrap-tagsinput .badge:hover [data-role="remove"] {
    opacity: 1;
}
#chartjs-tooltip {
    opacity: 1;
    position: absolute;
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
    border-radius: 3px;
    -webkit-transition: all 0.1s ease;
    transition: all 0.1s ease;
    pointer-events: none;
    -webkit-transform: translate(-50%);
    transform: translate(-50%);
}
.chartjs-tooltip-key {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin-right: 10px;
}

</style>