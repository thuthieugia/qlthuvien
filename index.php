<?php
session_start();
ob_start();
if (!isset($_SESSION['account'])) {
    include_once 'controller/login/loginController.php';
    $login = new LoginController();
    $login->login();
    include_once 'views/login/login.php';
}
else{
    ?>
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <?php include_once 'layout/head.php'; ?>
    </head>
    <style>
        .display-click{
            margin-left: -350px;
            transition: 10s;
        }
        .action-click:hover > .display-click{
            margin-left: 0px;
            transition: 10s;
        }
        .action-click{
            position: relative;
        }
    </style>
    <body>
        <header class="navbar-dark bg-primary fixed-top">
            <?php 
            include_once('controller/header/headerController.php');
            $header = new HeaderController();
            $header->header();
            include_once 'layout/header.php'; 
            ?>
        </header>
        <div class="img-background">
            <?php include_once 'layout/img-background.php'; ?>
        </div>
        <div class="main-content">
            <div class=" mt-sm-4">
                <div class="col-md-12">
                    <div class="row mt-4 pt-4">
                        <button class="navbar-toggler1 border-0 pl-1 fas fa-bars collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
                        <div class="bg-white shadow-sm navbar-collapse1 collapse" id="navbarSupportedContent">
                            <!--aaaaaaaaaaaaaaaaa -->
                            <div class="profile border-bottom" >
                                <?php
                                include_once('controller/profile/profileController.php');
                                $profile = new ProfileController();
                                $profile->profile();
                                include_once 'layout/profile.php';
                                ?>
                            </div>
                            <class class="navigation p-4 mt-4 ">
                                <?php include_once 'layout/navbar.php'; ?>  
                            </class>
                        </div>
                    </div>
                    <div class="col-md-12" >
                        <?php
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        }
                        else{
                            $page = 'dashbroad';
                        }
                        switch ($page) {
                            case 'dashbroad':
                        # code...
                            break;
                        //account
                            case 'list-accounts':
                            include_once('controller/account/accountController.php');
                            $account = new AccountController();
                            $account->account();
                            include_once 'views/account/list-accounts.php';
                            break;
                            case 'add-account':
                            include_once('controller/account/accountController.php');
                            include_once 'views/account/add-account.php';
                            break;
                            case 'update-account':
                            include_once('controller/account/accountController.php');
                            $account = new AccountController();
                            $account->account();
                            include_once 'views/account/update-account.php';
                            break;
                        //power
                            case 'list-powers':
                            include_once('controller/power/powerController.php');
                            $power = new PowerController();
                            $power->power();
                            include_once 'views/power/list-powers.php';
                            break;
                            case 'add-power':
                            include_once('controller/power/powerController.php');
                            include_once 'views/power/add-power.php';
                            break;
                            case 'update-power':
                            include_once('controller/power/powerController.php');
                            $power = new PowerController();
                            $power->power();
                            include_once 'views/power/update-power.php';
                            break;
                        //member
                            case 'list-members':
                            include_once('controller/member/memberController.php');
                            $member = new MemberController();
                            $member->member();
                            include_once 'views/member/list-members.php';
                            break;
                            case 'add-member':
                            include_once('controller/member/memberController.php');
                            include_once 'views/member/add-member.php';
                            break;
                            case 'update-member':
                            include_once('controller/member/memberController.php');
                            $member = new MemberController();
                            $member->member();
                            //include_once('controller/faculty_class/facultyClassController.php');
                            include_once 'views/member/update-member.php';
                            break;
                        //reader
                            case 'list-readers':
                            include_once('controller/reader/readerController.php');
                            $reader = new ReaderController();
                            $reader->reader();
                            include_once 'views/reader/list-readers.php';
                            break;
                            case 'add-reader':
                            include_once('controller/reader/readerController.php');
                            include_once('controller/faculty_class/facultyClassController.php');
                            $facultyClass = new FacultyClassController();
                            $facultyClass->facultyClass();
                            include_once 'views/reader/add-reader.php';
                            break;
                            case 'update-reader':
                            include_once('controller/reader/readerController.php');
                            $reader = new ReaderController();
                            $reader->reader();
                            //include_once('controller/faculty_class/facultyClassController.php');
                            include_once 'views/reader/update-reader.php';
                            break;

                        //book
                            case 'list-books':
                            include_once('controller/book/bookController.php');
                            $book = new BookController();
                            $book->book();
                            include_once 'views/book/list-books.php';
                            break;
                            case 'add-book':
                            include_once('controller/book/bookController.php');
                            $book = new BookController();
                            $book->book();
                            include_once 'views/book/add-book.php';
                            break;
                            case 'update-book':
                            include_once('controller/book/bookController.php');
                            $book = new BookController();
                            $book->book();
                            //include_once('controller/faculty_class/facultyClassController.php');
                            include_once 'views/book/update-book.php';
                            break;
                        //nxb
                            case 'list-nxb':
                            include_once('controller/nxb/nxbController.php');
                            $nxb = new NXBController();
                            $nxb->nxb();
                            include_once 'views/nxb/list-nxb.php';
                            break;
                            case 'add-nxb':
                            include_once('controller/nxb/nxbController.php');
                            $nxb = new NXBController();
                            $nxb->nxb();
                            include_once 'views/nxb/add-nxb.php';
                            break;
                            case 'update-nxb':
                            include_once('controller/nxb/nxbController.php');
                            $nxb = new NXBController();
                            $nxb->nxb();
                            //include_once('controller/faculty_class/facultyClassController.php');
                            include_once 'views/nxb/update-nxb.php';
                            break;
                        //category
                            case 'list-categorys':
                            include_once('controller/category/categoryController.php');
                            $category = new CategoryController();
                            $category->category();
                            include_once 'views/category/list-categorys.php';
                            break;
                            case 'add-category':
                            include_once('controller/category/categoryController.php');
                            $category = new CategoryController();
                            $category->category();
                            include_once 'views/category/add-category.php';
                            break;
                            case 'update-category':
                            include_once('controller/category/categoryController.php');
                            $category = new CategoryController();
                            $category->category();
                            include_once 'views/category/update-category.php';
                            break;
                        //storage
                            case 'list-storages':
                            include_once('controller/storage/storageController.php');
                            $storage = new StorageController();
                            $storage->storage();
                            include_once 'views/storage/list-storages.php';
                            break;
                            case 'add-storage':
                            include_once('controller/storage/storageController.php');
                            $storage = new StorageController();
                            $storage->storage();
                            include_once 'views/storage/add-storage.php';
                            break;
                            case 'update-storage':
                            include_once('controller/storage/storageController.php');
                            $storage = new StorageController();
                            $storage->storage();
                            include_once 'views/storage/update-storage.php';
                            break;
                        //borrow-card
                            case 'list-borrow-cards':
                            include_once('controller/borrow-card/borrowCardController.php');
                            $borrowCard = new BorrowCardController();
                            $borrowCard->borrowCard();
                            include_once 'views/borrow-card/list-borrow-cards.php';
                            break;
                            case 'add-borrow-card':
                            include_once('controller/borrow-card/borrowCardController.php');
                            include_once('controller/reader/readerController.php');
                            $reader = new ReaderController();
                            $reader->reader();
                            include_once 'views/borrow-card/add-borrow-card.php';
                            break;
                            case 'update-borrow-card':
                            include_once('controller/borrow-card/borrowCardController.php');
                            $borrowCard = new BorrowCardController();
                            $borrowCard->borrowCard();
                            include_once 'views/borrow-card/update-borrow-card.php';
                            break;
                        //borrow-book
                            case 'list-borrow-books':
                            include_once('controller/borrow-book/borrowBookController.php');
                            $borrowBook = new BorrowBookController();
                            $borrowBook->borrowBook();
                            include_once 'views/borrow-book/list-borrow-books.php';
                            break;
                            case 'add-borrow-book':
                            include_once('controller/borrow-book/borrowBookController.php');
                            $borrowBook = new BorrowBookController();
                            $borrowBook->borrowBook();
                            include_once 'views/borrow-book/add-borrow-book.php';
                            break;
                            case 'update-borrow-book':
                            include_once('controller/borrow-book/borrowBookController.php');
                            $borrowBook = new BorrowBookController();
                            $borrowBook->borrowBook();
                            include_once 'views/borrow-book/update-borrow-book.php';
                            break;
                        //return-book
                            case 'list-return-books':
                            include_once('controller/return-book/returnBookController.php');
                            $returnBook = new ReturnBookController();
                            $returnBook->returnBook();
                            include_once 'views/return-book/list-return-books.php';
                            break;
                            case 'add-return-book':
                            include_once('controller/return-book/returnBookController.php');
                            $returnBook = new ReturnBookController();
                            $returnBook->returnBook();
                            include_once 'views/return-book/add-return-book.php';
                            break;
                            case 'update-return-book':
                            include_once('controller/return-book/returnBookController.php');
                            $returnBook = new ReturnBookController();
                            $returnBook->returnBook();
                            include_once 'views/return-book/update-return-book.php';
                            break;
                            case 'logout':
                            session_destroy();
                            header('location:index.php');
                            break;
                        //statistical
                            case 'op-book':
                            include_once 'views/statistical/statistical-book/op-book.php';
                            break;
                            case 'op-reader':
                            include_once 'views/statistical/statistical-reader/op-reader.php';
                            break;
                            case 'book-date':
                            include_once('controller/statistical/statisticalController.php');
                            $statistical = new StatisticalController();
                            $statistical->statistical();
                            include_once 'views/statistical/statistical-book/book-date.php';
                            break;
                            case 'book-month':
                            include_once('controller/statistical/statisticalController.php');
                            $statistical = new StatisticalController();
                            $statistical->statistical();
                            include_once 'views/statistical/statistical-book/book-month.php';
                            break;
                            case 'book-year':
                            include_once('controller/statistical/statisticalController.php');
                            $statistical = new StatisticalController();
                            $statistical->statistical();
                            include_once 'views/statistical/statistical-book/book-year.php';
                            break;
                            case 'op-reader':
                            include_once 'views/statistical/statistical-reader/op-reader.php';
                            break;
                            case 'reader-date':
                            include_once('controller/statistical/statisticalController.php');
                            $statistical = new StatisticalController();
                            $statistical->statistical();
                            include_once 'views/statistical/statistical-reader/reader-date.php';
                            break;
                            case 'reader-month':
                            include_once('controller/statistical/statisticalController.php');
                            $statistical = new StatisticalController();
                            $statistical->statistical();
                            include_once 'views/statistical/statistical-reader/reader-month.php';
                            break;
                            case 'reader-year':
                            include_once('controller/statistical/statisticalController.php');
                            $statistical = new StatisticalController();
                            $statistical->statistical();
                            include_once 'views/statistical/statistical-reader/reader-year.php';
                            break;
                            default:
                            break;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php include_once 'layout/script.php'; ?>
        </body>
        </html>
        <?php
    }
    ?>