-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Lut 2022, 18:56
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dziennik_elektroniczny`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `karta_przedmiotu`
--

CREATE TABLE `karta_przedmiotu` (
  `id_karta_przedmiotu` int(255) NOT NULL,
  `id_przedmiot` int(255) NOT NULL,
  `id_uczen` int(255) NOT NULL,
  `id_ocena` int(255) DEFAULT NULL,
  `id_nauczyciel` int(255) NOT NULL,
  `id_semestr` int(255) NOT NULL,
  `id_klasa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasa`
--

CREATE TABLE `klasa` (
  `id_klasa` int(255) NOT NULL,
  `nazwa` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klasa`
--

INSERT INTO `klasa` (`id_klasa`, `nazwa`) VALUES
(36, '1a'),
(37, '1b'),
(38, '1c'),
(39, '2a'),
(40, '2b'),
(41, '2c'),
(42, '3a'),
(43, '3b'),
(44, '3c');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nauczyciel`
--

CREATE TABLE `nauczyciel` (
  `id_nauczyciel` int(255) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `id_przedmiot` int(255) NOT NULL,
  `id_uzytkownik` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `nauczyciel`
--

INSERT INTO `nauczyciel` (`id_nauczyciel`, `nazwisko`, `imie`, `id_przedmiot`, `id_uzytkownik`) VALUES
(72, 'Fronczykk', 'Jakubb', 21, 15);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ocena`
--

CREATE TABLE `ocena` (
  `id_ocena` int(255) NOT NULL,
  `ocena` int(255) DEFAULT NULL,
  `data_wystawienia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmiot`
--

CREATE TABLE `przedmiot` (
  `id_przedmiot` int(255) NOT NULL,
  `nazwa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `przedmiot`
--

INSERT INTO `przedmiot` (`id_przedmiot`, `nazwa`) VALUES
(12, 'Matematyka'),
(13, 'Wychowanie fizyczne'),
(14, 'Język polski'),
(15, 'Fizyka'),
(16, 'Język angielski'),
(17, 'Biologia'),
(18, 'Chemia'),
(19, 'Wiedza o społeczeństwie'),
(20, 'Historia'),
(21, 'Język niemiecki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczen`
--

CREATE TABLE `uczen` (
  `id_uczen` int(255) NOT NULL,
  `nazwisko` varchar(255) NOT NULL,
  `imie` varchar(255) NOT NULL,
  `id_klasa` int(255) NOT NULL,
  `miasto` varchar(255) NOT NULL,
  `ulica` varchar(255) NOT NULL,
  `nr_domu` varchar(32) NOT NULL,
  `nr_mieszkania` int(32) NOT NULL,
  `kod_pocztowy` varchar(255) NOT NULL,
  `id_uzytkownik` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uczen`
--

INSERT INTO `uczen` (`id_uczen`, `nazwisko`, `imie`, `id_klasa`, `miasto`, `ulica`, `nr_domu`, `nr_mieszkania`, `kod_pocztowy`, `id_uzytkownik`) VALUES
(3, 'fronczyk', 'Jakub', 42, 'Zielona Góraqweqwe', 'qweqwe', '5a', 4, '65-001', 14),
(4, 'Fronczyk', 'asdasdasdasd', 37, 'asdsadasda', 'sdasdasd', 'asd', 213123123, '123123123', 16);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id_uzytkownik` int(3) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `login` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `rola` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id_uzytkownik`, `imie`, `nazwisko`, `login`, `haslo`, `rola`) VALUES
(14, 'Jakub', 'asd', 'asd', 'asdasdasdasddas', 'uczeń'),
(15, 'Miłoszf', 'Fizyczak', 'lameczka123', 'zacisze32', 'uczeń'),
(16, 'Adrian', 'Trojanowski', 'link9@o2.pl', 'zacisze32', 'uczeń');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `karta_przedmiotu`
--
ALTER TABLE `karta_przedmiotu`
  ADD PRIMARY KEY (`id_karta_przedmiotu`);

--
-- Indeksy dla tabeli `klasa`
--
ALTER TABLE `klasa`
  ADD PRIMARY KEY (`id_klasa`);

--
-- Indeksy dla tabeli `nauczyciel`
--
ALTER TABLE `nauczyciel`
  ADD PRIMARY KEY (`id_nauczyciel`);

--
-- Indeksy dla tabeli `ocena`
--
ALTER TABLE `ocena`
  ADD PRIMARY KEY (`id_ocena`);

--
-- Indeksy dla tabeli `przedmiot`
--
ALTER TABLE `przedmiot`
  ADD PRIMARY KEY (`id_przedmiot`);

--
-- Indeksy dla tabeli `uczen`
--
ALTER TABLE `uczen`
  ADD PRIMARY KEY (`id_uczen`);

--
-- Indeksy dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id_uzytkownik`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `karta_przedmiotu`
--
ALTER TABLE `karta_przedmiotu`
  MODIFY `id_karta_przedmiotu` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `klasa`
--
ALTER TABLE `klasa`
  MODIFY `id_klasa` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT dla tabeli `nauczyciel`
--
ALTER TABLE `nauczyciel`
  MODIFY `id_nauczyciel` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT dla tabeli `ocena`
--
ALTER TABLE `ocena`
  MODIFY `id_ocena` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `przedmiot`
--
ALTER TABLE `przedmiot`
  MODIFY `id_przedmiot` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `uczen`
--
ALTER TABLE `uczen`
  MODIFY `id_uczen` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id_uzytkownik` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
