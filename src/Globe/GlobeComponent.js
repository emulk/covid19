import React, { Component } from 'react';
import { withRouter } from "react-router-dom";
import { Row, Col } from 'react-bootstrap';
import $ from 'jquery';
import './GlobeComponent.css';

class Globe extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };
    }

    componentDidMount() {
        $(document).ready(function () {
            fetch('https://www.ncovid19.it/News/GetGlobeDataReport.php')
                .then(response => response.json())
                .then(data => {
                    var _allData = data;
                    window.data = _allData;
                    displayData(false);
                    globe.animate();
                    $('#sAll').html('Show all');

                });

            var colors = [0x9374ff, 0xfd4e70, 0x6ad300, 0xff761c, 0];
            var globe = window.DAT.Globe($('#container')[0], function (label) {
                return new window.THREE.Color(colors[label]);
            });

            $('.sport').show();

            $('.sport').each(function (i) {
                var htmlcolor = colors[i].toString(16);
                htmlcolor = '000000'.substr(0, 6 - htmlcolor.length) + htmlcolor;
                $(this).css('border-left', '20px solid #' + htmlcolor);
                if (i < 4) {
                    $(this).click(function () {
                        displayData(i + 1);
                        $('.sport').removeClass('active');
                        $(this).addClass('active');
                    });
                }
            });

            $('#sAll').click(function () {
                displayData(false);
                $('.sport').removeClass('active');
            })

            function displayData(label) {
                globe.resetData();
                globe.addData(window.data, { format: 'legend', showLabel: label });
                globe.createPoints();
            }
        });
    }

    render() {
        return (
            <Col className="globeHeight">
                <Row>
                    <div id="container"></div>
                    <div id="currentInfo">
                        <div id="sRun" className="sport">Confirmed Cases</div>
                        <div id="sBike" className="sport">Deaths </div>
                        <div id="sWalk" className="sport">Recovered Cases</div>
                        <div id="sOther" className="sport">Active Cases</div>
                        <div id="sAll" className="sport">&nbsp;</div>
                    </div>                   
                </Row>
            </Col>
        );
    }
}

export default withRouter(Globe);