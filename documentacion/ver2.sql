--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.9
-- Dumped by pg_dump version 9.6.9

-- Started on 2018-08-14 10:23:32 -04

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 8 (class 2615 OID 17013)
-- Name: ev_desemp; Type: SCHEMA; Schema: -; Owner: ale
--

CREATE SCHEMA ev_desemp;


ALTER SCHEMA ev_desemp OWNER TO ale;

--
-- TOC entry 1 (class 3079 OID 12393)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2402 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 188 (class 1259 OID 17025)
-- Name: auditoria; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.auditoria (
    id_auditoria integer NOT NULL,
    fecha timestamp without time zone,
    id_usuario_fk integer,
    ip character varying(15),
    accion character varying(100),
    tabla character varying(100)
);


ALTER TABLE ev_desemp.auditoria OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 17137)
-- Name: cargo; Type: TABLE; Schema: ev_desemp; Owner: ale
--

CREATE TABLE ev_desemp.cargo (
    id_cargo integer NOT NULL,
    id_categoria_fk integer,
    cargo character varying(100),
    estado integer
);


ALTER TABLE ev_desemp.cargo OWNER TO ale;

--
-- TOC entry 205 (class 1259 OID 17135)
-- Name: cargo_id_cargo_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: ale
--

CREATE SEQUENCE ev_desemp.cargo_id_cargo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.cargo_id_cargo_seq OWNER TO ale;

--
-- TOC entry 2403 (class 0 OID 0)
-- Dependencies: 205
-- Name: cargo_id_cargo_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: ale
--

ALTER SEQUENCE ev_desemp.cargo_id_cargo_seq OWNED BY ev_desemp.cargo.id_cargo;


--
-- TOC entry 204 (class 1259 OID 17129)
-- Name: categoria; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.categoria (
    id_categoria integer NOT NULL,
    categoria character varying(300),
    estado integer
);


ALTER TABLE ev_desemp.categoria OWNER TO postgres;

--
-- TOC entry 203 (class 1259 OID 17127)
-- Name: categoria_id_categoria_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.categoria_id_categoria_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.categoria_id_categoria_seq OWNER TO postgres;

--
-- TOC entry 2404 (class 0 OID 0)
-- Dependencies: 203
-- Name: categoria_id_categoria_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.categoria_id_categoria_seq OWNED BY ev_desemp.categoria.id_categoria;


--
-- TOC entry 192 (class 1259 OID 17043)
-- Name: comp_factor; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.comp_factor (
    id_comp_factor integer NOT NULL,
    id_factor_fk integer,
    competencia character varying(500),
    valor integer,
    estado integer
);


ALTER TABLE ev_desemp.comp_factor OWNER TO postgres;

--
-- TOC entry 2405 (class 0 OID 0)
-- Dependencies: 192
-- Name: COLUMN comp_factor.estado; Type: COMMENT; Schema: ev_desemp; Owner: postgres
--

COMMENT ON COLUMN ev_desemp.comp_factor.estado IS '0 = activo	
1 = inactivo ';


--
-- TOC entry 191 (class 1259 OID 17041)
-- Name: comp_factor_id_comp_factor_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.comp_factor_id_comp_factor_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.comp_factor_id_comp_factor_seq OWNER TO postgres;

--
-- TOC entry 2406 (class 0 OID 0)
-- Dependencies: 191
-- Name: comp_factor_id_comp_factor_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.comp_factor_id_comp_factor_seq OWNED BY ev_desemp.comp_factor.id_comp_factor;


--
-- TOC entry 212 (class 1259 OID 17215)
-- Name: comp_periodo; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.comp_periodo (
    id_comp_periodo integer NOT NULL,
    id_competencia_fk integer,
    id_periodo_fk integer,
    id_periodo_ref integer,
    estado integer
);


ALTER TABLE ev_desemp.comp_periodo OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 17213)
-- Name: comp_periodo_id_comp_periodo_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.comp_periodo_id_comp_periodo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.comp_periodo_id_comp_periodo_seq OWNER TO postgres;

--
-- TOC entry 2407 (class 0 OID 0)
-- Dependencies: 211
-- Name: comp_periodo_id_comp_periodo_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.comp_periodo_id_comp_periodo_seq OWNED BY ev_desemp.comp_periodo.id_comp_periodo;


--
-- TOC entry 210 (class 1259 OID 17194)
-- Name: competencia_emp; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.competencia_emp (
    id_competencia integer NOT NULL,
    id_usuario_fk integer,
    id_categoria_fk integer,
    competencia character varying(500),
    descripcion character varying(500),
    peso integer,
    estado integer
);


ALTER TABLE ev_desemp.competencia_emp OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 17192)
-- Name: competencia_emp_id_competencia_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.competencia_emp_id_competencia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.competencia_emp_id_competencia_seq OWNER TO postgres;

--
-- TOC entry 2408 (class 0 OID 0)
-- Dependencies: 209
-- Name: competencia_emp_id_competencia_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.competencia_emp_id_competencia_seq OWNED BY ev_desemp.competencia_emp.id_competencia;


--
-- TOC entry 218 (class 1259 OID 17272)
-- Name: ev_emp_comentario; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.ev_emp_comentario (
    id_emp_comentario integer NOT NULL,
    id_ev_empleado integer,
    id_usuario_fk integer,
    comentario character varying(500),
    corresponde integer
);


ALTER TABLE ev_desemp.ev_emp_comentario OWNER TO postgres;

--
-- TOC entry 2409 (class 0 OID 0)
-- Dependencies: 218
-- Name: COLUMN ev_emp_comentario.corresponde; Type: COMMENT; Schema: ev_desemp; Owner: postgres
--

COMMENT ON COLUMN ev_desemp.ev_emp_comentario.corresponde IS '0 = odi
1 = competencias 
';


--
-- TOC entry 217 (class 1259 OID 17270)
-- Name: ev_emp_comentario_id_emp_comentario_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.ev_emp_comentario_id_emp_comentario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.ev_emp_comentario_id_emp_comentario_seq OWNER TO postgres;

--
-- TOC entry 2410 (class 0 OID 0)
-- Dependencies: 217
-- Name: ev_emp_comentario_id_emp_comentario_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.ev_emp_comentario_id_emp_comentario_seq OWNED BY ev_desemp.ev_emp_comentario.id_emp_comentario;


