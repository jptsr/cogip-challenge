<?php
require __DIR__.'/../vendor/autoload.php';

use app\src\controllers\companies\CompaniesController;
use app\src\controllers\companies\CompanyDetailsController;
use app\src\controllers\companies\NewCompanyController;
use app\src\controllers\companies\UpdateCompanyController;
use app\src\controllers\contacts\ContactDetailsController;
use app\src\controllers\contacts\ContactsController;
use app\src\controllers\contacts\NewContactController;
use app\src\controllers\contacts\UpdateContactController;
use app\src\controllers\ErrorController;
use app\src\controllers\HomeAdminController;
use app\src\controllers\HomeController;
use app\src\controllers\invoices\InvoiceDetailsController;
use app\src\controllers\invoices\InvoicesController;
use app\src\controllers\invoices\NewInvoiceController;
use app\src\controllers\invoices\UpdateInvoiceController;
use app\src\controllers\LoginController;

$url = $_SERVER['REQUEST_URI'];

switch ($url)
{
    case '/connexion':
        $loginCtrl = new LoginController();
        $loginCtrl -> displayView();
        break;
    case '/menu':
        $homeCtrl = new HomeController();
        $homeCtrl -> displayView();
        break;
    case '/menu-admin':
        $homeAdCtrl = new HomeAdminController();
        $homeAdCtrl -> displayView();
        break;
    case '/liste-entreprises':
        $companiesCtrl = new CompaniesController();
        $companiesCtrl -> displayView();
        break;
    case '/details-entreprise':
        $companyDetailsCtrl = new CompanyDetailsController();
        $companyDetailsCtrl -> displayView();
        break;
    case '/liste-contacts':
        $contactsCtrl = new ContactsController();
        $contactsCtrl -> displayView();
        break;
    case '/details-contact':
        $contactDetailsCtrl = new ContactDetailsController();
        $contactDetailsCtrl -> displayView();
        break;
    case '/liste-factures':
        $invoicesCtrl = new InvoicesController();
        $invoicesCtrl -> displayView();
        break;
    case '/details-facture':
        $invoiceDetailsCtrl = new InvoiceDetailsController();
        $invoiceDetailsCtrl -> displayView();
        break;
    case '/modification-facture':
        $updateInvoiceCtrl = new UpdateInvoiceController();
        $updateInvoiceCtrl -> displayView();
        break;
    case '/modification-contact':
        $updateContactCtrl = new UpdateContactController();
        $updateContactCtrl -> displayView();
        break;
    case '/modification-entreprise':
        $updateCompanyCtrl = new UpdateCompanyController();
        $updateCompanyCtrl -> displayView();
        break;
    case '/nouvelle-entreprise':
        $newCompanyCtrl = new NewCompanyController();
        $newCompanyCtrl -> displayView();
        break;
    case '/nouveau-contact':
        $newContactCtrl = new NewContactController();
        $newContactCtrl -> displayView();
        break;
    case '/nouvelle-facture':
        $newInvoiceCtrl = new NewInvoiceController();
        $newInvoiceCtrl -> displayView();
        break;
    default:
        $errorCtrl = new ErrorController();
        $errorCtrl -> displayView();
        break;
}