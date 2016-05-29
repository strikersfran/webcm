--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.2
-- Dumped by pg_dump version 9.5.2

-- Started on 2016-05-20 09:36:57 VET

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 12433)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2231 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 184 (class 1259 OID 16398)
-- Name: consejos_comunales; Type: TABLE; Schema: public; Owner: webcm
--

CREATE TABLE consejos_comunales (
    id integer NOT NULL,
    nombre character varying(300) NOT NULL,
    direccion character varying(100),
    mision text,
    vision text,
    created timestamp without time zone,
    modified timestamp without time zone
);


ALTER TABLE consejos_comunales OWNER TO webcm;

--
-- TOC entry 183 (class 1259 OID 16396)
-- Name: consejos_comunales_id_seq; Type: SEQUENCE; Schema: public; Owner: webcm
--

CREATE SEQUENCE consejos_comunales_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE consejos_comunales_id_seq OWNER TO webcm;

--
-- TOC entry 2232 (class 0 OID 0)
-- Dependencies: 183
-- Name: consejos_comunales_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: webcm
--

ALTER SEQUENCE consejos_comunales_id_seq OWNED BY consejos_comunales.id;


--
-- TOC entry 188 (class 1259 OID 16617)
-- Name: eventos; Type: TABLE; Schema: public; Owner: webcm
--

CREATE TABLE eventos (
    id integer NOT NULL,
    consejos_comunales_id integer NOT NULL,
    nombre character varying(100) NOT NULL,
    descripcion text NOT NULL,
    fecha date,
    hora reltime,
    lugar character varying(200),
    foto character varying(100),
    created timestamp without time zone,
    modified timestamp without time zone
);


ALTER TABLE eventos OWNER TO webcm;

--
-- TOC entry 187 (class 1259 OID 16615)
-- Name: eventos_id_seq; Type: SEQUENCE; Schema: public; Owner: webcm
--

CREATE SEQUENCE eventos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE eventos_id_seq OWNER TO webcm;

--
-- TOC entry 2233 (class 0 OID 0)
-- Dependencies: 187
-- Name: eventos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: webcm
--

ALTER SEQUENCE eventos_id_seq OWNED BY eventos.id;


--
-- TOC entry 186 (class 1259 OID 16411)
-- Name: noticias; Type: TABLE; Schema: public; Owner: webcm
--

CREATE TABLE noticias (
    id integer NOT NULL,
    consejos_comunales_id integer,
    titulo character varying(300) NOT NULL,
    contenido text,
    fecha date NOT NULL,
    hora reltime NOT NULL,
    foto character varying(100),
    created timestamp without time zone,
    modified timestamp without time zone
);


ALTER TABLE noticias OWNER TO webcm;

--
-- TOC entry 185 (class 1259 OID 16409)
-- Name: noticias_id_seq; Type: SEQUENCE; Schema: public; Owner: webcm
--

CREATE SEQUENCE noticias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE noticias_id_seq OWNER TO webcm;

--
-- TOC entry 2234 (class 0 OID 0)
-- Dependencies: 185
-- Name: noticias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: webcm
--

ALTER SEQUENCE noticias_id_seq OWNED BY noticias.id;


--
-- TOC entry 182 (class 1259 OID 16388)
-- Name: users; Type: TABLE; Schema: public; Owner: webcm
--

CREATE TABLE users (
    id integer NOT NULL,
    username character varying(50),
    password character varying(255),
    rol character varying(20),
    created timestamp without time zone,
    modified timestamp without time zone
);


ALTER TABLE users OWNER TO webcm;

--
-- TOC entry 181 (class 1259 OID 16386)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: webcm
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_id_seq OWNER TO webcm;

--
-- TOC entry 2235 (class 0 OID 0)
-- Dependencies: 181
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: webcm
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- TOC entry 2081 (class 2604 OID 16401)
-- Name: id; Type: DEFAULT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY consejos_comunales ALTER COLUMN id SET DEFAULT nextval('consejos_comunales_id_seq'::regclass);


--
-- TOC entry 2083 (class 2604 OID 16620)
-- Name: id; Type: DEFAULT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY eventos ALTER COLUMN id SET DEFAULT nextval('eventos_id_seq'::regclass);


--
-- TOC entry 2082 (class 2604 OID 16414)
-- Name: id; Type: DEFAULT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY noticias ALTER COLUMN id SET DEFAULT nextval('noticias_id_seq'::regclass);


--
-- TOC entry 2080 (class 2604 OID 16391)
-- Name: id; Type: DEFAULT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- TOC entry 2219 (class 0 OID 16398)
-- Dependencies: 184
-- Data for Name: consejos_comunales; Type: TABLE DATA; Schema: public; Owner: webcm
--

INSERT INTO consejos_comunales VALUES (1, 'Siempre con la lucha', 'Bebedero Sector 1', 'Promover y consolidar la democracia participativa y protagónica, mediante la promoción y el fortalecimiento de todos aquellos programas y proyectos comunitarios que propicien el ejercicio de la corresponsabilidad social en la gestión pública, para el fortalecimiento de las potencialidades y resolver los problemas de la comunidad. ', 'Obtener de todos los proyectos y programas desarrollados por el Consejo Comunal y de la comunidad en General presentados los beneficios esperados por los mismos, y que generen la transformación de las personas que habitan la comunidad y de la infraestructura que nos rodea, para aumentar el avanza y satisfacer todas las necesidades de todos, específicamente en la poligonal por ser nuestro rango de acción, sin menos cabo de los avances de los otros consejos comunales del Sector que logremos beneficiar con nuestras propuestas, garantizando el bienestar integral procurando un desenvolvimiento sobre el desarrollo social, manteniendo la igualdad de condiciones que ejercen cada ciudadano en el Sector. ', '2016-05-14 20:55:04', '2016-05-20 11:43:54');