--
-- TOC entry 216 (class 1259 OID 17251)
-- Name: ev_emp_estado; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.ev_emp_estado (
    id_ev_emp_estado integer NOT NULL,
    id_usuario_fk integer,
    id_ev_empleado_fk integer,
    comentario character varying(500),
    estado integer
);


ALTER TABLE ev_desemp.ev_emp_estado OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 17249)
-- Name: ev_emp_estado_id_ev_emp_estado_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.ev_emp_estado_id_ev_emp_estado_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.ev_emp_estado_id_ev_emp_estado_seq OWNER TO postgres;

--
-- TOC entry 2411 (class 0 OID 0)
-- Dependencies: 215
-- Name: ev_emp_estado_id_ev_emp_estado_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.ev_emp_estado_id_ev_emp_estado_seq OWNED BY ev_desemp.ev_emp_estado.id_ev_emp_estado;


--
-- TOC entry 214 (class 1259 OID 17233)
-- Name: ev_empleado; Type: TABLE; Schema: ev_desemp; Owner: ale
--

CREATE TABLE ev_desemp.ev_empleado (
    id_ev_empleado integer NOT NULL,
    id_periodo_fk integer,
    id_usuario_fk integer,
    odi_calificacion integer,
    comp_calificacion integer,
    resultado_odi_comp integer,
    evaluado integer,
    direccion_oficina character varying(300)
);


ALTER TABLE ev_desemp.ev_empleado OWNER TO ale;

--
-- TOC entry 213 (class 1259 OID 17231)
-- Name: ev_empleado_id_ev_empleado_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: ale
--

CREATE SEQUENCE ev_desemp.ev_empleado_id_ev_empleado_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.ev_empleado_id_ev_empleado_seq OWNER TO ale;

--
-- TOC entry 2412 (class 0 OID 0)
-- Dependencies: 213
-- Name: ev_empleado_id_ev_empleado_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: ale
--

ALTER SEQUENCE ev_desemp.ev_empleado_id_ev_empleado_seq OWNED BY ev_desemp.ev_empleado.id_ev_empleado;


--
-- TOC entry 220 (class 1259 OID 17293)
-- Name: ev_obrero; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.ev_obrero (
    id_ev_obrero integer NOT NULL,
    id_periodo_fk integer,
    id_usuario_fk integer,
    comp_calificacion integer,
    cedula_evaluado integer,
    direccion_oficina character varying(300)
);


ALTER TABLE ev_desemp.ev_obrero OWNER TO postgres;

--
-- TOC entry 224 (class 1259 OID 17333)
-- Name: ev_obrero_comentario; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.ev_obrero_comentario (
    id_obrero_comentario integer NOT NULL,
    id_ev_obrero_fk integer,
    id_usuario_fk integer,
    comentario character varying(500),
    corresponde integer
);


ALTER TABLE ev_desemp.ev_obrero_comentario OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 17331)
-- Name: ev_obrero_comentario_id_obrero_comentario_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.ev_obrero_comentario_id_obrero_comentario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.ev_obrero_comentario_id_obrero_comentario_seq OWNER TO postgres;

--
-- TOC entry 2413 (class 0 OID 0)
-- Dependencies: 223
-- Name: ev_obrero_comentario_id_obrero_comentario_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.ev_obrero_comentario_id_obrero_comentario_seq OWNED BY ev_desemp.ev_obrero_comentario.id_obrero_comentario;


--
-- TOC entry 222 (class 1259 OID 17311)
-- Name: ev_obrero_estado; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.ev_obrero_estado (
    id_ev_obrero_estado integer NOT NULL,
    id_usuario_fk integer,
    id_ev_obrero integer,
    comentario character varying(500),
    estado integer
);


ALTER TABLE ev_desemp.ev_obrero_estado OWNER TO postgres;

--
-- TOC entry 221 (class 1259 OID 17309)
-- Name: ev_obrero_estado_id_ev_obrero_estado_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.ev_obrero_estado_id_ev_obrero_estado_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.ev_obrero_estado_id_ev_obrero_estado_seq OWNER TO postgres;

--
-- TOC entry 2414 (class 0 OID 0)
-- Dependencies: 221
-- Name: ev_obrero_estado_id_ev_obrero_estado_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.ev_obrero_estado_id_ev_obrero_estado_seq OWNED BY ev_desemp.ev_obrero_estado.id_ev_obrero_estado;


--
-- TOC entry 219 (class 1259 OID 17291)
-- Name: ev_obrero_id_ev_obrero_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.ev_obrero_id_ev_obrero_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.ev_obrero_id_ev_obrero_seq OWNER TO postgres;

--
-- TOC entry 2415 (class 0 OID 0)
-- Dependencies: 219
-- Name: ev_obrero_id_ev_obrero_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.ev_obrero_id_ev_obrero_seq OWNED BY ev_desemp.ev_obrero.id_ev_obrero;


--
-- TOC entry 194 (class 1259 OID 17059)
-- Name: exp_asig_excepcional; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.exp_asig_excepcional (
    id_eae integer NOT NULL,
    exposicion character varying(500),
    estado integer
);


ALTER TABLE ev_desemp.exp_asig_excepcional OWNER TO postgres;

--
-- TOC entry 193 (class 1259 OID 17057)
-- Name: exp_asig_excepcional_id_eae_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.exp_asig_excepcional_id_eae_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.exp_asig_excepcional_id_eae_seq OWNER TO postgres;

--
-- TOC entry 2416 (class 0 OID 0)
-- Dependencies: 193
-- Name: exp_asig_excepcional_id_eae_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.exp_asig_excepcional_id_eae_seq OWNED BY ev_desemp.exp_asig_excepcional.id_eae;


--
-- TOC entry 190 (class 1259 OID 17032)
-- Name: factor; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.factor (
    id_factor integer NOT NULL,
    factor character varying(500),
    descripcion character varying(500),
    nivel character varying(10),
    cargo character varying(100)
);


ALTER TABLE ev_desemp.factor OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 17030)
-- Name: factor_id_factor_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.factor_id_factor_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.factor_id_factor_seq OWNER TO postgres;

--
-- TOC entry 2417 (class 0 OID 0)
-- Dependencies: 189
-- Name: factor_id_factor_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.factor_id_factor_seq OWNED BY ev_desemp.factor.id_factor;


--
-- TOC entry 208 (class 1259 OID 17176)
-- Name: factor_periodo; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.factor_periodo (
    id_comp_periodo integer NOT NULL,
    id_factor_fk integer,
    id_periodo_fk integer,
    periodo_referencia integer,
    estado integer
);


