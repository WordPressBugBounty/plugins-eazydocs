<?php
$opt = get_option( 'eazydocs_settings' );
$is_dark_switcher = $opt['is_dark_switcher'] ?? '';
if ( $is_dark_switcher == '1' ) :
    ?>
<div class="doc_switch ezd-d-flex ezd-align-items-center">
    <label for="ezd_dark_switch" class="tab-btn tab-btns light-mode">
        <svg width="16px" height="16px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
            <path
                d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z" />
        </svg>
    </label>
    <input type="checkbox" name="ezd_dark_switch" id="ezd_dark_switch" class="tab_switcher">
    <label for="ezd_dark_switch" class="tab-btn dark-mode">
        <svg width="16px" height="16px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
            <path
                d="M21 11.9486C21 16.8857 16.8776 21 11.7247 21C7.80842 21 4.40746 18.84 3.06769 15.5486C2.96464 15.24 2.96464 14.9314 3.17075 14.7257C3.37687 14.52 3.68605 14.4171 3.99523 14.52C4.51052 14.6229 5.02582 14.7257 5.43806 14.7257C9.56043 14.7257 12.8583 11.5371 12.8583 7.52571C12.8583 6.29143 12.6522 5.26286 12.0338 4.02857C11.9308 3.82286 11.9308 3.51429 12.1369 3.30857C12.343 3.10286 12.5491 3 12.8583 3C17.496 3.51429 21 7.42286 21 11.9486Z"
                fill="#030D45" />
        </svg>
    </label>
</div>
<?php endif; ?>