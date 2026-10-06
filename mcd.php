REGION(
    id_region PK,
    nom
)

POINT(
    id_point PK,
    nom,
    id_region FK
)

EXCURSION(
    id_excursion PK,
    nom,
    date_depart,
    date_retour,
    tarif,
    nb_max_participants,
    plan_circuit,
    id_region FK,
    id_point_depart FK,
    id_point_arrivee FK
)

GUIDE(
    num_licence PK,
    nom,
    prenom,
    telephone
)

PARTICIPANT(
    id_participant PK,
    nom,
    prenom,
    telephone,
    email
)

INSCRIPTION(
    id_participant PK, FK,
    id_excursion PK, FK,
    date_inscription
)

ENCADRER(
    id_excursion PK, FK,
    num_licence PK, FK
)