ALTER TABLE ev_desemp.factor_periodo OWNER TO postgres;

--
-- TOC entry 207 (class 1259 OID 17174)
-- Name: factor_periodo_id_comp_periodo_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.factor_periodo_id_comp_periodo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.factor_periodo_id_comp_periodo_seq OWNER TO postgres;

--
-- TOC entry 2418 (class 0 OID 0)
-- Dependencies: 207
-- Name: factor_periodo_id_comp_periodo_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.factor_periodo_id_comp_periodo_seq OWNED BY ev_desemp.factor_periodo.id_comp_periodo;


--
-- TOC entry 198 (class 1259 OID 17078)
-- Name: odi; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.odi (
    id_odi integer NOT NULL,
    id_usuario_fk integer,
    id_periodo_fk integer,
    odi character varying(500),
    peso integer,
    estado integer,
    cargo character varying(100),
    direccion_coordinacion character varying(300)
);


ALTER TABLE ev_desemp.odi OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 17107)
-- Name: odi_estado; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.odi_estado (
    id_estado_odi integer NOT NULL,
    id_usuario_fk integer,
    id_odi_fk integer,
    comentario character varying(500),
    esado integer
);


ALTER TABLE ev_desemp.odi_estado OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 17105)
-- Name: odi_estado_id_estado_odi_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.odi_estado_id_estado_odi_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.odi_estado_id_estado_odi_seq OWNER TO postgres;

--
-- TOC entry 2419 (class 0 OID 0)
-- Dependencies: 201
-- Name: odi_estado_id_estado_odi_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.odi_estado_id_estado_odi_seq OWNED BY ev_desemp.odi_estado.id_estado_odi;


--
-- TOC entry 197 (class 1259 OID 17076)
-- Name: odi_id_odi_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.odi_id_odi_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.odi_id_odi_seq OWNER TO postgres;

--
-- TOC entry 2420 (class 0 OID 0)
-- Dependencies: 197
-- Name: odi_id_odi_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.odi_id_odi_seq OWNED BY ev_desemp.odi.id_odi;


--
-- TOC entry 196 (class 1259 OID 17070)
-- Name: periodo; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.periodo (
    id_periodo integer NOT NULL,
    inicio date,
    final date,
    estado integer,
    duracion_inicio date,
    duracion_final date
);


ALTER TABLE ev_desemp.periodo OWNER TO postgres;

--
-- TOC entry 195 (class 1259 OID 17068)
-- Name: periodo_id_periodo_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.periodo_id_periodo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.periodo_id_periodo_seq OWNER TO postgres;

--
-- TOC entry 2421 (class 0 OID 0)
-- Dependencies: 195
-- Name: periodo_id_periodo_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.periodo_id_periodo_seq OWNED BY ev_desemp.periodo.id_periodo;


--
-- TOC entry 187 (class 1259 OID 17016)
-- Name: rang_actuacion; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.rang_actuacion (
    id_rang_actuacion integer NOT NULL,
    inicio integer,
    final integer,
    descripcion character varying(500),
    estado integer,
    tipo integer,
    rango_actuacion character varying(500)
);


ALTER TABLE ev_desemp.rang_actuacion OWNER TO postgres;

--
-- TOC entry 2422 (class 0 OID 0)
-- Dependencies: 187
-- Name: COLUMN rang_actuacion.estado; Type: COMMENT; Schema: ev_desemp; Owner: postgres
--

COMMENT ON COLUMN ev_desemp.rang_actuacion.estado IS '0 = activo
1 = inactivo ';


--
-- TOC entry 2423 (class 0 OID 0)
-- Dependencies: 187
-- Name: COLUMN rang_actuacion.tipo; Type: COMMENT; Schema: ev_desemp; Owner: postgres
--

COMMENT ON COLUMN ev_desemp.rang_actuacion.tipo IS '0 = empleado	
1 = obrero';


--
-- TOC entry 186 (class 1259 OID 17014)
-- Name: rang_actuacion_id_rang_actuacion_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.rang_actuacion_id_rang_actuacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.rang_actuacion_id_rang_actuacion_seq OWNER TO postgres;

--
-- TOC entry 2424 (class 0 OID 0)
-- Dependencies: 186
-- Name: rang_actuacion_id_rang_actuacion_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.rang_actuacion_id_rang_actuacion_seq OWNED BY ev_desemp.rang_actuacion.id_rang_actuacion;


--
-- TOC entry 228 (class 1259 OID 17372)
-- Name: res_eare_obrero; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.res_eare_obrero (
    id_eare_obrero integer NOT NULL,
    id_exposicion_fk integer,
    id_ev_obrero_fk integer,
    respuesta character varying(500)
);


ALTER TABLE ev_desemp.res_eare_obrero OWNER TO postgres;

--
-- TOC entry 227 (class 1259 OID 17370)
-- Name: res_eare_obrero_id_eare_obrero_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.res_eare_obrero_id_eare_obrero_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.res_eare_obrero_id_eare_obrero_seq OWNER TO postgres;

--
-- TOC entry 2425 (class 0 OID 0)
-- Dependencies: 227
-- Name: res_eare_obrero_id_eare_obrero_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.res_eare_obrero_id_eare_obrero_seq OWNED BY ev_desemp.res_eare_obrero.id_eare_obrero;


--
-- TOC entry 226 (class 1259 OID 17354)
-- Name: resultado_comp_obrero; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.resultado_comp_obrero (
    id_r_comp_obrero integer NOT NULL,
    id_comp_factor_fk integer,
    id_ev_obrero_fk integer
);


ALTER TABLE ev_desemp.resultado_comp_obrero OWNER TO postgres;

--
-- TOC entry 225 (class 1259 OID 17352)
-- Name: resultado_comp_obrero_id_r_comp_obrero_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.resultado_comp_obrero_id_r_comp_obrero_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.resultado_comp_obrero_id_r_comp_obrero_seq OWNER TO postgres;

--
-- TOC entry 2426 (class 0 OID 0)
-- Dependencies: 225
-- Name: resultado_comp_obrero_id_r_comp_obrero_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.resultado_comp_obrero_id_r_comp_obrero_seq OWNED BY ev_desemp.resultado_comp_obrero.id_r_comp_obrero;


--
-- TOC entry 200 (class 1259 OID 17094)
-- Name: usuario; Type: TABLE; Schema: ev_desemp; Owner: postgres
--

