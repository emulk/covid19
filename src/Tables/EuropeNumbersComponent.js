import React, { Component } from 'react';
import { Table, Row, Col } from 'react-bootstrap';
import './EuropeNumbersComponent.css';



class EuropeNumbersComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };

        this.fillTable = this.fillTable.bind(this);
    }

    fillTable() {
        if (this.props.AllData) {
            return this.props.AllData.map((AllData, index) => {
                const { ActiveCases, Country, NewCases, NewDeaths, Population, TotalCases, TotalDeaths, TotalRecovered, TotalTests } = AllData //destructuring

                return (
                    <tr key={index} >
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



    render() {
        return (
            <Col className="tableEuropeanCol">
                <Row className="tableEuropeanTitle">
                    {this.props.Title}
                </Row>
                <Row>
                    <span className="europTable-wrap">
                        <Table responsive className="europeTableCountrys table-hover " >
                            <thead>
                                <tr>
                                    <th>Country</th>
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
                    </span>
                </Row>
            </Col>
        );
    }
}

export default EuropeNumbersComponent;