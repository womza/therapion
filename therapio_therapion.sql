-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-08-2015 a las 23:43:18
-- Versión del servidor: 5.5.42-37.1
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `therapio_therapion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `customer_service` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `titulo`, `id_idioma`, `customer_service`) VALUES
(1, 'Team Global - English', 1, 1),
(2, 'Team ES - Spanish', 2, 1),
(3, 'Team PT - Portuguese', 3, 0),
(4, 'Team FI - Finnish', 4, 1),
(5, 'Team SE - Swedish', 5, 0),
(6, 'Tean NO - Norwegian', 6, 0),
(7, 'Team DK- Danish', 7, 1),
(8, 'Team NL - Dutch', 9, 1),
(9, 'Team DE - German', 8, 1),
(10, 'Team FR - French', 10, 0),
(11, 'Team IT - Italian', 11, 1),
(12, 'Team RU - Russian', 12, 1),
(13, 'Team TR - Turkish', 13, 1),
(14, 'Team JP - Japanese', 14, 1),
(15, 'Team CN . Chinese', 15, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE IF NOT EXISTS `idioma` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `siglas` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`id`, `titulo`, `siglas`) VALUES
(1, 'English', 'en'),
(2, 'Español', 'es'),
(3, 'Português', 'pt'),
(4, 'Suomi', 'fi'),
(5, 'Svenska', 'se'),
(6, 'Norsk', 'no'),
(7, 'Dansk', 'dk'),
(8, 'Deutsch', 'de'),
(9, 'Nederlands', 'nl'),
(10, 'Français', 'fr'),
(11, 'Italiano', 'it'),
(12, '&#1055;&#1086;-&#1088;&#1091;&#1089;&#1089;&#1082;&#1080;', 'ru'),
(13, 'Türkçe', 'tr'),
(14, '&#26085;&#26412;&#35486;', 'jp'),
(15, '&#20013;&#25991;', 'cn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_consulta`
--

CREATE TABLE IF NOT EXISTS `metodo_consulta` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `orden` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `metodo_consulta`
--