CREATE TABLE ev_desemp.usuario (
    id_usuario integer NOT NULL,
    cedula integer,
    clave character varying(100),
    rol integer
);


ALTER TABLE ev_desemp.usuario OWNER TO postgres;

--
-- TOC entry 2427 (class 0 OID 0)
-- Dependencies: 200
-- Name: COLUMN usuario.rol; Type: COMMENT; Schema: ev_desemp; Owner: postgres
--

COMMENT ON COLUMN ev_desemp.usuario.rol IS '0 = super administrador 
1 = supervisor evaluador 
2 = evaluador 
3 = evaluado';


--
-- TOC entry 199 (class 1259 OID 17092)
-- Name: usuario_id_usuario_seq; Type: SEQUENCE; Schema: ev_desemp; Owner: postgres
--

CREATE SEQUENCE ev_desemp.usuario_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ev_desemp.usuario_id_usuario_seq OWNER TO postgres;

--
-- TOC entry 2428 (class 0 OID 0)
-- Dependencies: 199
-- Name: usuario_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: ev_desemp; Owner: postgres
--

ALTER SEQUENCE ev_desemp.usuario_id_usuario_seq OWNED BY ev_desemp.usuario.id_usuario;


--
-- TOC entry 2151 (class 2604 OID 17140)
-- Name: cargo id_cargo; Type: DEFAULT; Schema: ev_desemp; Owner: ale
--

ALTER TABLE ONLY ev_desemp.cargo ALTER COLUMN id_cargo SET DEFAULT nextval('ev_desemp.cargo_id_cargo_seq'::regclass);


--
-- TOC entry 2150 (class 2604 OID 17132)
-- Name: categoria id_categoria; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.categoria ALTER COLUMN id_categoria SET DEFAULT nextval('ev_desemp.categoria_id_categoria_seq'::regclass);


--
-- TOC entry 2144 (class 2604 OID 17046)
-- Name: comp_factor id_comp_factor; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.comp_factor ALTER COLUMN id_comp_factor SET DEFAULT nextval('ev_desemp.comp_factor_id_comp_factor_seq'::regclass);


--
-- TOC entry 2154 (class 2604 OID 17218)
-- Name: comp_periodo id_comp_periodo; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.comp_periodo ALTER COLUMN id_comp_periodo SET DEFAULT nextval('ev_desemp.comp_periodo_id_comp_periodo_seq'::regclass);


--
-- TOC entry 2153 (class 2604 OID 17197)
-- Name: competencia_emp id_competencia; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.competencia_emp ALTER COLUMN id_competencia SET DEFAULT nextval('ev_desemp.competencia_emp_id_competencia_seq'::regclass);


--
-- TOC entry 2157 (class 2604 OID 17275)
-- Name: ev_emp_comentario id_emp_comentario; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_emp_comentario ALTER COLUMN id_emp_comentario SET DEFAULT nextval('ev_desemp.ev_emp_comentario_id_emp_comentario_seq'::regclass);


--
-- TOC entry 2156 (class 2604 OID 17254)
-- Name: ev_emp_estado id_ev_emp_estado; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_emp_estado ALTER COLUMN id_ev_emp_estado SET DEFAULT nextval('ev_desemp.ev_emp_estado_id_ev_emp_estado_seq'::regclass);


--
-- TOC entry 2155 (class 2604 OID 17236)
-- Name: ev_empleado id_ev_empleado; Type: DEFAULT; Schema: ev_desemp; Owner: ale
--

ALTER TABLE ONLY ev_desemp.ev_empleado ALTER COLUMN id_ev_empleado SET DEFAULT nextval('ev_desemp.ev_empleado_id_ev_empleado_seq'::regclass);


--
-- TOC entry 2158 (class 2604 OID 17296)
-- Name: ev_obrero id_ev_obrero; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_obrero ALTER COLUMN id_ev_obrero SET DEFAULT nextval('ev_desemp.ev_obrero_id_ev_obrero_seq'::regclass);


--
-- TOC entry 2160 (class 2604 OID 17336)
-- Name: ev_obrero_comentario id_obrero_comentario; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_obrero_comentario ALTER COLUMN id_obrero_comentario SET DEFAULT nextval('ev_desemp.ev_obrero_comentario_id_obrero_comentario_seq'::regclass);


--
-- TOC entry 2159 (class 2604 OID 17314)
-- Name: ev_obrero_estado id_ev_obrero_estado; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_obrero_estado ALTER COLUMN id_ev_obrero_estado SET DEFAULT nextval('ev_desemp.ev_obrero_estado_id_ev_obrero_estado_seq'::regclass);


--
-- TOC entry 2145 (class 2604 OID 17062)
-- Name: exp_asig_excepcional id_eae; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.exp_asig_excepcional ALTER COLUMN id_eae SET DEFAULT nextval('ev_desemp.exp_asig_excepcional_id_eae_seq'::regclass);


--
-- TOC entry 2143 (class 2604 OID 17035)
-- Name: factor id_factor; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.factor ALTER COLUMN id_factor SET DEFAULT nextval('ev_desemp.factor_id_factor_seq'::regclass);


--
-- TOC entry 2152 (class 2604 OID 17179)
-- Name: factor_periodo id_comp_periodo; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.factor_periodo ALTER COLUMN id_comp_periodo SET DEFAULT nextval('ev_desemp.factor_periodo_id_comp_periodo_seq'::regclass);


--
-- TOC entry 2147 (class 2604 OID 17081)
-- Name: odi id_odi; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.odi ALTER COLUMN id_odi SET DEFAULT nextval('ev_desemp.odi_id_odi_seq'::regclass);


--
-- TOC entry 2149 (class 2604 OID 17110)
-- Name: odi_estado id_estado_odi; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.odi_estado ALTER COLUMN id_estado_odi SET DEFAULT nextval('ev_desemp.odi_estado_id_estado_odi_seq'::regclass);


--
-- TOC entry 2146 (class 2604 OID 17073)
-- Name: periodo id_periodo; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.periodo ALTER COLUMN id_periodo SET DEFAULT nextval('ev_desemp.periodo_id_periodo_seq'::regclass);


--
-- TOC entry 2142 (class 2604 OID 17019)
-- Name: rang_actuacion id_rang_actuacion; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.rang_actuacion ALTER COLUMN id_rang_actuacion SET DEFAULT nextval('ev_desemp.rang_actuacion_id_rang_actuacion_seq'::regclass);


