import React, { Component } from 'react';
import { withRouter } from "react-router-dom";
import { Table, Row, Col } from 'react-bootstrap';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faStar, faBreadSlice } from '@fortawesome/free-solid-svg-icons';
import './RegionsComponent.css';



class Regions extends Component {
    constructor(props) {
        super(props);
        this.state = {
            actualTable: 0,
            Title: 'Europe Stats',
            TitlePreference: 'Preferences',
            isPreferencesTableVisible: false,
            PreferenceStates: []
        };

        this.fillTable = this.fillTable.bind(this);
        this.europeData = this.europeData.bind(this);
        this.americaData = this.americaData.bind(this);
        this.asiaData = this.asiaData.bind(this);
        this.africaData = this.africaData.bind(this);
        this.oceaniaData = this.oceaniaData.bind(this);
        this.italyData = this.italyData.bind(this);
        this.spainData = this.spainData.bind(this);
        this.germanyData = this.germanyData.bind(this);
        this.franceData = this.franceData.bind(this);
        this.unitedKingdomData = this.unitedKingdomData.bind(this);
        this.AddPreferences = this.AddPreferences.bind(this);
        this.RemovePreferences = this.RemovePreferences.bind(this);

        this.getItalyReportData = this.getItalyReportData.bind(this);

        this.getSpainReportData = this.getSpainReportData.bind(this);
        this.getGermanyReportData = this.getGermanyReportData.bind(this);
        this.getUnitedKingdomReportData = this.getUnitedKingdomReportData.bind(this);
        this.getFranceReportData = this.getFranceReportData.bind(this);

        this.fillEuropRegionsData = this.fillEuropRegionsData.bind(this);
    }

    componentDidMount() {
        this.getItalyReportData();
        this.getSpainReportData();
        this.getGermanyReportData();
        this.getUnitedKingdomReportData();
        this.getFranceReportData();
        let _prefereddRegions = JSON.parse(localStorage.getItem('preferredRegions'));
        if (_prefereddRegions) {
            this.setState({
                PreferenceStates: _prefereddRegions,
                isPreferencesTableVisible: true
            })
        }
    }

    getItalyReportData() {
        let url = "https://www.ncovid19.it/News/GetItalyReports.php";
        fetch(url)
            .then(response => response.json())
            .then(data => {
                this.setState({
                    ItalyReport: data
                });
            });
    }

    getSpainReportData() {
        let url = "https://www.ncovid19.it/News/GetSpainReports.php";
        fetch(url)
            .then(response => response.json())
            .then(data => {
                this.setState({ SpainReport: data });
            });
    }

    getGermanyReportData() {
        let url = "https://www.ncovid19.it/News/GetGermanyReports.php";
        fetch(url)
            .then(response => response.json())
            .then(data => {
                this.setState({ GermanyReport: data });
            });
    }

    getUnitedKingdomReportData() {
        let url = "https://www.ncovid19.it/News/GetUnitedKingdomReports.php";
        fetch(url)
            .then(response => response.json())
            .then(data => {
                this.setState({ UnitedKingdomReport: data });
            });
    }

    getFranceReportData() {
        let url = "https://www.ncovid19.it/News/GetFranceReports.php";
        fetch(url)
            .then(response => response.json())
            .then(data => {
                this.setState({ FranceReport: data });
            });
    }


    AddPreferences(event) {
        let _tempData = undefined;
        let _preferedState = event.currentTarget.nextSibling.innerText;
        let _preferenceStates = this.state.PreferenceStates;

        if (_preferenceStates.length > 0) {
            for (var count = 0; count < _preferenceStates.length; count++) {
                if (_preferedState === _preferenceStates[count].Country) {
                    return;
                }
            }
        }

        if (this.state.actualTable === 0) {
            _tempData = this.props.EuropeData;
        } else if (this.state.actualTable === 1) {
            _tempData = this.props.AmericaData;
        } else if (this.state.actualTable === 2) {
            _tempData = this.props.AsiaData;
        } else if (this.state.actualTable === 3) {
            _tempData = this.props.AfricaData;
        }else if (this.state.actualTable === 4) {
            _tempData = this.props.OceaniaData;
        }

        if (_tempData) {
            for (let count = 0; count < _tempData.length; count++) {
                if (_preferedState === _tempData[count].Country) {
                    _preferenceStates.push(_tempData[count]);
                    this.setState({
                        PreferenceStates: _preferenceStates,
                        isPreferencesTableVisible: true
                    });

                    localStorage.setItem('preferredRegions', JSON.stringify(_preferenceStates));
                    return;
                }
            }
        }
    }

