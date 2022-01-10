['DOMContentLoaded'].map((event) => 
    document.addEventListener(event, () => {
        if (document.querySelector('.breadcrumbs')) {
            const urlRoot = window.location.href.split('zoepix')[0] + 'zoepix';
            const urlCrumbs = window.location.href.split('zoepix')[1].split('/');
            const breadcrumbsPageRoot = document.querySelector('.breadcrumbs__page-root');
            const breadcrumbsPage = document.querySelector('.breadcrumbs__page');

            breadcrumbsPageRoot.innerHTML = urlCrumbs[1];
            breadcrumbsPage.innerHTML = urlCrumbs[2];

            breadcrumbsPageRoot.href = urlRoot + '/' + urlCrumbs[1];
            breadcrumbsPage.href = window.location.href;
        }
    })
);