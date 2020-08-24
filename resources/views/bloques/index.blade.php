@extends('layouts.bloques')
@extends('layouts.app')
@section('title','Programacion')
@section('content') 

<a href="{{ route('proyectos.index') }}" class="btn light-blue accent-4 darken-4" >Proyectos</a>
 <p style="font-size:30px;" align="center">{{$proyecto->name}}</p>
    <div class="row">
        <form action="{{ url('/ejecucion') }}" method="post">
              <div class="col s6">
                <div id="blocklyDiv" style="height: 600px; width: 800px;">  </div>
                <xml id="toolbox" style="display: none">
                        <category name="Logic" colour="210">
                          <block type="controls_if"></block>
                          <block type="logic_compare"></block>
                          <block type="logic_operation"></block>
                          <block type="logic_negate"></block>
                          <block type="logic_boolean"></block>
                          <block type="logic_null"></block>
                          <block type="logic_ternary"></block>
                        </category>
                        <category name="Loops" colour="120">
                          <block type="controls_repeat_ext">
                            <value name="TIMES">
                              <shadow type="math_number">
                                <field name="NUM">10</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="controls_whileUntil"></block>
                          <block type="controls_for">
                            <value name="FROM">
                              <shadow type="math_number">
                                <field name="NUM">1</field>
                              </shadow>
                            </value>
                            <value name="TO">
                              <shadow type="math_number">
                                <field name="NUM">10</field>
                              </shadow>
                            </value>
                            <value name="BY">
                              <shadow type="math_number">
                                <field name="NUM">1</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="controls_forEach"></block>
                          <block type="controls_flow_statements"></block>
                        </category>
                        <category name="Math" colour="230">
                          <block type="math_number">
                            <field name="NUM">123</field>
                          </block>
                          <block type="math_arithmetic">
                            <value name="A">
                              <shadow type="math_number">
                                <field name="NUM">1</field>
                              </shadow>
                            </value>
                            <value name="B">
                              <shadow type="math_number">
                                <field name="NUM">1</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="math_single">
                            <value name="NUM">
                              <shadow type="math_number">
                                <field name="NUM">9</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="math_trig">
                            <value name="NUM">
                              <shadow type="math_number">
                                <field name="NUM">45</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="math_constant"></block>
                          <block type="math_number_property">
                            <value name="NUMBER_TO_CHECK">
                              <shadow type="math_number">
                                <field name="NUM">0</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="math_round">
                            <value name="NUM">
                              <shadow type="math_number">
                                <field name="NUM">3.1</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="math_on_list"></block>
                          <block type="math_modulo">
                            <value name="DIVIDEND">
                              <shadow type="math_number">
                                <field name="NUM">64</field>
                              </shadow>
                            </value>
                            <value name="DIVISOR">
                              <shadow type="math_number">
                                <field name="NUM">10</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="math_constrain">
                            <value name="VALUE">
                              <shadow type="math_number">
                                <field name="NUM">50</field>
                              </shadow>
                            </value>
                            <value name="LOW">
                              <shadow type="math_number">
                                <field name="NUM">1</field>
                              </shadow>
                            </value>
                            <value name="HIGH">
                              <shadow type="math_number">
                                <field name="NUM">100</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="math_random_int">
                            <value name="FROM">
                              <shadow type="math_number">
                                <field name="NUM">1</field>
                              </shadow>
                            </value>
                            <value name="TO">
                              <shadow type="math_number">
                                <field name="NUM">100</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="math_random_float"></block>
                        </category>
                        <category name="Text" colour="160">
                          <block type="text"></block>
                          <block type="text_join"></block>
                          <block type="text_append">
                            <value name="TEXT">
                              <shadow type="text"></shadow>
                            </value>
                          </block>
                          <block type="text_length">
                            <value name="VALUE">
                              <shadow type="text">
                                <field name="TEXT">abc</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="text_isEmpty">
                            <value name="VALUE">
                              <shadow type="text">
                                <field name="TEXT"></field>
                              </shadow>
                            </value>
                          </block>
                          <block type="text_indexOf">
                            <value name="VALUE">
                              <block type="variables_get">
                                <field name="VAR">{textVariable}</field>
                              </block>
                            </value>
                            <value name="FIND">
                              <shadow type="text">
                                <field name="TEXT">abc</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="text_charAt">
                            <value name="VALUE">
                              <block type="variables_get">
                                <field name="VAR">{textVariable}</field>
                              </block>
                            </value>
                          </block>
                          <block type="text_getSubstring">
                            <value name="STRING">
                              <block type="variables_get">
                                <field name="VAR">{textVariable}</field>
                              </block>
                            </value>
                          </block>
                          <block type="text_changeCase">
                            <value name="TEXT">
                              <shadow type="text">
                                <field name="TEXT">abc</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="text_trim">
                            <value name="TEXT">
                              <shadow type="text">
                                <field name="TEXT">abc</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="text_print">
                            <value name="TEXT">
                              <shadow type="text">
                                <field name="TEXT">abc</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="text_prompt_ext">
                            <value name="TEXT">
                              <shadow type="text">
                                <field name="TEXT">abc</field>
                              </shadow>
                            </value>
                          </block>
                        </category>

                        <category name="Colour" colour="20">
                          <block type="colour_picker"></block>
                          <block type="colour_random"></block>
                          <block type="colour_rgb">
                            <value name="RED">
                              <shadow type="math_number">
                                <field name="NUM">100</field>
                              </shadow>
                            </value>
                            <value name="GREEN">
                              <shadow type="math_number">
                                <field name="NUM">50</field>
                              </shadow>
                            </value>
                            <value name="BLUE">
                              <shadow type="math_number">
                                <field name="NUM">0</field>
                              </shadow>
                            </value>
                          </block>
                          <block type="colour_blend">
                            <value name="COLOUR1">
                              <shadow type="colour_picker">
                                <field name="COLOUR">#ff0000</field>
                              </shadow>
                            </value>
                            <value name="COLOUR2">
                              <shadow type="colour_picker">
                                <field name="COLOUR">#3333ff</field>
                              </shadow>
                            </value>
                            <value name="RATIO">
                              <shadow type="math_number">
                                <field name="NUM">0.5</field>
                              </shadow>
                            </value>
                          </block>
                        </category>

                        <category name="Lists" colour="260">
                          <block type="lists_create_empty"></block>
                          <block type="lists_create_with"></block>
                          <block type="lists_repeat">
                            <value name="NUM">
                              <block type="math_number">
                                <field name="NUM">5</field>
                              </block>
                            </value>
                          </block>
                          <block type="lists_length"></block>
                          <block type="lists_isEmpty"></block>
                          <block type="lists_indexOf"></block>
                          <block type="lists_getIndex"></block>
                          <block type="lists_setIndex"></block>
                        </category>
                        <category name="Variables" custom="VARIABLE" colour="330"></category>
                        <category name="Functions" custom="PROCEDURE" colour="290"></category>
                        <sep></sep>

                </xml>
        </div>
        <!-- creando form para envio de codigo por post -->
          @csrf
        <div class="col s6" id="ejecution">
            <textarea name="codigo_generated" id="CodigoResultante" style="margin: 0px; width: 911px; height: 590px;" v-bind="codigos"></textarea>
        </div>
        <br>
    </div>
    <input style="display: none"  type="text" name="id" id="id" value="{{ $proyecto->id}}">
    <div class="row">
        <div class="col s6">
            <input type="submit" value="Ejecutar" name='Ejecutar'>
            <input type="submit" value="Guardar" name='Guardar'>
            <!-- Boton para llamar la venta modal de la vista ejecucion -->
            <a class="waves-effect waves-light btn modal-trigger" href="#modal1" v-on:click="getData">Modal</a>
        </div>
    </div>
  </form>
@endsection