    RemovePreferences(event) {
        let _tempData = undefined;
        let _preferedState = event.currentTarget.nextSibling.innerText;
        let _preferenceStates = this.state.PreferenceStates;

        if (_preferenceStates.length > 0) {
            for (var count = 0; count < _preferenceStates.length; count++) {
                if (_preferedState === _preferenceStates[count].Country) {
                    _preferenceStates.splice(count, 1);
                    if (_preferenceStates.length > 0) {
                        this.setState({
                            PreferenceStates: _preferenceStates,
                            isPreferencesTableVisible: true
                        });

                        localStorage.setItem('preferredRegions', JSON.stringify(_preferenceStates));
                    } else {
                        this.setState({
                            PreferenceStates: _preferenceStates,
                            isPreferencesTableVisible: false
                        });

                        localStorage.setItem('preferredRegions', null);
                    }
                    return;
                }
            }
        }

    }

    fillTablePreferences() {
        if (this.state.PreferenceStates.length > 0) {
            return this.state.PreferenceStates.map((AllData, index) => {
                const { ActiveCases, Country, NewCases, NewDeaths, Population, TotalCases, TotalDeaths, TotalRecovered, TotalTests } = AllData //destructuring

                return (
                    <tr key={index} >
                        <td onClick={this.RemovePreferences} className="RemovePreferenceStar"><FontAwesomeIcon icon={faStar} /></td>
                        <td>{Country}</td>
                        <td>{Population}</td>
                        <td className="totalConfirmedNumbers">{TotalCases}</td>
                        <td className="activeCasesNumbers">{ActiveCases}</td>
                        <td className="newCasesNumbers">{NewCases}</td>
                        <td className="recoveredCasesNumbers">{TotalRecovered}</td>
                        <td className="newDecesedNumbers">{TotalDeaths}</td>
                        <td className="newDecesedNumbers">{NewDeaths}</td>
                        <td className="testCasesNumbers">{TotalTests}</td>
                    </tr>
                )
            })
        }
    }

    fillEuropRegionsData(tableData) {
        debugger;
        if (tableData) {
            return tableData.map((AllData, index) => {
                var _data = AllData.split(",");
                return (
                    <tr key={index} >
                        <td>{_data[2]}</td>
                        <td className="totalConfirmedNumbers">{_data[7].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}</td>
                        <td className="activeCasesNumbers">{_data[10].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}</td>
                        <td className="recoveredCasesNumbers">{_data[9].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}</td>
                        <td className="newDecesedNumbers">{_data[8].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}</td>
                    </tr>
                )
            })
        }
    }

    fillTable() {
        let tableData = undefined;
        if (this.state.actualTable === 5) {
            return this.fillEuropRegionsData(this.state.ItalyReport);
        } else if (this.state.actualTable === 6) {
            return this.fillEuropRegionsData(this.state.SpainReport);
        } else if (this.state.actualTable === 7) {
            return this.fillEuropRegionsData(this.state.GermanyReport);
        } else if (this.state.actualTable === 8) {
            return this.fillEuropRegionsData(this.state.UnitedKingdomReport);
        } else if (this.state.actualTable === 9) {
            return this.fillEuropRegionsData(this.state.FranceReport);
        } else {
            if (this.state.actualTable === 0) {
                tableData = this.props.EuropeData;
            } else if (this.state.actualTable === 1) {
                tableData = this.props.AmericaData;
            } else if (this.state.actualTable === 2) {
                tableData = this.props.AsiaData;
            } else if (this.state.actualTable === 3) {
                tableData = this.props.AfricaData;
            } else if (this.state.actualTable === 4) {
                tableData = this.props.OceaniaData;
            }

            if (tableData) {
                return tableData.map((AllData, index) => {
                    const { ActiveCases, Country, NewCases, NewDeaths, Population, TotalCases, TotalDeaths, TotalRecovered, TotalTests } = AllData //destructuring

                    return (
                        <tr key={index} >
                            <td onClick={this.AddPreferences} className="addPreferenceStar" ><FontAwesomeIcon icon={faStar} /></td>
                            <td>{Country}</td>
                            <td>{Population}</td>
                            <td className="totalConfirmedNumbers">{TotalCases}</td>
                            <td className="activeCasesNumbers">{ActiveCases}</td>
                            <td className="newCasesNumbers">{NewCases}</td>
                            <td className="recoveredCasesNumbers">{TotalRecovered}</td>
                            <td className="newDecesedNumbers">{TotalDeaths}</td>
                            <td className="newDecesedNumbers">{NewDeaths}</td>
                            <td className="testCasesNumbers">{TotalTests}</td>
                        </tr>
                    )
                })
            }
        }

    }

    europeData() {
        this.setState({
            actualTable: 0,
            Title: 'Europe Stats'
        })
    }

    americaData() {

        this.setState({
            actualTable: 1,
            Title: 'America Stats'
        })
    }

    asiaData() {
        this.setState({
            actualTable: 2,
            Title: 'Asia Stats'
        })
    }