--
-- TOC entry 2162 (class 2604 OID 17375)
-- Name: res_eare_obrero id_eare_obrero; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.res_eare_obrero ALTER COLUMN id_eare_obrero SET DEFAULT nextval('ev_desemp.res_eare_obrero_id_eare_obrero_seq'::regclass);


--
-- TOC entry 2161 (class 2604 OID 17357)
-- Name: resultado_comp_obrero id_r_comp_obrero; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.resultado_comp_obrero ALTER COLUMN id_r_comp_obrero SET DEFAULT nextval('ev_desemp.resultado_comp_obrero_id_r_comp_obrero_seq'::regclass);


--
-- TOC entry 2148 (class 2604 OID 17097)
-- Name: usuario id_usuario; Type: DEFAULT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.usuario ALTER COLUMN id_usuario SET DEFAULT nextval('ev_desemp.usuario_id_usuario_seq'::regclass);


--
-- TOC entry 2354 (class 0 OID 17025)
-- Dependencies: 188
-- Data for Name: auditoria; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.auditoria (id_auditoria, fecha, id_usuario_fk, ip, accion, tabla) FROM stdin;
\.


--
-- TOC entry 2372 (class 0 OID 17137)
-- Dependencies: 206
-- Data for Name: cargo; Type: TABLE DATA; Schema: ev_desemp; Owner: ale
--

COPY ev_desemp.cargo (id_cargo, id_categoria_fk, cargo, estado) FROM stdin;
\.


--
-- TOC entry 2429 (class 0 OID 0)
-- Dependencies: 205
-- Name: cargo_id_cargo_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: ale
--

SELECT pg_catalog.setval('ev_desemp.cargo_id_cargo_seq', 1, false);


--
-- TOC entry 2370 (class 0 OID 17129)
-- Dependencies: 204
-- Data for Name: categoria; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.categoria (id_categoria, categoria, estado) FROM stdin;
\.


--
-- TOC entry 2430 (class 0 OID 0)
-- Dependencies: 203
-- Name: categoria_id_categoria_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.categoria_id_categoria_seq', 1, false);


--
-- TOC entry 2358 (class 0 OID 17043)
-- Dependencies: 192
-- Data for Name: comp_factor; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.comp_factor (id_comp_factor, id_factor_fk, competencia, valor, estado) FROM stdin;
\.


--
-- TOC entry 2431 (class 0 OID 0)
-- Dependencies: 191
-- Name: comp_factor_id_comp_factor_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.comp_factor_id_comp_factor_seq', 1, false);


--
-- TOC entry 2378 (class 0 OID 17215)
-- Dependencies: 212
-- Data for Name: comp_periodo; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.comp_periodo (id_comp_periodo, id_competencia_fk, id_periodo_fk, id_periodo_ref, estado) FROM stdin;
\.


--
-- TOC entry 2432 (class 0 OID 0)
-- Dependencies: 211
-- Name: comp_periodo_id_comp_periodo_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.comp_periodo_id_comp_periodo_seq', 1, false);


--
-- TOC entry 2376 (class 0 OID 17194)
-- Dependencies: 210
-- Data for Name: competencia_emp; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.competencia_emp (id_competencia, id_usuario_fk, id_categoria_fk, competencia, descripcion, peso, estado) FROM stdin;
\.


--
-- TOC entry 2433 (class 0 OID 0)
-- Dependencies: 209
-- Name: competencia_emp_id_competencia_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.competencia_emp_id_competencia_seq', 1, false);


--
-- TOC entry 2384 (class 0 OID 17272)
-- Dependencies: 218
-- Data for Name: ev_emp_comentario; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.ev_emp_comentario (id_emp_comentario, id_ev_empleado, id_usuario_fk, comentario, corresponde) FROM stdin;
\.


--
-- TOC entry 2434 (class 0 OID 0)
-- Dependencies: 217
-- Name: ev_emp_comentario_id_emp_comentario_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.ev_emp_comentario_id_emp_comentario_seq', 1, false);


--
-- TOC entry 2382 (class 0 OID 17251)
-- Dependencies: 216
-- Data for Name: ev_emp_estado; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.ev_emp_estado (id_ev_emp_estado, id_usuario_fk, id_ev_empleado_fk, comentario, estado) FROM stdin;
\.


--
-- TOC entry 2435 (class 0 OID 0)
-- Dependencies: 215
-- Name: ev_emp_estado_id_ev_emp_estado_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.ev_emp_estado_id_ev_emp_estado_seq', 1, false);


--
-- TOC entry 2380 (class 0 OID 17233)
-- Dependencies: 214
-- Data for Name: ev_empleado; Type: TABLE DATA; Schema: ev_desemp; Owner: ale
--

COPY ev_desemp.ev_empleado (id_ev_empleado, id_periodo_fk, id_usuario_fk, odi_calificacion, comp_calificacion, resultado_odi_comp, evaluado, direccion_oficina) FROM stdin;
\.


--
-- TOC entry 2436 (class 0 OID 0)
-- Dependencies: 213
-- Name: ev_empleado_id_ev_empleado_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: ale
--

SELECT pg_catalog.setval('ev_desemp.ev_empleado_id_ev_empleado_seq', 1, false);


--
-- TOC entry 2386 (class 0 OID 17293)
-- Dependencies: 220
-- Data for Name: ev_obrero; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.ev_obrero (id_ev_obrero, id_periodo_fk, id_usuario_fk, comp_calificacion, cedula_evaluado, direccion_oficina) FROM stdin;
\.


--
-- TOC entry 2390 (class 0 OID 17333)
-- Dependencies: 224
-- Data for Name: ev_obrero_comentario; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.ev_obrero_comentario (id_obrero_comentario, id_ev_obrero_fk, id_usuario_fk, comentario, corresponde) FROM stdin;
\.


--
-- TOC entry 2437 (class 0 OID 0)
-- Dependencies: 223
-- Name: ev_obrero_comentario_id_obrero_comentario_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.ev_obrero_comentario_id_obrero_comentario_seq', 1, false);


--
-- TOC entry 2388 (class 0 OID 17311)
-- Dependencies: 222
-- Data for Name: ev_obrero_estado; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.ev_obrero_estado (id_ev_obrero_estado, id_usuario_fk, id_ev_obrero, comentario, estado) FROM stdin;
\.


--
-- TOC entry 2438 (class 0 OID 0)
-- Dependencies: 221
-- Name: ev_obrero_estado_id_ev_obrero_estado_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.ev_obrero_estado_id_ev_obrero_estado_seq', 1, false);


