PGDMP         -        
    	    z         
   bdcatalogo    14.5    14.5                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    24578 
   bdcatalogo    DATABASE     e   CREATE DATABASE bdcatalogo WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Spanish_Peru.1252';
    DROP DATABASE bdcatalogo;
                postgres    false            �            1259    24585 	   productos    TABLE     �   CREATE TABLE public.productos (
    id_producto integer NOT NULL,
    marca character varying(100),
    tipo character varying(50),
    nombre character varying(150),
    descripcion text,
    imagen text,
    precio integer
);
    DROP TABLE public.productos;
       public         heap    postgres    false            �            1259    24627    computadoras    TABLE     B   CREATE TABLE public.computadoras (
)
INHERITS (public.productos);
     DROP TABLE public.computadoras;
       public         heap    postgres    false    211            �            1259    24633 
   destacados    TABLE     @   CREATE TABLE public.destacados (
)
INHERITS (public.productos);
    DROP TABLE public.destacados;
       public         heap    postgres    false    211            �            1259    24579    marcas    TABLE     q   CREATE TABLE public.marcas (
    id_marca integer NOT NULL,
    nombre character varying(50),
    imagen text
);
    DROP TABLE public.marcas;
       public         heap    postgres    false            �            1259    24584    marcas_id_marca_seq    SEQUENCE     �   CREATE SEQUENCE public.marcas_id_marca_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.marcas_id_marca_seq;
       public          postgres    false    209                       0    0    marcas_id_marca_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.marcas_id_marca_seq OWNED BY public.marcas.id_marca;
          public          postgres    false    210            �            1259    24615    perifericos    TABLE     A   CREATE TABLE public.perifericos (
)
INHERITS (public.productos);
    DROP TABLE public.perifericos;
       public         heap    postgres    false    211            �            1259    24590    productos_id_productos_seq    SEQUENCE     �   CREATE SEQUENCE public.productos_id_productos_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.productos_id_productos_seq;
       public          postgres    false    211                       0    0    productos_id_productos_seq    SEQUENCE OWNED BY     X   ALTER SEQUENCE public.productos_id_productos_seq OWNED BY public.productos.id_producto;
          public          postgres    false    212            p           2604    24630    computadoras id_producto    DEFAULT     �   ALTER TABLE ONLY public.computadoras ALTER COLUMN id_producto SET DEFAULT nextval('public.productos_id_productos_seq'::regclass);
 G   ALTER TABLE public.computadoras ALTER COLUMN id_producto DROP DEFAULT;
       public          postgres    false    214    212            q           2604    24636    destacados id_producto    DEFAULT     �   ALTER TABLE ONLY public.destacados ALTER COLUMN id_producto SET DEFAULT nextval('public.productos_id_productos_seq'::regclass);
 E   ALTER TABLE public.destacados ALTER COLUMN id_producto DROP DEFAULT;
       public          postgres    false    215    212            m           2604    24591    marcas id_marca    DEFAULT     r   ALTER TABLE ONLY public.marcas ALTER COLUMN id_marca SET DEFAULT nextval('public.marcas_id_marca_seq'::regclass);
 >   ALTER TABLE public.marcas ALTER COLUMN id_marca DROP DEFAULT;
       public          postgres    false    210    209            o           2604    24618    perifericos id_producto    DEFAULT     �   ALTER TABLE ONLY public.perifericos ALTER COLUMN id_producto SET DEFAULT nextval('public.productos_id_productos_seq'::regclass);
 F   ALTER TABLE public.perifericos ALTER COLUMN id_producto DROP DEFAULT;
       public          postgres    false    213    212            n           2604    24592    productos id_producto    DEFAULT        ALTER TABLE ONLY public.productos ALTER COLUMN id_producto SET DEFAULT nextval('public.productos_id_productos_seq'::regclass);
 D   ALTER TABLE public.productos ALTER COLUMN id_producto DROP DEFAULT;
       public          postgres    false    212    211            
          0    24627    computadoras 
   TABLE DATA           e   COPY public.computadoras (id_producto, marca, tipo, nombre, descripcion, imagen, precio) FROM stdin;
    public          postgres    false    214   d                 0    24633 
   destacados 
   TABLE DATA           c   COPY public.destacados (id_producto, marca, tipo, nombre, descripcion, imagen, precio) FROM stdin;
    public          postgres    false    215   �!                 0    24579    marcas 
   TABLE DATA           :   COPY public.marcas (id_marca, nombre, imagen) FROM stdin;
    public          postgres    false    209   >$       	          0    24615    perifericos 
   TABLE DATA           d   COPY public.perifericos (id_producto, marca, tipo, nombre, descripcion, imagen, precio) FROM stdin;
    public          postgres    false    213   �$                 0    24585 	   productos 
   TABLE DATA           b   COPY public.productos (id_producto, marca, tipo, nombre, descripcion, imagen, precio) FROM stdin;
    public          postgres    false    211   B'                  0    0    marcas_id_marca_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.marcas_id_marca_seq', 46, true);
          public          postgres    false    210                       0    0    productos_id_productos_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.productos_id_productos_seq', 52, true);
          public          postgres    false    212            y           2606    24640    computadoras computadoras_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.computadoras
    ADD CONSTRAINT computadoras_pkey PRIMARY KEY (id_producto);
 H   ALTER TABLE ONLY public.computadoras DROP CONSTRAINT computadoras_pkey;
       public            postgres    false    214            s           2606    24594    marcas marcas_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.marcas
    ADD CONSTRAINT marcas_pkey PRIMARY KEY (id_marca);
 <   ALTER TABLE ONLY public.marcas DROP CONSTRAINT marcas_pkey;
       public            postgres    false    209            w           2606    24642    perifericos perifericos_pkey 
   CONSTRAINT     c   ALTER TABLE ONLY public.perifericos
    ADD CONSTRAINT perifericos_pkey PRIMARY KEY (id_producto);
 F   ALTER TABLE ONLY public.perifericos DROP CONSTRAINT perifericos_pkey;
       public            postgres    false    213            u           2606    24596    productos productos_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_pkey PRIMARY KEY (id_producto);
 B   ALTER TABLE ONLY public.productos DROP CONSTRAINT productos_pkey;
       public            postgres    false    211            
   c  x����n�@���)F=���7��  �岁�Ee�Zp��m�,}���q�6v�@�|�3�ofjv�jNS��/ɵ8�We��x�n���+H�X'7Z,�\�*Pzxldn�"^�����?�t|۰�&���0+S�!U^A&x���z�1id.`�^漆G��ǀBQ�i�h;!kp�E��%�R����":���Q߄�	��o�jJH��l08����I(�a2`�ӱU��LT�%����VV|!��J6�:�|�i��j�Q���ا�I�I>��N��Vq��4��5V�vHd6G���
��S��y'rp�@l_Ǌ���w6s���1Kg�7�����ʡA	%�䀚��q,�J@`Q��S�����m��i���:�A���S�9��!�W���Èa��>���&�C��I���ˆ1�̨?>�飩��|C�&|��Kt�}�0N1C��@^��J��\%�%���˼y���%�joT��3s�5�����W���CK���9���n��f[j1p�y���)�	Ռ#L���D;+_wV�uQ<�H��Z�T�O.��ƞ�73��&'�9F�m������^�7Ķ��         W  x�eS�n�0<�_���PE����MGq�Ăy ���Fe �I'i�����En=V�/)I�N�D������2�������Q�;�Q���f����Đ�NFj�Ik�q!��"�A�l�%�P �Lb���D���^j]��=���Z�ɶ��{i\��	���T(]��dj[xB6��w���uK�!���%�
k"aޢ��M�5���jR�<j/�TqyT}�޷�3{�й�"pN�(�@�˦Y߬&�MN�d��t�bu/��\p�����Rt�wZ�����,�pA�����ͦ��9�\0brX�����ce��_t�h�ZH�N��?��~xl-�����{�?�؇��/p�"���K��uǉ��p84����T���J��yi6�������)�;j�'ۍ��0y���,>�X���`b;
�W[;Pw�O�0(�v�T{��x�=����/�Z�5�k
>� ����\
�-!�i�y�`�D��ҙ�V�֙E�j��	�u�v9��D3U(��R�|#[*BIA,�k�ȂI��BX.SKl7�E�a��פU ����|����Mml�WQY��N�@��u{��_�C�         W   x�31�L�M���MLO-�OI-NN,JO��*H�21�IM�u/�/-@W`Qa���[\���.o�7���L.���L.FWaV���� �f+�      	   �  x�}��n�@���)��J��	7c�C�R.��I��w��:Q_��>A�=�G��uv �$˖g��o���S/d�rm�7�Z�Г��_ƣ�r���������qA�~�a<����#�/��v�h�O��8��x88�8�_�k5qtM#Od�ǹƴLǬL�*,���k�vkݦ7�F%�����_���\��$�m�<��j)��؝Փl��*Nm4\��;pcH9t]�2�1����� �xN-S�aa���Ӈ�Gyϕ�v�/��I���iD�'�F���1���K��]y����g����X*�d��J���L�qV��JN����������}�R��*Ö�o�J^��}��̨�~��.���ZRR��K79e93�.�{0K�0f���F�[��G)rz�(\f̲�٥Y��s��>s�ꗥa�N�hj�W�!�y�� �`�m�.\L��<�[��SH�=�q����&%�m���3���&�����K��h�l?:u۝�sR�L�U�����-�0&���O�mo��ez ]krD�	�DTO�^<�J�>��-����4_q}���ŖR���ߠ&��kt�fK��7�pHjK��q�ev��%̂�uXXS�yƴ��(�:7����tk׍Z���)�            x������ � �     