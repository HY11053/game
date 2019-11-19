<!DOCTYPE html>
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>百度智能建站 AIPage - 建站/小程序</title>
    <meta name="description" content="">
    <meta name="keywords" content="智能建站,建站,小程序,微信小程序,百度小程序,百度小程序开发平台,百度小程序开发,百度智能建站">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <!-- UC & QQ 强制竖屏 -->
    <link rel="stylesheet" href="/frontend/css/webstatic.css" />
    <link rel="stylesheet" href="/frontend/css/css.css" />
    <!--THEME_STYLE_PLACEHOLDER-->
    <!--自定义头部-->
    <style id="custom-theme">
        .uk-h1,.uk-h2,.uk-h4, .uk-h5,h1,h2,h3,h4,h5,h6 {font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Microsoft Yahei";}
        html {font-size: 16px; font-weight: 400;line-height: 1.5;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: #666666;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;text-rendering: optimizeLegibility;}
        body {margin: 0;font-size: 14px;color: #666666;background-color: #ffffff;}
        a {background-color: transparent;-webkit-text-decoration-skip: objects;}
        a:active,a:hover {outline: none;}
        a{color: #1e87f0;text-decoration: none;cursor: pointer;}
        a:hover{color: #0f6ecd;}
        abbr[title] {border-bottom: none; text-decoration: underline;text-decoration: underline dotted; }
        b,strong {font-weight: inherit;}
        b,strong {font-weight: bolder;}
        :not(pre) > code,:not(pre) > kbd,:not(pre) > samp {font-size: 11px;font-family: Consolas, monaco, monospace; color: #435DBA; white-space: nowrap; padding: 2px 6px; border: 1px solid #EBEBED; border-radius: 3px; }
        em {  color: #0f6ecd;}
        h1, .uk-h1, h2, .uk-h2,h3, .uk-h3, h4,.uk-h4,h5,.uk-h5,  h6, .uk-h6 {color: #333333; }
        blockquote { color: #333333; }
        pre { background: #ffffff;}
        pre code { font-family: Consolas, monaco, monospace;}
        ::-moz-selection { background: #1e87f0; text-shadow: none; }
        ::selection { background: #1e87f0; text-shadow: none;}
        .ap-child-list > ul { padding: 0; list-style: none;}
        .uk-list-striped > li:nth-of-type(odd) { background: #f8f8f8;}
        .uk-description-list > dt {color: #333333;}
        .uk-description-list > dd {font-size: 16px;}
        .uk-table caption { color: #999999;}
        .uk-table-striped > tr:nth-of-type(odd),
        .uk-table-striped tbody tr:nth-of-type(odd) {background: #f8f8f8;}
        .uk-button-default {background-color: #ffffff;color: #333333;}
        /* Hover + Focus */
        .uk-button-default:hover,.uk-button-default:focus {background-color: #ffffff;color: #1e87f0;}
        .uk-button-default:active,
        .uk-button-primary { background-color: #1e87f0;color: #ffffff;}
        .uk-button-primary:hover, .uk-button-primary:focus {background-color: #222222;color: #ffffff;}
        .uk-button-primary:active {color: #ffffff;}
        .uk-button-default:disabled,.uk-button-primary:disabled{background-color: #f8f8f8;color: #999999; }
        .uk-section-default {background: #ffffff;}
        .uk-section-primary{background: #1e87f0;}
        .uk-section-secondary{background: #222222;}
        .uk-section-muted{background: #f8f8f8;}
        .uk-card-badge:first-child + * {margin-top: 0;}
        .uk-card-default {background: #ffffff;color: #666666;}
        .uk-card-default .uk-card-title { color: #333333;}
        .uk-card-default.uk-card-hover:hover {background-color: #ffffff;}
        .uk-card-primary .uk-card-title {color: #ffffff;}
        .uk-card-secondary .uk-card-title {color: #ffffff;}
        .uk-overlay > :last-child {margin-bottom: 0;}
        .uk-article-meta a { color: #999999; }
        .uk-article-meta a:hover { color: #666666;text-decoration: none;}
        .uk-nav-parent-icon > .uk-parent > a::after {content: "";width: 1.5 em;height: 1.5 em;}
        .uk-nav-default > li > a {color: #999999;}
        .uk-nav-default > li > a:hover,.uk-nav-default > li > a:focus {color: #1e87f0;background-color: transparent;}
        .uk-nav-default > li.uk-active > a {color: #333333;background-color: transparent;}
        .uk-nav-default .uk-nav-sub a {color: #999999;}
        .uk-nav-default .uk-nav-sub a:hover,.uk-nav-default .uk-nav-sub a:focus {color: #666666;}
        .uk-nav-primary > li > a {line-height: 1.5;color: #999999;}
        .uk-nav-primary > li > a:hover, .uk-nav-primary > li > a:focus {color: #1e87f0; }
        .uk-nav-primary > li.uk-active > a {color: #333333;}
        .uk-nav-primary .uk-nav-sub a {color: #999999;}
        .uk-nav-primary .uk-nav-sub a:hover,.uk-nav-primary .uk-nav-sub a:focus {color: #666666;}
        .uk-navbar-nav > li > a {color: #666666;}
        .uk-navbar-nav > li:hover > a,.uk-navbar-nav > li > a:focus{color: #1e87f0;outline: none;}
        .uk-navbar-nav > li > a:hover::before {background-color: #1e87f0;}
        .uk-navbar-nav > li > a:active { color: #333333;}
        .uk-navbar-nav > li.uk-active > a {color: #333333;}
        .uk-navbar-nav > li.uk-active > a::before {background-color: #1e87f0;}
        .uk-navbar-item {color: #666666;}
        .uk-navbar-dropdown-nav > li > a {color: #999999; padding: 5px 0;}
        .uk-navbar-dropdown-nav > li > a:hover,.uk-navbar-dropdown-nav > li > a:focus {color: #1e87f0;background-color: transparent;}
        .uk-navbar-dropdown-nav > li.uk-active > a { color: #333333;}
        .uk-navbar-dropdown-nav .uk-nav-sub a {color: #999999;}
        .uk-navbar-dropdown-nav .uk-nav-sub a:hover, .uk-navbar-dropdown-nav .uk-nav-sub a:focus { color: #666666;}
        .uk-navbar-dropbar {  position: relative; background: #ffffff; overflow: hidden; }
        .uk-subnav > * > :first-child {  color: #999999;}
        .uk-subnav > * > a:hover,.uk-subnav > * > a:focus {color: #666666; text-decoration: none; outline: none; }
        .uk-subnav > .uk-active > a { color: #333333;}
        .uk-subnav-pill > * > :first-child { color: #999999;}
        .uk-subnav-pill > * > a:hover,.uk-subnav-pill > * > a:focus { background-color: #ffffff; color: #666666;}
        .uk-subnav-pill > * > a:active { background-color: #ffffff; color: #333333;}
        .uk-subnav-pill > .uk-active > a { background-color: #1e87f0; color: #ffffff;}
        .uk-subnav > .uk-disabled > a { color: #999999;}
        .uk-breadcrumb > * > * { color: #999999;}
        .uk-breadcrumb > * > :hover,.uk-breadcrumb > * > :focus { color: #666666; text-decoration: none; }
        .uk-breadcrumb > .uk-disabled > * { color: #999999; }
        .uk-breadcrumb > :last-child > * { color: #333333; }
        .uk-pagination > * > * { color: #999999; }
        .uk-pagination > * > :hover, .uk-pagination > * > :focus {color: #333333; background-color: #ffffff;}
        .uk-pagination > .uk-active > * {color: #1e87f0; background-color: transparent;}
        .uk-pagination > .uk-disabled > * { color: #999999;  background-color: transparent; }
        .uk-tab > * > a {  color: #999999;}
        .uk-tab > * > a:hover, .uk-tab > * > a:focus {color: #666666; text-decoration: none; border-color: transparent; }
        .uk-tab > .uk-active > a { color: #333333;  border-color: #1e87f0; }
        .uk-tab > .uk-disabled > a { color: #999999; }
        .uk-dotnav > * > :hover, .uk-dotnav > * > :focus {background-color: rgba(248, 108, 74, 0.4); outline: none; border-color: transparent;}
        .uk-dotnav > * > :active { background-color: #1e87f0; border-color: transparent;}
        .uk-dotnav > .uk-active > * { background-color: #1e87f0;  border-color: transparent;}
        .uk-dropdown-nav > li > a { color: #999999;}
        .uk-dropdown-nav > li > a:hover,.uk-dropdown-nav > li > a:focus,.uk-dropdown-nav > li.uk-active > a { color: #333333;  background-color: transparent;}
        .uk-dropdown-nav .uk-nav-sub a { color: #999999;}
        .uk-dropdown-nav .uk-nav-sub a:hover,.uk-dropdown-nav .uk-nav-sub a:focus { color: #1e87f0;}
        .uk-text-meta a { color: #999999;}
        .uk-text-meta a:hover { color: #666666;  text-decoration: none; }
        .uk-text-small { font-size: 12px; line-height: 1.5; }
        .uk-text-bold { font-weight: bolder; }
        .uk-background-default { background-color: #ffffff;}
        .uk-background-muted { background-color: #f8f8f8; }
        .uk-background-primary {  background-color: #1e87f0; }
        .uk-background-secondary { background-color: #222222;}
        .uk-light a,
        .uk-light .uk-link,
        .uk-section-primary:not(.uk-preserve-color) a,
        .uk-section-primary:not(.uk-preserve-color) .uk-link,
        .uk-section-secondary:not(.uk-preserve-color) a,
        .uk-section-secondary:not(.uk-preserve-color) .uk-link,
        .uk-tile-primary:not(.uk-preserve-color) a,
        .uk-tile-primary:not(.uk-preserve-color) .uk-link,
        .uk-tile-secondary:not(.uk-preserve-color) a,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-link,
        .uk-card-primary.uk-card-body a,
        .uk-card-primary.uk-card-body .uk-link,
        .uk-card-primary > :not([class*='uk-card-media']) a,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-link,
        .uk-card-secondary.uk-card-body a,
        .uk-card-secondary.uk-card-body .uk-link,
        .uk-card-secondary > :not([class*='uk-card-media']) a,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-link,
        .uk-overlay-primary a,
        .uk-overlay-primary .uk-link,
        .ap-toolbar a,
        .ap-toolbar .uk-link {
            color: #ffffff;
        }
        .uk-light a:hover,
        .uk-light .uk-link:hover,
        .uk-section-primary:not(.uk-preserve-color) a:hover,
        .uk-section-primary:not(.uk-preserve-color) .uk-link:hover,
        .uk-section-secondary:not(.uk-preserve-color) a:hover,
        .uk-section-secondary:not(.uk-preserve-color) .uk-link:hover,
        .uk-tile-primary:not(.uk-preserve-color) a:hover,
        .uk-tile-primary:not(.uk-preserve-color) .uk-link:hover,
        .uk-tile-secondary:not(.uk-preserve-color) a:hover,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-link:hover,
        .uk-card-primary.uk-card-body a:hover,
        .uk-card-primary.uk-card-body .uk-link:hover,
        .uk-card-primary > :not([class*='uk-card-media']) a:hover,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-link:hover,
        .uk-card-secondary.uk-card-body a:hover,
        .uk-card-secondary.uk-card-body .uk-link:hover,
        .uk-card-secondary > :not([class*='uk-card-media']) a:hover,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-link:hover,
        .uk-overlay-primary a:hover,
        .uk-overlay-primary .uk-link:hover,
        .ap-toolbar a:hover,
        .ap-toolbar .uk-link:hover {
            color: #ffffff;
        }
        .uk-light em,
        .uk-section-primary:not(.uk-preserve-color) em,
        .uk-section-secondary:not(.uk-preserve-color) em,
        .uk-tile-primary:not(.uk-preserve-color) em,
        .uk-tile-secondary:not(.uk-preserve-color) em,
        .uk-card-primary.uk-card-body em,
        .uk-card-primary > :not([class*='uk-card-media']) em,
        .uk-card-secondary.uk-card-body em,
        .uk-card-secondary > :not([class*='uk-card-media']) em,
        .uk-overlay-primary em,
        .ap-toolbar em {
            color: #ffffff;
        }
        .uk-light h1,
        .uk-light .uk-h1,
        .uk-light h2,
        .uk-light .uk-h2,
        .uk-light h3,
        .uk-light .uk-h3,
        .uk-light h4,
        .uk-light .uk-h4,
        .uk-light h5,
        .uk-light .uk-h5,
        .uk-light h6,
        .uk-light .uk-h6,
        .uk-section-primary:not(.uk-preserve-color) h1,
        .uk-section-primary:not(.uk-preserve-color) .uk-h1,
        .uk-section-primary:not(.uk-preserve-color) h2,
        .uk-section-primary:not(.uk-preserve-color) .uk-h2,
        .uk-section-primary:not(.uk-preserve-color) h3,
        .uk-section-primary:not(.uk-preserve-color) .uk-h3,
        .uk-section-primary:not(.uk-preserve-color) h4,
        .uk-section-primary:not(.uk-preserve-color) .uk-h4,
        .uk-section-primary:not(.uk-preserve-color) h5,
        .uk-section-primary:not(.uk-preserve-color) .uk-h5,
        .uk-section-primary:not(.uk-preserve-color) h6,
        .uk-section-primary:not(.uk-preserve-color) .uk-h6,
        .uk-section-secondary:not(.uk-preserve-color) h1,
        .uk-section-secondary:not(.uk-preserve-color) .uk-h1,
        .uk-section-secondary:not(.uk-preserve-color) h2,
        .uk-section-secondary:not(.uk-preserve-color) .uk-h2,
        .uk-section-secondary:not(.uk-preserve-color) h3,
        .uk-section-secondary:not(.uk-preserve-color) .uk-h3,
        .uk-section-secondary:not(.uk-preserve-color) h4,
        .uk-section-secondary:not(.uk-preserve-color) .uk-h4,
        .uk-section-secondary:not(.uk-preserve-color) h5,
        .uk-section-secondary:not(.uk-preserve-color) .uk-h5,
        .uk-section-secondary:not(.uk-preserve-color) h6,
        .uk-section-secondary:not(.uk-preserve-color) .uk-h6,
        .uk-tile-primary:not(.uk-preserve-color) h1,
        .uk-tile-primary:not(.uk-preserve-color) .uk-h1,
        .uk-tile-primary:not(.uk-preserve-color) h2,
        .uk-tile-primary:not(.uk-preserve-color) .uk-h2,
        .uk-tile-primary:not(.uk-preserve-color) h3,
        .uk-tile-primary:not(.uk-preserve-color) .uk-h3,
        .uk-tile-primary:not(.uk-preserve-color) h4,
        .uk-tile-primary:not(.uk-preserve-color) .uk-h4,
        .uk-tile-primary:not(.uk-preserve-color) h5,
        .uk-tile-primary:not(.uk-preserve-color) .uk-h5,
        .uk-tile-primary:not(.uk-preserve-color) h6,
        .uk-tile-primary:not(.uk-preserve-color) .uk-h6,
        .uk-tile-secondary:not(.uk-preserve-color) h1,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-h1,
        .uk-tile-secondary:not(.uk-preserve-color) h2,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-h2,
        .uk-tile-secondary:not(.uk-preserve-color) h3,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-h3,
        .uk-tile-secondary:not(.uk-preserve-color) h4,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-h4,
        .uk-tile-secondary:not(.uk-preserve-color) h5,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-h5,
        .uk-tile-secondary:not(.uk-preserve-color) h6,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-h6,
        .uk-card-primary.uk-card-body h1,
        .uk-card-primary.uk-card-body .uk-h1,
        .uk-card-primary.uk-card-body h2,
        .uk-card-primary.uk-card-body .uk-h2,
        .uk-card-primary.uk-card-body h3,
        .uk-card-primary.uk-card-body .uk-h3,
        .uk-card-primary.uk-card-body h4,
        .uk-card-primary.uk-card-body .uk-h4,
        .uk-card-primary.uk-card-body h5,
        .uk-card-primary.uk-card-body .uk-h5,
        .uk-card-primary.uk-card-body h6,
        .uk-card-primary.uk-card-body .uk-h6,
        .uk-card-primary > :not([class*='uk-card-media']) h1,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-h1,
        .uk-card-primary > :not([class*='uk-card-media']) h2,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-h2,
        .uk-card-primary > :not([class*='uk-card-media']) h3,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-h3,
        .uk-card-primary > :not([class*='uk-card-media']) h4,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-h4,
        .uk-card-primary > :not([class*='uk-card-media']) h5,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-h5,
        .uk-card-primary > :not([class*='uk-card-media']) h6,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-h6,
        .uk-card-secondary.uk-card-body h1,
        .uk-card-secondary.uk-card-body .uk-h1,
        .uk-card-secondary.uk-card-body h2,
        .uk-card-secondary.uk-card-body .uk-h2,
        .uk-card-secondary.uk-card-body h3,
        .uk-card-secondary.uk-card-body .uk-h3,
        .uk-card-secondary.uk-card-body h4,
        .uk-card-secondary.uk-card-body .uk-h4,
        .uk-card-secondary.uk-card-body h5,
        .uk-card-secondary.uk-card-body .uk-h5,
        .uk-card-secondary.uk-card-body h6,
        .uk-card-secondary.uk-card-body .uk-h6,
        .uk-card-secondary > :not([class*='uk-card-media']) h1,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-h1,
        .uk-card-secondary > :not([class*='uk-card-media']) h2,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-h2,
        .uk-card-secondary > :not([class*='uk-card-media']) h3,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-h3,
        .uk-card-secondary > :not([class*='uk-card-media']) h4,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-h4,
        .uk-card-secondary > :not([class*='uk-card-media']) h5,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-h5,
        .uk-card-secondary > :not([class*='uk-card-media']) h6,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-h6,
        .uk-overlay-primary h1,
        .uk-overlay-primary .uk-h1,
        .uk-overlay-primary h2,
        .uk-overlay-primary .uk-h2,
        .uk-overlay-primary h3,
        .uk-overlay-primary .uk-h3,
        .uk-overlay-primary h4,
        .uk-overlay-primary .uk-h4,
        .uk-overlay-primary h5,
        .uk-overlay-primary .uk-h5,
        .uk-overlay-primary h6,
        .uk-overlay-primary .uk-h6,
        .ap-toolbar h1,
        .ap-toolbar .uk-h1,
        .ap-toolbar h2,
        .ap-toolbar .uk-h2,
        .ap-toolbar h3,
        .ap-toolbar .uk-h3,
        .ap-toolbar h4,
        .ap-toolbar .uk-h4,
        .ap-toolbar h5,
        .ap-toolbar .uk-h5,
        .ap-toolbar h6,
        .ap-toolbar .uk-h6 {
            color: #ffffff;
        }
        .uk-light blockquote,
        .uk-section-primary:not(.uk-preserve-color) blockquote,
        .uk-section-secondary:not(.uk-preserve-color) blockquote,
        .uk-tile-primary:not(.uk-preserve-color) blockquote,
        .uk-tile-secondary:not(.uk-preserve-color) blockquote,
        .uk-card-primary.uk-card-body blockquote,
        .uk-card-primary > :not([class*='uk-card-media']) blockquote,
        .uk-card-secondary.uk-card-body blockquote,
        .uk-card-secondary > :not([class*='uk-card-media']) blockquote,
        .uk-overlay-primary blockquote,
        .ap-toolbar blockquote {
            color: #ffffff;
        }
        .uk-light .uk-heading-primary,
        .uk-section-primary:not(.uk-preserve-color) .uk-heading-primary,
        .uk-section-secondary:not(.uk-preserve-color) .uk-heading-primary,
        .uk-tile-primary:not(.uk-preserve-color) .uk-heading-primary,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-heading-primary,
        .uk-card-primary.uk-card-body .uk-heading-primary,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-heading-primary,
        .uk-card-secondary.uk-card-body .uk-heading-primary,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-heading-primary,
        .uk-overlay-primary .uk-heading-primary,
        .ap-toolbar .uk-heading-primary {
            color: #ffffff;
        }
        .uk-light .uk-heading-hero,
        .uk-section-primary:not(.uk-preserve-color) .uk-heading-hero,
        .uk-section-secondary:not(.uk-preserve-color) .uk-heading-hero,
        .uk-tile-primary:not(.uk-preserve-color) .uk-heading-hero,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-heading-hero,
        .uk-card-primary.uk-card-body .uk-heading-hero,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-heading-hero,
        .uk-card-secondary.uk-card-body .uk-heading-hero,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-heading-hero,
        .uk-overlay-primary .uk-heading-hero,
        .ap-toolbar .uk-heading-hero {
            color: #ffffff;
        }
        .uk-light .uk-icon-button,
        .uk-section-primary:not(.uk-preserve-color) .uk-icon-button,
        .uk-section-secondary:not(.uk-preserve-color) .uk-icon-button,
        .uk-tile-primary:not(.uk-preserve-color) .uk-icon-button,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-icon-button,
        .uk-card-primary.uk-card-body .uk-icon-button,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-icon-button,
        .uk-card-secondary.uk-card-body .uk-icon-button,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-icon-button,
        .uk-overlay-primary .uk-icon-button,
        .ap-toolbar .uk-icon-button {
            background-color: #ffffff;
            color: #333333;
            background-image: none;
        }
        .uk-light .uk-icon-button:active,
        .uk-section-primary:not(.uk-preserve-color) .uk-icon-button:active,
        .uk-section-secondary:not(.uk-preserve-color) .uk-icon-button:active,
        .uk-tile-primary:not(.uk-preserve-color) .uk-icon-button:active,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-icon-button:active,
        .uk-card-primary.uk-card-body .uk-icon-button:active,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-icon-button:active,
        .uk-card-secondary.uk-card-body .uk-icon-button:active,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-icon-button:active,
        .uk-overlay-primary .uk-icon-button:active,
        .ap-toolbar .uk-icon-button:active {
            color: #333333;
        }
        .uk-light .uk-radio:checked,
        .uk-light .uk-checkbox:checked,
        .uk-light .uk-checkbox:indeterminate,
        .uk-section-primary:not(.uk-preserve-color) .uk-radio:checked,
        .uk-section-primary:not(.uk-preserve-color) .uk-checkbox:checked,
        .uk-section-primary:not(.uk-preserve-color) .uk-checkbox:indeterminate,
        .uk-section-secondary:not(.uk-preserve-color) .uk-radio:checked,
        .uk-section-secondary:not(.uk-preserve-color) .uk-checkbox:checked,
        .uk-section-secondary:not(.uk-preserve-color) .uk-checkbox:indeterminate,
        .uk-tile-primary:not(.uk-preserve-color) .uk-radio:checked,
        .uk-tile-primary:not(.uk-preserve-color) .uk-checkbox:checked,
        .uk-tile-primary:not(.uk-preserve-color) .uk-checkbox:indeterminate,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-radio:checked,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-checkbox:checked,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-checkbox:indeterminate,
        .uk-card-primary.uk-card-body .uk-radio:checked,
        .uk-card-primary.uk-card-body .uk-checkbox:checked,
        .uk-card-primary.uk-card-body .uk-checkbox:indeterminate,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-radio:checked,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-checkbox:checked,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-checkbox:indeterminate,
        .uk-card-secondary.uk-card-body .uk-radio:checked,
        .uk-card-secondary.uk-card-body .uk-checkbox:checked,
        .uk-card-secondary.uk-card-body .uk-checkbox:indeterminate,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-radio:checked,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-checkbox:checked,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-checkbox:indeterminate,
        .uk-overlay-primary .uk-radio:checked,
        .uk-overlay-primary .uk-checkbox:checked,
        .uk-overlay-primary .uk-checkbox:indeterminate,
        .ap-toolbar .uk-radio:checked,
        .ap-toolbar .uk-checkbox:checked,
        .ap-toolbar .uk-checkbox:indeterminate {
            background-color: #ffffff;
            border-color: transparent;
        }
        .uk-light .uk-form-label,
        .uk-section-primary:not(.uk-preserve-color) .uk-form-label,
        .uk-section-secondary:not(.uk-preserve-color) .uk-form-label,
        .uk-tile-primary:not(.uk-preserve-color) .uk-form-label,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-form-label,
        .uk-card-primary.uk-card-body .uk-form-label,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-form-label,
        .uk-card-secondary.uk-card-body .uk-form-label,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-form-label,
        .uk-overlay-primary .uk-form-label,
        .ap-toolbar .uk-form-label {
            color: #ffffff;
        }
        .uk-light .uk-button-default,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-default,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-default,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-default,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-default,
        .uk-card-primary.uk-card-body .uk-button-default,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-default,
        .uk-card-secondary.uk-card-body .uk-button-default,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-default,
        .uk-overlay-primary .uk-button-default,
        .ap-toolbar .uk-button-default {
            background-color: #ffffff;
            color: #333333;
            border-color: transparent;
            background-image: none;
            box-shadow: none;
        }
        .uk-light .uk-button-default:hover,
        .uk-light .uk-button-default:focus,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-default:hover,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-default:focus,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-default:hover,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-default:focus,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-default:hover,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-default:focus,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-default:hover,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-default:focus,
        .uk-card-primary.uk-card-body .uk-button-default:hover,
        .uk-card-primary.uk-card-body .uk-button-default:focus,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-default:hover,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-default:focus,
        .uk-card-secondary.uk-card-body .uk-button-default:hover,
        .uk-card-secondary.uk-card-body .uk-button-default:focus,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-default:hover,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-default:focus,
        .uk-overlay-primary .uk-button-default:hover,
        .uk-overlay-primary .uk-button-default:focus,
        .ap-toolbar .uk-button-default:hover,
        .ap-toolbar .uk-button-default:focus {
            background-color: #ffffff;
            color: #1e87f0;
            border-color: transparent;
            box-shadow: none;
        }
        .uk-light .uk-button-default:active,
        .uk-light .uk-button-default.uk-active,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-default:active,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-default.uk-active,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-default:active,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-default.uk-active,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-default:active,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-default.uk-active,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-default:active,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-default.uk-active,
        .uk-card-primary.uk-card-body .uk-button-default:active,
        .uk-card-primary.uk-card-body .uk-button-default.uk-active,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-default:active,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-default.uk-active,
        .uk-card-secondary.uk-card-body .uk-button-default:active,
        .uk-card-secondary.uk-card-body .uk-button-default.uk-active,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-default:active,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-default.uk-active,
        .uk-overlay-primary .uk-button-default:active,
        .uk-overlay-primary .uk-button-default.uk-active,
        .ap-toolbar .uk-button-default:active,
        .ap-toolbar .uk-button-default.uk-active {
            background-color: #1e87f0;
            color: #ffffff;
            border-color: transparent;
        }
        .uk-light .uk-button-primary,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-primary,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-primary,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-primary,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-primary,
        .uk-card-primary.uk-card-body .uk-button-primary,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-primary,
        .uk-card-secondary.uk-card-body .uk-button-primary,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-primary,
        .uk-overlay-primary .uk-button-primary,
        .ap-toolbar .uk-button-primary {
            background-color: #1e87f0;
            color: #ffffff;
            border-color: transparent;
            background-image: none;
            box-shadow: none;
        }
        .uk-light .uk-button-primary:hover,
        .uk-light .uk-button-primary:focus,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-primary:hover,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-primary:focus,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-primary:hover,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-primary:focus,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-primary:hover,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-primary:focus,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-primary:hover,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-primary:focus,
        .uk-card-primary.uk-card-body .uk-button-primary:hover,
        .uk-card-primary.uk-card-body .uk-button-primary:focus,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-primary:hover,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-primary:focus,
        .uk-card-secondary.uk-card-body .uk-button-primary:hover,
        .uk-card-secondary.uk-card-body .uk-button-primary:focus,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-primary:hover,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-primary:focus,
        .uk-overlay-primary .uk-button-primary:hover,
        .uk-overlay-primary .uk-button-primary:focus,
        .ap-toolbar .uk-button-primary:hover,
        .ap-toolbar .uk-button-primary:focus {
            color: #ffffff;
            border-color: transparent;
            box-shadow: none;
        }
        .uk-light .uk-button-primary:active,
        .uk-light .uk-button-primary.uk-active,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-primary:active,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-primary.uk-active,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-primary:active,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-primary.uk-active,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-primary:active,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-primary.uk-active,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-primary:active,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-primary.uk-active,
        .uk-card-primary.uk-card-body .uk-button-primary:active,
        .uk-card-primary.uk-card-body .uk-button-primary.uk-active,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-primary:active,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-primary.uk-active,
        .uk-card-secondary.uk-card-body .uk-button-primary:active,
        .uk-card-secondary.uk-card-body .uk-button-primary.uk-active,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-primary:active,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-primary.uk-active,
        .uk-overlay-primary .uk-button-primary:active,
        .uk-overlay-primary .uk-button-primary.uk-active,
        .ap-toolbar .uk-button-primary:active,
        .ap-toolbar .uk-button-primary.uk-active {
            color: #ffffff;
            border-color: transparent;
        }
        .uk-light .uk-button-secondary,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-secondary,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-secondary,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-secondary,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-secondary,
        .uk-card-primary.uk-card-body .uk-button-secondary,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-secondary,
        .uk-card-secondary.uk-card-body .uk-button-secondary,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-secondary,
        .uk-overlay-primary .uk-button-secondary,
        .ap-toolbar .uk-button-secondary {
            background-color: transparent;
            border-color: #ffffff;
            background-image: none;
            box-shadow: none;
        }
        .uk-light .uk-button-secondary:hover,
        .uk-light .uk-button-secondary:focus,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-secondary:hover,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-secondary:focus,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-secondary:hover,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-secondary:focus,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-secondary:hover,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-secondary:focus,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-secondary:hover,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-secondary:focus,
        .uk-card-primary.uk-card-body .uk-button-secondary:hover,
        .uk-card-primary.uk-card-body .uk-button-secondary:focus,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-secondary:hover,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-secondary:focus,
        .uk-card-secondary.uk-card-body .uk-button-secondary:hover,
        .uk-card-secondary.uk-card-body .uk-button-secondary:focus,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-secondary:hover,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-secondary:focus,
        .uk-overlay-primary .uk-button-secondary:hover,
        .uk-overlay-primary .uk-button-secondary:focus,
        .ap-toolbar .uk-button-secondary:hover,
        .ap-toolbar .uk-button-secondary:focus {
            background-color: transparent;
            color: #ffffff;
            box-shadow: none;
        }
        .uk-light .uk-button-secondary:active,
        .uk-light .uk-button-secondary.uk-active,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-secondary:active,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-secondary.uk-active,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-secondary:active,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-secondary.uk-active,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-secondary:active,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-secondary.uk-active,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-secondary:active,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-secondary.uk-active,
        .uk-card-primary.uk-card-body .uk-button-secondary:active,
        .uk-card-primary.uk-card-body .uk-button-secondary.uk-active,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-secondary:active,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-secondary.uk-active,
        .uk-card-secondary.uk-card-body .uk-button-secondary:active,
        .uk-card-secondary.uk-card-body .uk-button-secondary.uk-active,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-secondary:active,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-secondary.uk-active,
        .uk-overlay-primary .uk-button-secondary:active,
        .uk-overlay-primary .uk-button-secondary.uk-active,
        .ap-toolbar .uk-button-secondary:active,
        .ap-toolbar .uk-button-secondary.uk-active {
            background-color: #ffffff;
            color: #333333;
            border-color: #ffffff;
        }
        .uk-light .uk-button-text,
        .uk-section-primary:not(.uk-preserve-color) .uk-button-text,
        .uk-section-secondary:not(.uk-preserve-color) .uk-button-text,
        .uk-tile-primary:not(.uk-preserve-color) .uk-button-text,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-button-text,
        .uk-card-primary.uk-card-body .uk-button-text,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-button-text,
        .uk-card-secondary.uk-card-body .uk-button-text,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-button-text,
        .uk-overlay-primary .uk-button-text,
        .ap-toolbar .uk-button-text {
            color: #ffffff;
        }
        .uk-light .uk-totop:active,
        .uk-section-primary:not(.uk-preserve-color) .uk-totop:active,
        .uk-section-secondary:not(.uk-preserve-color) .uk-totop:active,
        .uk-tile-primary:not(.uk-preserve-color) .uk-totop:active,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-totop:active,
        .uk-card-primary.uk-card-body .uk-totop:active,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-totop:active,
        .uk-card-secondary.uk-card-body .uk-totop:active,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-totop:active,
        .uk-overlay-primary .uk-totop:active,
        .ap-toolbar .uk-totop:active {
            color: #ffffff;
            background-color: transparent;
        }
        .uk-light .uk-marker,
        .uk-section-primary:not(.uk-preserve-color) .uk-marker,
        .uk-section-secondary:not(.uk-preserve-color) .uk-marker,
        .uk-tile-primary:not(.uk-preserve-color) .uk-marker,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-marker,
        .uk-card-primary.uk-card-body .uk-marker,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-marker,
        .uk-card-secondary.uk-card-body .uk-marker,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-marker,
        .uk-overlay-primary .uk-marker,
        .ap-toolbar .uk-marker {
            background: #f8f8f8;
            color: #666666;
        }
        .uk-light .uk-marker:hover,
        .uk-light .uk-marker:focus,
        .uk-section-primary:not(.uk-preserve-color) .uk-marker:hover,
        .uk-section-primary:not(.uk-preserve-color) .uk-marker:focus,
        .uk-section-secondary:not(.uk-preserve-color) .uk-marker:hover,
        .uk-section-secondary:not(.uk-preserve-color) .uk-marker:focus,
        .uk-tile-primary:not(.uk-preserve-color) .uk-marker:hover,
        .uk-tile-primary:not(.uk-preserve-color) .uk-marker:focus,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-marker:hover,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-marker:focus,
        .uk-card-primary.uk-card-body .uk-marker:hover,
        .uk-card-primary.uk-card-body .uk-marker:focus,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-marker:hover,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-marker:focus,
        .uk-card-secondary.uk-card-body .uk-marker:hover,
        .uk-card-secondary.uk-card-body .uk-marker:focus,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-marker:hover,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-marker:focus,
        .uk-overlay-primary .uk-marker:hover,
        .uk-overlay-primary .uk-marker:focus,
        .ap-toolbar .uk-marker:hover,
        .ap-toolbar .uk-marker:focus {
            color: #666666;
        }
        .uk-light .uk-badge,
        .uk-section-primary:not(.uk-preserve-color) .uk-badge,
        .uk-section-secondary:not(.uk-preserve-color) .uk-badge,
        .uk-tile-primary:not(.uk-preserve-color) .uk-badge,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-badge,
        .uk-card-primary.uk-card-body .uk-badge,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-badge,
        .uk-card-secondary.uk-card-body .uk-badge,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-badge,
        .uk-overlay-primary .uk-badge,
        .ap-toolbar .uk-badge {
            background-color: #ffffff;
            color: #333333;
        }
        .uk-light .uk-badge:hover,
        .uk-light .uk-badge:focus,
        .uk-section-primary:not(.uk-preserve-color) .uk-badge:hover,
        .uk-section-primary:not(.uk-preserve-color) .uk-badge:focus,
        .uk-section-secondary:not(.uk-preserve-color) .uk-badge:hover,
        .uk-section-secondary:not(.uk-preserve-color) .uk-badge:focus,
        .uk-tile-primary:not(.uk-preserve-color) .uk-badge:hover,
        .uk-tile-primary:not(.uk-preserve-color) .uk-badge:focus,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-badge:hover,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-badge:focus,
        .uk-card-primary.uk-card-body .uk-badge:hover,
        .uk-card-primary.uk-card-body .uk-badge:focus,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-badge:hover,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-badge:focus,
        .uk-card-secondary.uk-card-body .uk-badge:hover,
        .uk-card-secondary.uk-card-body .uk-badge:focus,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-badge:hover,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-badge:focus,
        .uk-overlay-primary .uk-badge:hover,
        .uk-overlay-primary .uk-badge:focus,
        .ap-toolbar .uk-badge:hover,
        .ap-toolbar .uk-badge:focus {
            color: #333333;
        }
        .uk-light .uk-label,
        .uk-section-primary:not(.uk-preserve-color) .uk-label,
        .uk-section-secondary:not(.uk-preserve-color) .uk-label,
        .uk-tile-primary:not(.uk-preserve-color) .uk-label,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-label,
        .uk-card-primary.uk-card-body .uk-label,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-label,
        .uk-card-secondary.uk-card-body .uk-label,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-label,
        .uk-overlay-primary .uk-label,
        .ap-toolbar .uk-label {
            background-color: #ffffff;
            color: #333333;
        }
        .uk-light .uk-article-title,
        .uk-section-primary:not(.uk-preserve-color) .uk-article-title,
        .uk-section-secondary:not(.uk-preserve-color) .uk-article-title,
        .uk-tile-primary:not(.uk-preserve-color) .uk-article-title,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-article-title,
        .uk-card-primary.uk-card-body .uk-article-title,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-article-title,
        .uk-card-secondary.uk-card-body .uk-article-title,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-article-title,
        .uk-overlay-primary .uk-article-title,
        .ap-toolbar .uk-article-title {
            color: #ffffff;
        }
        .uk-light .uk-nav-default > li > a:hover,
        .uk-light .uk-nav-default > li > a:focus,
        .uk-section-primary:not(.uk-preserve-color) .uk-nav-default > li > a:hover,
        .uk-section-primary:not(.uk-preserve-color) .uk-nav-default > li > a:focus,
        .uk-section-secondary:not(.uk-preserve-color) .uk-nav-default > li > a:hover,
        .uk-section-secondary:not(.uk-preserve-color) .uk-nav-default > li > a:focus,
        .uk-tile-primary:not(.uk-preserve-color) .uk-nav-default > li > a:hover,
        .uk-tile-primary:not(.uk-preserve-color) .uk-nav-default > li > a:focus,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-nav-default > li > a:hover,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-nav-default > li > a:focus,
        .uk-card-primary.uk-card-body .uk-nav-default > li > a:hover,
        .uk-card-primary.uk-card-body .uk-nav-default > li > a:focus,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-nav-default > li > a:hover,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-nav-default > li > a:focus,
        .uk-card-secondary.uk-card-body .uk-nav-default > li > a:hover,
        .uk-card-secondary.uk-card-body .uk-nav-default > li > a:focus,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-nav-default > li > a:hover,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-nav-default > li > a:focus,
        .uk-overlay-primary .uk-nav-default > li > a:hover,
        .uk-overlay-primary .uk-nav-default > li > a:focus,
        .ap-toolbar .uk-nav-default > li > a:hover,
        .ap-toolbar .uk-nav-default > li > a:focus {
            color: rgba(197, 57, 15, 0.7);
            background-color: transparent;
        }
        .uk-light .uk-nav-default > li.uk-active > a,
        .uk-section-primary:not(.uk-preserve-color) .uk-nav-default > li.uk-active > a,
        .uk-section-secondary:not(.uk-preserve-color) .uk-nav-default > li.uk-active > a,
        .uk-tile-primary:not(.uk-preserve-color) .uk-nav-default > li.uk-active > a,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-nav-default > li.uk-active > a,
        .uk-card-primary.uk-card-body .uk-nav-default > li.uk-active > a,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-nav-default > li.uk-active > a,
        .uk-card-secondary.uk-card-body .uk-nav-default > li.uk-active > a,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-nav-default > li.uk-active > a,
        .uk-overlay-primary .uk-nav-default > li.uk-active > a,
        .ap-toolbar .uk-nav-default > li.uk-active > a {
            color: #ffffff;
            background-color: transparent;
        }
        .uk-light .uk-nav-default .uk-nav-header,
        .uk-section-primary:not(.uk-preserve-color) .uk-nav-default .uk-nav-header,
        .uk-section-secondary:not(.uk-preserve-color) .uk-nav-default .uk-nav-header,
        .uk-tile-primary:not(.uk-preserve-color) .uk-nav-default .uk-nav-header,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-nav-default .uk-nav-header,
        .uk-card-primary.uk-card-body .uk-nav-default .uk-nav-header,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-nav-default .uk-nav-header,
        .uk-card-secondary.uk-card-body .uk-nav-default .uk-nav-header,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-nav-default .uk-nav-header,
        .uk-overlay-primary .uk-nav-default .uk-nav-header,
        .ap-toolbar .uk-nav-default .uk-nav-header {
            color: #ffffff;
        }
        .uk-light .uk-nav-primary > li.uk-active > a,
        .uk-section-primary:not(.uk-preserve-color) .uk-nav-primary > li.uk-active > a,
        .uk-section-secondary:not(.uk-preserve-color) .uk-nav-primary > li.uk-active > a,
        .uk-tile-primary:not(.uk-preserve-color) .uk-nav-primary > li.uk-active > a,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-nav-primary > li.uk-active > a,
        .uk-card-primary.uk-card-body .uk-nav-primary > li.uk-active > a,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-nav-primary > li.uk-active > a,
        .uk-card-secondary.uk-card-body .uk-nav-primary > li.uk-active > a,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-nav-primary > li.uk-active > a,
        .uk-overlay-primary .uk-nav-primary > li.uk-active > a,
        .ap-toolbar .uk-nav-primary > li.uk-active > a {
            color: #ffffff;
        }
        .uk-light .uk-nav-primary .uk-nav-header,
        .uk-section-primary:not(.uk-preserve-color) .uk-nav-primary .uk-nav-header,
        .uk-section-secondary:not(.uk-preserve-color) .uk-nav-primary .uk-nav-header,
        .uk-tile-primary:not(.uk-preserve-color) .uk-nav-primary .uk-nav-header,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-nav-primary .uk-nav-header,
        .uk-card-primary.uk-card-body .uk-nav-primary .uk-nav-header,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-nav-primary .uk-nav-header,
        .uk-card-secondary.uk-card-body .uk-nav-primary .uk-nav-header,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-nav-primary .uk-nav-header,
        .uk-overlay-primary .uk-nav-primary .uk-nav-header,
        .ap-toolbar .uk-nav-primary .uk-nav-header {
            color: #ffffff;
        }
        .uk-light .uk-navbar-nav > li > a::before,
        .uk-section-primary:not(.uk-preserve-color) .uk-navbar-nav > li > a::before,
        .uk-section-secondary:not(.uk-preserve-color) .uk-navbar-nav > li > a::before,
        .uk-tile-primary:not(.uk-preserve-color) .uk-navbar-nav > li > a::before,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-navbar-nav > li > a::before,
        .uk-card-primary.uk-card-body .uk-navbar-nav > li > a::before,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-navbar-nav > li > a::before,
        .uk-card-secondary.uk-card-body .uk-navbar-nav > li > a::before,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-navbar-nav > li > a::before,
        .uk-overlay-primary .uk-navbar-nav > li > a::before,
        .ap-toolbar .uk-navbar-nav > li > a::before {
            background-color: transparent;
        }
        .uk-light .uk-navbar-nav > li:hover > a,
        .uk-light .uk-navbar-nav > li > a:focus,
        .uk-light .uk-navbar-nav > li > a.uk-open,
        .uk-section-primary:not(.uk-preserve-color) .uk-navbar-nav > li:hover > a,
        .uk-section-primary:not(.uk-preserve-color) .uk-navbar-nav > li > a:focus,
        .uk-section-primary:not(.uk-preserve-color) .uk-navbar-nav > li > a.uk-open,
        .uk-section-secondary:not(.uk-preserve-color) .uk-navbar-nav > li:hover > a,
        .uk-section-secondary:not(.uk-preserve-color) .uk-navbar-nav > li > a:focus,
        .uk-section-secondary:not(.uk-preserve-color) .uk-navbar-nav > li > a.uk-open,
        .uk-tile-primary:not(.uk-preserve-color) .uk-navbar-nav > li:hover > a,
        .uk-tile-primary:not(.uk-preserve-color) .uk-navbar-nav > li > a:focus,
        .uk-tile-primary:not(.uk-preserve-color) .uk-navbar-nav > li > a.uk-open,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-navbar-nav > li:hover > a,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-navbar-nav > li > a:focus,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-navbar-nav > li > a.uk-open,
        .uk-card-primary.uk-card-body .uk-navbar-nav > li:hover > a,
        .uk-card-primary.uk-card-body .uk-navbar-nav > li > a:focus,
        .uk-card-primary.uk-card-body .uk-navbar-nav > li > a.uk-open,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-navbar-nav > li:hover > a,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-navbar-nav > li > a:focus,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-navbar-nav > li > a.uk-open,
        .uk-card-secondary.uk-card-body .uk-navbar-nav > li:hover > a,
        .uk-card-secondary.uk-card-body .uk-navbar-nav > li > a:focus,
        .uk-card-secondary.uk-card-body .uk-navbar-nav > li > a.uk-open,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-navbar-nav > li:hover > a,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-navbar-nav > li > a:focus,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-navbar-nav > li > a.uk-open,
        .uk-overlay-primary .uk-navbar-nav > li:hover > a,
        .uk-overlay-primary .uk-navbar-nav > li > a:focus,
        .uk-overlay-primary .uk-navbar-nav > li > a.uk-open,
        .ap-toolbar .uk-navbar-nav > li:hover > a,
        .ap-toolbar .uk-navbar-nav > li > a:focus,
        .ap-toolbar .uk-navbar-nav > li > a.uk-open {
            color: #ffffff;
        }
        .uk-light .uk-navbar-nav > li.uk-active > a,
        .uk-section-primary:not(.uk-preserve-color) .uk-navbar-nav > li.uk-active > a,
        .uk-section-secondary:not(.uk-preserve-color) .uk-navbar-nav > li.uk-active > a,
        .uk-tile-primary:not(.uk-preserve-color) .uk-navbar-nav > li.uk-active > a,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-navbar-nav > li.uk-active > a,
        .uk-card-primary.uk-card-body .uk-navbar-nav > li.uk-active > a,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-navbar-nav > li.uk-active > a,
        .uk-card-secondary.uk-card-body .uk-navbar-nav > li.uk-active > a,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-navbar-nav > li.uk-active > a,
        .uk-overlay-primary .uk-navbar-nav > li.uk-active > a,
        .ap-toolbar .uk-navbar-nav > li.uk-active > a {
            color: #ffffff;
        }
        .uk-light .uk-navbar-nav > li.uk-active > a::before,
        .uk-section-primary:not(.uk-preserve-color) .uk-navbar-nav > li.uk-active > a::before,
        .uk-section-secondary:not(.uk-preserve-color) .uk-navbar-nav > li.uk-active > a::before,
        .uk-tile-primary:not(.uk-preserve-color) .uk-navbar-nav > li.uk-active > a::before,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-navbar-nav > li.uk-active > a::before,
        .uk-card-primary.uk-card-body .uk-navbar-nav > li.uk-active > a::before,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-navbar-nav > li.uk-active > a::before,
        .uk-card-secondary.uk-card-body .uk-navbar-nav > li.uk-active > a::before,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-navbar-nav > li.uk-active > a::before,
        .uk-overlay-primary .uk-navbar-nav > li.uk-active > a::before,
        .ap-toolbar .uk-navbar-nav > li.uk-active > a::before {
            background-color: #1e87f0;
        }
        .uk-light .uk-navbar-toggle,
        .uk-section-primary:not(.uk-preserve-color) .uk-navbar-toggle,
        .uk-section-secondary:not(.uk-preserve-color) .uk-navbar-toggle,
        .uk-tile-primary:not(.uk-preserve-color) .uk-navbar-toggle,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-navbar-toggle,
        .uk-card-primary.uk-card-body .uk-navbar-toggle,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-navbar-toggle,
        .uk-card-secondary.uk-card-body .uk-navbar-toggle,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-navbar-toggle,
        .uk-overlay-primary .uk-navbar-toggle,
        .ap-toolbar .uk-navbar-toggle {
            color: #ffffff;
        }
        .uk-light .uk-subnav > .uk-active > a,
        .uk-section-primary:not(.uk-preserve-color) .uk-subnav > .uk-active > a,
        .uk-section-secondary:not(.uk-preserve-color) .uk-subnav > .uk-active > a,
        .uk-tile-primary:not(.uk-preserve-color) .uk-subnav > .uk-active > a,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-subnav > .uk-active > a,
        .uk-card-primary.uk-card-body .uk-subnav > .uk-active > a,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-subnav > .uk-active > a,
        .uk-card-secondary.uk-card-body .uk-subnav > .uk-active > a,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-subnav > .uk-active > a,
        .uk-overlay-primary .uk-subnav > .uk-active > a,
        .ap-toolbar .uk-subnav > .uk-active > a {
            color: #ffffff;
        }
        .uk-light .uk-subnav-pill > .uk-active > a,
        .uk-section-primary:not(.uk-preserve-color) .uk-subnav-pill > .uk-active > a,
        .uk-section-secondary:not(.uk-preserve-color) .uk-subnav-pill > .uk-active > a,
        .uk-tile-primary:not(.uk-preserve-color) .uk-subnav-pill > .uk-active > a,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-subnav-pill > .uk-active > a,
        .uk-card-primary.uk-card-body .uk-subnav-pill > .uk-active > a,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-subnav-pill > .uk-active > a,
        .uk-card-secondary.uk-card-body .uk-subnav-pill > .uk-active > a,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-subnav-pill > .uk-active > a,
        .uk-overlay-primary .uk-subnav-pill > .uk-active > a,
        .ap-toolbar .uk-subnav-pill > .uk-active > a {
            background-color: #ffffff;
            color: #333333;
            box-shadow: none;
        }
        .uk-light .uk-tab > .uk-active > a,
        .uk-section-primary:not(.uk-preserve-color) .uk-tab > .uk-active > a,
        .uk-section-secondary:not(.uk-preserve-color) .uk-tab > .uk-active > a,
        .uk-tile-primary:not(.uk-preserve-color) .uk-tab > .uk-active > a,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-tab > .uk-active > a,
        .uk-card-primary.uk-card-body .uk-tab > .uk-active > a,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-tab > .uk-active > a,
        .uk-card-secondary.uk-card-body .uk-tab > .uk-active > a,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-tab > .uk-active > a,
        .uk-overlay-primary .uk-tab > .uk-active > a,
        .ap-toolbar .uk-tab > .uk-active > a {
            color: #ffffff;
            border-color: #ffffff;
        }
        .uk-light .uk-dotnav > .uk-active > *,
        .uk-section-primary:not(.uk-preserve-color) .uk-dotnav > .uk-active > *,
        .uk-section-secondary:not(.uk-preserve-color) .uk-dotnav > .uk-active > *,
        .uk-tile-primary:not(.uk-preserve-color) .uk-dotnav > .uk-active > *,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-dotnav > .uk-active > *,
        .uk-card-primary.uk-card-body .uk-dotnav > .uk-active > *,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-dotnav > .uk-active > *,
        .uk-card-secondary.uk-card-body .uk-dotnav > .uk-active > *,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-dotnav > .uk-active > *,
        .uk-overlay-primary .uk-dotnav > .uk-active > *,
        .ap-toolbar .uk-dotnav > .uk-active > * {
            background-color: #ffffff;
            border-color: transparent;
        }
        .uk-light .uk-countdown-number,
        .uk-light .uk-countdown-separator,
        .uk-section-primary:not(.uk-preserve-color) .uk-countdown-number,
        .uk-section-primary:not(.uk-preserve-color) .uk-countdown-separator,
        .uk-section-secondary:not(.uk-preserve-color) .uk-countdown-number,
        .uk-section-secondary:not(.uk-preserve-color) .uk-countdown-separator,
        .uk-tile-primary:not(.uk-preserve-color) .uk-countdown-number,
        .uk-tile-primary:not(.uk-preserve-color) .uk-countdown-separator,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-countdown-number,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-countdown-separator,
        .uk-card-primary.uk-card-body .uk-countdown-number,
        .uk-card-primary.uk-card-body .uk-countdown-separator,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-countdown-number,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-countdown-separator,
        .uk-card-secondary.uk-card-body .uk-countdown-number,
        .uk-card-secondary.uk-card-body .uk-countdown-separator,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-countdown-number,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-countdown-separator,
        .uk-overlay-primary .uk-countdown-number,
        .uk-overlay-primary .uk-countdown-separator,
        .ap-toolbar .uk-countdown-number,
        .ap-toolbar .uk-countdown-separator {
            color: #ffffff;
        }
        .uk-light .uk-countdown-label,
        .uk-section-primary:not(.uk-preserve-color) .uk-countdown-label,
        .uk-section-secondary:not(.uk-preserve-color) .uk-countdown-label,
        .uk-tile-primary:not(.uk-preserve-color) .uk-countdown-label,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-countdown-label,
        .uk-card-primary.uk-card-body .uk-countdown-label,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-countdown-label,
        .uk-card-secondary.uk-card-body .uk-countdown-label,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-countdown-label,
        .uk-overlay-primary .uk-countdown-label,
        .ap-toolbar .uk-countdown-label {
            color: #ffffff;
        }
        .uk-light .uk-text-lead,
        .uk-section-primary:not(.uk-preserve-color) .uk-text-lead,
        .uk-section-secondary:not(.uk-preserve-color) .uk-text-lead,
        .uk-tile-primary:not(.uk-preserve-color) .uk-text-lead,
        .uk-tile-secondary:not(.uk-preserve-color) .uk-text-lead,
        .uk-card-primary.uk-card-body .uk-text-lead,
        .uk-card-primary > :not([class*='uk-card-media']) .uk-text-lead,
        .uk-card-secondary.uk-card-body .uk-text-lead,
        .uk-card-secondary > :not([class*='uk-card-media']) .uk-text-lead,
        .uk-overlay-primary .uk-text-lead,
        .ap-toolbar .uk-text-lead {
            color: #ffffff;
        }
        .ap-header .uk-navbar-nav .menu-item a {
            position: relative;
        }
        .ap-header .uk-navbar-nav .menu-item a:hover,
        .ap-header .uk-navbar-nav .uk-active a {
            font-weight: bolder;
        }
        .ap-header .uk-navbar-nav .menu-item a:hover::before,
        .ap-header .uk-navbar-nav .uk-active a::before {
            right: 15px;
            display: block;
        }
        .ap-header-transparent .uk-navbar-nav .menu-item a {
            position: relative;
            color: #fff;
        }
        .ap-header-transparent .uk-navbar-nav .menu-item a:hover::before,
        .ap-header-transparent .uk-navbar-nav .uk-active a::before {
            background-color: #fff;
        }
        .uk-navbar-transparent {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 80px;
            z-index: 100;
            transition: background-color 0.3s ease-in;
        }
        .uk-navbar-transparent.uk-sticky-below .uk-navbar-nav > li.uk-active > a,
        .uk-navbar-transparent.uk-sticky-below .uk-navbar-nav > li > a:hover {
            color: #292929;
        }
        .uk-navbar-transparent.uk-sticky-below .uk-navbar-nav > li > a {
            color: #4f5260;
        }
        .uk-section-secondary .uk-navbar-transparent.uk-sticky-below,
        .uk-section-secondary .uk-navbar-container:not(.uk-navbar-transparent) {
            background: rgba(34, 34, 34, 0.94);
        }
        .uk-section-secondary .uk-navbar-transparent.uk-sticky-below .uk-navbar-nav > li > a,
        .uk-section-secondary .uk-navbar-transparent.uk-sticky-below .uk-navbar-nav > li > a:hover {
            color: #fff;
        }
        .uk-section-primary .uk-navbar-container.uk-navbar-sticky {
            background-color: #1e87f0;
        }
        .uk-section-muted .uk-navbar-container.uk-navbar-sticky {
            background-color: #f8f8f8;
        }
        .uk-section-primary .uk-navbar-container.uk-navbar-sticky {
            background-color: #1e87f0;
        }
        .uk-navbar-container:not(.uk-navbar-transparent) {
            background: transparent;
        }
        .uk-navbar-sticky {
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.07);
        }
        .uk-navbar-nav > li > a::before {
            content: '';
            display: none;
            position: absolute;
            bottom: 24px;
            height: 1px;
            background-color: #00a0de;
            -webkit-transition: 0.4s ease-in-out;
            transition: 0.4s ease-in-out;
            -webkit-transition-property: background-color, border-color, box-shadow, height, right;
            transition-property: background-color, border-color, box-shadow, height, right;
            left: 15px;
            right: calc(77%);
        }
        .preview .uk-section-secondary .uk-button-primary:hover {
            background-color: #0e6dcd;
        }
    </style>

    <!-- 组件样式 -->
    <style id="page-style">
        #a0c36a8f19abb33 .uk-button {
            border-radius: 100px;
            font-weight: bold;
            line-height: 1;
            padding: 17px 39px;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.14);
            text-transform: uppercase;
            box-shadow: 0 4px 9px 0 rgba(0, 0, 0, 0.2);
            color: #f8f9fa;
            background-color: transparent;
            background-image: none;
            border-color: #f8f9fa;
        }
        @keyframes AnimationName {
            0% {
                background-position: 0% 31%;
            }
            50% {
                background-position: 100% 70%;
            }
            100% {
                background-position: 0% 31%;
            }
        }
        #a0c36a8f19abb33 .uk-button:hover {
            color: #666666 !important;
            background: #fff;
        }
        #a0c36a8f19abb33 .uk-button-primary {
            background: #f2f2f2;
            background: linear-gradient(135deg, #f2f2f2 0%, #dddddd 50%, #ffffff 51%, #ffffff 71%, #f6f8fb 100%);
            color: #666666 !important;
            background-size: 400% 400%;
            animation: AnimationName 3s ease infinite;
            border: medium none;
        }
        #a347aa2c5fae967 .uk-h4 {
            color: #888;
            font-weight: 300;
        }
        #a347aa2c5fae967 .uk-h4 b {
            color: #333;
            font-weight: bold;
        }
        #aa882a0587ae15b .slider-picture {
            min-height: 200px;
        }

        #aa882a0587ae15b .slider-item {
            transition: transform 0.2s ease-in-out;
        }
        #aa882a0587ae15b .uk-active {
            transform: scale(1.1);
            -webkit-transform: scale(1.1);
        }
        #a2165adcb7a493e .price-detail {
            list-style: none;
            margin-bottom: 20px;
        }
        #a2165adcb7a493e .uk-card {
            overflow: hidden;
        }
        #a2165adcb7a493e .price-detail li {
            list-style: none;
            margin-bottom: 10px;
        }
        #a2165adcb7a493e .price-item-highlight {
            transform: scale(1.075);
            -webkit-transform: scale(1.075);
        }
        #a2165adcb7a493e .card-bottom-link {
            display: block;
            text-align: center;
            color: #fff;
            background: #1e87f0;
            line-height: 50px;
        }
        #a5c60af020a37e1 input,
        #a5c60af020a37e1 button {
            border-radius: 20px;
        }
        #a5c60af020a37e1 .fa {
            font-size: 32px;
            margin-bottom: 10px;
        }

    </style>
    <script src="/frontend/js/lib_3d06825.js"></script>
</head>

<body>


<div class="preview" id="preview">
    <div id="a1b0ea9ce3a02c0" section-id="a1b0ea9ce3a02c0" data-id="a1b0ea9ce3a02c0" class="section uk-section uk-padding-remove-vertical uk-dark navigator" style=""><div class="ap-content-container">

            <style>
                #a1b0ea9ce3a02c0 .uk-navbar-container .uk-navbar-nav > li > a {color: #ffffff;}
                #a1b0ea9ce3a02c0 .uk-navbar-nav > li.uk-active > a, #a1b0ea9ce3a02c0 .uk-navbar-nav > li.uk-active > a::before {  color: #ffffff;}
                #a1b0ea9ce3a02c0 .ap-header-mobile #ap-nav-mobile-container-item-wrapper>li>a,#a1b0ea9ce3a02c0 .ap-header-mobile #ap-header-common-ope-wrapper>li>a{ color: #A6A6A6; }
            </style>

            <div class="ap-header uk-visible@m  uk-navbar-transparent " uk-header="">
                <div class="uk-navbar-container  uk-navbar-transparent ">
                    <div class="uk-container uk-container-expand">
                        <nav class="uk-navbar" uk-navbar="{"align":"left","boundary":"!.uk-navbar-container"}">
                        <div class="uk-navbar-left">
                            <a href="/" class="uk-navbar-item uk-logo">
                                <img src="/frontend/images/7eb322d320246a7362362c2988ec350085ce967ec5f9d895226fdba5120832af.png" data-item="logo" style="width: 158px" class="uk-responsive-height" alt="LOGO">
                            </a>
                        </div>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav" data-item="pages">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="/">
                                        首页
                                    </a>
                                </li>

                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="/sites">
                                        我的站点
                                    </a>

                                </li>

                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="/price">
                                        套餐价格
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="/template">
                                        模板市场
                                    </a>
                                </li>

                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="https://cloud.baidu.com/doc/AIPAGE/index.html">
                                        帮助中心
                                    </a>
                                </li>

                            </ul>
                        </div>

                        </nav>
                    </div>
                </div>
                <div class="uk-navbar-dropbar uk-navbar-dropbar-slide"></div>
            </div></div></div><div id="a0c36a8f19abb33" section-id="a0c36a8f19abb33" data-id="a0c36a8f19abb33" class="section uk-section uk-section-large uk-section-primary uk-dark header" style=";height:842px;overflow:hidden;"><div class="ap-content-container"><div class="uk-container uk-container-small uk-light">
                <div style="z-index: 100;">


                    <h2 data-item="title" class="uk-text-center uk-h1 uk-text-bold" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: false; delay: 0" style="animation-duration: 0.5s;">
                        极速云游戏盾防护系统
                    </h2>

                    <div data-item="abstract" class="uk-margin-auto uk-width-xlarge uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false; delay: 0" style="animation-duration: 0.5s;">
                        针对游戏的玩法、受攻击场景，专门研发了游戏防御专用调度清洗引擎，最大程度保障游戏的高可用性、低延时体验，免SDK快速接入，5分钟即可完成接入。可与游戏服务器通过加密渠道传输玩家IP，保持接入防御前后的功能体验一致性。

                    </div>


                    <div class="uk-margin-medium uk-text-center">

                        <a data-item="buttons[0]" class="el-content uk-button  uk-button-primary  uk-margin-small-right" href="/sites">
                            马上使用
                        </a>

                        <a data-item="buttons[1]" class="el-content uk-button  uk-button-default  uk-margin-small-right" href="#a5c60af020a37e1">
                            联系我们
                        </a>

                    </div>

                </div>



                <div class="uk-text-center uk-cover-container" style="margin-bottom: -200px;z-index: 10;" uk-scrollspy="cls: uk-animation-slide-bottom;">




                    <img data-item="feature.image" src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/677f72030bf24a588e567967d54b43853721c06d80570f1afab309b4825403dc.png" class="el-image image-shadow" alt="">
                </div>


                <div id="a0c36a8f19abb33-particles" class="uk-position-cover" style="z-index: 0; pointer-events: none;">

                </div>

            </div>


            <script>
                $(function() {
                    console.log(aipage);
                    aipage && aipage.require.loadJs('/frontend/js/particles.min.js', function () {
                        setTimeout(function() {
                            // ===========Particles============
                            particlesJS("a0c36a8f19abb33-particles", {
                                "particles": {
                                    "number": {
                                        "value": 80,
                                        "density": {
                                            "enable": true,
                                            "value_area": 800
                                        }
                                    },
                                    "color": {
                                        "value": "#ffffff"
                                    },
                                    "shape": {
                                        "type": "triangle",
                                        "stroke": {
                                            "width": 0,
                                            "color": "#000000"
                                        },
                                        "polygon": {
                                            "nb_sides": 5
                                        },
                                        "image": {
                                            "src": "img/github.svg",
                                            "width": 100,
                                            "height": 100
                                        }
                                    },
                                    "opacity": {
                                        "value": 0.5,
                                        "random": false,
                                        "anim": {
                                            "enable": false,
                                            "speed": 1,
                                            "opacity_min": 0.1,
                                            "sync": false
                                        }
                                    },
                                    "size": {
                                        "value": 4.16725702807898,
                                        "random": false,
                                        "anim": {
                                            "enable": false,
                                            "speed": 20,
                                            "size_min": 0.1,
                                            "sync": false
                                        }
                                    },
                                    "line_linked": {
                                        "enable": true,
                                        "distance": 150,
                                        "color": "#ffffff",
                                        "opacity": 0.4,
                                        "width": 1
                                    },
                                    "move": {
                                        "enable": true,
                                        "speed": 2,
                                        "direction": "none",
                                        "random": false,
                                        "straight": false,
                                        "out_mode": "out",
                                        "bounce": false,
                                        "attract": {
                                            "enable": false,
                                            "rotateX": 166.6902811231592,
                                            "rotateY": 2667.044497970547
                                        }
                                    }
                                },
                                "interactivity": {
                                    "detect_on": "canvas",
                                    "events": {
                                        "onhover": {
                                            "enable": true,
                                            "mode": "repulse"
                                        },
                                        "onclick": {
                                            "enable": true,
                                            "mode": "push"
                                        },
                                        "resize": true
                                    },
                                    "modes": {
                                        "grab": {
                                            "distance": 400,
                                            "line_linked": {
                                                "opacity": 1
                                            }
                                        },
                                        "bubble": {
                                            "distance": 400,
                                            "size": 40,
                                            "duration": 2,
                                            "opacity": 8,
                                            "speed": 2
                                        },
                                        "repulse": {
                                            "distance": 200,
                                            "duration": 0.4
                                        },
                                        "push": {
                                            "particles_nb": 4
                                        },
                                        "remove": {
                                            "particles_nb": 2
                                        }
                                    }
                                },
                                "retina_detect": true
                            });
                        }, 600);
                    })
                })

            </script></div></div><div id="aeef4adb88a7361" section-id="aeef4adb88a7361" data-id="aeef4adb88a7361" class="section uk-section uk-section-xsmall uk-section-default uk-dark featureIconList" style=""><div class="ap-content-container"><div class="uk-container uk-container-small">




                <div class="ap-section-head uk-flex uk-flex-center uk-scrollspy-inview uk-animation-slide-bottom-small  uk-margin">
                    <div class="uk-text-center uk-width-xxlarge">





                        <h3 class="uk-h2 uk-margin-small" data-item="title" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true; delay: 0" style="animation-duration: 0.5s;">
                            特色介绍
                        </h3>





                    </div>
                </div>





                <div class="uk-margin-large-top  uk-text-center  uk-grid-match uk-child-width-1-2 uk-child-width-1-3@s uk-grid" uk-grid="" data-item="items">

                    <div class="" data-item="items[0]" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: false; delay: 0" style="animation-duration: 0.5s;">
                        <div class="el-item uk-card">

                            <i class="ap-icon uk-h1" data-icon="" data-item="items[0].icon"><img src="//aipage-resource.bj.bcebos.com/images/thumbnails/0d124c7e7c5f7b19f2082fcba3fbe47e5e257442ae16528ba24ae8a2e51ec592.png" class="" alt=""></i>


                            <h3 class="uk-margin uk-h4" data-item="items[0].title">自动建站</h3>
                            <div class="el-content uk-margin max-line-4 uk-visible@m" data-item="items[0].abstract">根据您的行业及喜好一键创建风格多样的网站，包含网站常用博客、评论、表单等模块</div>


                        </div>
                    </div>

                    <div class="" data-item="items[1]" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: false; delay: 200" style="animation-duration: 0.5s;">
                        <div class="el-item uk-card">

                            <i class="ap-icon uk-h1" data-icon="" data-item="items[1].icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" enable-background="new 0 0 1024 1024" space="preserve"><path "="" d="M1024 676.38 q0 49.22 -27.22 82.72 q-27.23 33.51 -76.44 33.51 q-25.13 0 -47.11 -11.52 q-23.04 -10.47 -36.65 -23.04 q-13.61 -12.56 -34.55 -24.08 q-20.94 -10.47 -43.98 -10.47 q-68.05 0 -68.05 76.43 q0 24.09 10.47 71.2 q9.42 47.12 9.42 70.15 l0 3.15 q-13.61 0 -20.94 1.04 q-20.94 2.1 -59.68 6.28 q-38.74 6.29 -71.2 9.43 q-31.41 3.14 -59.68 3.14 q-37.69 0 -63.87 -16.75 q-26.18 -16.76 -26.18 -51.31 q0 -23.03 11.52 -43.97 q10.47 -20.94 23.04 -34.56 q12.56 -13.61 24.08 -36.64 q10.47 -21.99 10.47 -47.12 q0 -49.21 -33.51 -76.43 q-33.5 -27.23 -83.76 -27.23 q-51.3 0 -87.95 28.27 q-35.6 28.27 -35.6 78.53 q0 26.18 9.42 51.31 q8.38 24.08 20.94 38.74 q10.47 15.7 19.9 32.46 q9.42 17.8 9.42 31.41 q0 28.27 -28.27 55.49 q-23.03 20.94 -72.24 20.94 q-58.64 0 -150.78 -14.66 q-5.23 -1.05 -16.75 -2.09 q-11.52 -1.05 -16.75 -3.14 l-8.38 -1.05 q-1.05 0 -2.09 0 q-1.05 0 -1.05 -1.05 l0 -630.31 q1.05 1.04 11.52 2.09 q8.37 2.1 20.94 3.14 q10.47 2.1 12.56 2.1 q92.14 14.66 150.78 14.66 q49.21 0 72.24 -20.95 q28.27 -27.22 28.27 -55.49 q0 -13.61 -9.42 -31.41 q-9.43 -16.75 -19.9 -32.46 q-12.56 -14.66 -20.94 -38.74 q-9.42 -25.13 -9.42 -51.3 q0 -50.26 35.6 -78.53 q36.65 -28.27 89 -28.27 q49.21 0 82.71 27.22 q33.51 27.23 33.51 76.44 q0 25.13 -10.47 47.11 q-11.52 23.04 -24.08 36.65 q-12.57 13.61 -23.04 34.55 q-11.52 20.94 -11.52 43.98 q0 35.6 26.18 51.3 q26.18 16.75 63.87 16.75 q38.74 0 109.94 -9.42 q72.24 -9.42 100.51 -10.47 l0 1.05 q0 1.04 -2.09 10.47 q-1.05 10.47 -3.14 20.94 q-1.05 11.52 -2.1 13.61 q-14.66 92.14 -14.66 150.77 q0 49.21 21.99 72.25 q26.18 28.27 54.45 28.27 q13.61 0 31.41 -9.43 q16.75 -9.42 32.46 -20.94 q14.66 -11.51 39.78 -19.89 q24.09 -9.42 50.26 -9.42 q51.31 0 79.58 35.6 q27.22 36.64 27.22 88.99 l0 0 Z"/></svg></i>


                            <h3 class="uk-margin uk-h4" data-item="items[1].title">可视化编辑</h3>
                            <div class="el-content uk-margin max-line-4 uk-visible@m" data-item="items[1].abstract">零编程基础、无需设计经验、一键切换风格，借助可视化拖拽编辑器，您可以随心所欲的创建各种类型的美观网站。</div>


                        </div>
                    </div>

                    <div class="" data-item="items[2]" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: false; delay: 400" style="animation-duration: 0.5s;">
                        <div class="el-item uk-card">

                            <i class="ap-icon uk-h1" data-icon="" data-item="items[2].icon"><img src="//aipage-resource.bj.bcebos.com/images/thumbnails/85289c3039be9abf4d2c857537811e0915b8f50336fd70b90fe25fac6d1aae72.png" class="" alt=""></i>


                            <h3 class="uk-margin uk-h4" data-item="items[2].title">海量模板</h3>
                            <div class="el-content uk-margin max-line-4 uk-visible@m" data-item="items[2].abstract">AIPage 提供多个行业丰富的模板和组件供您选择，自动创建更是让您拥有数不尽的创意和惊喜！</div>


                        </div>
                    </div>

                    <div class="" data-item="items[3]" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: false; delay: 1000" style="animation-duration: 0.5s;">
                        <div class="el-item uk-card">

                            <i class="ap-icon uk-h1" data-icon="" data-item="items[3].icon"><img src="//aipage-resource.bj.bcebos.com/images/thumbnails/764672c455033f72f1b4bca9bbc594346ed7adf92654abef63c204e6695297a8.png" class="" alt=""></i>


                            <h3 class="uk-margin uk-h4" data-item="items[3].title">高性能</h3>
                            <div class="el-content uk-margin max-line-4 uk-visible@m" data-item="items[3].abstract">站点默认静态化，支持高并发访问，免疫绝大部分攻击，为您的网站保驾护航</div>


                        </div>
                    </div>

                    <div class="" data-item="items[4]" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: false; delay: 800" style="animation-duration: 0.5s;">
                        <div class="el-item uk-card">

                            <i class="ap-icon uk-h1" data-icon="" data-item="items[4].icon"><img src="//aipage-resource.bj.bcebos.com/images/thumbnails/9fc15d1f8db0c1be2e04a784731697b6e0b671e334eeb6860fa2b28a8c4125c2.png" class="" alt=""></i>


                            <h3 class="uk-margin uk-h4" data-item="items[4].title">支持微信/百度小程序</h3>
                            <div class="el-content uk-margin max-line-4 uk-visible@m" data-item="items[4].abstract">首家同时支持微信和百度小程序。授权之后一次编辑就能同时发布移动站点和小程序</div>


                        </div>
                    </div>

                    <div class="" data-item="items[5]" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: false; delay: 600" style="animation-duration: 0.5s;">
                        <div class="el-item uk-card">

                            <i class="ap-icon uk-h1" data-icon="" data-item="items[5].icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <g>
                                        <g>
                                            <g>
                                                <path fill="#36B7C5" d="M18.07,7.226V0H4.135c-0.57,0-1.032,0.462-1.032,1.032v29.936C3.103,31.537,3.565,32,4.135,32h21.161
				c0.57,0,1.033-0.463,1.033-1.032V8.258h-7.227C18.533,8.258,18.07,7.795,18.07,7.226z"/>
                                                <path fill="#029999" d="M18.07,7.226c0,0.57,0.463,1.033,1.032,1.033h7.227L18.07,0V7.226z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#CDB14D" d="M21.397,22.048c-0.217,0.217-0.229,0.557-0.028,0.759l5.711,5.433c0.201,0.201,0.54,0.188,0.758-0.028
				l0.438-0.44l-6.366-6.235L21.397,22.048z"/>
                                                <path fill="#D6B755" d="M28.754,26.565l-5.711-5.434c-0.201-0.201-0.541-0.188-0.758,0.028l-0.375,0.375l6.366,6.236l0.449-0.448
				C28.942,27.106,28.956,26.767,28.754,26.565z"/>
                                            </g>
                                            <g>
                                                <path fill="#CFD1AA" d="M25.787,18.84c0-3.557-2.874-6.44-6.42-6.44c-1.771,0-3.376,0.721-4.538,1.887l9.078,9.109
				C25.068,22.229,25.787,20.619,25.787,18.84z"/>
                                                <path fill="#C4C5A1" d="M14.829,14.287c-1.163,1.165-1.881,2.775-1.881,4.553c0,3.558,2.873,6.441,6.419,6.441
				c1.772,0,3.378-0.721,4.54-1.886L14.829,14.287z"/>
                                            </g>
                                            <g>
                                                <path fill="#F9F1D5" d="M23.736,18.714c0-2.347-1.971-4.249-4.401-4.249c-1.215,0-2.315,0.476-3.112,1.245l6.223,6.009
				C23.243,20.95,23.736,19.888,23.736,18.714z"/>
                                                <path fill="#F4EBC2" d="M16.273,15.631c-0.791,0.804-1.28,1.913-1.28,3.14c0,2.45,1.958,4.439,4.375,4.439
				c1.207,0,2.302-0.498,3.093-1.302L16.273,15.631z"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg></i>


                            <h3 class="uk-margin uk-h4" data-item="items[5].title">数据管理</h3>
                            <div class="el-content uk-margin max-line-4 uk-visible@m" data-item="items[5].abstract">完善的后台管理系统，方便您运营网站。管理用户提交与评论，控制后台各项权限</div>


                        </div>
                    </div>

                </div>

                <div class="uk-text-center uk-margin-large-top">



                </div>
            </div></div></div><div id="a347aa2c5fae967" section-id="a347aa2c5fae967" data-id="a347aa2c5fae967" class="section uk-section uk-section-xsmall uk-section-default uk-dark featureHeader" style=""><div class="ap-content-container"><div class="uk-container">
                <div class="uk-padding border-1 uk-background-default">
                    <div class="uk-grid-margin uk-grid" uk-grid="">
                        <div class="uk-width-2-3@m">
                            <div class="uk-h4 uk-text-left uk-scrollspy-inview uk-animation-fade" data-item="title">AIPage官网由AIPage打造！如何利用 AIPage 创建一样美观大气的网站？</div>
                        </div>

                        <div class="uk-width-1-3@m">
                            <div class="uk-margin-medium uk-text-center uk-text-right@m uk-scrollspy-inview uk-animation-fade">

                                <a class="el-content uk-button uk-button-primary" href="#" uk-scroll="" data-item="buttons[0]">查看详细</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div></div></div><div id="a213baf6a4a6772" section-id="a213baf6a4a6772" data-id="a213baf6a4a6772" class="section uk-section uk-padding-remove-vertical uk-section-muted uk-dark featureImageText" style=""><div class="ap-content-container">

            <div class="uk-container">
                <div class="uk-grid-large uk-grid uk-flex uk-flex-middle  uk-grid-match" uk-grid="">
                    <div class="uk-width-1-2@m  section-text  uk-flex-first ">
                        <div class="uk-tile">
                            <div class="uk-position-relative uk-panel">





                                <h2 class="uk-width-large uk-margin-auto uk-text-left uk-h1" data-item="title" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true; delay: 0" style="animation-duration: 0.5s;">可视化编辑</h2>



                                <div class="uk-margin uk-width-large uk-margin-auto" data-item="abstract" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true; delay: 200" style="animation-duration: 0.5s;">简单易用的拖拽可视化编辑。具备丰富的页面版块模块、强大的元素位置编辑和动画设置，让您快速上手制作美观大气的网站</div>




                                <div class="uk-margin-large uk-width-large uk-margin-auto">
                                    <div class="uk-flex-middle" data-item="buttons">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="uk-width-1-2@m  ">
                        <div class="uk-cover-container" data-item="feature.image" uk-scrollspy="cls: uk-animation-slide-right-medium; repeat: true; delay: 0" style="animation-duration: 1s;">




                            <img src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/606715fabb91aa452651e4bf745e60f9f725b8bc7086fbd66abbf1405e396170.png" alt="" uk-cover="">
                            <img src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/606715fabb91aa452651e4bf745e60f9f725b8bc7086fbd66abbf1405e396170.png" alt="" class="uk-invisible">
                        </div>
                    </div>

                </div>
            </div></div></div><div id="a0651a54b0acbf8" section-id="a0651a54b0acbf8" data-id="a0651a54b0acbf8" class="section uk-section uk-section-xsmall uk-section-default uk-dark featureImageText" style=""><div class="ap-content-container">

            <div class="uk-container">
                <div class="uk-grid-large uk-grid uk-flex uk-flex-middle  uk-grid-match" uk-grid="">
                    <div class="uk-width-1-2@m  section-text ">
                        <div class="uk-tile">
                            <div class="uk-position-relative uk-panel">





                                <h2 class="uk-width-large uk-margin-auto uk-text-left uk-h1" data-item="title" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true; delay: 0" style="animation-duration: 0.5s;">一键发布微信 &amp; 百度智能小程序</h2>



                                <div class="uk-margin uk-width-large uk-margin-auto" data-item="abstract" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true; delay: 200" style="animation-duration: 0.5s;">可视化小程序编辑器，同时支持微信和百度</div>




                                <div class="uk-margin-large uk-width-large uk-margin-auto">
                                    <div class="uk-flex-middle" data-item="buttons">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="uk-width-1-2@m   uk-flex-first ">
                        <div class="uk-cover-container" data-item="feature.image" uk-scrollspy="cls: uk-animation-slide-left-medium; repeat: true; delay: 0" style="animation-duration: 1s;">




                            <img src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/f18ccaa8ce63df0a2f19c794a9c0733d683efb63d0d5ced23fff08cac4409c6a.png" alt="" uk-cover="">
                            <img src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/f18ccaa8ce63df0a2f19c794a9c0733d683efb63d0d5ced23fff08cac4409c6a.png" alt="" class="uk-invisible">
                        </div>
                    </div>

                </div>
            </div></div></div><div id="a9eb9a83eba328b" section-id="a9eb9a83eba328b" data-id="a9eb9a83eba328b" class="section uk-section uk-section-xsmall uk-dark featureImageText" style=""><div class="ap-background-container uk-cover-container" style="background: #f8f8f8">
        </div><div class="ap-content-container">

            <div class="uk-container">
                <div class="uk-grid-large uk-grid uk-flex uk-flex-middle  uk-grid-match" uk-grid="">
                    <div class="uk-width-1-2@m  section-text ">
                        <div class="uk-tile">
                            <div class="uk-position-relative uk-panel">





                                <h2 class="uk-width-large uk-margin-auto uk-text-left uk-h1" data-item="title" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true; delay: 0" style="animation-duration: 0.5s;">手机上也能编辑网站</h2>



                                <div class="uk-margin uk-width-large uk-margin-auto" data-item="abstract" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true; delay: 200" style="animation-duration: 0.5s;">专门针对移动端优化的编辑器，让您在手机上也能随时进行网页编辑，后台管理同样支持响应式，手机上编辑不再是难题</div>




                                <div class="uk-margin-large uk-width-large uk-margin-auto">
                                    <div class="uk-flex-middle" data-item="buttons">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="uk-width-1-2@m   uk-flex-first ">
                        <div class="uk-cover-container" data-item="feature.image" uk-scrollspy="cls: uk-animation-slide-left-medium; repeat: true; delay: 0" style="animation-duration: 1s;">




                            <img src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/568ab456fd1283d297153ce6e27c67aa99d75ec94627524a77ffdb4720ae37a2.png" alt="" uk-cover="">
                            <img src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/568ab456fd1283d297153ce6e27c67aa99d75ec94627524a77ffdb4720ae37a2.png" alt="" class="uk-invisible">
                        </div>
                    </div>

                </div>
            </div></div></div><div id="a01efa8182a4971" section-id="a01efa8182a4971" data-id="a01efa8182a4971" class="section uk-section uk-section-xsmall uk-dark featureImageText" style=""><div class="ap-background-container uk-cover-container" style="background: #ffffff">
        </div><div class="ap-content-container">

            <div class="uk-container">
                <div class="uk-grid-large uk-grid uk-flex uk-flex-middle  uk-grid-match" uk-grid="">
                    <div class="uk-width-1-2@m  section-text  uk-flex-first ">
                        <div class="uk-tile">
                            <div class="uk-position-relative uk-panel">





                                <h2 class="uk-width-large uk-margin-auto uk-text-left uk-h1" data-item="title" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true; delay: 0" style="animation-duration: 0.5s;">支持百度熊掌号 &amp; MIP&nbsp;</h2>



                                <div class="uk-margin uk-width-large uk-margin-auto" data-item="abstract" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true; delay: 200" style="animation-duration: 0.5s;"><div>支持关联文章到百度熊掌号，并支持导出网站 MIP版本，让网页在移动端搜索结果页快速打开。</div></div>




                                <div class="uk-margin-large uk-width-large uk-margin-auto">
                                    <div class="uk-flex-middle" data-item="buttons">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="uk-width-1-2@m  ">
                        <div class="uk-cover-container" data-item="feature.image" uk-scrollspy="cls: uk-animation-slide-left-medium; repeat: true; delay: 0" style="animation-duration: 1s;">




                            <img src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/4c77999760388d9a3642f14ade211887fb255c2320cfca20310312bd5eafb693.png" alt="" uk-cover="">
                            <img src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/4c77999760388d9a3642f14ade211887fb255c2320cfca20310312bd5eafb693.png" alt="" class="uk-invisible">
                        </div>
                    </div>

                </div>
            </div></div></div><div id="aa882a0587ae15b" section-id="aa882a0587ae15b" data-id="aa882a0587ae15b" class="section uk-section uk-section-xsmall uk-section-primary uk-dark gallery" style=""><div class="ap-content-container"><div class="uk-text-center">



                <h3 class="uk-h2 uk-scrollspy-inview uk-animation-fade" data-item="title">
                    海量行业模板
                </h3>



            </div>



            <div class="uk-margin-large-top uk-padding-large uk-padding-remove-horizontal uk-position-relative uk-visible-toggle" uk-slider="center:true">
                <ul class="uk-margin uk-slider-items uk-grid uk-grid-large" uk-grid="">

                    <li class="uk-width-1-2@m uk-width-1-1 slider-item">
                        <div class="uk-margin-large">
                            <div class="slider-picture uk-background-contain uk-border-rounded image-shadow" style="background-image: url(/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/67a836b7c5d29d1f30238fa5910844fe3f218bb0d18a2fe366ebc5da490adb33.png)">
                                <img class="uk-hidden" src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/67a836b7c5d29d1f30238fa5910844fe3f218bb0d18a2fe366ebc5da490adb33.png" alt="案例展示">
                            </div>
                        </div>
                    </li>

                    <li class="uk-width-1-2@m uk-width-1-1 slider-item">
                        <div class="uk-margin-large">
                            <div class="slider-picture uk-background-contain uk-border-rounded image-shadow" style="background-image: url(/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/41544ca75e6111b5754e49cfe68f3fb6127d223db1c20bd5b78842e0964163fa.png)">
                                <img class="uk-hidden" src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/41544ca75e6111b5754e49cfe68f3fb6127d223db1c20bd5b78842e0964163fa.png" alt="案例展示">
                            </div>
                        </div>
                    </li>

                    <li class="uk-width-1-2@m uk-width-1-1 slider-item">
                        <div class="uk-margin-large">
                            <div class="slider-picture uk-background-contain uk-border-rounded image-shadow" style="background-image: url(/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/858d1ad7ca98f0324b2269bfb8da70c9edf2244e58a73e9bb63795fe3613f656.png)">
                                <img class="uk-hidden" src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/858d1ad7ca98f0324b2269bfb8da70c9edf2244e58a73e9bb63795fe3613f656.png" alt="案例展示">
                            </div>
                        </div>
                    </li>

                    <li class="uk-width-1-2@m uk-width-1-1 slider-item">
                        <div class="uk-margin-large">
                            <div class="slider-picture uk-background-contain uk-border-rounded image-shadow" style="background-image: url(/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/86849da6de184908b58e63adbcc00985ed1f260abd8400dad8ad023df1fb5e19.png)">
                                <img class="uk-hidden" src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/86849da6de184908b58e63adbcc00985ed1f260abd8400dad8ad023df1fb5e19.png" alt="案例展示">
                            </div>
                        </div>
                    </li>

                    <li class="uk-width-1-2@m uk-width-1-1 slider-item">
                        <div class="uk-margin-large">
                            <div class="slider-picture uk-background-contain uk-border-rounded image-shadow" style="background-image: url(/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/585bea43b7359456c6826626a094cdbcbed613b2e48e9ecfdfbe06e17b92f19a.png)">
                                <img class="uk-hidden" src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/585bea43b7359456c6826626a094cdbcbed613b2e48e9ecfdfbe06e17b92f19a.png" alt="案例展示">
                            </div>
                        </div>
                    </li>

                    <li class="uk-width-1-2@m uk-width-1-1 slider-item">
                        <div class="uk-margin-large">
                            <div class="slider-picture uk-background-contain uk-border-rounded image-shadow" style="background-image: url(/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/97df936600e49b7d3bfbf0f1115a1cabe709f5f28612972e46b4beb03df6e750.png)">
                                <img class="uk-hidden" src="/resources/sites/eb05ffde-ea8c-4342-9457-40af3d8de477/97df936600e49b7d3bfbf0f1115a1cabe709f5f28612972e46b4beb03df6e750.png" alt="案例展示">
                            </div>
                        </div>
                    </li>

                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous="" uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next="" uk-slider-item="next"></a>


            </div>

        </div></div><div id="a2165adcb7a493e" section-id="a2165adcb7a493e" data-id="a2165adcb7a493e" class="section uk-section  uk-section-default uk-dark price" style=""><div class="ap-content-container"><div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack">
                    <div class="uk-width-1-1@m uk-first-column">
                        <h5 class="uk-text-center@m uk-text-center uk-width-xlarge uk-margin-auto uk-h5 " data-item="subTitle">
                            PC、手机、微信&amp;百度小程序四合一套餐</h5>
                        <h2 class="uk-margin-remove-top uk-width-xlarge uk-margin-auto uk-text-center@m uk-text-center uk-h1 " data-item="title">
                            套餐介绍
                        </h2>
                        <div class="uk-margin uk-width-xlarge uk-margin-auto uk-text-center " data-item="abstract">
                            您可以使用平台编辑并发布网站&amp;小程序，套餐包括四合一套餐及单独的小程序套餐版本。套餐购买将在近期推出
                        </div>
                    </div>
                </div>

                <div class="uk-grid uk-grid-large uk-grid-divider" uk-grid="">

                    <div class="uk-width-1-1@m uk-first-column">
                        <div class="data-list uk-margin uk-grid-match uk-child-width-1-1 uk-child-width-1-4@m uk-grid " uk-scrollspy-class="" uk-grid="" data-item="items">

                            <div>
                                <div uk-scrollspy-class="" class=" border-1 br-2  el-item uk-card uk-card-default uk-card-hover" data-item="items[0]">


                                    <div class="uk-card-body">
                                        <div class="el-meta uk-margin" data-item="items[0].subTitle">基础版</div>
                                        <h3 class="el-title uk-margin uk-text-bold  uk-card-title uk-margin-remove-adjacent uk-margin-remove-bottom" data-item="items[0].title"><div><span style="color: rgb(196, 0, 24);">¥98/年 </span></div></h3>
                                        <div class="el-meta uk-margin uk-text-small" data-item="items[0].abstract"><div>适合个人网站，支持网站&小程序，单独小程序入门套餐<span style="color: rgb(204, 64, 64);"><strong>58元/年</strong></span></div></div>
                                        <hr>


                                        <ul class="price-detail" data-item="items[0].detail"><ul><li>智能生成</li><li>可视化编辑</li><li>响应式支持、支持移动端独立编辑</li><li>图片&文件存储空间各50M</li><li>web自定义页面数量5个、小程序页面1个</li><li>文章、产品数量各25条</li><li>1个表单、查看前50条提交</li><li>绑定域名1个</li><li>月PV限制10000</li><li>仅限香港机房</li><li>基础访问统计</li><li>支持小程序可视化编辑</li></ul></ul>

                                    </div>

                                </div>
                            </div>

                            <div>
                                <div uk-scrollspy-class="" class=" price-item-highlight  border-1 br-2  el-item uk-card uk-card-default uk-card-hover" data-item="items[1]">


                                    <div class="uk-card-body">
                                        <div class="el-meta uk-margin" data-item="items[1].subTitle">展示版</div>
                                        <h3 class="el-title uk-margin uk-text-bold  uk-card-title uk-margin-remove-adjacent uk-margin-remove-bottom" data-item="items[1].title"><div><span style="color: rgb(196, 0, 24);">¥980 / 年</span></div></h3>
                                        <div class="el-meta uk-margin uk-text-small" data-item="items[1].abstract"><div>适合个人/初创企业展示类型官网。单独展示型小程序套餐<strong><span style="color: rgb(196, 0, 24);">¥580</span></strong> / 年</div></div>
                                        <hr>


                                        <ul class="price-detail" data-item="items[1].detail"><ul><li><span style="font-size: 14px;">智能生成</span></li><li><span style="font-size: 14px;">可视化编辑</span></li><li><span style="font-size: 14px;">响应式支持、支持移动端独立编辑</span></li><li><span style="font-size: 14px;">10G存储空间，100G/月流量</span></li><li><span style="font-size: 14px;">web自定义页面数量50个、小程序页面数量10个、表单10个</span></li><li><span style="font-size: 14px;">文章&产品各200条</span></li><li><span style="font-size: 14px;">去广告支持</span></li><li><span style="font-size: 14px;">绑定域名5个、赠送备案配额</span></li><li><span style="font-size: 14px;">全球多机房、同时发布</span></li><li><span style="font-size: 14px;">基础访问统计</span></li><li><span style="font-size: 14px;">支持生成百度&微信小程序</span></li><li><span style="font-size: 14px;">手动&自动备份5个</span></li><li><span style="font-size: 14px;">去广告&版权支持</span></li><li><span style="font-size: 14px;">自定义代码支持、接入百度商桥等第三方程序</span></li><li><span style="font-size: 14px;">表单邮件提醒</span></li><li><span style="font-size: 14px;">网站基础SEO设置</span></li><li><span style="font-size: 14px;">自动生成网站地图</span></li></ul></ul>

                                    </div>

                                </div>
                            </div>

                            <div>
                                <div uk-scrollspy-class="" class=" border-1 br-2  el-item uk-card uk-card-default uk-card-hover" data-item="items[2]">


                                    <div class="uk-card-body">
                                        <div class="el-meta uk-margin" data-item="items[2].subTitle">官网版</div>
                                        <h3 class="el-title uk-margin uk-text-bold  uk-card-title uk-margin-remove-adjacent uk-margin-remove-bottom" data-item="items[2].title"><div><span style="color: rgb(196, 0, 24);">¥ 1980 / 年</span></div></h3>
                                        <div class="el-meta uk-margin uk-text-small" data-item="items[2].abstract"><div>适合行业企业官网。单独官网型小程序套餐<strong><span style="color: rgb(196, 0, 24);">¥1280</span></strong> / 年</div></div>
                                        <hr>


                                        <ul class="price-detail" data-item="items[2].detail"><ul><li><span style="font-size: 14px;">智能生成</span></li><li><span style="font-size: 14px;">可视化编辑</span></li><li><span style="font-size: 14px;">响应式支持、支持移动端独立编辑</span></li><li><span style="font-size: 14px;">不限存储空间、表单个数、不限流量</span></li><li><span style="font-size: 14px;">web页面个数不限、小程序页面50个</span></li><li><span style="font-size: 14px;">去广告支持</span></li><li><span style="font-size: 14px;">不限域名数量、赠送备案配额</span></li><li><span style="font-size: 14px;">全球多机房&同时发布</span></li><li><span style="font-size: 14px;">多语言站支持</span></li><li><span style="font-size: 14px;">基础访问统计</span></li><li><span style="font-size: 14px;">手动&自动备份10个</span></li><li><span style="font-size: 14px;">去广告&版权支持</span></li><li><span style="font-size: 14px;">自定义代码支持、接入百度商桥等第三方程序</span></li><li><span style="font-size: 14px;">表单邮件&短信提醒支持</span></li><li><span style="font-size: 14px;">SEO设置支持</span></li><li><span style="font-size: 14px;">自动生成网站地图</span></li><li><span style="font-size: 14px;">移动端自动MIP化</span></li><li><span style="font-size: 14px;">小程序自然搜索接入支持</span></li><li><span style="font-size: 14px;">HTTPS 支持</span></li><li><span style="font-size: 14px;">熊掌ID绑定与搜索出图支持</span></li><li><span style="font-size: 14px;">赠送价值600元百度搜索结果信誉 V认证</span></li><li><span style="font-size: 14px;">搜索收录实时推送</span></li></ul></ul>

                                    </div>

                                </div>
                            </div>

                            <div>
                                <div uk-scrollspy-class="" class=" border-1 br-2  el-item uk-card uk-card-default uk-card-hover" data-item="items[3]">


                                    <div class="uk-card-body">
                                        <div class="el-meta uk-margin" data-item="items[3].subTitle">营销版</div>
                                        <h3 class="el-title uk-margin uk-text-bold  uk-card-title uk-margin-remove-adjacent uk-margin-remove-bottom" data-item="items[3].title"><div><span style="color: rgb(196, 0, 24);">¥ 3980 / 年</span></div></h3>
                                        <div class="el-meta uk-margin uk-text-small" data-item="items[3].abstract"><div>适合预约与电商。单独营销版小程序套餐<strong><span style="color: rgb(196, 0, 24);">¥2580</span></strong> / 年</div></div>
                                        <hr>


                                        <ul class="price-detail" data-item="items[3].detail"><ul><li><span style="font-size: 14px;">智能生成</span></li><li><span style="font-size: 14px;">可视化编辑</span></li><li><span style="font-size: 14px;">响应式支持、支持移动端独立编辑</span></li><li><span style="font-size: 14px;">不限存储空间、页面个数、表单个数、不限流量</span></li><li><span style="font-size: 14px;">不限域名数量、赠送备案配额</span></li><li><span style="font-size: 14px;">全球多机房&同时发布</span></li><li><span style="font-size: 14px;">多语言站支持</span></li><li><span style="font-size: 14px;">去广告支持</span></li><li><span style="font-size: 14px;">基础访问统计</span></li><li><span style="font-size: 14px;">手动&自动备份不限个数</span></li><li><span style="font-size: 14px;">去广告&版权支持</span></li><li><span style="font-size: 14px;">自定义代码支持、接入百度商桥等第三方程序</span></li><li><span style="font-size: 14px;">表单邮件&短信提醒支持</span></li><li><span style="font-size: 14px;">SEO设置支持</span></li><li><span style="font-size: 14px;">自动生成网站地图</span></li><li><span style="font-size: 14px;">移动端自动MIP化</span></li><li><span style="font-size: 14px;">小程序自然搜索接入支持</span></li><li><span style="font-size: 14px;">HTTPS 支持</span></li><li><span style="font-size: 14px;">熊掌ID绑定与搜索出图支持</span></li><li><span style="font-size: 14px;">赠送价值600元百度搜索结果信誉 V认证</span></li><li><span style="font-size: 14px;">搜索收录实时推送</span></li><li><span style="font-size: 14px;">行业预约支持</span></li><li><span style="font-size: 14px;">小程序电商支持</span></li></ul></ul>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div></div></div><div id="a5c60af020a37e1" section-id="a5c60af020a37e1" data-id="a5c60af020a37e1" class="section uk-section uk-padding-remove-vertical uk-section-secondary uk-dark footer" style=""><div class="ap-content-container"><div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-margin-large-top" uk-grid="">


                    <div class="uk-width-1-3@m uk-width-1-2@s uk-text-center">

                        <i class="ap-icon uk-h1" data-icon="" data-item="dataInfo.column1.icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" enable-background="new 0 0 1024 1024" space="preserve"><path "="" d="M462.13 462.13 q49.87 -49.87 49.87 -120.8 q0 -70.92 -49.87 -120.79 q-49.87 -49.87 -120.8 -49.87 q-70.92 0 -120.79 49.87 q-49.87 49.87 -49.87 120.79 q0 70.93 49.87 120.8 q49.87 49.87 120.79 49.87 q70.93 0 120.8 -49.87 l0 0 ZM682.67 341.33 q0 73.15 -22.17 119.69 l-242.7 515.33 q-9.97 22.16 -31.03 35.46 q-21.06 12.19 -45.44 12.19 q-24.38 0 -44.33 -12.19 q-22.16 -13.3 -32.13 -35.46 l-242.71 -515.33 q-22.16 -46.54 -22.16 -119.69 q0 -141.85 99.74 -241.59 q99.74 -99.74 241.59 -99.74 q141.86 0 241.6 99.74 q99.74 99.74 99.74 241.59 l0 0 Z"/></svg></i>


                        <h3 data-item="column1.title" class="uk-h4 uk-margin-remove">地址</h3>
                        <div data-item="column1.abstract" class="uk-margin-small-top">北京市海淀区软件园二期百度科技园</div>
                    </div>



                    <div class="uk-width-1-3@m uk-width-1-2@s uk-text-center">

                        <i class="ap-icon uk-h1" data-icon="" data-item="dataInfo.column2.icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" enable-background="new 0 0 1024 1024" space="preserve"><path "="" d="M597.33 832.28 l0 -128.56 q0 -8.86 -5.54 -15.51 q-6.65 -5.54 -15.51 -5.54 l-128.56 0 q-8.86 0 -15.51 5.54 q-5.54 6.65 -5.54 15.51 l0 128.56 q0 8.86 5.54 15.51 q6.65 5.54 15.51 5.54 l128.56 0 q8.86 0 15.51 -5.54 q5.54 -6.65 5.54 -15.51 l0 0 ZM768 383.45 q0 -57.63 -36.57 -108.61 q-37.68 -49.87 -93.09 -76.47 q-55.41 -27.7 -113.04 -27.7 q-161.8 0 -247.14 141.85 q-9.97 16.62 5.55 27.71 l87.55 67.6 q4.43 3.32 13.29 3.32 q9.98 0 16.63 -7.76 q34.35 -45.43 56.52 -60.95 q23.27 -16.62 57.62 -16.62 q32.14 0 57.63 17.73 q24.38 16.62 24.38 38.79 q0 25.49 -13.3 41 q-13.29 15.52 -45.43 29.92 q-42.12 18.84 -76.47 57.63 q-35.46 38.79 -35.46 84.23 l0 23.27 q0 9.97 5.54 15.51 q6.65 5.55 15.51 5.55 l128.56 0 q8.86 0 15.51 -5.55 q5.54 -5.54 5.54 -15.51 q0 -12.19 14.41 -33.25 q14.41 -19.95 36.57 -32.14 q21.06 -12.19 32.14 -19.94 q11.08 -6.65 31.03 -23.28 q18.84 -15.51 29.92 -32.13 q9.98 -15.52 18.84 -39.9 q7.76 -24.38 7.76 -54.3 l0 0 ZM955.29 254.89 q68.71 117.47 68.71 257.11 q0 139.64 -68.71 257.11 q-68.71 117.47 -186.18 186.18 q-117.47 68.71 -257.11 68.71 q-139.64 0 -257.11 -68.71 q-117.47 -68.71 -186.18 -186.18 q-68.71 -117.47 -68.71 -257.11 q0 -139.64 68.71 -257.11 q68.71 -117.47 186.18 -186.18 q117.47 -68.71 257.11 -68.71 q139.64 0 257.11 68.71 q117.47 68.71 186.18 186.18 l0 0 Z"/></svg></i>


                        <h3 data-item="column2.title" class="uk-h4 uk-margin-remove">帮助中心</h3>
                        <div data-item="column2.abstract" class="uk-margin-small-top"><p><a href="https://aipage.bce.baidu.com/resources/doc/zh/index.html">文档首页</a></p><p><br></p></div>
                    </div>



                    <div class="uk-width-1-3@m uk-width-1-2@s uk-text-center">

                        <i class="ap-icon uk-h1" data-icon="" data-item="dataInfo.column3.icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" enable-background="new 0 0 1024 1024" space="preserve"><path "="" d="M101.4 103.22 l822.12 0 l-411.06 256.69 l-411.06 -256.69 l0 0 ZM923.52 718.9 l-822.12 0 l0 -512.46 l411.06 254.86 l411.06 -254.86 l0 512.46 l0 0 ZM923.52 0 l-822.12 0 q-42.02 0.91 -71.26 30.14 q-29.23 29.24 -30.14 73.08 l0 615.68 q0.91 42.93 30.14 72.17 q29.24 29.23 71.26 31.05 l822.12 0 q42.02 -1.82 70.79 -31.05 q28.78 -29.24 29.69 -72.17 l0 -615.68 q-0.91 -43.84 -29.69 -73.08 q-28.77 -29.23 -70.79 -30.14 l0 0 Z"/></svg></i>


                        <h3 data-item="column3.title" class="uk-h4 uk-margin-remove">联系我们</h3>
                        <div data-item="column3.abstract" class="uk-margin-small-top"><p><a href="//shang.qq.com/wpa/qunwpa?idkey=6ee68c1deb5c92cb75ed8d0024633ef900868704a8fdc12359d162c874d3a97d" target="_blank"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="AIPage 用户交流" title="AIPage 用户交流" class="fr-fic fr-dii"></a></p><p>QQ群: 813607190</p></div>
                    </div>

                </div>


                <div class="uk-margin-medium-top uk-text-center uk-width-medium uk-margin-auto">
                    <h3 data-item="row1.title" class="uk-h5"></h3>

                    <p data-item="row1.abstract" class="uk-margin-small-top"></p>

                    <!-- <form class="subscribe-form">
            <fieldset class="uk-fieldset">
                <div class="uk-margin">
                    <input class="uk-input" type="text" name="subscribe" placeholder="请填写邮箱">
                </div>
            </fieldset>

            <button data-item="row1.button" type="submit" class="uk-button uk-button-default">提交</button>
        </form>            -->
                </div>

            </div>


            <hr class="uk-margin-remove-bottom">
            <footer class="uk-padding-small uk-margin-remove">
                <div class="uk-panel uk-text-center uk-text-small" data-item="footerTip">
                    <p>© 2018 Baidu 使用百度前必读 增值电信业务经营许可证：B1.B2-20100266 京ICP证030173号</p>
                </div>
            </footer>
        </div></div>
</div>



<script src="https://aipage.bce.baidu.com/static/aipage/pkg/page_7886b7b.js"></script>
<script src="https://aipage.bce.baidu.com/static/aipage/page/preview/client_3b95497.js"></script>







<!--自定义尾部-->

<script>
    (function(i,s,o,g,r,a,m){i['AIPageStat']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).unshift(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://aps.baidubce.com/aps.js','aps');

    aps('create', 'xid-001');
    aps('send', 'pageview');
</script>

</body>
</html>