--
-- TOC entry 2439 (class 0 OID 0)
-- Dependencies: 219
-- Name: ev_obrero_id_ev_obrero_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.ev_obrero_id_ev_obrero_seq', 1, false);


--
-- TOC entry 2360 (class 0 OID 17059)
-- Dependencies: 194
-- Data for Name: exp_asig_excepcional; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.exp_asig_excepcional (id_eae, exposicion, estado) FROM stdin;
\.


--
-- TOC entry 2440 (class 0 OID 0)
-- Dependencies: 193
-- Name: exp_asig_excepcional_id_eae_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.exp_asig_excepcional_id_eae_seq', 1, false);


--
-- TOC entry 2356 (class 0 OID 17032)
-- Dependencies: 190
-- Data for Name: factor; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.factor (id_factor, factor, descripcion, nivel, cargo) FROM stdin;
\.


--
-- TOC entry 2441 (class 0 OID 0)
-- Dependencies: 189
-- Name: factor_id_factor_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.factor_id_factor_seq', 1, false);


--
-- TOC entry 2374 (class 0 OID 17176)
-- Dependencies: 208
-- Data for Name: factor_periodo; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.factor_periodo (id_comp_periodo, id_factor_fk, id_periodo_fk, periodo_referencia, estado) FROM stdin;
\.


--
-- TOC entry 2442 (class 0 OID 0)
-- Dependencies: 207
-- Name: factor_periodo_id_comp_periodo_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.factor_periodo_id_comp_periodo_seq', 1, false);


--
-- TOC entry 2364 (class 0 OID 17078)
-- Dependencies: 198
-- Data for Name: odi; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.odi (id_odi, id_usuario_fk, id_periodo_fk, odi, peso, estado, cargo, direccion_coordinacion) FROM stdin;
\.


--
-- TOC entry 2368 (class 0 OID 17107)
-- Dependencies: 202
-- Data for Name: odi_estado; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.odi_estado (id_estado_odi, id_usuario_fk, id_odi_fk, comentario, esado) FROM stdin;
\.


--
-- TOC entry 2443 (class 0 OID 0)
-- Dependencies: 201
-- Name: odi_estado_id_estado_odi_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.odi_estado_id_estado_odi_seq', 1, false);


--
-- TOC entry 2444 (class 0 OID 0)
-- Dependencies: 197
-- Name: odi_id_odi_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.odi_id_odi_seq', 1, false);


--
-- TOC entry 2362 (class 0 OID 17070)
-- Dependencies: 196
-- Data for Name: periodo; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.periodo (id_periodo, inicio, final, estado, duracion_inicio, duracion_final) FROM stdin;
\.


--
-- TOC entry 2445 (class 0 OID 0)
-- Dependencies: 195
-- Name: periodo_id_periodo_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.periodo_id_periodo_seq', 1, false);


--
-- TOC entry 2353 (class 0 OID 17016)
-- Dependencies: 187
-- Data for Name: rang_actuacion; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.rang_actuacion (id_rang_actuacion, inicio, final, descripcion, estado, tipo, rango_actuacion) FROM stdin;
2	1	2	des	0	0	\N
3	1	1	1	0	0	\N
4	1	21	4	0	0	3
\.


--
-- TOC entry 2446 (class 0 OID 0)
-- Dependencies: 186
-- Name: rang_actuacion_id_rang_actuacion_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.rang_actuacion_id_rang_actuacion_seq', 4, true);


--
-- TOC entry 2394 (class 0 OID 17372)
-- Dependencies: 228
-- Data for Name: res_eare_obrero; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.res_eare_obrero (id_eare_obrero, id_exposicion_fk, id_ev_obrero_fk, respuesta) FROM stdin;
\.


--
-- TOC entry 2447 (class 0 OID 0)
-- Dependencies: 227
-- Name: res_eare_obrero_id_eare_obrero_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.res_eare_obrero_id_eare_obrero_seq', 1, false);


--
-- TOC entry 2392 (class 0 OID 17354)
-- Dependencies: 226
-- Data for Name: resultado_comp_obrero; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.resultado_comp_obrero (id_r_comp_obrero, id_comp_factor_fk, id_ev_obrero_fk) FROM stdin;
\.


--
-- TOC entry 2448 (class 0 OID 0)
-- Dependencies: 225
-- Name: resultado_comp_obrero_id_r_comp_obrero_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.resultado_comp_obrero_id_r_comp_obrero_seq', 1, false);


--
-- TOC entry 2366 (class 0 OID 17094)
-- Dependencies: 200
-- Data for Name: usuario; Type: TABLE DATA; Schema: ev_desemp; Owner: postgres
--

COPY ev_desemp.usuario (id_usuario, cedula, clave, rol) FROM stdin;
\.


--
-- TOC entry 2449 (class 0 OID 0)
-- Dependencies: 199
-- Name: usuario_id_usuario_seq; Type: SEQUENCE SET; Schema: ev_desemp; Owner: postgres
--

SELECT pg_catalog.setval('ev_desemp.usuario_id_usuario_seq', 1, false);


--
-- TOC entry 2176 (class 2606 OID 17086)
-- Name: odi id_odi_pk; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.odi
    ADD CONSTRAINT id_odi_pk PRIMARY KEY (id_odi);


--
-- TOC entry 2186 (class 2606 OID 17181)
-- Name: factor_periodo id_pk_comp; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.factor_periodo
    ADD CONSTRAINT id_pk_comp PRIMARY KEY (id_comp_periodo);


--
-- TOC entry 2194 (class 2606 OID 17259)
-- Name: ev_emp_estado id_pk_ev_emp_estado; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_emp_estado
    ADD CONSTRAINT id_pk_ev_emp_estado PRIMARY KEY (id_ev_emp_estado);


--
-- TOC entry 2178 (class 2606 OID 17099)
-- Name: usuario ok_id_usuario; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.usuario
    ADD CONSTRAINT ok_id_usuario PRIMARY KEY (id_usuario);


--
-- TOC entry 2204 (class 2606 OID 17359)
-- Name: resultado_comp_obrero pk1; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.resultado_comp_obrero
    ADD CONSTRAINT pk1 PRIMARY KEY (id_r_comp_obrero);


--
-- TOC entry 2184 (class 2606 OID 17142)
-- Name: cargo pk_cargo; Type: CONSTRAINT; Schema: ev_desemp; Owner: ale
--

