
$(document).ready(
        function() {

            $('#datetimepicker1').datetimepicker({
                language: 'es'
            });

            $('#ocultar').hide(0);
            $('#mostrar').click(
                    function() {

                        $('#ocultar').show('slow');
                        $('#ocultar2').hide(0);
                        $('#ocultar3').hide(0);
                    }
            );
            $('#mostrar2').click(
                    function() {
                        $('#ocultar2').show('slow');
                        $('#ocultar3').hide(0);
                    }
            );
            $('#mostrar3').click(
                    function() {
                        $('#ocultar3').show('slow');
                        $('#ocultar2').hide(0);
                    }
            );

            $('#id_form1').bootstrapValidator({
                fields: {//abre fields
                    nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'El nombre del articulo es requerido'

                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The username must be more than 6 and less than 30 characters long'
                            }
                        }
                    },
                    apellido: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The resumen del articulo is required and cannot be empty'
                            }
                        }
                    },
                    peso: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The abstract del articulo is required and cannot be empty'
                            }
                        }
                    },
                    estatura: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The introduccion is required and cannot be empty'
                            }
                        }
                    },
                    edad: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The metodologia is required and cannot be empty'
                            }
                        }
                    }

                }//cierra fields
            });

            $('#id_form2').bootstrapValidator({
                fields: {//abre fields
                    nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The nombre de la ciudad is required and cannot be empty'

                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The name must be more than 6 and less than 30 characters long'
                            }
                        }
                    }
                }
            });

            $('#id_form5').bootstrapValidator({
                fields: {//abre fields
                    nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The nombre del equipo is required and cannot be empty'

                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The name must be more than 6 and less than 30 characters long'
                            }
                        }
                    }
                }
            });

            $('#id_form6').bootstrapValidator({
                fields: {//abre fields
                    nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The nombre del estadio is required and cannot be empty'

                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The name must be more than 6 and less than 30 characters long'
                            }
                        }
                    }
                }
            });

            $('#id_form9').bootstrapValidator({
                fields: {//abre fields
                    numero: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The numero de la camisa is required and cannot be empty'

                            }
                        }
                    }
                }
            });

            $('#id_form10').bootstrapValidator({
                fields: {//abre fields
                    nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The nombre del pais is required and cannot be empty'

                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The name del pais must be more than 6 and less than 30 characters long'
                            }
                        }
                    }
                }
            });

            $('#id_form11').bootstrapValidator({
                fields: {//abre fields
                    nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The nombre de la posicion is required and cannot be empty'

                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The name de la posicion must be more than 6 and less than 30 characters long'
                            }
                        }
                    },
                    abreviatura: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The abreviatura is required and cannot be empty'

                            }
                        }
                    }

                }
            });

            $(".varius frame").fancybox({
                'width': '75%',
                'height': '75%',
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'type': 'iframe'
            });

            $(".ejemplo").fancybox({
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'width': 680,
                'height': 450,
                'type': 'iframe'
            });

        }
);




