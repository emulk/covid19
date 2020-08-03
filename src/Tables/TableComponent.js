import React, { Component } from 'react';
import { withRouter, Switch, Route } from "react-router-dom";
import { Row, Col } from 'react-bootstrap';
import CasesComponent from './CasesComponent';
import NewsComponent from './NewsComponent';
import StatesNumbersComponent from './StatesNumbersComponent';
import EuropeNumbersComponent from './EuropeNumbersComponent';
import Symptoms from '../Symptoms/SymptomsComponent';
import Regions from '../Regions/RegionsComponent';
import About from '../About/AboutComponent';
import Map from '../Map/MapComponent';
import Globe from '../Globe/GlobeComponent';
import Vaccine from '../Vaccine/VaccineComponent';
import NotificationsComponent from '../Notifications/NotificationsComponent';
import './StatesNumbersComponent.css';


class TableComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {
            UpdatedTime: '',
            TotalConfirmedCases: '',
            TotalActiveCases: '',
            PercentageActiveCases: '',
            TotalRecoveredCases: '',
            PercentageRecoveredCases: '',
            TotalDecesdCases: '',
            PercentageTotalDecesdCases: '',
            AllData: '',
            EuropeData: '',
            UsaData: '',
            AsiaData: '',
            AfricaData: '',
            OceaniaData: ''
        };
        this.getUpdatedTimeData = this.getUpdatedTimeData.bind(this);
        this.getReportData = this.getReportData.bind(this);
    }

    componentDidMount() {
        this.getUpdatedTimeData();
        this.getReportData();
    }

    getUpdatedTimeData() {
        let url = "https://www.ncovid19.it/News/GetUpdatedTime.php";
        let updatedTime = undefined;

        fetch(url)
            .then(response => response.text())
            .then(
                updatedTime => this.handleStateUpdateData(updatedTime)
            );
    }

    handleStateUpdateData(updatedTime) {
        this.setState({
            UpdatedTime: updatedTime
        })
    }

    getReportData() {
        let url = "https://www.ncovid19.it/News/AllReports.php";
        let data = undefined;

        fetch(url)
            .then(response => response.json())
            .then(
                data => this.handleData(data)

            );
    }


    handleData(data) {
        if (data) {
            this.getEuropeData(data.reports[0].table[1]);
            var _totalConfirmedCases = data.reports[0].cases;
            var _totalRecoveredCases = data.reports[0].recovered;
            var _totalDecesedCases = data.reports[0].deaths;
            var _totalActiveCases = data.reports[0].active_cases[0].currently_infected_patients;

            var _percentageTotalRecoveredCases = this.truncateDecimals(((_totalRecoveredCases / _totalConfirmedCases) * 100), 2) + '%';
            var _percentageDecesedCases = this.truncateDecimals(((_totalDecesedCases / _totalConfirmedCases) * 100), 2) + '%';
            var _percentageTotalActiveCases = this.truncateDecimals(((_totalActiveCases / _totalConfirmedCases) * 100), 2) + '%';


            this.setState({
                TotalConfirmedCases: _totalConfirmedCases.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."),
                TotalRecoveredCases: _totalRecoveredCases.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."),
                PercentageRecoveredCases: _percentageTotalRecoveredCases,
                TotalDecesdCases: _totalDecesedCases.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."),
                PercentageTotalDecesdCases: _percentageDecesedCases,
                TotalActiveCases: _totalActiveCases.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."),
                PercentageActiveCases: _percentageTotalActiveCases
            })

        }
    }


    getEuropeData(data) {
        if (data) {
            var _europeData = [];
            var _usaData = [];
            var _asiaData = [];
            var _africaData = [];
            var _oceaniaData = [];
            data.map((data, index) => {
                const { Continent } = data //destructuring
                if (Continent === 'Europe') {
                    _europeData.push(data);
                } else if (Continent === 'North America' || Continent === 'South America') {
                    _usaData.push(data);
                } else if (Continent === 'Asia') {
                    _asiaData.push(data);
                } else if (Continent === 'Africa') {
                    _africaData.push(data);
                } else if (Continent === 'Australia\/Oceania') {
                    _oceaniaData.push(data);
                }
            });

            this.setState({
                EuropeData: _europeData,
                UsaData: _usaData,
                AsiaData: _asiaData,
                AfricaData: _africaData,
                OceaniaData: _oceaniaData,
                AllData: data
            })
        }

    }

    truncateDecimals(num, digits) {
        var numS = num.toString(),
            decPos = numS.indexOf('.'),
            substrLength = decPos === -1 ? numS.length : 1 + decPos + digits,
            trimmedResult = numS.substr(0, substrLength),
            finalResult = isNaN(trimmedResult) ? 0 : trimmedResult;

        return parseFloat(finalResult);
    }

    render() {
        return (
            <Switch>
                <Route exact path="/">
                    <Row>
                        <Col>
                            <Row>
                                <CasesComponent UpdatedTime={this.state.UpdatedTime} TotalConfirmedCases={this.state.TotalConfirmedCases} TotalRecoveredCases={this.state.TotalRecoveredCases} PercentageRecoveredCases={this.state.PercentageRecoveredCases} TotalDecesdCases={this.state.TotalDecesdCases}
                                    PercentageTotalDecesdCases={this.state.PercentageTotalDecesdCases} TotalActiveCases={this.state.TotalActiveCases} PercentageActiveCases={this.state.PercentageActiveCases} />
                            </Row>
                            <Row>
                                <Col className=" col-md-3">
                                    <NotificationsComponent />
                                    <NewsComponent />
                                </Col>
                                <Col className="col-md-9">
                                    <StatesNumbersComponent AllData={this.state.AllData} Title='World Stats' />
                                </Col>
                            </Row>
                            <Row>
                                <EuropeNumbersComponent AllData={this.state.EuropeData} Title='Europe Stats' />
                            </Row>
                            <Row>
                                <EuropeNumbersComponent AllData={this.state.UsaData} Title='America Stats' />
                            </Row>
                            <Row>
                                <EuropeNumbersComponent AllData={this.state.AsiaData} Title='Asia Stats' />
                            </Row>
                            <Row>
                                <EuropeNumbersComponent AllData={this.state.AfricaData} Title='Africa Stats' />
                            </Row>
                            <Row>
                                <EuropeNumbersComponent AllData={this.state.OceaniaData} Title='Oceania Stats' />
                            </Row>
                        </Col>
                    </Row>
                </Route>

                <Route path="/Regions">
                    <Regions EuropeData={this.state.EuropeData} AmericaData={this.state.UsaData} AsiaData={this.state.AsiaData} AfricaData={this.state.AfricaData} OceaniaData={this.state.OceaniaData} />
                </Route>
                <Route path="/Symptoms">
                    <Symptoms />
                </Route>
                <Route path="/About">
                    <About />
                </Route>
                <Route path="/Globe">
                    <Globe />
                </Route>
                <Route path="/Map">
                    <Map AllData={this.state.AllData} />
                </Route>
                <Route path="/Vaccine">
                    <Vaccine />
                </Route>
            </Switch>
        );
    }
}

export default withRouter(TableComponent);