    africaData() {
        this.setState({
            actualTable: 3,
            Title: 'Africa Stats'
        })
    }

    oceaniaData() {
        this.setState({
            actualTable: 4,
            Title: 'Oceania Stats'
        })
    }

    italyData() {
        this.setState({
            actualTable: 5,
            Title: 'Italy Stats'
        })
    }

    spainData() {
        this.setState({
            actualTable: 6,
            Title: 'Spain Stats'
        })
    }

    germanyData() {
        this.setState({
            actualTable: 7,
            Title: 'Germany Stats'
        })
    }

    unitedKingdomData() {
        this.setState({
            actualTable: 8,
            Title: 'United Kingdom Stats'
        })
    }

    franceData() {
        this.setState({
            actualTable: 9,
            Title: 'France Stats'
        })
    }

    render() {
        return (
            <Row>
                <Col className='col-md-3 regionSection'>

                    <Row className="tableRegionTitle">
                        <Col>
                            Choose the Region
                        </Col>
                    </Row>
                    <Row>

                        <Table className="selctionRegionTable">

                            <tbody>
                                <tr onClick={this.europeData} className="regionSingleOptionSelection">
                                    <td>Europe Stats</td>
                                </tr>
                                <tr onClick={this.americaData} className="regionSingleOptionSelection">
                                    <td>America Stats</td>
                                </tr>
                                <tr onClick={this.asiaData} className="regionSingleOptionSelection">
                                    <td>Asia Stats</td>
                                </tr>
                                <tr onClick={this.africaData} className="regionSingleOptionSelection">
                                    <td>Africa Stats</td>
                                </tr>
                                <tr onClick={this.oceaniaData} className="regionSingleOptionSelection">
                                    <td>Oceania Stats</td>
                                </tr>
                                <tr onClick={this.italyData} className="regionSingleOptionSelection">
                                    <td>Italy Stats</td>
                                </tr>
                                <tr onClick={this.spainData} className="regionSingleOptionSelection">
                                    <td>Spain Stats</td>
                                </tr>
                                <tr onClick={this.germanyData} className="regionSingleOptionSelection">
                                    <td>Germany Stats</td>
                                </tr>
                                <tr onClick={this.franceData} className="regionSingleOptionSelection">
                                    <td>France Stats</td>
                                </tr>
                                <tr onClick={this.unitedKingdomData} className="regionSingleOptionSelection">
                                    <td>United Kingdom Stats</td>
                                </tr>

                            </tbody>
                        </Table>
                    </Row>

                </Col>

                <Col className=" col-md-9">

                    <Row className="preferedTableEuropeanCol">
                        <Col className="tablePreferredRegionsCol">


                            {this.state.isPreferencesTableVisible && (
                                <>
                                    <Row className="preferredStatesTitle">
                                        {this.state.TitlePreference}
                                    </Row>
                                    <Row>
                                        <span className="preferedTableCountrysSpan table-responsive">
                                            <Table className="preferedTableCountrys table-hover" >
                                                <thead>
                                                    <tr>
                                                        <th colSpan="2">Country</th>
                                                        <th>Population</th>
                                                        <th>Confirmed</th>
                                                        <th>Active</th>
                                                        <th>New Cases</th>
                                                        <th>Recovered</th>
                                                        <th>Deceased</th>
                                                        <th>New Deceased</th>
                                                        <th>Tests</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {this.fillTablePreferences()}
                                                </tbody>
                                            </Table>
                                        </span>
                                    </Row>
                                </>
                            )}
                        </Col>
                    </Row>

                    <Row className="tableEuropeanCol">
                        <Col>

                            <Row className="tableEuropeanTitle">
                                {this.state.Title}
                            </Row>
                            <Row>
                                <span className="europTable-wrap">
                                    {this.state.actualTable < 4 &&
                                        <Table responsive className="europeTableCountrys table-hover " >
                                            <thead>
                                                <tr>
                                                    <th colSpan="2">Country</th>
                                                    <th>Population</th>
                                                    <th>Confirmed</th>
                                                    <th>Active</th>
                                                    <th>New Cases</th>
                                                    <th>Recovered</th>
                                                    <th>Deceased</th>
                                                    <th>New Deceased</th>
                                                    <th>Tests</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {this.fillTable()}
                                            </tbody>
                                        </Table>
                                    }
                                    {this.state.actualTable >= 4 &&
                                        <Table responsive className="europeTableCountrys table-hover " >
                                            <thead>
                                                <tr>
                                                    <th >Province</th>
                                                    <th>Confirmed</th>
                                                    <th>Active</th>
                                                    <th>Recovered</th>
                                                    <th>Deceased</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {this.fillTable()}
                                            </tbody>
                                        </Table>
                                    }
                                </span>
                            </Row>
                        </Col>

                    </Row>

                </Col>
            </Row>
        );
    }
}

export default withRouter(Regions);