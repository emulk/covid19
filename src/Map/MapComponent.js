import React, { Component } from 'react';
import { withRouter } from "react-router-dom";
import Chart from "react-google-charts";
import { Row, Col } from 'react-bootstrap';
import { withNamespaces } from 'react-i18next';
import i18n from '../i18n';
import './MapComponent.css';

class Map extends Component {
    constructor(props) {
        super(props);
        this.state = {
            mapsData: [[i18n.t('Country'), i18n.t('Total Confirmed Cases')]]
        };
        this.populateMaps = this.populateMaps.bind(this);
    }

    populateMaps() {
        if (this.props.AllData) {
            var _countrysData = [];
            _countrysData.push([i18n.t('Country'), i18n.t('Total Confirmed Cases'), i18n.t('New Cases')]);

            this.props.AllData.map((AllData, index) => {
                const { ActiveCases, Country, NewCases, NewDeaths, TotalCases, TotalDeaths, TotalRecovered } = AllData //destructuring
                if (Country !== 'World' && Country !== 'Total:') {
                    var _newcases = 0;
                    if (NewCases.length !== 0) {
                        _newcases = NewCases.replace(/,/g, "")
                    }
                    var _data = [];
                    if (Country === 'USA') {
                        _data = ['United States', parseInt(TotalCases.replace(/,/g, "")), parseInt(_newcases)];
                    } else {
                        _data = [Country, parseInt(TotalCases.replace(/,/g, "")), parseInt(_newcases)];
                    }
                    _countrysData.push(_data);
                }

            });

            return (
                <>
                    <Chart
                        width={'100%'}
                        height={'100%'}
                        chartType="GeoChart"
                        data={_countrysData}
                        options={{
                            colorAxis: { colors: ['#6236ff'] },
                        }}
                        mapsApiKey="AIzaSyCwHaaGeO-5HFuh-3qMuJxt9-hVAZ74Pqo"
                        rootProps={{ 'worldmap': '1' }}
                    />
                </>
            )
        }
    }



    render() {
        return (
            <Col >
                <Row className="mapsComponentRow">
                    {this.populateMaps()}
                </Row>
            </Col>
        );
    }

}



export default withRouter(withNamespaces()(Map));