ALTER TABLE ONLY ev_desemp.cargo
    ADD CONSTRAINT pk_cargo PRIMARY KEY (id_cargo);


--
-- TOC entry 2206 (class 2606 OID 17380)
-- Name: res_eare_obrero pk_eare; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.res_eare_obrero
    ADD CONSTRAINT pk_eare PRIMARY KEY (id_eare_obrero);


--
-- TOC entry 2198 (class 2606 OID 17298)
-- Name: ev_obrero pk_ev_obrero; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_obrero
    ADD CONSTRAINT pk_ev_obrero PRIMARY KEY (id_ev_obrero);


--
-- TOC entry 2200 (class 2606 OID 17319)
-- Name: ev_obrero_estado pk_evobrero_Estado; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_obrero_estado
    ADD CONSTRAINT "pk_evobrero_Estado" PRIMARY KEY (id_ev_obrero_estado);


--
-- TOC entry 2168 (class 2606 OID 17040)
-- Name: factor pk_factor; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.factor
    ADD CONSTRAINT pk_factor PRIMARY KEY (id_factor);


--
-- TOC entry 2166 (class 2606 OID 17029)
-- Name: auditoria pk_id_auditoria; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.auditoria
    ADD CONSTRAINT pk_id_auditoria PRIMARY KEY (id_auditoria);


--
-- TOC entry 2182 (class 2606 OID 17134)
-- Name: categoria pk_id_categoria; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.categoria
    ADD CONSTRAINT pk_id_categoria PRIMARY KEY (id_categoria);


--
-- TOC entry 2188 (class 2606 OID 17202)
-- Name: competencia_emp pk_id_comp; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.competencia_emp
    ADD CONSTRAINT pk_id_comp PRIMARY KEY (id_competencia);


--
-- TOC entry 2170 (class 2606 OID 17048)
-- Name: comp_factor pk_id_comp_factor; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.comp_factor
    ADD CONSTRAINT pk_id_comp_factor PRIMARY KEY (id_comp_factor);


--
-- TOC entry 2190 (class 2606 OID 17220)
-- Name: comp_periodo pk_id_comp_periodo; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.comp_periodo
    ADD CONSTRAINT pk_id_comp_periodo PRIMARY KEY (id_comp_periodo);


--
-- TOC entry 2172 (class 2606 OID 17067)
-- Name: exp_asig_excepcional pk_id_eae; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.exp_asig_excepcional
    ADD CONSTRAINT pk_id_eae PRIMARY KEY (id_eae);


--
-- TOC entry 2180 (class 2606 OID 17115)
-- Name: odi_estado pk_id_estado_odi; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.odi_estado
    ADD CONSTRAINT pk_id_estado_odi PRIMARY KEY (id_estado_odi);


--
-- TOC entry 2192 (class 2606 OID 17238)
-- Name: ev_empleado pk_id_ev_emp; Type: CONSTRAINT; Schema: ev_desemp; Owner: ale
--

ALTER TABLE ONLY ev_desemp.ev_empleado
    ADD CONSTRAINT pk_id_ev_emp PRIMARY KEY (id_ev_empleado);


--
-- TOC entry 2174 (class 2606 OID 17075)
-- Name: periodo pk_id_periodo; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.periodo
    ADD CONSTRAINT pk_id_periodo PRIMARY KEY (id_periodo);


--
-- TOC entry 2164 (class 2606 OID 17024)
-- Name: rang_actuacion pk_id_rang_act; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.rang_actuacion
    ADD CONSTRAINT pk_id_rang_act PRIMARY KEY (id_rang_actuacion);


--
-- TOC entry 2196 (class 2606 OID 17280)
-- Name: ev_emp_comentario pkid_emp_com; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_emp_comentario
    ADD CONSTRAINT pkid_emp_com PRIMARY KEY (id_emp_comentario);


--
-- TOC entry 2202 (class 2606 OID 17341)
-- Name: ev_obrero_comentario pkidobrerocomentario; Type: CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_obrero_comentario
    ADD CONSTRAINT pkidobrerocomentario PRIMARY KEY (id_obrero_comentario);


--
-- TOC entry 2212 (class 2606 OID 17143)
-- Name: cargo cat_fk; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: ale
--

ALTER TABLE ONLY ev_desemp.cargo
    ADD CONSTRAINT cat_fk FOREIGN KEY (id_categoria_fk) REFERENCES ev_desemp.categoria(id_categoria);


--
-- TOC entry 2211 (class 2606 OID 17122)
-- Name: odi_estado fk_id_odi; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.odi_estado
    ADD CONSTRAINT fk_id_odi FOREIGN KEY (id_odi_fk) REFERENCES ev_desemp.odi(id_odi);


--
-- TOC entry 2208 (class 2606 OID 17087)
-- Name: odi fk_id_periodo; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.odi
    ADD CONSTRAINT fk_id_periodo FOREIGN KEY (id_periodo_fk) REFERENCES ev_desemp.periodo(id_periodo);


--
-- TOC entry 2209 (class 2606 OID 17100)
-- Name: odi fk_id_usuario; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.odi
    ADD CONSTRAINT fk_id_usuario FOREIGN KEY (id_usuario_fk) REFERENCES ev_desemp.usuario(id_usuario);


--
-- TOC entry 2231 (class 2606 OID 17360)
-- Name: resultado_comp_obrero fkcomfactor; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.resultado_comp_obrero
    ADD CONSTRAINT fkcomfactor FOREIGN KEY (id_comp_factor_fk) REFERENCES ev_desemp.comp_factor(id_comp_factor);


--
-- TOC entry 2229 (class 2606 OID 17342)
-- Name: ev_obrero_comentario fkevobrero; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_obrero_comentario
    ADD CONSTRAINT fkevobrero FOREIGN KEY (id_ev_obrero_fk) REFERENCES ev_desemp.ev_obrero(id_ev_obrero);


--
-- TOC entry 2216 (class 2606 OID 17208)
-- Name: competencia_emp fkid_cat; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.competencia_emp
    ADD CONSTRAINT fkid_cat FOREIGN KEY (id_categoria_fk) REFERENCES ev_desemp.categoria(id_categoria);


--
-- TOC entry 2217 (class 2606 OID 17221)
-- Name: comp_periodo fkidcomp; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.comp_periodo
    ADD CONSTRAINT fkidcomp FOREIGN KEY (id_competencia_fk) REFERENCES ev_desemp.competencia_emp(id_competencia);