INSERT INTO `metodo_consulta` (`id`, `titulo`, `orden`) VALUES
(1, 'email', 1),
(2, 'chat', 2),
(3, 'videoconference', 3),
(4, 'phone', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `psicologo`
--

CREATE TABLE IF NOT EXISTS `psicologo` (
  `id` int(11) NOT NULL,
  `nombres_apellidos` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(300) CHARACTER SET latin1 NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `informacion_adicional` text COLLATE utf8_unicode_ci NOT NULL,
  `educacion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `temas_consulta` text COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `columna` enum('first','second') CHARACTER SET latin1 NOT NULL,
  `therapy_programs` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `psicologo`
--

INSERT INTO `psicologo` (`id`, `nombres_apellidos`, `foto`, `email`, `titulo`, `informacion_adicional`, `educacion`, `temas_consulta`, `about`, `id_equipo`, `columna`, `therapy_programs`) VALUES
(4, 'Laura Schwinn', '72ce9-lauras.jpg', '', 'Clinical Psychologist, PsyD', '', ' ', 'Familial and individual relationship issues, parental challenges, stress, anxiety, holistic well-being, personal insight, life transitions, expat counseling', 'Throughout this journey of life we encounter many challenges, and our actions reflect decisions made during these confrontations of life. Responding in a healthy, compassionate manner takes time, patience, and practice. It is my intention to foster individual insight by establishing healthy foundations to face life''s difficulties. This may be approached through individual self-exploration, parental guidance, or nutritional counseling. These methods contribute to the cultivation of a grounded sense of self, which ultimately leads to healthy relationships.', 1, 'first', 1),
(5, 'Lisa Laba Sarkis', 'lisa.jpg', '', 'Counselor, Psychotherapist', '', 'B.Soc.Sc, B.SW, MAASW', 'Anxiety, depression, home bound depression, grief and loss, trauma, relationship and family difficulties, children and adolescent issues, sexual abuse, eating disorders', 'Don''t put it off any longer, now is the time for you to try online counselling. I offer support over a range of issues and am able to guide you through challenges you may be going through at your own pace. I have over 10 years experience in counselling and I am dedicated and motivated in providing you support for your needs.', 1, 'second', 1),
(6, 'Steve Orma  ', '70527-steve.jpg', '', 'Clinical Psychologist, PsyD', '', ' ', 'Anxiety, depression, relationship issues, stress management, setting and achieving goals, motivation, life transitions, grief, solitude, expat counseling', '"I''ve worked with individuals for a wide-range of issues. I have significant experience helping people overcome panic attacks, social anxiety, generalized anxiety, chronic worry, and health anxiety. My approach is supportive, active, and goal-oriented. I empathize with and listen to you, but also engage with and actively assist you in achieving your goals. My primary aim is helping you to improve your health and happiness.', 1, 'first', 1),
(7, 'Simon R. Downes ', 'd4bfe-simon.jpg', ' ', 'Clinical Psychologist, PhD', '', ' ', 'Anxiety, depression, stress management, relationships, learning disabilities, psychological factors within bilingualism', 'The first step towards feeling better, is to talk with a professional counselor. Speaking with someone who is not a family member, friend or work colleague will allow you to express yourself honestly, without any risk of being judged.', 1, 'second', 1),
(8, 'Nil Moore ', '72b73-nil.jpg', '', 'Counselor, Psychotherapist', '', 'M.S., Ed.D.', 'Relationship difficulties, Stress, Anxiety, Panic attack, Social fears, Depression, Trauma, Communication problems', 'With a doctorate in Counseling and 26+ years of experience as a counselor and psychotherapist, I help my clients in determining a goal(s) to achieve for themselves, learn to manage their stress, anxiety or depression and improve their communications skills. By offering support and suggestions I facilitate the positive changes they need to make in order to improve their life satisfaction.', 1, 'first', 1),
(9, 'Sarah Hayes', 'a8c65-sarah.jpg', '', 'Counsellor and Psychotherapist', '', 'MBACP (Accred), Post Graduate Certificate in Counselling and Psychotherapy', 'Sexual abuse, grief and loss, anxiety, stress, depression, self-esteem, eating disorders, relationship difficulties, domestic violence, anger and bullying', 'My therapeutic approach involves a combination of both counselling and psychotherapy. The aim of both is to promote positive change for the client to enable them to become the person they were meant to be and live a fully functioning life. I have 14 years experience as a therapist and I can offer you a professional and confidential counselling service.', 1, 'second', 1),
(10, 'Mike van Dijkhuizen  ', '74bb9-mike.jpg', '', 'Clinical Psychologist', '', 'BSc Econ, DipPsy, DClinPsy, CPsychol, MAPS, MNZCCP', 'Depression, grief, panic, obsessions and compulsions, trauma, worry, social anxiety, anger, borderline personality disorder, relationships, male sexual difficulties, sexual abuse, unwanted sexual behaviour, sexual identity', 'I have many years experience in providing counselling and psychological therapy to individuals and couples. I have worked in sexual health, mental health and forensic services. My therapeutic approach is cognitive behavioural therapy and mindfulness. That means, I provide a structured and supportive listening environment, focused on the issues that concern you, with practical interventions for managing your thoughts, behaviour and emotions. My aim is to promote your psychological well being and help you get in touch with what is personally important to you.', 1, 'first', 1),
(11, 'Timo Kojonen  ', '50586-timo.jpg', '', 'Psychologist, Expat Coach. ', '', 'M.Sc., M.Psych., MBA', 'Management of life changes, transition coaching, multicultural marriage counseling, cross-cultural counseling, expat counseling, career coaching', 'I founded this service ten years ago, and what started small, is today one of the world''s largest online therapy centers. Here you''ll find qualified help only. Personally, I am very experienced in helping people with life changes. Also, I am an expert in expatriate life and multicultural issues. My goal is to provide you with counseling that''s practical, reasonable, and oriented towards solutions.', 1, 'second', 1),
(12, 'Nicole M. Richard ', '915fe-nicole.jpg', '', 'Counselor, Psychotherapist', '', 'BA, MA Counseling & Spirituality, Certified Canadian Counselor (CCC)', 'Stress, anxiety, depression, management of life changes, grief and loss, family and relationship issues, self-esteem, healthy living support and spiritual distresses', 'I have 6 years of education and 2 years of clinical training in Counseling & Spirituality plus 30 years of personal life''s challenges. I am able to respond to your needs and help you in discovering your inner-self by fully understanding yourself, your interaction with others, your experiences, strengths and challenges. We can work in developing effective tools to help you move towards changes and healthier living. I welcome clients wishing to incorporate their spirituality into therapy. I respect your right to confidentiality, uniqueness, strengths and autonomy. My therapeutic approaches includes Person-centered, Brief Dynamic Psychotherapy and CBT.', 1, 'first', 1),
(13, 'Joanne Mander ', '45653-joanne.jpg', '', 'Relationship Counsellor', '', 'Bsc (Hons), MA, Relationship Therapy, MBACP', 'Anxiety, low self esteem,  depression, stress , relationship issues with\nindividuals, couples and families, same sex couples. Communication difficulties,dealing with conflict, difficulties following an affair, divorce, separation, loss, starting and maintaining a relationship, sexual problems survivors of sexual abuse', 'Life is a continuous journey of learning and discovery. Not all of lifes lessons or experiences though are positive and can leave us feeling stressed, anxious or depressed. When we are feeling this way it can have a huge impact upon our relationships with partners and family members, friends and work colleagues. I have found in my own journey through life that talking to a counsellor can help when struggling with relationship difficulties and responding to life events.  I can listen and help you to reflect upon how you respond in these situations and explore the way you relate to yourself and others. Exploring the the past and the present can provide you with a deeper understanding of your circumstances and if you choose,\n support you in making changes in your  life or to accept that some things cannot be changed.', 1, 'second', 1),
(14, 'Michael Mattson', 'c8b7b-michael.jpg', '', 'Marriage and Family Counselor', '', 'Psychotherapist, M.A.', 'Marriage counseling, family therapy, addictions recovery, grief and loss, depression, anxiety, PTSD, ADHD, shame and grace processing, struggling teens, life transitions and trauma recovery', 'I believe that we are not ment to go through this life alone, white knuckling our way through difficulty and hardship. I have experienced the power of counseling in my own life and marriage. This is why I sold my business, went back to school and became a marriage and family counselor so I could help others experience the power and freedom of a relationship worth fighting for. I specialize in helping transform relationships that are just surviving; to alive, accepting, and adapting relationships. I utilize a variety of therapeutic theories: Strength Based, Solution Focused, Emotional Focused, and Congenital Behavior Therapy. Start your journey towards experiencing hope and change today!', 1, 'first', 1),
(15, 'Lynn B. Brown  ', 'a3284-lynn.jpg', '', 'Professional Counselor', '', 'EdD, LPC', 'Stress, anxiety, self-esteem, life adjustment, relationship issues, work issues, personal growth', 'I believe in the inherent ability of all of us to heal and grow when provided the opportunity. As an experienced counselor, I am here to be your guide on the path of personal development. I offer solution-based and humanistic counseling in a safe, non-judgmental atmosphere. My desire to assist you in learning, healing, and growing.', 1, 'second', 1),
(16, 'Clara María Pavón', 'a156d-clara.jpg', '', 'Psicóloga', '', ' Maestría en Psicología Clínica y en Terapia Gestalt, España ', 'Ansiedad, depresión, baja autoestima, crisis existenciales, crecimiento personal, problemas de pareja, problemas familiares, somatizaciones, dolor físico, manejo del estrés, técnicas de relajación, adicciones', 'Mi orientación terapéutica es un acompañamiento a la persona en su proceso de cambio, aceptación y descubrimiento de sus propios recursos tanto internos como externos. Para ello trabajo con sus creencias y emociones, ayudando a la persona a ver la misma situación desde otra perspectiva.', 2, 'first', 1),
(17, 'Cecilia Gómez Cortés', '1fa5a-cecilia.jpg', '', 'Psicóloga', '', ' Licenciada en Psicología, México   ', ' Baja autoestima, problemas de relación social, depresión y tristeza, ansiedad, problemas de pareja y/o familiares, manejo del estrés,                                                        agorafobia, fobia social, habilidades sociales', 'Psicóloga clínica con posgrado en psicoanálisis, enfocada en la prevención y cuidado de la salud mental en niños, adolescentes y adultos. Independientemente de la atención psicológica proporcionada en espuesta\na eventos específicos, considero que es vital que todos contemos con un\nespacio de autoconocimiento y análisis con la finalidad de no repetir\nlos aspectos dolorosos de nuestro pasado y nuestro presente, de vivir en armonía con nosotros mismos y con todos aquellos que nos rodean (pareja, familia, amigos y colegas de trabajo)..', 2, 'first', 1),
(18, 'Paula Gómez Osorio', '70c7e-paula.jpg', '', 'Psicóloga', '', 'Profesional en Psicología. Diplomado en Terapia Gestalt, Colombia.', 'Dificultades personales, sentimientos de angustia, depresión, soledad, confusión, búsqueda de propósito, crecimiento personal, dificultades familiares y interpersonales, manejo del estrés y regulación emocional\n							 ', 'Mi orientación terapéutica se basa en ofrecer  acompañamiento en el camino de auto-conocimiento de mis consultantes. Me enfoco en la exploración de las capacidades y potencialidades para el cambio y en la aceptación de lo que no se puede cambiar. Para mi la terapia es la posibilidad de vivir la vida desde una perspectiva diferente a la que nos hace sufrir.\n', 2, 'first', 1),
(19, 'Liliana Traktenberg  ', '73532-liliana.jpg', '', 'Psicóloga', '', 'Licenciada en Psicología, Argentina   ', 'Ansiedad, angustia, stress, depresión, fobias, miedos, autoestima, duelos, perdidas,  sensación de soledad, conflictos familiares o de pareja, dificultades en las relaciones interpersonales, dificultades sexuales, trastornos alimentarios, dificultades en los proyectos personales', 'Con el tratamiento se puede lograr aliviar el sufrimiento, encontrando un camino propio y personal para resolver adecuadamente los  problemas que te aquejan. Es una oportunidad para mejorar los vínculos, potenciando la capacidad de amar, de crear y de disfrutar la vida plenamente. La clínica actual requiere que los profesionales contemos con múltiples herramientas, con apertura y flexibilidad para adaptar los enfoques teóricos a cada paciente. El porvenir se construye hoy.', 2, 'first', 1),
(20, 'Alicia Jimenez Villafuerte', 'b2eb3-alicia.jpg', '', 'Psicóloga', '', ' Licenciatura en Psicología, España ', 'Estados de ánimo, ansiedad, depresión, tristeza, habilidades sociales, problemas de relación (pareja, hijos, padres...), procesos de  pérdida y duelo, problemas de adicción\n', 'Mi objetivo es poder establecer desde un principio un clima de confianza donde puedas sentirte comprendido y no juzgado. Es a partir de este punto de colaboración, cuando podremos marcarnos pequeños retos que te ayudaran a superar los problemas que en estos momentos puedas tener.', 2, 'first', 1),
(21, 'Denis Frank Cunza Aranzábal', '0debf-frank.jpg', '', 'Psicólogo', '', 'Licenciado en Psicología, Perú', 'Ansiedad, depresión, manejo de la ira, fobias, miedos, resentimiento, angustia, crisis existenciales, conflictos familiares, habilidades sociales, técnicas de relajación, consulta vocacional', 'En terapia mi trabajo se centra en el concepto de que cada persona es un\nser individual, por ello me enfoco en el conocimiento de la historia  personal del cliente y en la evaluación psicológica. Considero que muchos\n de los problemas emocionales de las personas provienen de interpretaciones inadecuadas sobre su entorno y sobre sí mismos, interpretaciones que fueron adquiridas a lo largo de su vida y que pueden ser modificadas durante las intervenciones psicológicas a través de un trabajo en equipo en el que terapeuta y cliente se unen para el cambio.', 2, 'first', 1),
(22, 'Hugo Sanchez Ortiz', '6e70d-hugo.jpg', '', 'Psicólogo', '', 'Licenciado en Psicología, Diplomado en Psicoterapia Psicoanalítica; México', 'Depresión, sentimientos de soledad, baja autoestima, fobias, apatía, ansiedad, comunicación violenta, miedos, resentimiento, enojo, ansiedad,\nangustia, conflictos familiares y de pareja, crecimiento personal, relaciones          interpersonales, dificultad para establecer compromisos', 'La Psicología nos ayuda a conocer el origen de nuestros problemas, la forma de terapia que manejo se centra en eso, ayudar a resolver la base de los problemas, teniendo así una fortaleza en base a la experiencia, todo esto basado en un establecimiento de metas, una forma de trabajo flexible y una visión realista de expectativas y la forma de afrontar los problemas, todo esto para mejorar tu calidad de vida.', 2, 'second', 1),
(23, 'Pablo Espinel Casasbuenas  ', 'a3c83-pabloe.jpg', '', 'Psicólogo', '', 'Diplomado en familia, contexto y adolescencia. Psicólogo profesional, Colombia.', 'Depresión, adicciones, relaciones interpersonales, sentimientos de soledad, baja autoestima, apatia, miedos, trastornos de la personalidad', 'Me concentro en la reflexión lógica sobre los pensamientos que dan forma a la vida que seguimos. La pregunta por el alma que persigo durante cada consulta es la pregunta acerca de cómo vemos y entendemos nuestra realidad en un momento de la vida y de la historia. Esta reflexión consiste en entrar en el pensamiento tal como se presenta, vivirlo y comprender su sentido interno. Conocer las ideas que nos gobiernan permite una mirada distinta de los fenómenos, de aquello que nos sucede en el presente.', 2, 'second', 1),
(24, 'Daniela Izzo  ', '63be6-daniela.jpg', '', 'Psicóloga ', '', 'Licenciada en Psicología, Uruguay', 'Conflictos de pareja, interacción padres e hijos, niños con dificultades conductuales y de aprendizaje, sexualidad Infantil, angustia, ansiedad, depresión, autoestima, grupo familiar del paciente terminal, procesos de duelo', 'Te ofrezco la posibilidad de recibir el apoyo y asesoramiento psicológico y espiritual que te permitirá posicionarte de un modo saludable ante las dificultades y conflictos que vives cotidianamente. Facilitaremos que fortalezcas y crezcas interiormente, que avances en tus relaciones interpersonales y alcances una mejora en tu calidad de vida', 2, 'second', 1),
(25, 'Celia Chiquet Gollaz  ', '82e52-celia.jpg', '', 'Psicóloga', '', 'Licenciada en Psicología, México', 'Depresión, sentimientos de soledad, baja autoestima, relaciones sociales inadecuadas, apatía, ansiedad, comunicación violenta, miedos, resentimiento, enojo, ansiedad, angustia, celos, conflictos familiares y de pareja, crecimiento personal, aceptación de enfermedades físicas, dificultad para establecer compromisos', 'Mi enfoque terapéutico va dirigido a la relación de ayuda, aceptación y descubrimiento de los recursos personales para lograr la solución de conflictos desde su capacidad, respetando sus alcances y limites para la solución. Aprender a utilizar los recursos externos para un logro eficiente y dirigido al logro de sus expectativas. Sugiero al paciente establecer metas a corto plazo y revisarlas durante las sesiones, realización de tareas y ejercicios enfocados a la sensación de satisfacción y bienestar personal.', 2, 'second', 1),
(26, 'Pablo Reina  ', '3418b-pablo.jpg', '', 'Psicólogo', '', 'Maestría en psicología, España', 'Depresión, baja autoestima, soledad, problemas de ansiedad, fobias, estrés, pánico, adicciones, problemas de pareja, relaciones sociales y familiares, dificultades de concentración, asistencia multicultural, consulta vocacional', 'Atención psicológica es el espacio donde te ayudamos a superar la adversidad de forma constructiva. Eso logramos identificando el origen de las problemas de forma realista, aprovechando las fortalezas que ya posees y desarrollando nuevos hábitos que mejor se adapten a tus circunstancias actuales. Mi labor es facilitarte el proceso de crecimiento personal.', 2, 'second', 1),
(27, 'Sónia Moura Sequeira', '6fd03-sonia.jpg', '', 'Psicóloga, Especialista em Terapias Complementares e Alternativas', '', 'Universidade Lusíada - Porto', 'Dificuldades de Relacionamento, Perturbações de Humor e de Ansiedade, \nDepressão,Crises Pessoais e Familiares (luto; problemas conjugais), Dificuldades nas Relações Interpessoais, Pânico (Crises de Ansiedade), Fobia, Perturbações Sexuais; Perturbações do Sono, Dificuldades Alimentares,', 'Quando não somos capazes de superar os problemas, o melhor é pedir ajuda a um profissional da área da saúde mental. O atendimento psicológico irá ajudá-lo a ter outra perspectiva da realidade envolvente, dos outros e de si próprio, para que tenha outra força para enfrentar a vida e as formas de lidar com o stress. Dou primazia à terapia cognitivo comportamental, onde trabalho os pensamentos irracionais que podem estar a bloquear as emoções,ou a aprendizagem, entre outros.', 3, 'first', 1),
(28, 'Izaura Vale  ', '18ed3-izaura.jpg', '', 'Licenciada em psicologia', '', ' ', 'Orientação para os problemas relacionados com ansiedade, stress, auto-estima, depressão, dificuldades sexuais, dificuldades de relacionamento, medos, perdas (por morte, separação ou por catástrofes), obesidade, adoção, orientação vocacional, ', 'Com a terapia on-line, encontramos um mecanismo próprio e individual de solucionarmos os nossos conflitos, angústias e dificuldades, sejam elas antigas ou recentes. Hoje já está mais que comprovado o benefício da terapia, então aproveite e desfrute de mais uma chance de obter bons resultados na solução do seu sofrimento. Sofrer hoje em dia, não vale. Vamos lutar por um atendimento que possibilite resolver ou aliviar as aflições. Cada pessoa é única, portanto cada tratamento é único e uniforme.', 3, 'first', 1),
(29, 'Paulo Silva ', '5d0c7-paulo.jpg', '', 'Psicólogo Clinico e Psicoterapeuta', '', 'Cédula nº 122273, Portugal', 'Psicoterapias de Aconselhamento / Coaching; Ansiedade; Ansiedade Social; Ataques de Pânico; Baixa Auto-estima; Dependência Emocional; Dependência Substâncias; Depressão; Fobias;   Morte, Perda, Luto; Obsessões / Compulsões; Pós Stress Traumático; Problemas Amorosos; Tristeza; Problemas Existenciais; Relações Interpessoais; Sentido de Vida; Solidão / Isolamento, ', 'A decisão de procurar apoio psicológico nem sempre é fácil de tomar.O bem-estar do utente e o sucesso da relação terapêutica, é a minha preocupação durante todo o processo a desenvolver, com base na empatia, na relação de confiança e confidencialidade, tendo por base a Psicoterapia Cognitiva e Comportamental com integração dos Modelos Existencial, Relacional e Experiencial. Procure-me como se pode ajudar...', 3, 'second', 1),
(30, 'Cesar Pires de Mello Netos  ', '09db0-cesar.jpg', '', 'Psicoterapeuta holístico ', '', ' ', 'Desequilíbrios emocionais, de ansiedade, autoestima,  compulsão/obsessão por sexo, comida, compras, codependência.  Problemas relacionados ao uso abusivo ou dependência de alcool ou outras drogas,  \n', 'O aconselhamento é um tipo de terapia de apoio, que se opõe a psicoterapia de aprofundamento, e é baseada na solução de problemas e na tomada de decisões. O Psicoterapeuta trabalha com o cliente no sentido de ajudá-lo,de forma diretiva, a tomar a melhores decisões em sua vida prática. Este trabalho é fundamental, pois uma das mais importantes consequências dos desequilíbrios gerados pela dependência de álcool e outas drogas, desequilíbrios alimentares, codependências, é a disfuncionalidade que a pessoa tem diante da vida.', 3, 'first', 1),
(31, 'Elena Stein-Sparvieri  ', '10be2-elena.jpg', '', 'Conselheira', '', 'Mestre em Problemas e Patologias do Desvalimento. Doutoranda em Psicologia', 'Problemas para confrontar crises individuais, intersubjetivas de casal e família, dúvidas e conflitos concernentes à formação acadêmica, dificuldades na carreira profissional e no desempenho de roles na empresa, e problemas institucionais. Dificuldades para superar problemas e patologias relacionadas com o desvalimento surgido a partir de processos traumáticos, de transtornos psicossomáticos e de doenças crônicas, ', 'A orientação psicológica online é um processo de acompanhamento breve e especifico, focado nas necessidades e nos recursos pessoais do cliente. Neste processo o conselheiro mantém uma comunicação privada, segura e confidencial com o cliente. A terapia online fornece um suporte psicológico ao qual o cliente tem acesso em todo momento e em todo lugar, sem necessidade de deslocamento. ', 3, 'second', 1),
(32, 'Helena Vuoriheimo  ', '972d5-helena.jpg', '', 'Vaativan erityistason psykoterapeutti  ', '', 'Sairaanhoitaja (ylempi AMK)', 'Mielialan lasku ja alavireisyys, stressaavat tai muuten haasteelliset elämäntilanteet, ahdistus, muutostoiveet elämässä, perheen kriisit, parisuhdeongelmat, murrosikäisten nuorten tuomat kasvatushaasteet, vanhemmuus, työelämähaasteet, oma tai läheisen päihteiden väärinkäyttö ja muut riippuvuudet, esim. tietokone- ja rahapeliongelmat, erilaiset pelot, pakko-oireet, syömishäiriöt, univaikeudet, pariterapia', 'Lähestymistapani ongelmiin on voimavarakeskeinen. Voimavaralähtöiset\nmenetelmät lähtevät ajatuksesta, ettei vika olekaan ihmisessä vaan\nratkaisuyrityksissä, joilla vaikeuksia on yritetty ratkaista. Yleinen\nsanonta kuuluukin, älä tee sitä, mikä ei toimi, vaan tee jotain uutta.\nYhdessä pohtien uusi näkökulma ja uudet ratkaisut voivat löytyä, ja\ntyytyväisyys elämään kasvaa.', 4, 'first', 1),
(33, 'Iida Nordling  ', '40605-iida.jpg', '', 'Psykologi, PsM', '', ' ', 'Stressinhallinta, pelot, masentuneisuuden ja ahdistuneisuuden käsittely, mielialan muutokset, traumakokemusten käsittely, elämäntapamuutokset, itsetuntokysymykset ', 'Lähestymistapanani on vaikeissa tai haastavissa tilanteissa pyrkiä löytämään uusia näkökulmia ja ajattelutapoja vaikeiksi koettuihin tilanteisiin. Omien ajatusten, uskomusten ja arvojen läpikäynti kognitiivisen psykoterapian ja hyväksymis- ja omistautumisterapian (esim. arvotyöskentely) menetelmiä hyödyntäen auttaa asiakasta löytämään mm. uudenlaisia tapoja pukea sanoiksi vaikeita kokemuksia, jotka voivat ohjata asiakkaan elämää toivomiensa ratkaisujen suuntaan.', 4, 'first', 1),
(34, 'Timo Kojonen  ', 'c0019-timo.jpg', '', 'Psykologi. FM, PsM, MBA', '', 'Therapion Consulting, tj', 'Suuret elämänmuutokset, itsetunnon kysymykset, oman elämän hallinta, henkilökohtaiset kriisit, arkipäivän jaksaminen ja positiiviset rutiinit, luovuus ja stressin sietäminen, monikulttuurisuus ja ulkosuomaisten hyvinvointi. Työelämän aiheet: uravalinta, työelämässä jaksaminen, monen alan osaajien työllistyminen, alan vaihto aikuisena, uravalmennus', 'Psykologina voin olla avuksi, jos oma elämä on murrosvaiheessa ja uusi suunta vielä haussa. Tunnen hyvin tämän ongelmakentän samoin kuin sen, että vaihtoehtoja on oikeasti paljon enemmän kuin aluksi tulee mieleen tai mitä perhe, ystävät tai muu lähipiiri saattaa ehdottaa tai hyväksyä. Ihmisenä olen oman tieni kulkija, mitä piirrettä kannustan myös asiakkaitani kehittämään. Itsenäinen päätöksenteko, oman elämän hallinta, oman itsensä hyväksyntä ja kehittäminen - siinä muutamia lempiteemojani.', 4, 'first', 1),
(35, 'Pia Puolakka ', '776be-pia.jpg', '', 'Psykologi, PsM', '', ' ', 'Ahdistuneisuus- ja mielialaongelmat, traumakokemusten käsittely, skeematerapia persoonallisuushäiriöiden ja tunne-elämän ongelmien selvittelyssä sekä haitallisten uskomusten muuttaminen, itsetunto-/narsistinen problematiikka, riippuvuudet ja päihdeongelmat, rentoutuminen, stressinhallinta, haitalliset käyttäytymismallit, elämäntapamuutokset', 'Ihmistä ohjaavat toiminnassaan menneisyydessä rakentuneet ja alitajuisesti vaikuttavat ajattelu- ja toimintamallit, erilaiset tunnelukot, joiden avaaminen johtaa psyykkisten (ja fyysisten) oireiden helpottumiseen. Näistä haitallisista malleista ja uskomuksista irtautuminen sekä uusien vaihtoehtoisten mallien muodostaminen on mahdollista, jolloin elämänlaatu nousee. Kognitiivisen psykoterapian menetelmin (mm. skeematerapia) on saatu hyviä tuloksia monien psyykkisten ongelmien hoidossa. Uskon ihmisen voivan muuttaa lähes mitä tahansa itsessään, kun hänen halunsa muuttua on aito ja muutosta estävät uskomukset työstetty.', 4, 'first', 1),
(36, 'Minna Savola  ', '84fca-minna.jpg', '', 'Psykologi, PsM', '', 'Psykoterapeutti (erityistason perheterapia)', 'Pari- ja ihmissuhdehaasteet (tunnekeskeinen painotus), perheen kriisit, perheen kehitysvaiheisiin liittyvät haasteet, pariterapia, lapsen psyykkisen kasvuun ja kehitykseen liittyvät huolet (erityisenä osaamisen alueena), lapsen kriisit ja traumat, vanhemman ja lapsen myönteisen vuorovaikutuksen vahvistaminen', 'Ihmisen hyvinvoinnin ja mielenterveyden perusta luodaan lapsuudessa. Painotan työssäni lapsi- ja perhekeskeisyyttä. Parityöskentelyssä käytän lähestymistapanani tunnekeskeisen parisuhdetyöskentelyn periaatteita. Hankaliinkin elämänvaiheisiin on mahdollista löytää uusia näkökulmia ja tapoja toimia; hyvän voi löytää ja sitä voi vahvistaa.\n							', 4, 'second', 1),
(37, ' Johanna Blåfield', '8457f-johanna.jpg', '', ' Psykologi, PsM  ', '', 'Psykoterapeutti (erityistason perheterapia), Solmuja parisuhteessa parineuvoja', 'Parisuhteen solmutilanteet, oman psyykkisen kasvun vahvistaminen Mindfulness-taitojen avulla, nuorten jännityksen hallinta, lapsen psyykkiseen kasvuun ja kehitykseen liittyvät kysymykset ja huolet, vanhemman ja lapsen välisen myönteisen vuorovaikutuksen vahvistaminen, adoptio- ja uusperheen tuomat ihmissuhdehaasteet ', 'Alamme usein kiertää samaa vanhaa negatiivista kehää ihmissuhteissamme, pääsemättä siitä omin avuin ulos. Keskustelut ulkopuolisen kanssa voivat tuoda tarvittavan ensimmäisen askeleen kohti muutosta ja toisenlaista käyttäytymistapaa. Ihmisellä on tarve olla kiintymyssuhteessa toiseen. Sille luodaan pohjaa jo vauva- ja lapsuusvaiheessa. Voimme vaikuttaa omaksumiemme kiintymyssuhdetyylien esilletulemiseen nykyisissä ihmissuhteissamme, kun tiedostamme ne keskustelujen avulla. Avain onnelliseen elämään olla tulla hyväksytyksi itse itselleen sellaisena kuin on. Tämä vaatii usein ensin sen, että joku ymmärtää ja kuulee tarinamme sitä jäsentäen ja toisenlaisia näkökulmia tarjoten.', 4, 'second', 1),
(38, 'Lasse Jalonen  ', '6a89c-lasse.jpg', '', 'Erityistason kriisi- ja traumapsykoterapeutti', '', ' ', 'Erilaiset kriisitilanteet ja traumat, ahdistus, masennus, yksinäisyys, mindfulness-harjoitteet keskittymiskyvyn parantamiseksi ja mielen rauhoittamiseksi', 'Lähestymistapani on asiakasta arvostava ja yhdessä pohdimme ratkaisut elämän erilaisiin kriisitilanteisiin. Keskusteluin ja oikeiden kysymysten sekä kuuntelun avulla usein aukeaa tie elämässä eteenpäin. Ammattilaisen apu ja tukea antava palaute auttaa usein näkemään uusin silmin oman elämän solmukohdat ja löytämään niille toimivia ratkaisuja.', 4, 'second', 1),
(44, 'Наталия Ягмур - Nataliya Jagmur', 'b7343-nataliya.jpg', '', 'Психолог', '', '', 'Конфликтология - причины, типы и динамика конфликтов, пути, методы, средства их предупреждения и регулирования. Отношения с противоположным полом; отношения с близкими людьми;сложные жизненные ситуации;отношения в коллективе; семейные отношения. Психологическая адаптация иммигрантов.', 'Особенность моего подхода и моей идеологии является ориентация на реальную помощь человеку. Моя цель помогать клиенту (пациенту) а не просто консультировать. Практическое приложение конфликтологии вызвано уже тем простым житейским обстоятельством, что, соглашаясь с распространенным утверждением “худой мир лучше доброй ссоры”, люди, тем не менее, не могут избежать дисгармонии, обходиться без конфликтов.', 12, 'first', 1),
(45, 'Светлана Фогель - Svetlana Fogel', '75f94-svetlana.jpg', '', 'Психотерапевт', '', '', 'Стрессовые ситуации, депрессия, психологически трудный период в семье, на работе, в обучении, сложности адаптации. Коучинг личной эффективности. Психотерапия фокусированная на решение.', 'Смысл наших кризисов состоит не в том, чтобы запугать или сделать покорными судьбе, но в том, чтобы побудить нас измениться, излечиться и расти дальше.', 12, 'second', 1),
(47, 'Elif Taştan', 'd41ef-elif.jpg', '', 'Aile Terapisti ve Psikoterapist', '', '', 'Bireysel terapi, ilişki ve çocuk sorunları, aile terapisi, depresyon, davranış ve uyum bozuklukları, kaygı bozuklukları, panik atak, travma, öfke kontrolü, stres yönetimi, performans geliştirme\n\n', 'Soruna çok farklı yönlerden yaklaşıp, farklı bakış açısıyla, yaşadığınız bir krizi çözmek, hayatınızda var olan stresi ortadan kaldırıp, değişim sürecinde çözümler üretmenizde size yardım edebilmem için hemen benimle iletişime geçebilirsiniz.', 13, 'second', 0),
(48, 'Hisano Matsuzawa - 松澤寿乃', '00137-hisano.jpg', '', ' ', '', 'カウンセラー（NYU大学院教育学部心理学科カウンセリングコース修了）、国際トラウマ学コース修了', '過去のトラウマ、うつ、留学、異文化•環境への不適応、国際結婚、対人関係、夫婦関係、親子関係、子育て、ママ友関係など。', 'カウンセラーの私にできるのは、悩んでいる人を「助ける」のではなく、その人の心の奥にあるもやもやを整理するお手伝いをしながら、自分にとって何がベストなのかを一緒に考えて行くことだと思っています。不適応や対人関係だけでなく、トラウマに関しての知識、経験がありますので、災害、レイプ、犯罪に巻き込まれた等のトラウマに関しても一緒に取り組んでいけたら、と思っています。', 14, 'first', 1),
(49, 'Simon R. Downes - サイモン ダウンズ  ', '17253-simon.jpg', '', ' ', '', ' 筑波大学発達心理学博士', '不安・うつ症状・恋人/夫婦/家族問題・対人関係・学習障害・特にお子さんへの英語教育に関するご質問。', '心を和らげる最初のステップは、専門のカウンセラーと話すことです。家族や友人、または会社の同僚以外の方と話すことは、恐怖心なく、正直にご自分の気持ちを伝えられます。', 14, 'second', 1),
(50, 'Colinette Kwong  ', '7efc0-colinette.jpg', '', 'Counselor', '', 'Master in Counseling, Master of Medical Science, Certified NLP practitioner', 'Stress, anxiety, depression, relationship problems, self-esteem, grief and loss, post-traumatic problems, setting and achieving personal goals, expatriate life situations', 'You are not alone, I am here to listen. My therapeutic approach includes counseling, NLP, and psychotherapy. I will be able to do counseling in both English, Cantonese and Mandarin. Everyone is climbing their own mountain, however if I look at your mountain on my side, I might discover something different. Therefore, share your problems with me and l will provide you with support and we get over the issue together.', 15, 'first', 0),
(51, 'Dennie Hilding', '1a8ab-dennie.jpg', '', 'Legitimerad psykolog, mental tränare', '', '', 'Personlig utveckling, psykologisk coachning, nedstämdhet och depression, grubblande/oro, ångestproblematik, stresshantering, utmattningssyndrom, OCD, fobier, prokrastinering (uppskjutarbeteende), KBT, Mindfulness', 'Jag är legitimerad psykolog och vidareutbildad i kognitiva beteendeterapier och arbetar både utifrån traditionell och tredje generationens KBT. Har arbetat med specialistvård (klinisk psykologi och psykiatri) sedan 2008. Jag lägger stor vikt vid att hålla mig uppdaterad och tillämpar alltid evidensbaserade metoder och tekniker i min dagliga psykologpraxis. Utöver det kliniska området har jag erfarenhet som mental tränare åt elitidrottare, artister och företagsledare.', 5, 'first', 1),
(52, 'Оксана Тё - Oksana Tyo', '8eb0a-oksana.jpg', '', 'Психолог', '', '', 'Личностный рост, неуверенность в себе, отношения с противоположным полом, трудности на работе, депрессия и стрессы, психологические травмы. Детско-родительские отношения, супружеские конфликты, трудности воспитания детей. Культурный шок, межкультурные браки, кризис идентичности..', 'Жизнь человека, как дерево, у которого есть корень (прошлое), ствол (жизненная позиция, я-концепция), ветки (отношения с противоположным полом, учеба, работа, друзья, дети и т.д), листва и плоды (показатели успешности в той или иной сфере). Я помогаю увидеть, как говориться, откуда корни растут, что питает дерево, почему дерево выглядит не здоровым или почему мало или нет плодов. Каждый человек уникален и обладает огромным потенциалом. Консультация это путь двоих, психолога и клиента. Консультация может помочь человеку осознать причины жизненных затруднений и с помощью ресурсов и потенциала, которым обладает каждый человек, найти выход из ситуации. В моей консультационной практике я имела радость видеть как дерево росло, расцветало и приносило плоды.', 12, 'first', 1),
(53, 'Игорь Тивяков - Igor Tivjakov', '45d4a-igor.jpg', '', 'Коуч', '', '', 'Вопросы карьерного роста и взаимоотношения с работодателем. Бизнес-психология и весь комплекс проблем, связанных с персоналом. Карьерный коучинг. Оптимальное делегирование полномочий в бизнесе – антибюрократические преобразования в структуре организации. Психологическая, экономическая и физическая безопасность и их взаимосвязь. Резервные возможности психики человека. Трудности взаимоотношений с другими и с самим собой. Кризис среднего возраста. Характерные синдромы участников боевых действий. Практическая психология в повседневной жизни. Карьера - выбор, изменения, развитие.', 'Неоднократно убеждался, что человек обычно гораздо сильнее и мощнее во всех смыслах, чем он сам о себе думает. И я намерен это показать каждому своему клиенту. Психологическая работа – это именно работа, и подчас весьма трудная. Но мы будем прилагать усилия не ради самого процесса приятного общения – а для достижения конкретного положительного результата.', 12, 'second', 1),
(56, 'Michiel Van Dijkhuizen', 'd5381-mike.jpg', '', 'Klinisch Psycholoog', '', 'BSc Econ, DipPsy, DClinPsy, CPsychol, MAPS, MNZCCP', 'Depressie, verdriet en verlies, paniek, obsessies en compulsies, trauma, angst, sociale fobie, woede, borderline persoonlijkheidsstoornis, relatieproblemen, mannelijke seksuele problemen, seksueel misbruik, ongewenst seksueel gedrag, en seksuele identiteit', 'Ik heb vele jaren ervaring in het verstrekken van counseling en psychologische therapie voor individuen en echtparen. Mijn werkervaring is in seksuele gezondheid, geestelijke gezondheid en forensische diensten. Mijn therapeutische benadering is de cognitieve gedragstherapie en mindfulness (bewuste aandacht). Dat wil zeggen, ik zorg voor een gestructureerd en ondersteunend luisterenmilieu, gericht op de onderwerpen die jou aangaan, en het toepassen van praktische interventies voor het beheren van je gedachten, gedrag en emoties. Mijn doel is jou psychische welzijn en het benaderen van dat wat voor jou persoonlijk belangrijk is.', 8, 'first', 0),
(57, 'Anja Groer', '831e8-anja.jpg', '', 'Dipl.-Psych., Systemische Therapeutin', '', '', 'Selbstzweifel, Depression & Traurigkeit, Ängste & Panik, Trennungen, Einsamkeit, Lebensbewältigungsschwierigkeiten, Beziehungs- bzw. Partnerschaftsprobleme, Familiäre Probleme & Erziehungsfragen, Trauer & Verlust, Schmerzen & psychosomatische Beschwerden, Arbeitsstörungen & Mobbing, Sexualität, Überforderung & Stress, Trauma, Gewalt, Sucht, Biographische Fragen', 'Es gibt Zeiten, in denen Ihre Seele leidet, Sie sich beispielsweise hilflos, traurig, erschöpft oder ohnmächtig fühlen, oder Sie in Ihrer Partnerschaft, Familie aber auch im Beruf gekränkt wurden oder Sie einfach unzufrieden bzw. unglücklich sind. Ich möchte Sie einladen, mit mir über Ihre Sorgen und Probleme zu sprechen. Die Lösung Ihrer Probleme schlummert oftmals in Ihnen selbst. Ich möchte Sie darin unterstützen, Ihre individuellen Lösungen zu erspüren, neue Wege zu finden, ihren Gefühlen Raum zu geben, Ihnen bei Ihren Entwicklungsaufgaben und Entscheidungen Hilfestellung zu leisten, Ihre Ressourcen bzw. Stärken (wieder) zu finden oder sich neu zu erfinden.', 9, 'first', 1),
(58, 'Isabelle Nail', '395b9-isabellenail.jpg', '', 'Psychothérapeute', '', 'Diplômée en psychothérapie analytique (Jung). Diplômée en psychogénéalogie', 'Mal-être général et diffus, manque de confiance en soi, dépression, troubles anxieux, troubles de la personnalité histrionique, dépendance affective, psychosomatisations, troubles obsessionnels compulsifs et phobiques, addictions, problèmes de couples, harcèlement moral et maltraitance psychologique et physique, problèmes liés à l''adoption, problèmes de communication', 'Je propose de vous accompagner et de vous guider dans les profondeurs de votre personnalité. Cette exploration inclut la compréhension de votre histoire familiale sur plusieurs générations afin de devenir libre en laissant ce qui ne vous appartient pas en propre mais a pu conditionner vos comportements et croyances et générer un mal-être. Je propose également de vous aider à entendre et intégrer les messages de vos rêves, le sens des synchronicités (coïncidences signifiantes) et des signes qui jalonnent votre vie.', 10, 'first', 1),
(59, 'Maria Magdalena Schlett Capanna', '8589b-maria.jpg', '', 'Psicologa', '', 'Dott.ssa in psicologia, Università La Sapienza di Roma. EuroPsy (EFPA)', 'Stress, trauma, lutto, depressione, solitudine, mancata fiducia in sé stessi, dipendenze da droghe, disordini alimentari, mobbing, problemi di comunicazione, consulenza per famiglie, coniugi e partner, consulenza sessuale, consulenza per genitori, problemi della terza età.', 'Paragono volentieri il mio lavoro con quello di un artista. Come lui, così creo anche io dal caos. Succede spesso che le stesse situazioni che ci fanno soffrire, offrono invece delle grandi possibilità per dei cambiamenti. Non importa se lavoro come Counselor, Coach, Psicologa dell’Emergenza, Playtherapist, Insegnante, Trainer o Formatrice, il mio obiettivo è sempre lo stesso: uscire da un vicolo cieco e ripristinare l’armonia andata persa. Quante volte pensiamo di essere nel giusto e che l’altro deve cambiare, ma questo piacere l’altro raramente ce lo fa. Cambiando noi stessi però, l’altro non ha scelta. La prendo volentieri per mano per percorrere insieme un pezzo di strada in un momento difficile della Sua vita. Insieme potremmo aprire delle porte nascoste per vedere i Suoi problemi da nuovi punti di vista e trasformare gli stessi per fare della Sua vita un’opera d’arte.', 11, 'first', 0),
(60, 'Özgür Seyfi Denli  ', 'd1a43-ozgur.jpg', '', 'Uzman Psikolog ve Psikolojik Danışman   ', '', '', 'Bireysel danışmanlık, Evlilik terapisi, Kariyer Danışmanlığı, depresyon, aile yönetimi, ergen psikolojisi, okul fobisi, dikkat eksikliği, hiperaktiflik, okul başarısı, eğitim danışmanlığı\n', 'Yaşamda bazı anlar olur, içinde bulunduğunuz durumdan kurtulamadığınızı hissedersiniz. Kimse sizi anlamıyordur veya herkes sizin üzerinize geliyordur. İçinde bulunduğunuz durum artık sizi oldukça olumsuz etkilemeye başlamıştır. İşte bu anlarda farklı bir bakış açısı veya farklı adımlar sizleri kurtaracaktır. Gizliliğin esas olduğu, ferahlama adımını yaşamak ümidiyle; Sizleri dinlemek benim için bir onur olacaktır.', 13, 'first', 0),
(61, 'Nil Alptekin Moore  ', '269e8-nil.jpg', '', 'Uzman Psikolog ve Psikolojik Danışman, Ed.D ', '', '', 'Kaygı, panik atak, öfke, depresyon, sosyal fobi, dikkat eksikliği, travma, evlilik problemleri, ayrılık/boşanma, bireysel, çift ve aile terapileri\n', '25 yılı aşkın mesleki deneyim sürecinde danışanlarımın problemlerinin çözümlerinde yardımcı olduğum gibi çift ve aile ilişkilerinin gelişmesinde ve bireylerin yaşam amaçlarına ulaşmalarında destek oldum. Özel ilgi alanlarım duygusal sıkıntıları olan yetişkin ve gençler, ilişki güçlükleri, ve yaşam değişikliklerinle ilgili stres ve kaygı olup bu konularda yardımcı olmaktır. Danışanlarımla olan kişisel ilişkilerimde onların kendilerine hedef belirlemelerinde, stres, kaygı ve depresyonla baş etmelerinde ve iletişim becerilerini geliştirmelerinde yardımcı olmaktayım. Danışanlarıma verdiğim destek ve önerilerle onların yaşam memnuniyeti açısından anlamlı ve gerekli değişiklikleri yapmalarını sağlıyorum.', 13, 'first', 0),
(62, ' Elif Angel Raynor', '8f7ad-elif-angel.jpg', '', 'Psikolog ve Psikoterapist', '', '', 'Bireysel terapi, kişisel gelişim, depresyon, panik atak, travma, alkol ve uyuşturucu bağımlılığı, sigara bağımlılığı, korkular, öfke, adli mahkeme kararı ve bireysel suçlu terapisi, grup terapisi', 'Yaşamdaki zorlukları bazen kendi başımıza çözemeyip yardıma ihtiyaç duyabiliriz.\nBöyle durumlarda bir uzmana başvurmak en doğrusudur.  Uzmanlik alanım depresyon ve panik atak ile sınırlı değildir. Bağımlılık, davranış bozukluğu ve sosyal, kariyer ve eğitim ile ilgili yaşadığınız problemlerde de en profesyonel yöntemlerle size yardımcı olacağıma eminim. Daha sağlıklı, başarılı ve daha mutlu yarınlara.', 13, 'first', 0),
(63, 'Recep Canel  ', 'e20a0-recep.jpg', '', 'Psikolojik Danışman, MA', '<blockquote>\n	<p>\n		&nbsp;</p>\n</blockquote>\n', ' ', 'Bireysel danışmanlık ve rehberlik, her türlü bağımlılıklar, bağımlı yakınlarına destek, manevi arayışlar, kimlik ve inançla alakalı sorunlar, adaptasyon zorlukları, çoçuk terbiyesi ve eğitimi, aile içi iletişim.\n', 'İnsan günlük hayatta ve yaşadığı ortamda zaman zaman belirli güçlüklerle karşılaşmaktadır. Bunlar hafif yada ağır olabilmekte, şahısla, yakınlarıyla ve çevresiyle alakalı olabilmektedir. Geniş iş tecrübem ve hastalarımla birlikte çözüm üretebilme kabiliyetim ve ayrıca bağımlılık ve manevi rehberlik alanındaki 15 yıllık iş deneyimimle size de yardımcı olmayı ümit ederim.', 13, 'second', 0),
(64, 'Thomas N. Malme  ', '300b5-thomas.jpg', '', 'Autorisert psykolog', '', '', 'Angst, nedstemthet, depresjon, bekymringstanker, uro, søvnvansker, samlivsproblemer, stress, utbrenthet, fobier, unngåelsesatferd, coaching og selvutvikling', 'Som psykolog har jeg erfaring med å veilede og hjelpe mennesker i vanskelige livssituasjoner, som ønsker endring og et bedre liv. Jeg jobber ut fra kognitiv atferdsterapi, som baserer seg på evidensbaserte metoder og teknikker for å endre negative tanke - og atferdsmønstre. Psykiske vansker kan oppleves som svært belastende. Med litt hjelp og rådgivning kan en raskt oppnå en bedring i livskvalitet. Jeg har erfaring fra både spesialisthelsetjeneste og privat praksis, og er faglig oppdatert. Jeg legger stor vekt på å møte mine klienter med empati og respekt.', 6, 'first', 0),
(65, 'Cathrine Lønborg Andersen', '692f6-cathrinelonborgandersten.jpg', '', 'Uddannet psykoterapeut', '', '', 'Familierelaterede problemer, problemer i sammenbragte familier, skilsmisse problemer, parforhold, teenage problemer, sorg, tab, vrede, bliv bedre til at stå ved dig selv, følelse af indre uro, følelse af, at stå ved en skillevej.', 'Har du udfordringer i dit liv, som du synes er svære at tackle alene? Har du lyst til at få hjælp til at komme videre? Det kan fx være udfordringer i dit parforhold, i din familie, på din arbejdsplads, med dine børn, med dine veninder eller med din ekskæreste. Det kan også være, at du mærker en indre uro, som du gerne vil af med eller det kan være, at du simpelthen bare ikke kan finde glæden i livet. Jeg arbejder emotionsfokuseret og med en oplevelsesorienteret tilgang, hvilket kort fortalt betyder, at jeg arbejder med emotioner (følelser) og tager udgangspunkt i der, hvor du er lige nu. ', 7, 'first', 0),
(66, 'Mayumi Nakamura - 中村まゆみ', '40df0-mayumi.jpg', '', ' ', '', '臨床心理学博士、Licensed Clinical Psychologist, MA, Psy.D', '鬱、不安神経症、適応障害、劣等感、睡眠障害、病気に対する不安、パニック障害、トラウマ、ストレス、家族不和、対人関係、恋愛不安、夫婦関係、異文化結婚、育児問題、留学、海外転勤関連サポート。', '認知行動学をベースに、アドラー療法、アタッチメント療法、弁証法的行動療法を取り入れ、本来の自分を取り戻したい、自信を取り戻したい、今の状況を克服したい、そして、未来に希望を持ちたい、あなたをサポートします。　一人で、不安を抱え込まないで、どうぞご気軽に、ご相談ください。', 14, 'first', 1),
(67, 'Takashi Nishikura - 西倉　孝', '2414c-takashi.jpg', '', ' ', '', 'カウンセラー（教育学修士）', '不登校、 吃音、特別支援を必要とする子どもたち（集団行動ができない。簡単な読み、書き、計算ができない。授業中落ち着いてイスに座れない）の対応、不安や緊張と向き合うこと。いじめ、ひこもり、ストレス。度胸をつける方法。', '話ができるように、心地よい人間関係を相談者と作りたいと思います。自分ができたという成功体験をいっぱい増やしていきましょう。それが自信につながり、困難を乗り越えることにつがながると思います。そのサポートをさせていただけたらと思います。', 14, 'first', 1),
(68, 'Hisae Takada - 高田尚恵', '7b115-hisae.jpg', '', '', '', 'ライフコーチ（心理学学士、メンタルヘルスカウンセリング修士）', 'ストレス、睡眠障害、時間管理、感情の浮き沈み、留学における悩み（言語、文化、会話などの違い）、自信や自尊心、人間関係、高機能自閉症・アスペルガーの子供への対応、摂食障害（過食・拒食症）、対人恐怖症、過度の不安症、性的志向・同性愛。', '悩みや困難を受け入れ向き合うことは、皆さんの強さです。自分の考えや感情を話すことは、気づきを深め、自信や可能性を高めるきっかけとなります。皆さんがお話しやすい雰囲気を目指し、困難を乗り越えるサポートをさせていただけたらと考えています。', 14, 'first', 1),
(69, 'Chinatsu Tashiro - 田代千夏', 'e57fa-chinatsu.jpg', '', '', '', 'カウンセラー（社会学士、カウンセリング修士、代替療法セラピスト）', '自己理解（と共に歩きだす）、毎日の中の苦しさ・生きる意味、選択・決断に際する迷い、扱いに困っている感情、不安、無気力、無力感、絶望感、孤独、対人関係での悩み、環境の変化への対応、海外生活での困難。', '自分自身のことなのに、わからないことって意外とあるのではないでしょうか。なぜ繰り返してしまうのか。こんな風に感じてしまうのか。やめたいのにやめられなかったり、したいのにできなかったり。何を求めているのか自体がわからなくなっていることもあるかもしれません。そんなとき、驚くほど激しい感情がわいたり、はたまた空っぽになったり...抱えるのも一苦労な気持ちにおそわれることもあると思います。　　 自分の毎日のそんな難しい部分・思い通りでない部分に、少しだけ意図的に、あたたかな関心を向けてみませんか。私が特に大切にしているのは、内側のどんな声も丁寧に聞いていくこと、そして、周りにあふれるいろんな意見や情報、また自身の人生に、そんな自分らしさを持ちながら向き合いはじめることです。自分を見つめること、奥底の正直な声と出会うことなどに関心のある方とは特にご縁があるかもしれません。あるいは、これを読んで何となく気になった方は、どこかでそういう作業を求めているのかもしれません。', 14, 'second', 1),
(70, 'Yasuhiko Ishihara - 石原泰彦', '822eb-yasuhiko.jpg', '', '', '', 'キャリアカウンセラー. 物理工学士、財政学博士、MBA, DBA', '相談のテーマ：キャリア開発、変革管理、転職と再就職、リーダーシップ育成、外国居住者のキャリアチャレンジ。', '私の抱いている情熱は、経営管理者の一人の人として、またキャリア人生においての成長をお助けすることです。ビジネス経営者は、効果的にその責任を勤めるにあたり、情緒的知性が必要です。ビジョンを抱き、リーダー格としての活躍を目指すあなたを、ぜひお助けします。', 14, 'second', 0),
(71, 'Johannes Lanzinger', '7ab8e-johannes.jpg', '', 'Psychologe, M.Sc.', '', 'Klinischer- und Gesundheitspsychologe (in Ausbildung, voraussichtlich abgeschlossen August 2015)', 'Beziehung & Partnerschaft, Partnersuche, Sport & Ernährung, Stress & Burnout, Produktivität & Motivation, Krankheitsbewältigung bei schweren Erkrankungen, Selbstzweifel, Traurigkeit & Sinnfragen', 'Viele Probleme lassen sich oft alleine bewältigen oder verschwinden von selbst, aber leider gibt es auch manchmal solche, welche sich hartnäckig halten - und dadurch zu einer ständigen und andauernden Belastung werden. In Fällen wie diesen hilft oft ein professioneller, unabhängiger Blick von außen. Meine Beratung ist evidenzbasiert, problemfokussiert und lösungsorientiert. Zunächst analysieren wir gemeinsam den Kern des Problems und vereinbaren realistische Ziele, um dann einen positiven Veränderungsprozess zu initiieren. Eine erfolgreiche Beratung schließt immer eine aktive Mitarbeit des Klienten mit ein und basiert auf einer fruchtbaren Zusammenarbeit zwischen Berater und Klient. Das Ziel dabei ist immer die Erkundung und Entwicklung der individuellen Potentiale und Ressourcen und eine damit einhergehende Befähigung des Klienten seine Probleme mit neuem Mut und Selbstbewusstsein anzugehen. Ich freue mich darauf mit Ihnen zu arbeiten!', 9, 'first', 1),
(72, 'Maria Magdalena Schlett Capanna', 'e9e18-maria.jpg', '', 'Psychologin, EuroPsy', '', '', 'Stress, Trauma, Trauer, Depression, Einsamkeit, mangelndes Selbstvertrauen, Suchtproblematik, Essstörungen, Mobbing, Kommunikationsprobleme, Familie-, Ehe- und Paarberatung, Sexualberatung, Probleme der älteren Generation, Elternberatung', 'Meine Arbeit vergleiche ich gerne mit der eines Künstlers. Wie er, so schaffe auch ich aus dem Chaos. Oft ist das, was uns so weh tut und sich nicht mehr verdrängen lässt, die große Chance zur Veränderung. Ganz gleich ob ich als Counselor, Coach, Notfallpsychologin, Playtherapist, Lehrerin, als Trainer oder Ausbilder tätig bin, mit Erwachsenen, mit Kindern oder älteren Personen arbeite, mein Ziel ist immer das gleiche: die Wiederherstellung einer verloren gegangenen Harmonie. Oft denken wir, wir seien im Recht und der andere müsse sich ändern, aber diesen Gefallen tut der andere uns leider nicht. Verändern wir uns jedoch, dann hat der andere keine Wahl. Gerne begleite ich Sie ein Stück Ihres beschwerlichen Weges. Zusammen können wir versteckte Türen öffnen und Ihre Probleme aus neuen Blickwinkeln betrachten.', 9, 'first', 1);
INSERT INTO `psicologo` (`id`, `nombres_apellidos`, `foto`, `email`, `titulo`, `informacion_adicional`, `educacion`, `temas_consulta`, `about`, `id_equipo`, `columna`, `therapy_programs`) VALUES
(73, 'Heide Stündel  ', 'df89e-heide.jpg', '', 'Dipl.-Psych.', '', '', 'Stress, Soziale Ängste, Depression, Probleme bei der Partnerwahl, Beziehungsprobleme in Partnerschaft & Familie, Krankheitsbewältigung, Sucht & Abhängigkeit, Essstörung', 'Jeder stößt im Laufe seines Lebens auf Hindernisse, die unüberwindbar erscheinen. Bekannte oder Freunde können dabei oftmals weder professionelle Hilfe noch eine vorurteilsfreie Meinung oder Verschwiegenheit garantieren. Doch gerade diese Aspekte sind von entscheidener Bedeutung bei der Analyse von Problemen und deren Lösungsfindung. Dank meines Berufes kann ich Ihnen all das gewährleisten und darüber hinaus versichern, dass es kein Problem gibt mit dem man leben muss, sondern dass es sich lohnt Hilfe zu suchen, sich beraten zu lassen und sein Leben zum Besseren hin zu verändern.', 9, 'first', 1),
(74, 'Henrik Winkelmann  ', '922d8-henrikw.jpg', '', 'Dipl.-Psych., Dr. rer. nat.', '', '', 'Angst, Stress, Depressionen, (soziale) Phobien, Gefühle von Minderwertigkeit, Einsamkeit, Isolierung, Suchtproblematik, Sinnzweifel, Überforderungserleben', 'Der Weg zur Veränderung von Gefühlen, von als schwierig erlebten persönlichen Situationen führt über Erkenntnis und über Akzeptanz. Es ist mir wichtig, gemeinsam mit dem Hilfesuchenden die zentralen Schwierigkeiten, die "persönlichen Knackpunkte" herauszuarbeiten und zu überlegen und auszutesten, an welchen Stellen im persönlichen System Veränderung sinnvoll und machbar ist. Eine gemeinsame Sprache ist sehr hilfreich dabei, zusammen ein wirkliches Verständnis der Situation entwickelt. So fällt es leichter, gemeinsam die kleinen und großen Schritte anzugehen, die von Einschränkung und Leid hin zu mehr Lebensqualität und einer Erweiterung der persönlichen Möglichkeiten führen.', 9, 'first', 1),
(75, 'Ewald Piel', '995bf-ewald.jpg', '', 'Dipl.-Psych., Dr. rer. soc.', '', '', 'Stress, Soziale Ängste, Burnout, Depression, Mobbing, Psychoonkologie, Sucht, Karriere- und Lebensplanung, Work-Life-Balance, Karriere-Coaching\n', 'In unserem Streben nach ''Glück'' kommen wir regelmäßig vom Weg ab - was wir gerade tun, entspricht nicht mehr unseren Werten, wir haben unsere Ziele aus den Augen verloren. Dessen werden wir uns jedoch erst dann voll bewußt, wenn unser emotionales Gleichgewicht sichtlich schwindet. Dies mag durch eine schwere Erkrankung, Probleme am Arbeitsplatz oder den Verlust eines geliebten Menschen vorkommen. Die Sinnkrise läßt nicht lange auf sich warten. ''Treten'' Sie mit meiner Hilfe einen Schritt zur Seite, mit etwas Abstand können Sie förmlich dabei zusehen, wie sich Ihre Perspektiven und Ihr Optimismus steigern. Sie entwickeln neue Vorgehensweisen, üben diese ein und setzen diese letztendlich in Ihrem Alltag um. Finden Sie so Ihr Neues Gleichgewicht für eine Zukunft mit Lebensqualität. Jetzt ist der beste Zeitpunkt dafür.\n', 9, 'second', 1),
(76, 'Demi Malberg', '6a136-demi.jpg', '', 'Dipl.-Psych.', '', '', 'Stress, Depression, Sinnzweifel, Manie, Trauer & Verlust, Beziehungsprobleme, Suchtproblematik, sexueller/psychischer Missbrauch, Schwangerschaftskonfliktberatung', 'Die individuelle Entfaltung kann zu jedem Zeitpunkt aufgrund von diversen äußeren wie auch inneren Einflüssen gestört werden. Verschiedene Probleme und Sorgen können in Hoffnungslosigkeit, Ratlosigkeit, Zweifel an sich selbst und der Welt münden und sich negativ auf den Betroffenen auswirken. Mir ist es wichtig Sie bei verschiedenen Schwierigkeiten im alltäglichen Leben effektiv zu unterstützen, zusammen mit Ihnen den Ursprung der Probleme zu ergründen und konstruktive Lösungsansätze zu erarbeiten. Ich möchte Sie bei der Entscheidungsfindung stützen, Ihre Bewältigungskompetenzen steigern, Wege zur Veränderung der belastenden Situation aufzeigen. Ihre Belange bilden den Mittelpunkt der Beratung mit dem Ziel der Verbesserung der aktuellen Lebensumstände und Lebensqualität.', 9, 'second', 1),
(77, 'Birgit Anna Krickl', 'af7be-birgit.jpg', '', 'Psychotherapeutin', '', 'MSc in Psychotherapie, Dipl.-päd.', 'Sucht und Abhängigkeit, Partnerschaft, Krisen und schwierige Lebenssituationen, Aggression und Kontrollverlust, Identitätssuche, Umbruch und Wandel, Psychosomatik, Konfliktlösung, Arbeit und Beruf. Hinweis: Ich berate nur per E-Mail.', 'Es gibt Situationen im Leben, in denen unvorhersehbare Dinge passieren, wir in eine Krisensituation geraten und nicht mehr weiter wissen. Oder wir fühlen eine allgemeine Unzufriedenheit und Unsicherheit. Ein professioneller Außenstehender ist dann oft hilfreicher als Freunde oder Angehörige. Aristoteles formulierte schon den treffenden Satz: Das Ganze ist mehr als die Summe seiner Teile. Als Psychotherapeutin i.A.u.S. begleite und unterstütze ich Sie gerne auf dem Weg zu Ihrer geistig-seelischen Gesundheit und zu Ihrem innerem Wachstum. Ich möchte Ihnen helfen, sich selbst besser zu verstehen und sich selbst akzeptieren zu lernen. So können Sie neue Sichtweisen erreichen und Ihr Potential ausschöpfen.', 9, 'second', 0),
(78, 'Kornelia Werner Yellon', '3d4ff-kornelia.jpg', '', 'Diplom-Psychologin', '', 'Psychologische Psychotherapeutin (Verhaltenstherapie), Zusatzqualifikationen für Entspannungs- und Gruppentherapie', 'Stress, Schlaf- und Konzentrationsprobleme, Depressionen, Ängste, Bewältigung chronischer Krankheiten oder Schmerzen, Selbstwertprobleme, Sinnkrisen, Kommunikationsprobleme & Konfliktlösungsstrategien, schwierige anstehende Entscheidungen, Anpassung an neue Lebensumstände & fremde Kultur', 'Sie fühlen sich gestresst, belastet und unglücklich? Sie sind unzufrieden mit verschiedenen Aspekten Ihres Lebens? Sie möchten etwas verändern - aber wissen nicht, wie? Um Sie auf Ihrem persönlichen Weg zu mehr Lebenszufriedenheit zu unterstützen, spüren wir gemeinsam die Barrieren auf, die Sie bei Ihrer Zielerreichung und optimalen Entfaltung behindern. Lassen Sie uns im Gespräch hilfreiche Sichtweisen finden, mit denen Sie neue Denk- und Handlungs-möglichkeiten entwickeln sowie alte und neue Stärken aufbauen können.', 9, 'second', 1),
(79, 'Muriel Lahor', 'c3234-muriel.jpg', '', 'Integratieve psychotherapeut', '', '', 'Help bij depressie, angst en stress, eetstoornissen, seksuele problemen, psychosomatische klachten, verslaving, laag zelfbeeld, verlies, moeilijk gedrag en agressie, fobieën, obsessies, relatieproblemen en zingevingsvragen.', 'Ik bied professionele psychotherapie met meer dan 10 jaar ervaring. Ik ben gespecialiseerd in het helpen van mensen van verschillende culturen en achtergronden. Hier krijgt u individuele aandacht gericht op uw persoonlijke behoeften.', 8, 'second', 0),
(80, 'Britt Berglind', '01b9f-britt.jpg', '', 'Life Coach', '', 'Doktor (PhD) i psykologi', 'Depression, ångest, kriser, personlig utveckling, relationsproblem, stress, sorgebearbetning, identitetskonflikter, problem med sexuell orientering och multikulturella problem\n\n', 'Jag har mer än trettio års erfarenhet av att behandla konflikter och problematik på djupet men använder mig numer av lösningsinriktad metod. Coaching som metod/behandling ger Dig verktyg som kan hjälpa Dig att utvecklas i en positiv riktning och få ökad självkännedom.', 5, 'first', 1),
(81, 'Anne Christine Nordström', '9c5ef-annechristine.jpg', '', 'Legitimerad psykoterapeut', '', '', 'Ångest, depression, hantering av stress, emotionella problem, oro, låg självkänsla, bearbetning av sorg, existentiella frågor, livskriser, relationsproblem, personlig utveckling, vägledning', 'Jag stödjer dig i att identifiera, utveckla och använda inneboende resurser och målet är att göra dem mer synliga, och mer effektiva i din egen förändrings- och utvecklingsprocess. Mitt syfte är att skapa en god atmosfär av omsorg, tillit och lyhördhet för förändring som bas för våra samtal. Jag lägger stort fokus på relationen mellan terapeut och patient, ser det som en viktig del i samarbete och psykoterapiprocessen. Utifrån problemområdet arbetar vi tillsammans för att uppnå en bättre hälsa.', 5, 'first', 1),
(82, 'Elda Bonora', 'c695e-elda.jpg', '', 'Legitimerad psykoterapeut', '', 'Masters i socialt arbete', 'Personlig utveckling & vägledning, sorg och kriser, relationsproblem, identitets- och existentiella frågor, personlig utveckling, arbetsrelaterad stress, jobbcoaching', 'Jag stödjer dig i att identifiera, utveckla och använda inneboende resurser som gör dem mer synliga, effektiva och aktiva i din egen förändrings- och utvecklingsprocess. Mitt syfte är att skapa en atmosfär av omsorg, tillit och förhoppning som bas för coaching, vägledning och samtal.', 5, 'first', 1),
(83, 'Josefine Josefsson', '4284e-josefine.jpg', '', 'Samtalsterapeut, Livscoach', '', 'Fil. kand i Beteendevetenskap', 'Stärkt självkänsla, stress och utmattning, personlig utveckling, mindfulness, relationer, konflikthantering, begränsande beteende mönster, livscoaching', 'Ditt liv pågår just nu. Det är nu du har möjlighet att påverka ditt liv och göra dina val. Du kan inte påverka det som varit och du vet ingenting om vad som kommer. Min uppgift är att hjälpa dig att utvecklas, förändra och berika ditt liv. Längtar du efter en förändring, personlig utveckling eller att bryta gamla mönster? Utifrån dina behov sätter vi upp mål för vad som ska uppnås, kommer överens om arbetssätt och gör upp en tidsplan.\n', 5, 'first', 1),
(84, 'Karina Watz', '69fdf-karina.jpg', '', 'Leg. psykoterapeut', '', 'Vidareutbildning i barn- och ungdomspsykologi  ', 'Alla typer av kriser, ångestproblematik, fobier, personlighetsutveckling, utmattningssyndrom (utbrändhet), relationsproblem, sorgbearbetning, existentiella frågor', 'Jag arbetar med KBT-inriktade metoder där vi tillsammans gör en analys av din situation. Därefter utarbetar vi mål, strategier och metoder för att förändra ditt liv i den riktning som är gynnsam och läkande men framförallt hållbar in i framtiden. Jag har stor respekt för det mänskliga och att vi i pressade situationer kan utveckla destruktiva sätt för att skydda oss själva från smärta.', 5, 'second', 1),
(85, 'Tom Bärlin', '123b1-tom.jpg', '', 'Legitimerad psykolog', '', '', 'Ångestproblematik (e.g. panikångest, social ångest, nervositet), depression, neuropsykiatrisk problematik (e.g. ADHD, autistiska svårigheter), relationsproblem, svårighet med känslor, svår sorg, ensamhet, kriser, ungdomar och barn, sömnproblem, stress, identitets- och sexualitetsproblem, självutveckling, låg självkänsla, brist på mening i tillvaron, studieproblem', 'När känns det som man kört fast och att alla gamla lösningar och strategier inte längre fungerar, så behöver man stöd att komma vidare. I en trygg relation kan du börja närma dig det som är svårt att prata om. Jag är utbildad i psykodynamisk terapi, en eklektisk terapiform med en del praktiska moment likt det vid KBT. I terapin påbörjas en process att förstå sig själv bättre och att initiera en förändring som kommer att fortsätta även efter terapins avslut. Tillsammans utforskar vi tidigare och nuvarande relationsmönster samt känslor kopplade till dessa.', 5, 'second', 1),
(86, 'Sara Lindqvist', 'c7908-sara.jpg', '', 'Samtalsterapeut', '', 'Fil. kand i psykologi', 'Ångest och depressioner, identitetskriser och livsfrågor, relationsproblem, sexuellt utnyttjade och sexrelaterade frågor, alkohol eller drogberoende\n ', 'Jag är en integrativ terapeut vilket betyder att jag inte tillhör en speciellt inrikting av terapi som tex kognitiv beteende terapi utan anpassar vilken form av terapi som passar bäst för varje enskild klient. På det sättet kan du som klient även vara med och styra vilken form av hjälp du behöver. Jag lägger stort fokus på relationen mellan terapeut och klient, ser det som ett viktigt samarbete och vi arbetar tillsammans för att uppnå välmående. Mina nyckelord är empati, ärlighet och villkorslös positiv uppskattning.', 5, 'second', 1),
(87, 'Slavica Novak', '11017-slavica.jpg', '', 'Leg. psykolog, leg. psykoterapeut', '', '', 'Pykiskt lidande av olika slag, få hjälp att lära känna sig själv och analysera de destruktiva mönstren som leder till upprepningar av misstag och lidande. Dessutom: frågor om och råd kring ADHD, Autism, Asperger eller andra utvecklingsmässiga problem\n\n ', 'Det är värt att stanna upp ibland och se sig om. Hur lever jag mitt liv? Vad har jag för relationer till andra människor? Utnyttjar jag tillgångarna i min personlighet på bästa sätt? Hur kan jag kompensera för bristerna? Sådant och mycket annat, får liv och utmynnar i utveckling när det inramas i en personlig dialog med din terapeut.', 5, 'second', 1),
(88, 'Béatrice Ewalds-Kvist', 'b79bd-beatrice.jpg', '', 'Leg. psykolog, korttidsterapeut  ', '', 'FD, docent i experimentell psykologi', 'Existentiella frågor såsom livets mening, belastning av kroniska sjukdomar, lidande, sorg och död. Någon i din närhet kanske försöker behärska dig eller är sjukligt självisk. Du kan ha kört fast i ditt examensarbete eller har tentamensångest.', 'Vi utforskar gemensamt t.ex. ditt livs mening, undersöker ditt lidandes ''budskap'' och förstärker dina bemästringssätt ur en logoterapeutisk vinkel. Vid härskarbeteende eller sjuklig själviskhet diskuterar vi möjligastrategier.', 5, 'second', 1),
(89, 'Timo Kojonen', '04a38-timo.jpg', '', 'Leg. psykolog, karriärcoach', '', '', 'Stress, sorg och ångest samt depression, relationsproblem, kriser och frågeställningar kring identitet och personlig utveckling, jobbcoaching', 'Ibland kan alla känna sig låsta i situationer varifrån det är svårt att ensam hitta en väg ut. Om du behöver stöd i personlig eller/och professionell utveckling kan vi tillsammans få igång en förändring - öka ditt välbefinnande och din självkännedom."', 5, 'second', 1),
(90, 'Mounia Nait Sibaha', 'c93f8-mounia.jpg', '', 'Psychologue clinicienne ', '', '', 'Dépression, stress, anxiété, solitude, adaptation sociale, anorexie, boulimie, questions de sexualité, difficulté de communication dans le couple, relations avec la famille, phobies et obsessions, gestion de comportament mal adapté, le niveau d''assurance en soi', 'Mon orientation thérapeutique se fixe comme objectif de vous aider à résoudre vos conflits internes qui sont autant de signaux envoyés par votre psychisme pour vous inviter à votre propre découverte. Après la formulation d''une première demande, je vous accompagnerais dans un espace de liberté et de respect de votre personne à vous exprimer, à mettre des mots sur des maux pour ainsi vous permettre un retour sur soi pour un changement positif.', 10, 'first', 1),
(91, 'Muriel Lahor', '53982-muriel.jpg', '', 'Psychothérapeute Intégrative ', '', '', 'Dépression, sentiments généraux de mécontentement, stress et anxiété, anorexie et/ou boulimie, questions de sexualité, phobies et obsessions, dépendence á des substances, la recherche du sens de la vie, gestion de comportament mal adapté, le niveau d''assurance en soi', 'Je vous accompagne dans votre processus d''évolution vers plus d''authencité, de responsabilité et d''épanouissement. L''objectif primaire étant de vous aider á retrouver un confort de vie psychologique et une stablitie émotionelle plus éléve, je travail avec différentes approches dont le systémique, le cognitif, le client-centered et la psychosynthèse.', 10, 'first', 1),
(92, 'Olivier Guy', '0d9a9-olivier.jpg', '', 'Doctorant en psychologie clinique. ', '', 'Thérapeute d''inspiration analytique', 'Troubles de la vie quotidienne que nous connaissons tous plus ou moins, addictions, anxiété, phobies, troubles sociaux, troubles de l''humeur, sentiment d’inaccomplissement ou d''incompréhension, malaise d''origine plus ou moins connu, maladies chroniques ou crises transitoires, psychoses, accompagnement dans une maladie somatique', 'Quel peut-être l''objectif d''une thérapie avec moi? Savoir de quoi on souffre, essayer de soit: Ne plus en souffrir (autant); De ne plus avoir de symptôme; Et de changer le rapport à soi afin d''être mieux dans sa peau. Vous accompagner dans votre individualité, avec le respect pour ce que vous êtes, demeurera ma priorité, encore une fois si ça va mal c''est que le rapport à soi ne va pas (de soi). Si il est vrai que vivre est rarement simple, se connaitre est la meilleure des forces pour être plus heureux avec les autres, peut-être même la plus grande des forces tout court. Tout le monde souffre, reste à savoir ce que l''on peut y changer et si l''on peut, changer soi-même. Je sais d''expérience que la thérapie analytique aide à cela. Et c''est ce que que nous essaierons de faire ensemble.', 10, 'second', 1),
(93, 'Isabelle Colleau', '466de-isabelle.jpg', '', 'Thérapeute psycho-corporelle', '', '', 'Anxiété, angoisse, dépression, stress, difficultés relationnelles, situations de blocage, troubles émotionnels, troubles obsessionnels compulsifs, aide contre les dépendances (alcool, tabac, drogue). Problème affectif ou solitude, un petit coup de pouce pour un mieux être. Gestion du stress, des angoisses, troubles du sommeil\n\n ', 'Je vous accompagne dans votre période de changement avec une écoute adaptée et personnalisée selon vos besoins. Mon but est de vous accompagner vers un mieux-être, une sensation d’accomplissement, de sérénité et de liberté. \n ', 10, 'second', 1),
(94, 'Martine Valton Jouffroy', 'd3544-martine.jpg', '', 'Psychothérapeute Gestaltiste', '', 'Certifiée en accompagnement de la difficulté maternelle-maternologie', 'Stress, anxiété, phobies ou angoisses, dépression, traumatismes, deuil, maladies, depression post partum  ', 'Le but de ma pratique est de vous aider à grandir, à vous libérer de ce qui ne vous appartient pas ou plus et de ressentir toutes les emotions que la vie vous présente que ce soit dans votre vie professionnelle, de couple, relationnelle ou parentale.', 10, 'second', 1),
(95, 'Francesco Caltagirone', '9eb78-francesco.jpg', '', 'Psicologo, psicoterapeuta', '', 'Dott.re in psicologia. Ordine degli Psicologi Regione Siciliana, n° 2649. Psicoterapeuta ad approccio breve strategico', 'Disturbi relativi ad ansia, umore, alimentazione, problemi relazionali di coppia, familiari o sociali, disturbi della sfera sessuale, dipendenze, disturbi psicosomatici\n', 'Non esistono problemi non risolvibili, esistono solo persone che non hanno ancora trovato la soluzione giusta. A tal fine adopero modelli evoluti di logica non ordinaria e tecniche di comunicazione suggestiva, inducendo la creazione di soluzioni nuove ed efficaci. Al centro della cura pongo Il paziente, e non la teoria; lo accompagno con rispetto verso il cambiamento di meccanismi disfunzionali che lo intrappolano in situazioni di sofferenza.', 11, 'first', 0),
(96, 'Claudio Lorenzetto', 'a78eb-claudio.jpg', '', 'Psicologo e psicoterapeuta', '', 'Dott.re in psicologia. Ordine degli Psicologi dell''Emilia-Romagna, n° 5087A', 'Mi occupo di stati di disagio affettivo-ansioso, comportamenti fobici, comportamenti oppositivi e provocatori, comportamenti antisociali distruttivi in adolescenti e adulti', 'Svolgo consulenza psicologica e psicoterapia Individuale Adleriana con adulti e adolescenti, rivolte al benessere psico-fisico anche per sportivi amatori e professionisti. Viene individuato lo Stile di Vita personale, vengono comprese in una partecipazione condivisa di scopi e motivazioni le forze che spingono verso comportamenti utili o inutili all''adattamento in una società complessa e carente di supporti allo stress. Viene eventualmente personalizzato un percorso di supporto psicologico che permetta lo svelamento delle finzioni che ognuno porta con se attraverso teorie personali che regolano il proprio atteggiamento relazionale rispetto il partner, l''amicizia, il lavoro, lo sport, l''universo sociale.', 11, 'first', 0),
(97, 'Cristina Paroni', 'cfe42-cristina.jpg', '', 'Psicologa', '', 'Dott.ssa in Psicologia Clinica (Ateneo di Padova). Psicoterapeuta sistemico relazionale', 'Salute psicofisica, Sovrappeso, Obesità, Disturbi alimentari, Educazione a corretti stili di vita; Problematiche Relazionali e Difficoltà individuali, di coppia e di famiglia; Ansia; Stress; Autostima; Lutto; Crescita personale.\n\n', 'La vita pone diverse occasioni. A volte anche l’incontro con qualcuno che può affiancarti, per pochi minuti o per un anno, per scoprire che è sempre possibile migliorare il come si sta e il come si vive, da qualunque punto si parta.', 11, 'first', 0),
(98, 'Fulvio Vignoli', '2baf2-fulvio.jpg', '', 'Psicologo', '', 'Dottore in psicologia clinica e di comunità, laureato presso l’Universita’ “La Sapienza” di Roma. Iscrizione all’Albo degli Psicologi dell’Umbria, n° 423', 'Disturbi di ansia, disturbi dell’umore; disturbi alimentari, problemi di dipendenza di varia natura, problemi di personalità. Il mio lavoro si rivolge anche ai problemi della sfera coniugale, familiare, e a tutte quelle situazioni in genere che richiedano il miglioramento delle competenze sociali individuali, e/o la modifica degli aspetti comunicativi tra persone. La mia professionalità si rivolge a soggetti con età che va dalla prima adolescenza all’età senile.', 'Per quello che può essere utile sapere agli utenti ai quali mi rivolgo, dirò che, contestualmente ad una cultura della scienza contemporanea, che va oltre il meccanicismo e il determinismo della scienza galileiana, il mio lavoro di psicologo è quanto più aderente possibile a ciò che possiamo dire sulla mente in termini scientifici, e va ad incanalarsi in un sostanziale eclettismo tecnico, senza voler nascondere una prevalente affinità con la cultura cognitivo-comportamentale di prima, seconda e terza generazione (migliorare le proprie capacità di riconoscere e gestire gli stati mentali, con particolare enfasi sulla autoregolazione emotiva). Ove si renda utile, e sicuramente quando si rende necessario, tendo anche a coinvolgere il medico di famiglia del paziente, o eventuali specialisti, in un lavoro interdisciplinare che possa ottimizzare il lavoro clinico-psicologico. Nel tempo, tale lavoro interdisciplinare ha dato risultati molto incoraggianti, quando si è reso necessario attuarlo.', 11, 'second', 0),
(99, 'Viola Nicolucci', 'c5f75-viola.jpg', '', 'Psicologa', '', 'Dott.ssa in Psicologia. Università di Torino. EuroPsy (EFPA)', 'Stress, ansia, panico, lutto, depressione, perdita del lavoro, scarsa autostima, disturbi alimentari, problemi della terza età, valutazioni neuropsicologiche, riabilitazione cognitiva, demenze, psicologia della salute\n\n"Il tuo benessere non ha prezzo, ma ha un valore importante e degno di cura. La salute è un tuo bene personale che va coltivato. Comincia sin d’ora, dando importanza ai piccoli malesseri: cerca un aiuto professionale. Lo psicologo è un professionista della salute, capace di ascoltare i tuoi bisogni e portare alla luce anche le tue necessità più profonde ed inespresse. Non può esserci cura di bellezza che non parta da te, ma posso essere un’ottima guida."', 'Il tuo benessere non ha prezzo, ma ha un valore importante e degno di cura. La salute è un tuo bene personale che va coltivato. Comincia sin d’ora, dando importanza ai piccoli malesseri: cerca un aiuto professionale. Lo psicologo è un professionista della salute, capace di ascoltare i tuoi bisogni e portare alla luce anche le tue necessità più profonde ed inespresse. Non può esserci cura di bellezza che non parta da te, ma posso essere un’ottima guida.', 11, 'second', 0),
(100, 'Dennie Hilding', 'c4ae3-dennie.jpg', '', 'Uddannet Cand. Psych. Aut. og mentaltræner', '', '', 'Personlig udvikling, psykologisk coaching, nedstemthed og depression, uro, angst, stresshåndtering, udmattelsessyndrom, OCD, fobier, prokrastinering (udskydende/undvigende adfærd), kognitiv adfærdsterapi, mindfulness\n ', 'Jeg er autoriseret psykolog og videreuddannet i tredje generationens kognitive adfærdsterapier, og har arbejdet med klinisk psykologi og psykiatri siden 2008. Det er afgørende for mig at være opdateret og jeg bruger altid evidensbaserede metoder og teknikker i min daglige psykologpraksis. Jeg har desuden erfaring som mentaltræner for eliteatleter, artister og ledere.', 7, 'first', 0),
(101, 'Nete Holmslykke', '58efe-nete.jpg', '', 'Uddannet ekstientiel dynamisk psykoterapeut, Coach', '', '', 'Stress, fobi, livskriser, sorgbearbejdning og personlig udvikling. Jeg har speciale inden for angst og arbejder med mennesker med angst hver dag.', 'Jeg giver dig mulighed for ro, og dermed changen for fordybelse i arbejdet med de problemer du ønsker min hjælp til. Jeg har stor erfaring med et bredt udsnit af befolkningen lige fra barn til voksen. At være i nuet, kan være et stærkt øjeblik, dette vil jeg kunne hjælpe dig med, rent professionelt, omsorgsfuldt og støttende. Går du og gør ting i livet, du egentlig ikke bryder dig om, har du nogle drømme du kan tænke dig at realiserer.', 7, 'first', 0),
(102, 'Sascha Kempinski Frank', '2dd7a-sascha.jpg', '', 'Uddannet psykoterapeut', '', '', 'Livsændringer, familie- og parforhold, opbrud, at flytte til udlandet, børnene flytter hjemmefra. Indre uro, lavt selvværd, tristhed, ensomhed og vrede', 'Vi udforsker og udfordrer det der gør livet besværligt for dig nu og her. Og skaber på den måde et overblik over hvilken vej, der er den rigtige for dig at gå. Jeg er certificeret psykoterapeut fra EFT-instituttets 4-årige statsgodkendte uddannelse i København og har privatklinik i København. EFT står for Emotionel Fokuseret Terapi og tager udgangspunkt i dine følelser og en overbevisning om, at vi bliver nødt til at lære vores emotionelle mønstre at kende, for på sigt at kunne gå nye veje og opnå den langvarige forandring, som vi ønsker os.', 7, 'first', 0),
(103, 'Berit Nylund', '66dcd-berit.jpg', '', 'Uddannet kunstterapeut / psykoterapeut', '', '', 'Jeg kan hjælpe dig med motivation og vilje til, at skabe det liv du ønsker dig. Forståelse for din livshistorie med brugbare værktøjer til at foretage ændringer i det liv. Personlig vækst og bedre kendskab til egen natur. Indsigt i hvordan relationer påvirker dine handlemønstre og livskvalitet. Bevidsthed i forhold til samspillet imellem tanker og følelser. Målgruppe: Voksne/unge der befinder sig i en vanskelig livssituation, personer i sorg/krise, stressramte, misbruger, kvinder der er udsat for psykisk eller psykisk vold, personer der ønsker selvudvikling.\n', 'Jeg er uddannet til kunstterapeut på UCL i Odense ved Birte Hansen. En kunstterapeut er en psykoterapeut, som bruger det kreative medie som et redskab til samtale og udvikling. Som online terapeut arbejder jeg naturligvis udelukkende psykoterapeutisk. Du er hjertelig velkommen til at kontakte mig for en personlig konsultation.', 7, 'first', 0),
(104, 'Henrik Johansen', 'ac3f7-henrik.jpg', '', 'Uddannet Cand. Psych. Aut.', '', '', 'Stress, fobi, livskriser, nedstemthed og depression, uro, angst, spiseforstyrrelser og personlig udvikling\n', 'Af efteruddannelse har jeg en tre-årig efteruddannelse i psykodynamisk psykoterapi gennem psykiatrien Region Nordjylland, to-rig efteruddannelse i kognitiv terapi for børn og unge, kursus i rorschachtestning, WISC-IV/WAIS-IV, TAT, BRIEF samt andre test. Jeg er snart færdig som specialist i psykoterapi. Desuden er jeg i gang med efteruddannelse indenfor klinisk specialist i børn og unge Jeg har gennem 12 år arbejdet på socialoædagogisk opholdssted, hvor jeg har forestået ledelse, visitation, terapi og supervision af såvel personale og andre ledere. Metodisk arbejder jeg ud fra patientens/klientens behov, da det er denne der er i fokus. Jeg arbejder med børn, unge, og voksne.', 7, 'second', 0),
(105, 'Karen C. Gjølmesli', '6f334-karen.jpg', '', 'Uddannet Cand. Psych.', '', '', 'OCD, angst, social fobi, lavt selvverd, depresjon og spiseforstyrrelser\n', 'Jeg arbejder ud fra det kognitive rammeværk, som baserer sig på at vi som mennesker nogle gange kommer til at se verden gennem briller der er uhensigtsmæssige for os. Tit har disse briller blevet vanedannende og en del af vores virkelighed, hvorfor der kan være behov for at korrigere disse. Afhængig af den individuelle problemstilling, mener jeg det er vigtigt sammen med dig som klient, at finde frem til en arbejdsmetode der er passende og giver mening for os begge. Dog vil de kognitive elementer, som omhandler at udfordre ekstisterende og uhensigtsmæssige tankemønstre og adfærd, have en central plads i behandlingen. Jeg har tidligere arbejdet med mennesker med angst, spiseforstyrrelser og depressioner.', 7, 'second', 0),
(106, 'Lillian Rydning', 'b7b2c-lillian.jpg', '', 'Autorisert psykolog', '<p>\n	Jeg er p&aring; ferie og komme tilbake p&aring; 8 august 2015.</p>\n', '', 'Angst, depresjon, sjenerthet, sosial angst, traumatiske hendelser som ikke vil gi slipp, sexologiske spørsmål', 'Sliter du med å få til endring i livet ditt på egen hånd? Som psykolog tar jeg utgangspunkt i kognitv atferdsterapi og andre tilnærminger som er dokumentert å være effektive for å få til varig endring. Jeg kan blant annet tilby nettbasert kognitiv behandling for sosial angst, depresjon, panikklidelse, overspisingslidelse og bulimi. For hver gang du skriver til meg vil du få svar på dine spørsmål, men også en ny økt som er spesielt relevant for akkurat deg. En økt inneholder relevant informasjon, øvelser og konkrete hjemmeoppgaver. På denne måten vil du etter hvert lære nye ferdigheter som vil hjelpe deg til å overkomme dine utfordringer og til å bli din egen terapeut.', 6, 'first', 0),
(107, 'Ole Morten Eyra', '23ed2-ole.jpg', '', 'Autorisert psykolog', '', '', 'Kriser, depresjon, angst, personlig utvikling, problemer i forholdet og samliv', 'Er du i krise eller har livsvansker? Sliter du med angst eller depresjon? Har du tanker og bekymringer som er plagsomme og ikke vil slippe tak i deg? Har du hatt traumatiske opplevelser som gjør dagliglivet vanskelig for deg eller hemmer livskvaliteten din? Jeg har lang erfaring som klinisk psykolog og terapeut. Jeg er spesialist i klinisk psykologi og etterutdannet innen traume- og krisepsykologi. I min virksomhet legger jeg vekt på terapeutisk hjelp som har støtte i forskning, kunnskap og erfaring.', 6, 'first', 0),
(108, 'Trine Bråten', 'e141e-trine.jpg', '', 'Sertifisert NLP Coach', '', '', 'Endringsveiledning, personlig utvikling, lav selvfølelse, måloppnåelse, familieproblemer/samliv, tenåringskrise, stress, sjalusi med mer\n ', 'Jeg bruker NLP som verktøy i mitt arbeide som terapeut og coach. Min erfaring er at du som klient må være klar og villig til å endre dine fastlåste mønster, først da vil du få de resultatene du drømmer om. Hva vil du? Det er det du som bestemmer. Jeg vil få deg dit du vil, om du vil.', 6, 'second', 0),
(109, 'Dennie Hilding', '9b4c4-dennie.jpg', '', 'Autorisert psykolog, mentaltrener', '', '', 'Dennie Hilding\nPersonlig utvikling, psykologisk coaching, nedstemthet og depresjon, grubling/uro, angstproblematikk, stresshåndtering, utmattelsessyndrom, OCD, fobier, prokastinering (unngåelsesatferd).\n', 'Jeg er en autorisert psykolog med videreutdanning i tredje generasjons kognitiv terapi (KT). Har arbeidet i spesialisthelsetjenesten (klinisk psykolog og psykiatri) siden 2008. Jeg legger stor vekt på å holde meg oppdatert og appliserer alltid evidensbaserte metoder og teknikker i min daglige praksis. Utover det kliniske området har jeg erfaring som mental trener for idrettsutøvere, artister og bedriftsledere.', 6, 'second', 0),
(110, 'Karen C. Gjølmesli', '4e20f-karen.jpg', '', 'Autorisert psykolog', '', '', 'Depresjon, angst, OCD, social angst, lavt selvverd, problemer i forholdet og samlivet, spiseforstyrrelser (anorexi og bulimi). Notat: Jeg er tilgjengelig bare via e-post.', 'Jeg arbeider ut i fra det kognitive rammeverk, som baserer seg på at vi som mennesker noen ganger kommer til at se verden gjennom briller som er uhensiktsmessige for oss. Ofte har disse brillene blitt vanedannende og en del av vår virkelighet. Da kan være behov for å korrigere disse. Jeg har arbeidet med mennesker med angst, depressjon og spiseforstyrrelser, og har hovedoppgave innenfor behandling av tvangssymptomer (OCD). Som terapeut mener jeg at det er viktig å fokusere på det enkelte individs ressurser. Ofte føler man seg motløs i forbindelse med at psykiske vanskeligheter rammer en. Da blir det viktig å få øye på de kvaliteter og den handlekraft man besitter, for å komme ut av det som er vanskelig.', 6, 'second', 0),
(111, 'Anna Kraft', 'dbfbd-terapibild-anna-kraft--(1).jpg', '', 'Samtalsterapeut', '', 'Fil. kand i Beteendevetenskap', 'Utanförskap, våld i nära relation, missbruk, prestationsångest, nedstämdhet, adoption, trauma, depression, livskriser, självkänsla, brottsoffer, familjerelationer, kriminellt beteende, identitetskonflikter', 'Jag kan erbjuda samtalsterapi som utformas efter dina önskemål och funderingar. Jag utgår från dig som individ och jobbar i nuet och "möter" dig i samtalet där du befinner dig. Jag tillämpar de metoder som är lämpliga i samtalet och ser till hela dig, och till den livssituation och bakgrund du har. Tillsammans utformar vi de "verktyg" du behöver för att gå vidare. Ibland kan ett samtal med någon som lyssnar bli avgörande för ens mående.', 5, 'first', 1),
(112, 'Laila Egensberg', 'ce5b2-lailaegensberg.jpg', '', 'Rådgiver', '', '', 'Vanskelige livssituationer, sorg, tristhed, krise, angst, stress eller mennesker ramt af fysisk eller psykisk vold - eller som måske sidder i klemme i systemvold. Situationer, hvor du føler, du har mistet styringen med din egen tilværelse. Familieproblemer, skilsmisser, parforhold samt børn og samvær.', 'Jeg er på 3 modul som psykoterapeut (id), men har gennem 3 år arbejdet  på frivillig basis som mentor/rådgiver hos dansk antistalkingforening  for voldsramte og stalkingramte kvinder og børn. Jeg arbejder både med psykoterapi og med psykologisk coaching, ligesom jeg har stor erfaring som rådgiver og bisidder i konkrete situationer. Mit fokus er at hjælpe dig til at skabe det liv, du ønsker dig – og det uanset hvad du måtte stå med af udfordringer netop nu. Selv den største krise kan være porten til et helt nyt liv – et liv, der er i større overensstemmelse med dine livsværdier og det menneske, du er i din kerne. Jeg har en styrke i at motivere og støtte samt i at skabe øget selvværd og øget gåpåmod i forhold til konflikter og vanskelige situationer. Jeg er meget direkte i min tilgang, så vi hurtigt får sat ord på, hvad du ønsker, der skal ske i dit liv. Samtidigt danner empati og indfølingsevne rammen om det hele, så sessionerne føles trygge for dig.', 7, 'second', 0),
(113, 'Pamela Campos Lelis dos Santos', '19674-pamela.jpg', '', 'Licenciada em psicologia', '', '', 'Sofrimento, Mal Estar, Inibição, Stress, Depressão, Síndrome do Pânico, Angústia, Distúrbios Emocionais, Sexuais e de Aprendizagem, Pluralidade das Expressões de Gênero, ', 'Algo lhe inquieta, atrapalha seu sono, não lhe deixa em paz? Não se sente feliz? Alguém faz de você uma pessoa triste? O que faz com que você não consiga se sentir bem? Jung dizia que a vida só é trágica enquanto permanecemos inconscientes. A psicologia analítica objetiva o autoconhecimento como forma de lidar de modo criativo com nossos problemas. A questão é tornar-se você mesmo!  Adotar um estilo de vida consciente da sua relação com o mundo, com as pessoas ao seu redor e com a sua própria profundidade. O reconhecimento destas mensagens do inconsciente revela sentidos e significados, para que, enfim, você se torne mais inteiro.', 3, 'second', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `psicologo_metodo_consulta`
--

CREATE TABLE IF NOT EXISTS `psicologo_metodo_consulta` (
  `id` int(11) NOT NULL,
  `id_psicologo` int(11) NOT NULL,
  `id_metodo_consulta` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=415 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `psicologo_metodo_consulta`
--

INSERT INTO `psicologo_metodo_consulta` (`id`, `id_psicologo`, `id_metodo_consulta`) VALUES
(1, 2, 2),
(2, 2, 1),
(3, 2, 4),
(4, 2, 3),
(5, 4, 1),
(6, 4, 2),
(7, 4, 3),
(8, 5, 1),
(9, 5, 4),
(10, 4, 4),
(11, 6, 2),
(12, 6, 1),
(13, 6, 4),
(14, 6, 3),
(15, 5, 2),
(16, 5, 3),
(17, 7, 2),
(18, 7, 1),
(19, 7, 4),
(20, 7, 3),
(21, 8, 2),
(22, 8, 1),
(23, 8, 4),
(24, 8, 3),
(25, 9, 2),
(26, 9, 1),
(27, 9, 4),
(28, 9, 3),
(29, 10, 2),
(30, 10, 1),
(31, 10, 4),
(32, 10, 3),
(33, 11, 2),
(34, 11, 1),
(35, 11, 4),
(36, 11, 3),
(37, 12, 2),
(38, 12, 1),
(39, 12, 4),
(40, 12, 3),
(41, 13, 2),
(42, 13, 1),
(43, 13, 4),
(44, 13, 3),
(45, 14, 2),
(46, 14, 1),
(47, 14, 4),
(48, 14, 3),
(49, 15, 2),
(50, 15, 1),
(51, 15, 4),
(52, 15, 3),
(53, 16, 2),
(54, 16, 1),
(55, 16, 4),
(56, 16, 3),
(57, 17, 2),
(58, 17, 1),
(59, 17, 4),
(60, 17, 3),
(61, 18, 2),
(62, 18, 1),
(63, 18, 4),
(64, 18, 3),
(65, 19, 2),
(66, 19, 1),
(67, 19, 4),
(68, 19, 3),
(69, 20, 2),
(70, 20, 1),
(71, 20, 4),
(72, 20, 3),
(73, 21, 2),
(74, 21, 1),
(75, 21, 4),
(76, 21, 3),
(77, 22, 2),
(78, 22, 1),
(79, 22, 4),
(80, 22, 3),
(81, 23, 2),
(82, 23, 1),
(83, 23, 4),
(84, 23, 3),
(85, 24, 2),
(86, 24, 1),
(87, 24, 4),
(88, 24, 3),
(89, 25, 2),
(90, 25, 1),
(91, 25, 4),
(92, 25, 3),
(93, 26, 2),
(94, 26, 1),
(95, 26, 4),
(96, 26, 3),
(97, 27, 2),
(98, 27, 1),
(99, 27, 4),
(100, 27, 3),
(101, 28, 2),
(102, 28, 1),
(103, 28, 3),
(104, 29, 2),
(105, 29, 1),
(106, 29, 4),
(107, 29, 3),
(108, 30, 2),
(109, 30, 1),
(110, 30, 4),
(111, 30, 3),
(112, 31, 2),
(113, 31, 1),
(114, 31, 4),
(115, 31, 3),
(116, 32, 2),
(117, 32, 1),
(118, 32, 4),
(119, 32, 3),
(120, 33, 2),
(121, 33, 1),
(122, 33, 4),
(123, 33, 3),
(124, 34, 2),
(125, 34, 1),
(126, 34, 4),
(127, 34, 3),
(128, 35, 2),
(129, 35, 1),
(130, 35, 4),
(131, 35, 3),
(132, 36, 2),
(133, 36, 1),
(134, 36, 4),
(135, 36, 3),
(136, 37, 2),
(137, 37, 1),
(138, 37, 4),
(139, 37, 3),
(140, 38, 2),
(141, 38, 1),
(142, 38, 4),
(143, 38, 3),
(150, 44, 2),
(151, 44, 1),
(152, 44, 4),
(153, 44, 3),
(154, 45, 2),
(155, 45, 1),
(156, 45, 4),
(157, 45, 3),
(162, 47, 2),
(163, 47, 1),
(164, 47, 4),
(165, 47, 3),
(166, 48, 2),
(167, 48, 1),
(168, 48, 4),
(169, 48, 3),
(170, 50, 2),
(171, 50, 1),
(172, 50, 4),
(173, 50, 3),
(174, 51, 2),
(175, 51, 1),
(176, 51, 4),
(177, 51, 3),
(178, 52, 2),
(179, 52, 1),
(180, 52, 4),
(181, 52, 3),
(182, 53, 2),
(183, 53, 1),
(184, 53, 4),
(185, 53, 3),
(186, 56, 2),
(187, 56, 1),
(188, 56, 4),
(189, 56, 3),
(190, 57, 2),
(191, 57, 1),
(192, 57, 4),
(193, 57, 3),
(194, 58, 2),
(195, 58, 1),
(196, 58, 4),
(197, 58, 3),
(198, 59, 2),
(199, 59, 1),
(200, 59, 4),
(201, 59, 3),
(202, 60, 2),
(203, 60, 1),
(204, 60, 4),
(205, 60, 3),
(206, 61, 2),
(207, 61, 1),
(208, 61, 4),
(209, 61, 3),
(210, 62, 2),
(211, 62, 1),
(212, 62, 4),
(213, 62, 3),
(214, 63, 2),
(215, 63, 1),
(216, 63, 4),
(217, 63, 3),
(218, 64, 2),
(219, 64, 1),
(220, 64, 4),
(221, 64, 3),
(222, 65, 2),
(223, 65, 1),
(224, 65, 4),
(225, 65, 3),
(226, 49, 2),
(227, 49, 1),
(228, 49, 4),
(229, 49, 3),
(230, 66, 2),
(231, 66, 1),
(232, 66, 4),
(233, 66, 3),
(234, 67, 2),
(235, 67, 1),
(236, 67, 4),
(237, 67, 3),
(238, 68, 2),
(239, 68, 1),
(240, 68, 4),
(241, 68, 3),
(242, 69, 2),
(243, 69, 1),
(244, 69, 4),
(245, 69, 3),
(246, 70, 2),
(247, 70, 1),
(248, 70, 4),
(249, 70, 3),
(250, 71, 2),
(251, 71, 1),
(252, 71, 4),
(253, 71, 3),
(254, 72, 2),
(255, 72, 1),
(256, 72, 4),
(257, 72, 3),
(258, 73, 2),
(259, 73, 1),
(260, 73, 4),
(261, 73, 3),
(262, 74, 2),
(263, 74, 1),
(264, 74, 4),
(265, 74, 3),
(266, 75, 2),
(267, 75, 1),
(268, 75, 4),
(269, 75, 3),
(270, 76, 2),
(271, 76, 1),
(272, 76, 4),
(273, 76, 3),
(275, 77, 1),
(278, 78, 2),
(279, 78, 1),
(280, 78, 4),
(281, 78, 3),
(282, 79, 2),
(283, 79, 1),
(284, 79, 4),
(285, 79, 3),
(286, 80, 2),
(287, 80, 1),
(288, 80, 4),
(289, 80, 3),
(290, 81, 2),
(291, 81, 1),
(292, 81, 4),
(293, 81, 3),
(294, 82, 2),
(295, 82, 1),
(296, 82, 4),
(297, 82, 3),
(298, 83, 2),
(299, 83, 1),
(300, 83, 4),
(301, 83, 3),
(302, 84, 2),
(303, 84, 1),
(304, 84, 4),
(305, 84, 3),
(306, 85, 2),
(307, 85, 1),
(308, 85, 4),
(309, 85, 3),
(310, 86, 2),
(311, 86, 1),
(312, 86, 4),
(313, 86, 3),
(314, 87, 2),
(315, 87, 1),
(316, 87, 4),
(317, 87, 3),
(318, 88, 2),
(319, 88, 1),
(320, 88, 4),
(321, 88, 3),
(322, 89, 2),
(323, 89, 1),
(324, 89, 4),
(325, 89, 3),
(326, 90, 2),
(327, 90, 1),
(328, 90, 4),
(329, 90, 3),
(330, 91, 2),
(331, 91, 1),
(332, 91, 4),
(333, 91, 3),
(334, 92, 2),
(335, 92, 1),
(336, 92, 4),
(337, 92, 3),
(338, 93, 2),
(339, 93, 1),
(340, 93, 4),
(341, 93, 3),
(342, 94, 2),
(343, 94, 1),
(344, 94, 4),
(345, 94, 3),
(346, 95, 2),
(347, 95, 1),
(348, 95, 4),
(349, 95, 3),
(350, 96, 2),
(351, 96, 1),
(352, 96, 4),
(353, 96, 3),
(354, 97, 2),
(355, 97, 1),
(356, 97, 4),
(357, 97, 3),
(358, 98, 2),
(359, 98, 1),
(360, 98, 4),
(361, 98, 3),
(362, 99, 2),
(363, 99, 1),
(364, 99, 4),
(365, 99, 3),
(366, 100, 2),
(367, 100, 1),
(368, 100, 4),
(369, 100, 3),
(370, 101, 2),
(371, 101, 1),
(372, 101, 4),
(373, 101, 3),
(374, 102, 2),
(375, 102, 1),
(376, 102, 4),
(377, 102, 3),
(378, 103, 2),
(379, 103, 1),
(380, 103, 4),
(381, 103, 3),
(382, 104, 2),
(383, 104, 1),
(384, 104, 4),
(385, 104, 3),
(386, 105, 1),
(387, 106, 2),
(388, 106, 1),
(389, 106, 4),
(390, 106, 3),
(391, 107, 2),
(392, 107, 1),
(393, 107, 4),
(394, 107, 3),
(395, 108, 2),
(396, 108, 1),
(397, 108, 4),
(398, 108, 3),
(399, 109, 2),
(400, 109, 1),
(401, 109, 4),
(402, 109, 3),
(403, 110, 1),
(404, 111, 2),
(405, 111, 1),
(406, 111, 4),
(407, 111, 3),
(408, 112, 2),
(409, 112, 1),
(410, 112, 4),
(411, 112, 3),
(412, 113, 2),
(413, 113, 1),
(414, 113, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'testeo', 'a494bfd29b0333678e84861e0bd71c23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metodo_consulta`
--
ALTER TABLE `metodo_consulta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `psicologo`
--
ALTER TABLE `psicologo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `psicologo_metodo_consulta`
--
ALTER TABLE `psicologo_metodo_consulta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `metodo_consulta`
--
ALTER TABLE `metodo_consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `psicologo`
--
ALTER TABLE `psicologo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT de la tabla `psicologo_metodo_consulta`
--
ALTER TABLE `psicologo_metodo_consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=415;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