--
-- TOC entry 2236 (class 0 OID 0)
-- Dependencies: 183
-- Name: consejos_comunales_id_seq; Type: SEQUENCE SET; Schema: public; Owner: webcm
--

SELECT pg_catalog.setval('consejos_comunales_id_seq', 1, true);


--
-- TOC entry 2223 (class 0 OID 16617)
-- Dependencies: 188
-- Data for Name: eventos; Type: TABLE DATA; Schema: public; Owner: webcm
--

INSERT INTO eventos VALUES (1, 1, 'feererer', 'asdasdasd', '2014-05-06', '11:07:00', 'wdweqwe', 'weqweqwe', '2016-05-20 12:26:53', '2016-05-20 12:26:53');


--
-- TOC entry 2237 (class 0 OID 0)
-- Dependencies: 187
-- Name: eventos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: webcm
--

SELECT pg_catalog.setval('eventos_id_seq', 1, true);


--
-- TOC entry 2221 (class 0 OID 16411)
-- Dependencies: 186
-- Data for Name: noticias; Type: TABLE DATA; Schema: public; Owner: webcm
--

INSERT INTO noticias VALUES (1, 1, 'Primera jornada de ventas de pollos', 'fino todo fino', '2016-05-14', '21:22:00', 'mamam', '2016-05-14 21:22:42', '2016-05-14 21:22:42');
INSERT INTO noticias VALUES (2, 1, 'rwerwer', 'ewrwerwerwer', '2016-05-20', '11:57:00', '', '2016-05-20 11:58:15', '2016-05-20 11:58:15');


--
-- TOC entry 2238 (class 0 OID 0)
-- Dependencies: 185
-- Name: noticias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: webcm
--

SELECT pg_catalog.setval('noticias_id_seq', 2, true);


--
-- TOC entry 2217 (class 0 OID 16388)
-- Dependencies: 182
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: webcm
--

INSERT INTO users VALUES (1, 'francisco', '$2y$10$I2dbOvqAC/UIsI/nAmj/uOCOwuRISrz4lS4zl85e7bdPPhuvA3ZMW', NULL, NULL, NULL);


--
-- TOC entry 2239 (class 0 OID 0)
-- Dependencies: 181
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: webcm
--

SELECT pg_catalog.setval('users_id_seq', 1, true);


--
-- TOC entry 2089 (class 2606 OID 16408)
-- Name: consejos_comunales_nombre_key; Type: CONSTRAINT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY consejos_comunales
    ADD CONSTRAINT consejos_comunales_nombre_key UNIQUE (nombre);


--
-- TOC entry 2091 (class 2606 OID 16406)
-- Name: consejos_comunales_pkey; Type: CONSTRAINT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY consejos_comunales
    ADD CONSTRAINT consejos_comunales_pkey PRIMARY KEY (id);


--
-- TOC entry 2097 (class 2606 OID 16627)
-- Name: eventos_nombre_key; Type: CONSTRAINT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY eventos
    ADD CONSTRAINT eventos_nombre_key UNIQUE (nombre);


--
-- TOC entry 2099 (class 2606 OID 16625)
-- Name: eventos_pkey; Type: CONSTRAINT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY eventos
    ADD CONSTRAINT eventos_pkey PRIMARY KEY (id);


--
-- TOC entry 2093 (class 2606 OID 16419)
-- Name: noticias_pkey; Type: CONSTRAINT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY noticias
    ADD CONSTRAINT noticias_pkey PRIMARY KEY (id);


--
-- TOC entry 2095 (class 2606 OID 16421)
-- Name: noticias_titulo_key; Type: CONSTRAINT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY noticias
    ADD CONSTRAINT noticias_titulo_key UNIQUE (titulo);


--
-- TOC entry 2085 (class 2606 OID 16393)
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 2087 (class 2606 OID 16395)
-- Name: users_username_key; Type: CONSTRAINT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_username_key UNIQUE (username);


--
-- TOC entry 2101 (class 2606 OID 16628)
-- Name: eventos_id_consejos_comunales_fkey; Type: FK CONSTRAINT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY eventos
    ADD CONSTRAINT eventos_id_consejos_comunales_fkey FOREIGN KEY (consejos_comunales_id) REFERENCES consejos_comunales(id) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 2100 (class 2606 OID 16422)
-- Name: noticias_id_consejos_comunales_fkey; Type: FK CONSTRAINT; Schema: public; Owner: webcm
--

ALTER TABLE ONLY noticias
    ADD CONSTRAINT noticias_id_consejos_comunales_fkey FOREIGN KEY (consejos_comunales_id) REFERENCES consejos_comunales(id) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 2230 (class 0 OID 0)
-- Dependencies: 7
-- Name: public; Type: ACL; Schema: -; Owner: webcm
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM webcm;
GRANT ALL ON SCHEMA public TO webcm;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2016-05-20 09:36:57 VET

--
-- PostgreSQL database dump complete
--

