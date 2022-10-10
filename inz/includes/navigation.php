<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Dziennik elektroniczny</a>
            </div>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="show_profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#uczen"><i class="fa fa-fw fa-arrows-v"></i> Uczniowe <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="uczen" class="collapse">
                            <li>
                                <a href="show_student.php?source=add_student">Dodaj ucznia</a>
                            </li>
                            <li>
                                <a href="show_student.php">Lista uczniów</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#nauczyciel"><i class="fa fa-fw fa-arrows-v"></i> Nauczyciele <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="nauczyciel" class="collapse">
                            <li>
                                <a href="show_teacher.php?source=add_teacher">Dodaj nauczyciela</a>
                            </li>
                            <li>
                                <a href="show_teacher.php">Lista nauczycieli</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="show_class.php"><i class="fa fa-fw fa-dashboard"></i>Klasy</a>
                    </li>
                    <li>
                        <a href="show_subject.php"><i class="fa fa-fw fa-dashboard"></i>Przedmioty</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#plan"><i class="fa fa-fw fa-arrows-v"></i> Użytkownicy <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="plan" class="collapse">
                            <li>
                                <a href="show_user.php?source=add_user">Dodaj użytkownika</a>
                            </li>
                            <li>
                                <a href="show_user.php">Lista użytkowników</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>