--
-- TOC entry 2223 (class 2606 OID 17281)
-- Name: ev_emp_comentario fkidev; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_emp_comentario
    ADD CONSTRAINT fkidev FOREIGN KEY (id_ev_empleado) REFERENCES ev_desemp.ev_empleado(id_ev_empleado);


--
-- TOC entry 2218 (class 2606 OID 17226)
-- Name: comp_periodo fkidperiodo; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.comp_periodo
    ADD CONSTRAINT fkidperiodo FOREIGN KEY (id_periodo_fk) REFERENCES ev_desemp.periodo(id_periodo);


--
-- TOC entry 2219 (class 2606 OID 17239)
-- Name: ev_empleado fkidperopevemp; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: ale
--

ALTER TABLE ONLY ev_desemp.ev_empleado
    ADD CONSTRAINT fkidperopevemp FOREIGN KEY (id_periodo_fk) REFERENCES ev_desemp.periodo(id_periodo);


--
-- TOC entry 2215 (class 2606 OID 17203)
-- Name: competencia_emp fkidusr; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.competencia_emp
    ADD CONSTRAINT fkidusr FOREIGN KEY (id_usuario_fk) REFERENCES ev_desemp.usuario(id_usuario);


--
-- TOC entry 2220 (class 2606 OID 17244)
-- Name: ev_empleado fkidusrevemp; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: ale
--

ALTER TABLE ONLY ev_desemp.ev_empleado
    ADD CONSTRAINT fkidusrevemp FOREIGN KEY (id_usuario_fk) REFERENCES ev_desemp.usuario(id_usuario);


--
-- TOC entry 2213 (class 2606 OID 17182)
-- Name: factor_periodo id:fact_fk; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.factor_periodo
    ADD CONSTRAINT "id:fact_fk" FOREIGN KEY (id_factor_fk) REFERENCES ev_desemp.factor(id_factor);


--
-- TOC entry 2222 (class 2606 OID 17265)
-- Name: ev_emp_estado id_ev_empleado; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_emp_estado
    ADD CONSTRAINT id_ev_empleado FOREIGN KEY (id_ev_empleado_fk) REFERENCES ev_desemp.ev_empleado(id_ev_empleado);


--
-- TOC entry 2232 (class 2606 OID 17365)
-- Name: resultado_comp_obrero id_ev_obrero1; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.resultado_comp_obrero
    ADD CONSTRAINT id_ev_obrero1 FOREIGN KEY (id_ev_obrero_fk) REFERENCES ev_desemp.ev_obrero(id_ev_obrero);


--
-- TOC entry 2228 (class 2606 OID 17325)
-- Name: ev_obrero_estado id_ev_obrero_fk; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_obrero_estado
    ADD CONSTRAINT id_ev_obrero_fk FOREIGN KEY (id_ev_obrero) REFERENCES ev_desemp.ev_obrero(id_ev_obrero);


--
-- TOC entry 2233 (class 2606 OID 17381)
-- Name: res_eare_obrero id_exposicion_fk; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.res_eare_obrero
    ADD CONSTRAINT id_exposicion_fk FOREIGN KEY (id_exposicion_fk) REFERENCES ev_desemp.exp_asig_excepcional(id_eae);


--
-- TOC entry 2207 (class 2606 OID 17049)
-- Name: comp_factor id_fcator_fk; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.comp_factor
    ADD CONSTRAINT id_fcator_fk FOREIGN KEY (id_factor_fk) REFERENCES ev_desemp.factor(id_factor);


--
-- TOC entry 2225 (class 2606 OID 17299)
-- Name: ev_obrero id_periodo_fl; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_obrero
    ADD CONSTRAINT id_periodo_fl FOREIGN KEY (id_periodo_fk) REFERENCES ev_desemp.periodo(id_periodo);


--
-- TOC entry 2214 (class 2606 OID 17187)
-- Name: factor_periodo id_pr_fk; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.factor_periodo
    ADD CONSTRAINT id_pr_fk FOREIGN KEY (id_periodo_fk) REFERENCES ev_desemp.periodo(id_periodo);


--
-- TOC entry 2210 (class 2606 OID 17117)
-- Name: odi_estado id_usr_fk; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.odi_estado
    ADD CONSTRAINT id_usr_fk FOREIGN KEY (id_usuario_fk) REFERENCES ev_desemp.usuario(id_usuario);


--
-- TOC entry 2221 (class 2606 OID 17260)
-- Name: ev_emp_estado id_usr_fk_evempestado; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_emp_estado
    ADD CONSTRAINT id_usr_fk_evempestado FOREIGN KEY (id_usuario_fk) REFERENCES ev_desemp.usuario(id_usuario);


--
-- TOC entry 2226 (class 2606 OID 17304)
-- Name: ev_obrero id_usuariopk; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_obrero
    ADD CONSTRAINT id_usuariopk FOREIGN KEY (id_usuario_fk) REFERENCES ev_desemp.usuario(id_usuario);


--
-- TOC entry 2234 (class 2606 OID 17386)
-- Name: res_eare_obrero idevobrerofk; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.res_eare_obrero
    ADD CONSTRAINT idevobrerofk FOREIGN KEY (id_ev_obrero_fk) REFERENCES ev_desemp.ev_obrero(id_ev_obrero);


--
-- TOC entry 2230 (class 2606 OID 17347)
-- Name: ev_obrero_comentario idusrfk1; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_obrero_comentario
    ADD CONSTRAINT idusrfk1 FOREIGN KEY (id_usuario_fk) REFERENCES ev_desemp.usuario(id_usuario);


--
-- TOC entry 2224 (class 2606 OID 17286)
-- Name: ev_emp_comentario if_fk_usr; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_emp_comentario
    ADD CONSTRAINT if_fk_usr FOREIGN KEY (id_usuario_fk) REFERENCES ev_desemp.usuario(id_usuario);


--
-- TOC entry 2227 (class 2606 OID 17320)
-- Name: ev_obrero_estado kfidusuario1; Type: FK CONSTRAINT; Schema: ev_desemp; Owner: postgres
--

ALTER TABLE ONLY ev_desemp.ev_obrero_estado
    ADD CONSTRAINT kfidusuario1 FOREIGN KEY (id_usuario_fk) REFERENCES ev_desemp.usuario(id_usuario);


-- Completed on 2018-08-14 10:23:33 -04

--
-- PostgreSQL database dump complete
--

